<?php
// Script to create index.php files for all Chinese cities

$cities = [
    'kuala-lumpur',
    'ampang',
    'cheras',
    'cyberjaya',
    'genting',
    'ipoh',
    'johor',
    'kepong',
    'klang',
    'kota damansara',
    'langkawi',
    'local',
    'melaka',
    'mont-kiara',
    'pahang',
    'penang',
    'petaling-jaya',
    'port-dickson',
    'puchong',
    'sabah',
    'sarawak',
    'serdang',
    'seremban',
    'setia-alam',
    'sri-petaling',
    'subang',
    'taiping'
];

foreach ($cities as $city) {
    $dir = "cn/cities/premium-escort-{$city}";
    $file = "{$dir}/index.php";
    
    $content = "<?php\n";
    $content .= "\$page_key = '{$city}';\n";
    $content .= "include '../city-template.php';\n";
    $content .= "?>";
    
    if (!file_exists($dir)) {
        mkdir($dir, 0755, true);
    }
    
    file_put_contents($file, $content);
    echo "Created: {$file}\n";
}

echo "All Chinese city pages created successfully!\n";
?>
