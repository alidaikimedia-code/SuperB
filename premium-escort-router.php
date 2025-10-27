<?php
// Premium Escort City Pages Router
// This file handles direct premium-escort-{city} URLs

// Load config
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

// Get the request
$request = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// Check if it's a premium-escort URL
if (strpos($request, 'premium-escort-') === 0) {
    // Extract city name from URL
    $city_slug = str_replace('premium-escort-', '', $request);
    
    // Load language file to get city data
    $lang_file = $_SERVER['DOCUMENT_ROOT'] . '/lang/en-my.php';
    if (file_exists($lang_file)) {
        $texts = include $lang_file;
    } else {
        die("Language file not found");
    }
    
    // Check if city exists in language file
    if (isset($texts[$city_slug])) {
        $page_key = $city_slug;
        include $_SERVER['DOCUMENT_ROOT'] . '/cities/city-template.php';
        exit;
    } else {
        // City not found
        http_response_code(404);
        echo "<h1>City not found: " . $city_slug . "</h1>";
        echo "<p>Available cities: " . implode(', ', array_keys($texts)) . "</p>";
        exit;
    }
} else {
    // Not a premium-escort URL, redirect to home
    header("Location: /");
    exit;
}
?>
