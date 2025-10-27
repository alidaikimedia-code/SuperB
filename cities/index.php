<?php
// Cities Router - Handles both individual city pages and cities listing
$request = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// Check if it's a specific city page
if (strpos($request, 'cities/premium-escort-') === 0) {
    // Extract city name from URL
    $city_slug = str_replace('cities/premium-escort-', '', $request);
    
    // Check if city exists in language file
    if (isset($texts[$city_slug])) {
        $page_key = $city_slug;
        include '../city-template.php';
        exit;
    }
}

// If not a specific city or city not found, show cities listing
$page_key = 'cities_page';

// Define available cities with their data - only cities with complete data in language file
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
  'johor' => ['name' => 'Johor', 'display_name' => 'Johor', 'url' => 'johor', 'description' => 'Luxury escort services in Johor, blending historical charm with modern sophistication.', 'image' => 'model6.webp'],

];

include $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>
<script>
// Add cities-page class to body for specific styling
document.body.classList.add('cities-page');
</script>
<!-- Debug: Cities page CSS loading -->
<link rel="stylesheet" href="/assets/css/cities.css">

<!-- Hero Section -->
<div class="cities-hero">
  <div class="hero-overlay">
    <div class="hero-content">
      <h1>Malaysia Cities</h1>
      <p>Discover Premium Escort Services Across Malaysia's Most Vibrant Cities</p>
      <div class="hero-buttons">
        <a href="<?= env('TELEGRAM_LINK') ?>" class="btn-primary">Book Now</a>
        <a href="#cities-grid" class="btn-secondary">Explore Cities</a>
      </div>
    </div>
  </div>
</div>

<main>
  <!-- Cities Grid Section -->
  <section id="cities-grid" class="cities-section">
    <div class="container">
      <div class="section-header">
        <h2>Choose Your City</h2>
        <p>Premium escort services available in Malaysia's top destinations</p>
      </div>
      
      <div class="cities-grid">
        <?php foreach ($available_cities as $city_key => $city_data): ?>
        <div class="city-card" data-city="<?= $city_key ?>">
          <div class="city-image">
            <img src="/modelsimages/<?= $city_data['image'] ?>" alt="<?= $city_data['display_name'] ?> Escort Services" loading="lazy">
            <div class="city-overlay">
              <h3><?= $city_data['display_name'] ?></h3>
              <p>Premium escort services</p>
            </div>
          </div>
          <div class="city-content">
            <h3><?= $city_data['display_name'] ?> Escort Services</h3>
            <p><?= $city_data['description'] ?></p>
            <a href="/premium-escort-<?= $city_data['url'] ?>/" class="city-btn">Explore <?= $city_data['display_name'] ?></a>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="features-section">
    <div class="container">
      <div class="section-header">
        <h2>Why Choose Superb Party Girl?</h2>
        <p>Premium escort services with unmatched quality and discretion</p>
      </div>
      
      <div class="features-grid">
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3>Privacy & Safety</h3>
          <p>Your privacy is our top priority. All services are handled with complete discretion and confidentiality.</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-star"></i>
          </div>
          <h3>Premium Quality</h3>
          <p>Handpicked companions selected for their beauty, charm, and ability to make every moment special.</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-clock"></i>
          </div>
          <h3>24/7 Availability</h3>
          <p>Day or night, we're always available to provide companionship whenever you need it.</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <h3>Wide Coverage</h3>
          <p>Services available across all major cities in Malaysia with convenient incall and outcall options.</p>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    }
  });
});

// Add hover effects to city cards
document.querySelectorAll('.city-card').forEach(card => {
  card.addEventListener('mouseenter', function() {
    this.style.transform = 'translateY(-10px)';
  });
  
  card.addEventListener('mouseleave', function() {
    this.style.transform = 'translateY(0)';
  });
});
</script>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>
