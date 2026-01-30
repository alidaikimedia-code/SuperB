<?php

// Load envs if you use env-loader.php
require_once __DIR__ . '/env-loader.php';

define("NITROPACK_HOME_URL", "https://superbpartygirl.com/");
define("NITROPACK_SITE_ID", "gcrnZQGnsrCaaEhlWncaxWcIeJVamLZV");         // Replace with your actual Site ID
define("NITROPACK_SITE_SECRET", "U4vfB6szA5tXDCqQRLlgRrfRx268g7xfSXsJO3hbAuYT55ydetxvYVxscrYXfLzb"); // Replace with your actual Site Secret

// Load NitroPack SDK (only if exists - disabled for local development)
$nitropack_path = $_SERVER['DOCUMENT_ROOT'] . "/nitropack-sdk/bootstrap.php";
if (file_exists($nitropack_path)) {
    include_once $nitropack_path;
}


// Configuration file for SuperB Party Girl website
// This file loads the appropriate language files and sets up the text system

// Set default language
$lang = 'en-my';

// Production: Turn off all error reporting
error_reporting(0);
ini_set('display_errors', 0);
    
define( 'WP_DEBUG', false );

// Detect language from URL
$uri = $_SERVER['REQUEST_URI'];
// Remove trailing slash for consistent comparison
$uri = rtrim($uri, '/');

// Check for Chinese language indicators
if (strpos($uri, '/cn/') === 0 || $uri === '/cn' || strpos($uri, '/cn') === 0) {
    $lang = 'zh-my';
} else {
    $lang = 'en-my';
}

// Load language file based on current language
$lang_file = __DIR__ . '/lang/' . $lang . '.php';

if (file_exists($lang_file)) {
    $texts = include $lang_file;
} else {
    // Fallback to English if language file doesn't exist
    $texts = include __DIR__ . '/lang/en-my.php';
}

// Set default page key if not already set
if (!isset($page_key)) {
    $page_key = 'home';
}

// Function to get localized path
function localizedPath($path) {
    global $lang;
    if ($lang === 'zh-my') {
        return '/cn' . $path;
    }
    return $path;
}
?>
