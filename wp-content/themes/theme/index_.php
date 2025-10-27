<?php
$request = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// CN pages
if ($request === 'cn') {
    include $_SERVER['DOCUMENT_ROOT'] . '/cn/index.php';
    exit;
}
if ($request === 'cn/about') {
    include $_SERVER['DOCUMENT_ROOT'] . '/cn/about.php';
    exit;
}

// EN pages
if ($request === '' || $request === 'en') {
    include $_SERVER['DOCUMENT_ROOT'] . '/en/index.php';
    exit;
}
if ($request === 'models') {
    include $_SERVER['DOCUMENT_ROOT'] . '/en/models/models.php';
    exit;
}
if ($request === 'models') {
    include $_SERVER['DOCUMENT_ROOT'] . '/en/models/models.php';
    exit;
}
if ($request === 'models/local-party-girl') {
    include $_SERVER['DOCUMENT_ROOT'] . '/en/models/local-party-girl.php';
    exit;
}
if ($request === 'models/vietnam-party-girl') {
    include $_SERVER['DOCUMENT_ROOT'] . '/en/models/vietnam-party-girl.php';
    exit;
}
if ($request === 'models/korea-party-girl') {
    include $_SERVER['DOCUMENT_ROOT'] . '/en/models/korea-party-girl.php';
    exit;
}
if ($request === 'models/japan-party-girl') {
    include $_SERVER['DOCUMENT_ROOT'] . '/en/models/japan-party-girl.php';
    exit;
}
if ($request === 'models/chinese-party-girl') {
    include $_SERVER['DOCUMENT_ROOT'] . '/en/models/chinese-party-girl.php';
    exit;
}
if ($request === 'models/europe-party-girl') {
    include $_SERVER['DOCUMENT_ROOT'] . '/en/models/europe-party-girl.php';
    exit;
}
if ($request === 'service') {
    include $_SERVER['DOCUMENT_ROOT'] . '/en/service.php';
    exit;
}
if ($request === 'booking') {
    include $_SERVER['DOCUMENT_ROOT'] . '/en/booking.php';
    exit;
}
if ($request === 'contact-us') {
    include $_SERVER['DOCUMENT_ROOT'] . '/en/contact.php';
    exit;
}
if ($request === 'about') {
    include $_SERVER['DOCUMENT_ROOT'] . '/en/about.php';
    exit;
}

// Single model pages - dynamic routing
if (strpos($request, 'model/') === 0) {
    include $_SERVER['DOCUMENT_ROOT'] . '/model/single-model.php';
    exit;
}

// Hotel booking page
if ($request === 'hotel') {
    include $_SERVER['DOCUMENT_ROOT'] . '/hotel/index.php';
    exit;
}


// 404 fallback
include $_SERVER['DOCUMENT_ROOT'] . '/404.php';
exit;
?>
