<?php
echo "Testing C01 Qingdao page...\n";

// Test 1: Check if we can include the language file
echo "1. Testing language file inclusion...\n";
$page_key = 'model_c01_qingdao';

// Set document root for CLI
if (!isset($_SERVER['DOCUMENT_ROOT'])) {
    $_SERVER['DOCUMENT_ROOT'] = '/Users/sunilkumar/Documents/projects/superpartygirl';
}

include __DIR__ . '/../../../../config.php';
include_once __DIR__ . '/../../../../lang/init.php';

if (isset($texts[$page_key])) {
    echo "✓ Language data loaded successfully\n";
    echo "Model name: " . ($texts[$page_key]['name'] ?? 'Not found') . "\n";
} else {
    echo "✗ Language data not found\n";
    echo "Available keys: " . implode(', ', array_keys($texts)) . "\n";
}

// Test 2: Check if template file exists
echo "\n2. Testing template file...\n";
$template_path = __DIR__ . '/../../china-single-model-template.php';
if (file_exists($template_path)) {
    echo "✓ Template file exists\n";
} else {
    echo "✗ Template file not found at: $template_path\n";
}

// Test 3: Check if header file exists
echo "\n3. Testing header file...\n";
$header_path = __DIR__ . '/../../../../header.php';
if (file_exists($header_path)) {
    echo "✓ Header file exists\n";
} else {
    echo "✗ Header file not found at: $header_path\n";
}

echo "\nTest completed.\n";
?>
