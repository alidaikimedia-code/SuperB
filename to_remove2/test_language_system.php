<?php
// Test script to verify the language system works correctly
echo "Testing Language System\n";
echo "======================\n\n";

// Test 1: English URL detection
$_SERVER['REQUEST_URI'] = '/models/local-party-girl/';
require_once 'config.php';
echo "Test 1 - English URL: " . $_SERVER['REQUEST_URI'] . "\n";
echo "Detected Language: " . $lang . "\n";
echo "Models Title: " . $texts['models']['modelsTitle'] . "\n";
echo "Local Model Title: " . $texts['localModel']['modelsTitle'] . "\n";
echo "Localized Path: " . localizedPath('/models') . "\n";
echo "Language URL (EN): " . getLangUrl($_SERVER['REQUEST_URI'], 'en-my') . "\n";
echo "Language URL (CN): " . getLangUrl($_SERVER['REQUEST_URI'], 'zh-my') . "\n\n";

// Test 2: Chinese URL detection
$_SERVER['REQUEST_URI'] = '/cn/models/local-party-girl/';
require_once 'config.php';
echo "Test 2 - Chinese URL: " . $_SERVER['REQUEST_URI'] . "\n";
echo "Detected Language: " . $lang . "\n";
echo "Models Title: " . $texts['models']['modelsTitle'] . "\n";
echo "Local Model Title: " . $texts['localModel']['modelsTitle'] . "\n";
echo "Localized Path: " . localizedPath('/models') . "\n";
echo "Language URL (EN): " . getLangUrl($_SERVER['REQUEST_URI'], 'en-my') . "\n";
echo "Language URL (CN): " . getLangUrl($_SERVER['REQUEST_URI'], 'zh-my') . "\n\n";

// Test 3: All model categories
$modelCategories = ['localModel', 'vietnamModel', 'koreaModel', 'japanModel', 'chinaModel', 'europeModel'];
echo "Test 3 - All Model Categories:\n";
foreach ($modelCategories as $category) {
    echo "- " . $category . ": " . $texts[$category]['modelsTitle'] . "\n";
}

echo "\nLanguage system test completed successfully!\n";
?>
