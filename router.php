<?php
/**
 * Router script for PHP built-in server
 * Handles clean URLs that Apache .htaccess used to handle
 */

$uri = $_SERVER['REQUEST_URI'];
$path = parse_url($uri, PHP_URL_PATH);

// Remove trailing slash for matching (except root)
$trimmed = rtrim($path, '/');

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
    require __DIR__ . $trimmed . '/index.php';
    return true;
}

// 4. Map clean URLs to .php files
// e.g., /en/about/ -> /en/about.php
if ($trimmed !== '' && file_exists(__DIR__ . $trimmed . '.php')) {
    require __DIR__ . $trimmed . '.php';
    return true;
}

// 5. Special route: /en/models/ -> /en/models/models.php
if ($trimmed === '/en/models' || $trimmed === '/models') {
    $modelsFile = __DIR__ . '/en/models/models.php';
    if (file_exists($modelsFile)) {
        require $modelsFile;
        return true;
    }
}

// 6. Model sub-pages: /en/models/local-party-girl/ -> /en/models/local-party-girl.php
if (preg_match('#^/(?:en/)?models/([a-z\-]+)$#', $trimmed, $matches)) {
    $modelFile = __DIR__ . '/en/models/' . $matches[1] . '.php';
    if (file_exists($modelFile)) {
        require $modelFile;
        return true;
    }
}

// 7. EN pages without /en/ prefix: /about/ -> /en/about.php
$enPages = ['about', 'booking', 'contact', 'contact-us', 'service'];
foreach ($enPages as $page) {
    if ($trimmed === '/' . $page) {
        // contact-us maps to contact.php
        $fileName = ($page === 'contact-us') ? 'contact' : $page;
        $filePath = __DIR__ . '/en/' . $fileName . '.php';
        if (file_exists($filePath)) {
            require $filePath;
            return true;
        }
    }
}

// 8. EN pages with /en/ prefix: /en/about/ -> /en/about.php, /en/contact-us/ -> /en/contact.php
if (preg_match('#^/en/([a-z\-]+)$#', $trimmed, $matches)) {
    $page = $matches[1];
    $fileName = ($page === 'contact-us') ? 'contact' : $page;
    $filePath = __DIR__ . '/en/' . $fileName . '.php';
    if (file_exists($filePath)) {
        require $filePath;
        return true;
    }
}

// 9. Root / -> redirect to /en/
if ($path === '/' || $path === '') {
    header('Location: /en/');
    exit;
}

// 10. Blog routes
if (preg_match('#^/blog/?$#', $trimmed) || preg_match('#^/en/blog/?$#', $trimmed)) {
    $blogIndex = __DIR__ . '/blog/index.php';
    if (file_exists($blogIndex)) {
        require $blogIndex;
        return true;
    }
}

if (preg_match('#^/(?:en/)?blog/([^/]+)$#', $trimmed, $matches)) {
    $_GET['slug'] = $matches[1];
    $blogSingle = __DIR__ . '/blog/single.php';
    if (file_exists($blogSingle)) {
        require $blogSingle;
        return true;
    }
}

// 11. Fallback: try to serve as-is
$fallbackPath = __DIR__ . $path;
if (file_exists($fallbackPath)) {
    if (is_dir($fallbackPath)) {
        $indexFile = $fallbackPath . '/index.php';
        if (file_exists($indexFile)) {
            require $indexFile;
            return true;
        }
    }
    return false;
}

// 404
http_response_code(404);
echo '<h1>404 - Page Not Found</h1>';
return true;
