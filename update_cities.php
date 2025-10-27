<?php
// Script to update all city pages to use dynamic template

$cities = [
    'ipoh', 'johor', 'kepong', 'klang', 'kota-damansara', 
    'langkawi', 'local', 'melaka', 'mont-kiara', 'pahang', 
    'penang', 'petaling-jaya', 'port-dickson', 'puchong', 
    'sabah', 'sarawak', 'serdang', 'seremban', 'setia-alam', 
    'sri-petaling', 'subang', 'taiping'
];

foreach ($cities as $city) {
    $file_path = "cities/premium-escort-{$city}/index.php";
    
    if (file_exists($file_path)) {
        $content = "<?php\n\$page_key = '{$city}';\ninclude '../city-template.php';\n?>";
        file_put_contents($file_path, $content);
        echo "Updated: {$file_path}\n";
    } else {
        echo "File not found: {$file_path}\n";
    }
}

echo "\nAll city pages updated successfully!\n";
?>
