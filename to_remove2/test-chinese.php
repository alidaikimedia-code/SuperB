<?php
// Simulate Chinese URL
$_SERVER['REQUEST_URI'] = '/cn/';

// Load the language system
require_once 'config.php';
include_once 'lang/init.php';

echo "Testing Chinese Language Detection\n";
echo "================================\n";
echo "Current URI: " . $_SERVER['REQUEST_URI'] . "\n";
echo "Detected Language: " . $lang . "\n\n";

echo "Header translations:\n";
echo "Home: " . ($texts['header']['home'] ?? 'NOT FOUND') . "\n";
echo "Blog: " . ($texts['header']['blog'] ?? 'NOT FOUND') . "\n";
echo "Cities: " . ($texts['header']['cities'] ?? 'NOT FOUND') . "\n\n";

echo "Cities translations:\n";
echo "Kuala Lumpur: " . ($texts['cities']['kuala_lumpur'] ?? 'NOT FOUND') . "\n";
echo "Ampang: " . ($texts['cities']['ampang'] ?? 'NOT FOUND') . "\n";
echo "Penang: " . ($texts['cities']['penang'] ?? 'NOT FOUND') . "\n\n";

echo "Cities array count: " . (isset($texts['cities']) ? count($texts['cities']) : 'NOT SET') . "\n";
?>
