<?php
// Debug test for premium-escort routing
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$request = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
echo "<h1>Debug Information</h1>";
echo "<p><strong>Request:</strong> " . $request . "</p>";

if (strpos($request, 'premium-escort-') === 0) {
    $city_slug = str_replace('premium-escort-', '', $request);
    echo "<p><strong>City Slug:</strong> " . $city_slug . "</p>";
    
    if (isset($texts)) {
        echo "<p><strong>Texts loaded:</strong> Yes</p>";
        echo "<p><strong>Available keys:</strong> " . implode(', ', array_keys($texts)) . "</p>";
        
        if (isset($texts[$city_slug])) {
            echo "<p><strong>City found in texts:</strong> Yes</p>";
            echo "<p><strong>City data:</strong> " . print_r($texts[$city_slug], true) . "</p>";
        } else {
            echo "<p><strong>City found in texts:</strong> No</p>";
        }
    } else {
        echo "<p><strong>Texts loaded:</strong> No</p>";
    }
} else {
    echo "<p>Not a premium-escort URL</p>";
}
?>
