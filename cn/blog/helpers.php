<?php
function blog_cfg($key, $default = null) {
  static $cfg; if (!$cfg) $cfg = require __DIR__ . '/../config/blog.env.php';
  return $cfg[$key] ?? $default;
}

function wp_rest_url($path, $qs = []) {
  $base = rtrim(blog_cfg('WP_BASE'), '/');
  $url  = $base . '/wp-json' . $path;
  if ($qs) $url .= (str_contains($url, '?')?'&':'?') . http_build_query($qs);
  return $url;
}

function http_fetch($url) {
  $headers = [];
  if (function_exists('curl_init')) {
    $ch = curl_init($url);
    curl_setopt_array($ch, [
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_USERAGENT => 'SPG-BlogFront/1.0',
      CURLOPT_TIMEOUT => 12,
      CURLOPT_HEADERFUNCTION => function($ch, $h) use (&$headers){
        $p = explode(':', $h, 2);
        if (count($p) === 2) $headers[strtolower(trim($p[0]))] = trim($p[1]);
        return strlen($h);
      }
    ]);
    $body = curl_exec($ch);
    $code = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    return ['code'=>$code,'body'=>$body,'headers'=>$headers];
  }
  $body = @file_get_contents($url);
  $code = ($http_response_header && preg_match('#HTTP/\S+\s+(\d{3})#', $http_response_header[0], $m)) ? (int)$m[1] : 0;
  return ['code'=>$code,'body'=>$body,'headers'=>[]];
}

function fetch_posts($args) {
  $args += ['_embed' => 1, '_cb' => time()]; 
  $url = wp_rest_url('/wp/v2/posts', $args);
  $res = http_fetch($url);
  $data = ($res['code']>=200 && $res['code']<300 && $res['body'])
        ? json_decode($res['body'], true)
        : null;

  return [$data, $res, $url];
}

function fetch_single_by_slug($slug) {
  return fetch_posts(['slug' => $slug, 'per_page' => 1]);
}

function media_url($post) {
  return $post['_embedded']['wp:featuredmedia'][0]['source_url'] ?? null;
}

function esc($s){ return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }
function debug_panel($lines){
  if (!blog_cfg('DEBUG')) return;
  echo "<pre style='background:#0b0b0f;color:#8ff;padding:10px;border-radius:8px'>";
  foreach((array)$lines as $l) echo esc($l)."\n";
  echo "</pre>";
}
