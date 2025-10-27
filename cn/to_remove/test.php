<?php
$page_key = 'home';
$lang = 'zh-my';
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/lang/init.php';

echo "<!DOCTYPE html>";
echo "<html lang='zh-my'>";
echo "<head><meta charset='UTF-8'><title>Chinese Test</title></head>";
echo "<body>";
echo "<h1>Chinese Language Test</h1>";
echo "<p>Language: " . $lang . "</p>";
echo "<p>Home Title: " . $texts['home']['homeTitle'] . "</p>";
echo "<p>Home Subtitle: " . $texts['home']['homeSubTitle'] . "</p>";
echo "<p>Home Description: " . $texts['home']['homeDesc1'] . "</p>";
echo "</body></html>";
?>
