<?php
/**
 * Router script for PHP built-in server
 * Handles clean URLs that Apache .htaccess used to handle
 */

$uri = $_SERVER['REQUEST_URI'];
$path = parse_url($uri, PHP_URL_PATH);

// Remove trailing slash for matching (except root)
$trimmed = rtrim($path, '/');

// Helper: require a file with correct working directory
// so that relative includes (../header.php) resolve properly
function routeRequire($filePath) {
    chdir(dirname($filePath));
    require $filePath;
}

// 1. Serve static files directly (CSS, JS, images, fonts, etc.)
$staticExtensions = ['css', 'js', 'jpg', 'jpeg', 'png', 'gif', 'svg', 'webp', 'ico', 'woff', 'woff2', 'ttf', 'eot', 'mp4', 'webm', 'pdf', 'xml', 'json', 'txt', 'map'];
$ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
if (in_array($ext, $staticExtensions)) {
    $filePath = __DIR__ . $path;
    if (file_exists($filePath)) {
        return false; // Let PHP built-in server handle it
    }
}

// 2. If exact file exists, serve it
if (file_exists(__DIR__ . $path) && is_file(__DIR__ . $path)) {
    return false;
}

// 3. If directory with index.php exists, serve it
if (is_dir(__DIR__ . $trimmed) && file_exists(__DIR__ . $trimmed . '/index.php')) {
    routeRequire(__DIR__ . $trimmed . '/index.php');
    return true;
}

// 4. Map clean URLs to .php files
// e.g., /en/about/ -> /en/about.php
if ($trimmed !== '' && file_exists(__DIR__ . $trimmed . '.php')) {
    routeRequire(__DIR__ . $trimmed . '.php');
    return true;
}

// 5. Special route: /models/ -> /models/index.php (root level)
if ($trimmed === '/models') {
    $modelsIndex = __DIR__ . '/models/index.php';
    if (file_exists($modelsIndex)) {
        routeRequire($modelsIndex);
        return true;
    }
}

// 6. Model sub-pages: /models/local-party-girl/ -> /models/local-party-girl/index.php
if (preg_match('#^/models/([a-z\-]+)$#', $trimmed, $matches)) {
    $modelDir = __DIR__ . '/models/' . $matches[1] . '/index.php';
    if (file_exists($modelDir)) {
        routeRequire($modelDir);
        return true;
    }
}

// 7. EN pages: /about/ -> /about/index.php, /service/ -> /service/index.php
$enPages = ['about', 'booking', 'contact-us', 'service', 'hotel'];
foreach ($enPages as $page) {
    if ($trimmed === '/' . $page) {
        $indexFile = __DIR__ . '/' . $page . '/index.php';
        if (file_exists($indexFile)) {
            routeRequire($indexFile);
            return true;
        }
    }
}

// 8. Root / -> load /en/index.php (English homepage)
if ($path === '/' || $path === '') {
    routeRequire(__DIR__ . '/en/index.php');
    return true;
}

// 9. Blog routes
if (preg_match('#^/blog/?$#', $trimmed)) {
    $blogIndex = __DIR__ . '/blog/index.php';
    if (file_exists($blogIndex)) {
        routeRequire($blogIndex);
        return true;
    }
}

if (preg_match('#^/blog/([^/]+)$#', $trimmed, $matches)) {
    $_GET['slug'] = $matches[1];
    $blogSingle = __DIR__ . '/blog/single.php';
    if (file_exists($blogSingle)) {
        routeRequire($blogSingle);
        return true;
    }
}

// 10. Fallback: try to serve directory index.php
$fallbackPath = __DIR__ . $path;
if (file_exists($fallbackPath)) {
    if (is_dir($fallbackPath)) {
        $indexFile = rtrim($fallbackPath, '/') . '/index.php';
        if (file_exists($indexFile)) {
            routeRequire($indexFile);
            return true;
        }
    }
    return false;
}

// 404
http_response_code(404);
echo '<h1>404 - Page Not Found</h1>';
return true;
