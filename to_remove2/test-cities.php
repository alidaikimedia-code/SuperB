<?php
// Test file to verify the cities dynamic functionality

// Simulate the cities data from cities/index.php
$available_cities = [
    'kualalumpur' => ['name' => 'Kuala Lumpur', 'display_name' => 'KualaLumpur', 'url' => 'kuala-lumpur', 'description' => 'Elite and private escort services across Malaysia\'s capital city.', 'image' => 'model4.webp'],
    'genting' => ['name' => 'Genting', 'display_name' => 'Genting', 'url' => 'genting', 'description' => 'Experience elegance and excitement in Malaysia\'s most vibrant resort destination.', 'image' => 'model4.webp'],
    'ampang' => ['name' => 'Ampang', 'display_name' => 'Ampang', 'url' => 'ampang', 'description' => 'Beautiful & friendly companions ready to make your night unforgettable in Ampang.', 'image' => 'model1.webp'],
    'cheras' => ['name' => 'Cheras', 'display_name' => 'Cheras', 'url' => 'cheras', 'description' => 'Premium companionship services in Cheras, Kuala Lumpur with absolute privacy.', 'image' => 'model2.webp'],
    'cyberjaya' => ['name' => 'Cyberjaya', 'display_name' => 'Cyberjaya', 'url' => 'cyberjaya', 'description' => 'Trusted and discreet escort options that fit right into your lifestyle in Cyberjaya.', 'image' => 'model3.webp'],
    'kepong' => ['name' => 'Kepong', 'display_name' => 'Kepong', 'url' => 'kepong', 'description' => 'Premium and discreet escort services throughout Kepong\'s residential and commercial areas.', 'image' => 'model4.webp'],
    'klang' => ['name' => 'Klang', 'display_name' => 'Klang', 'url' => 'klang', 'description' => 'Exclusive escort services across Klang, one of Selangor\'s most vibrant cities.', 'image' => 'model5.webp'],
    'kotadamansara' => ['name' => 'Kota Damansara', 'display_name' => 'Kota Damansara', 'url' => 'kota-damansara', 'description' => 'Premium, discreet, and professional escort services in Kota Damansara\'s vibrant hub.', 'image' => 'model6.webp'],
    'montkiara' => ['name' => 'Mont Kiara', 'display_name' => 'Mont Kiara', 'url' => 'mont-kiara', 'description' => 'Experience luxury and sophistication with our premium companions in Mont Kiara.', 'image' => 'model1.webp'],
    'petalingjaya' => ['name' => 'Petaling Jaya', 'display_name' => 'Petaling Jaya', 'url' => 'petaling-jaya', 'description' => 'Enjoy modern city life and mall experiences with beautiful companions in PJ.', 'image' => 'model2.webp'],
    'puchong' => ['name' => 'Puchong', 'display_name' => 'Puchong', 'url' => 'puchong', 'description' => 'Experience vibrant and modern lifestyle with our beautiful companions in Puchong.', 'image' => 'model3.webp'],
    'putrajaya' => ['name' => 'Putrajaya', 'display_name' => 'Putrajaya', 'url' => 'putrajaya', 'description' => 'Experience Malaysia\'s beautiful city with gardens, lakes and iconic buildings.', 'image' => 'model4.webp'],
    'subangjaya' => ['name' => 'Subang Jaya', 'display_name' => 'Subang Jaya', 'url' => 'subang-jaya', 'description' => 'Young, vibrant and full of nightlife with our beautiful companions.', 'image' => 'model5.webp'],
    'shahalam' => ['name' => 'Shah Alam', 'display_name' => 'Shah Alam', 'url' => 'shah-alam', 'description' => 'A city full of culture and modern living with our experienced companions.', 'image' => 'model6.webp'],
    'klangvalley' => ['name' => 'Klang Valley', 'display_name' => 'Klang Valley', 'url' => 'klang-valley', 'description' => 'The center of Malaysia\'s nightlife, dining and luxury experiences.', 'image' => 'model1.webp'],
    'damansara' => ['name' => 'Damansara', 'display_name' => 'Damansara', 'url' => 'damansara', 'description' => 'Fashionable and modern, perfect for indulgence with our elegant companions.', 'image' => 'model2.webp'],
    'bangsar' => ['name' => 'Bangsar', 'display_name' => 'Bangsar', 'url' => 'bangsar', 'description' => 'Kuala Lumpur\'s sexiest neighborhood with bold and confident companions.', 'image' => 'model3.webp'],
    'bukitbintang' => ['name' => 'Bukit Bintang', 'display_name' => 'Bukit Bintang', 'url' => 'bukit-bintang', 'description' => 'The center of Kuala Lumpur\'s nightlife and luxury with glamorous companions.', 'image' => 'model4.webp'],
    'ipoh' => ['name' => 'Ipoh', 'display_name' => 'Ipoh', 'url' => 'ipoh', 'description' => 'Luxury escort services in Ipoh, blending historical charm with modern sophistication.', 'image' => 'model5.webp'],
    'portdickson' => ['name' => 'Port Dickson', 'display_name' => 'Port Dickson', 'url' => 'port-dickson', 'description' => 'A charming coastal town with a beautiful beach and charming companions.', 'image' => 'model2.webp'],
    'sabah' => ['name' => 'Sabah', 'display_name' => 'Sabah', 'url' => 'sabah', 'description' => 'Experience the raw beauty and exotic allure of Malaysia\'s eastern state with our luxurious companions.', 'image' => 'model5.webp'],
    'sarawak' => ['name' => 'Sarawak', 'display_name' => 'Sarawak', 'url' => 'sarawak', 'description' => 'Experience the rich culture and natural beauty of Malaysia\'s eastern state with our luxurious companions.', 'image' => 'model6.webp'],
    'serdang' => ['name' => 'Serdang', 'display_name' => 'Serdang', 'url' => 'serdang', 'description' => 'Experience the vibrant and modern lifestyle with our beautiful companions in Serdang.', 'image' => 'model1.webp'],
    'seremban' => ['name' => 'Seremban', 'display_name' => 'Seremban', 'url' => 'seremban', 'description' => 'Experience the royal heritage and modern lifestyle with our beautiful companions in Seremban.', 'image' => 'model2.webp'],
    'setiaalam' => ['name' => 'Setia Alam', 'display_name' => 'Setia Alam', 'url' => 'setia-alam', 'description' => 'Experience the eco-friendly living and modern lifestyle with our beautiful companions in Setia Alam.', 'image' => 'model5.webp'],
    'sripetaling' => ['name' => 'Sri Petaling', 'display_name' => 'Sri Petaling', 'url' => 'sri-petaling', 'description' => 'Experience the vibrant and modern lifestyle with our beautiful companions in Sri Petaling.', 'image' => 'model6.webp'],
    'taiping' => ['name' => 'Taiping', 'display_name' => 'Taiping', 'url' => 'taiping', 'description' => 'Experience the rich culture and natural beauty of Malaysia\'s eastern state with our luxurious companions.', 'image' => 'model1.webp']
];

// Test the random city selection logic
echo "Testing Random City Selection:\n";
echo "=============================\n\n";

// Simulate current city (remove it from selection)
$current_city_key = 'kualalumpur'; // Example current city
if (isset($available_cities[$current_city_key])) {
    unset($available_cities[$current_city_key]);
    echo "Removed current city: $current_city_key\n";
}

// Get random 5 cities
$random_cities = array_rand($available_cities, min(5, count($available_cities)));
if (!is_array($random_cities)) {
    $random_cities = [$random_cities];
}

echo "Selected random cities:\n";
foreach ($random_cities as $city_key) {
    if (isset($available_cities[$city_key])) {
        $city = $available_cities[$city_key];
        echo "- {$city['display_name']} (URL: /premium-escort-{$city['url']}/)\n";
        echo "  Description: {$city['description']}\n";
        echo "  Image: {$city['image']}\n\n";
    }
}

echo "Total cities available: " . count($available_cities) . "\n";
echo "Random cities selected: " . count($random_cities) . "\n";

// Test URL generation
echo "\nGenerated URLs:\n";
foreach ($random_cities as $city_key) {
    if (isset($available_cities[$city_key])) {
        $city = $available_cities[$city_key];
        echo "- /premium-escort-{$city['url']}/\n";
    }
}
?>
