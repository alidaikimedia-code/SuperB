<?php
$page_key = 'home';
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/lang/init.php';

echo "<h1>Debug Chinese Language</h1>";
echo "<p>Current language: " . $lang . "</p>";
echo "<p>Page key: " . $page_key . "</p>";

if (isset($texts['home']['homeTitle'])) {
    echo "<h2>Home Title: " . $texts['home']['homeTitle'] . "</h2>";
} else {
    echo "<p>Home title not found!</p>";
}

if (isset($texts['home']['homeSubTitle'])) {
    echo "<h3>Home Subtitle: " . $texts['home']['homeSubTitle'] . "</h3>";
} else {
    echo "<p>Home subtitle not found!</p>";
}

echo "<h4>All home keys:</h4>";
if (isset($texts['home'])) {
    echo "<pre>";
    print_r(array_keys($texts['home']));
    echo "</pre>";
} else {
    echo "<p>Home section not found!</p>";
}
?>
