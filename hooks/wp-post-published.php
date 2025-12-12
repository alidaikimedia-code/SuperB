<?php
require __DIR__ . '/../blog/helpers.php';

/**
 * Secure Webhook Receiver for WP publish/update/unpublish events
 * - Verifies X-Webhook-Secret
 * - Accepts application/json or form-encoded payloads
 * - Purges Cloudflare (if configured)
 * - Warms /blog and post URL
 */

function get_cfg($k, $def=null){ return blog_cfg($k, $def); }

// ---- Security: shared secret (must match the MU-plugin sender)
$expectedSecret = get_cfg('WEBHOOK_SECRET', '');
$gotSecret = $_SERVER['HTTP_X_WEBHOOK_SECRET'] ?? '';
if ($expectedSecret === '' || hash_equals($expectedSecret, $gotSecret) === false) {
  http_response_code(403);
  echo 'Forbidden (secret mismatch)';
  exit;
}

// ---- Parse payload (JSON or form)
$raw = file_get_contents('php://input');
$ctype = $_SERVER['CONTENT_TYPE'] ?? '';
$data = [];

if (stripos($ctype, 'application/json') !== false && $raw) {
  $data = json_decode($raw, true) ?: [];
} else {
  // Fallback to regular form-encoded
  $data = $_POST ?: [];
}

$event   = $data['event']   ?? 'published'; // published | updated | unpublished
$slug    = $data['slug']    ?? null;
$postId  = $data['post_id'] ?? null;
$wpUrl   = $data['url']     ?? null;
$updated = $data['updated'] ?? null;

if (!$slug) { http_response_code(400); echo 'Missing slug'; exit; }

// ---- Build URLs to purge/warm on the custom site
$siteBase   = rtrim(parse_url(get_cfg('ALLOW_ORIGIN', 'https://'.($_SERVER['HTTP_HOST'] ?? '')), PHP_URL_SCHEME) . '://' . parse_url(get_cfg('ALLOW_ORIGIN', ''), PHP_URL_HOST), '/');
if (!$siteBase) $siteBase = 'https://'.($_SERVER['HTTP_HOST'] ?? '');

$postUrl    = $siteBase . '/blog/' . rawurlencode($slug);
$listUrl    = $siteBase . '/blog';

$purgeUrls  = [$postUrl, $listUrl];

// If the post was unpublished, you may still purge the post URL + list.
if ($event === 'unpublished') {
  // keep same purge list; warming later is skipped for the post page
}

// ---- PURGE: Cloudflare (if configured)
$cfZone  = get_cfg('CLOUDFLARE_ZONE', '');
$cfToken = get_cfg('CLOUDFLARE_TOKEN', '');
$purged  = false;
$errors  = [];

if ($cfZone && $cfToken) {
  $cfApi = "https://api.cloudflare.com/client/v4/zones/{$cfZone}/purge_cache";
  $payload = json_encode(['files' => $purgeUrls], JSON_UNESCAPED_SLASHES);

  $ch = curl_init($cfApi);
  curl_setopt_array($ch, [
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
      'Content-Type: application/json',
      'Authorization: Bearer ' . $cfToken,
      'User-Agent: SPG-Hook/1.0'
    ],
    CURLOPT_POSTFIELDS => $payload,
    CURLOPT_TIMEOUT => 10,
  ]);
  $resp = curl_exec($ch);
  $code = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
  $err  = curl_error($ch);
  curl_close($ch);

  if ($code >= 200 && $code < 300) {
    $purged = true;
  } else {
    $errors[] = "Cloudflare purge failed (HTTP {$code}) {$err} {$resp}";
  }
}

// ---- (Optional) NitroPack purge if you enable it later
if (get_cfg('NITROPACK_ENABLED', false)) {
  // Example stub: call NitroPack SDK if included in your site
  // require_once $_SERVER['DOCUMENT_ROOT'].'/nitropack-sdk/bootstrap.php';
  // \NitroPack\SDK\Purge::purgeUrls($purgeUrls);
  // Set $purged = true if it succeeds
}

// ---- Warm cache: fetch pages after purge (skip warming the post if unpublished)
$toWarm = ($event === 'unpublished') ? [$listUrl] : $purgeUrls;
foreach ($toWarm as $u) {
  @file_get_contents($u); // non-blocking best-effort
}

// ---- Respond
header('Content-Type: application/json; charset=utf-8');
echo json_encode([
  'ok' => true,
  'event' => $event,
  'slug' => $slug,
  'post_id' => $postId,
  'purged' => $purged,
  'warmed' => $toWarm,
  'errors' => $errors,
], JSON_UNESCAPED_SLASHES);
