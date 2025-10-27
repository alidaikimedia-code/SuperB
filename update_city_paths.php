<?php
// Script to update all premium escort city pages to use correct path

$directories = glob('premium-escort-*', GLOB_ONLYDIR);

foreach ($directories as $dir) {
    $file = $dir . '/index.php';
    if (file_exists($file)) {
        $content = file_get_contents($file);
        $content = str_replace("include '../city-template.php';", "include 'cities/city-template.php';", $content);
        file_put_contents($file, $content);
        echo "Updated: $file\n";
    }
}

echo "All files updated successfully!\n";
?>
