<?php
// Test cities loading
echo "<h1>Testing Cities Loading</h1>";

// Test English
$lang = 'en-my';
require_once 'config.php';
include_once 'lang/init.php';

echo "<h2>English Cities Test:</h2>";
echo "<p>Language: " . $lang . "</p>";
echo "<p>Cities array exists: " . (isset($texts['cities']) ? 'Yes' : 'No') . "</p>";
if (isset($texts['cities'])) {
    echo "<p>Kuala Lumpur: " . ($texts['cities']['kuala_lumpur'] ?? 'NOT FOUND') . "</p>";
    echo "<p>Penang: " . ($texts['cities']['penang'] ?? 'NOT FOUND') . "</p>";
} else {
    echo "<p>ERROR: Cities array not loaded!</p>";
}

echo "<hr>";

// Test Chinese
$lang = 'zh-my';
require_once 'config.php';
include_once 'lang/init.php';

echo "<h2>Chinese Cities Test:</h2>";
echo "<p>Language: " . $lang . "</p>";
echo "<p>Cities array exists: " . (isset($texts['cities']) ? 'Yes' : 'No') . "</p>";
if (isset($texts['cities'])) {
    echo "<p>Kuala Lumpur: " . ($texts['cities']['kuala_lumpur'] ?? 'NOT FOUND') . "</p>";
    echo "<p>Penang: " . ($texts['cities']['penang'] ?? 'NOT FOUND') . "</p>";
} else {
    echo "<p>ERROR: Cities array not loaded!</p>";
}
?>
