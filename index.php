<?php
/**
 * SuperB Party Girl - Main Entry Point
 * Handles root URL redirect and WordPress integration
 */

// If accessing root URL, redirect to English homepage
$request_uri = $_SERVER['REQUEST_URI'];
if ($request_uri === '/' || $request_uri === '') {
    header("Location: /en/", true, 301);
    exit;
}

// For other requests (wp-json, wp-admin, etc.), load WordPress
define('WP_USE_THEMES', true);
$wp_load_path = __DIR__ . '/wp-load.php';
if (file_exists($wp_load_path)) {
    require($wp_load_path);
}
