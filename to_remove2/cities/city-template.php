<?php
// Dynamic City Template - Similar to blog-template.php
// This template will be used by all city pages

// Get city name from page_key
$city_name = ucwords(str_replace(['-', '_'], ' ', $page_key));
$city_display_name = str_replace('Escorts and B2B Massage', 'Party Girl', $texts[$page_key]['title'] ?? $city_name . ' Party Girl');
include $_SERVER['DOCUMENT_ROOT'] . '/header.php';

// Get city content and FAQs
$city_content = $texts[$page_key]['content'] ?? '';
$city_faqs = $texts[$page_key]['faqs'] ?? [];

// Process content to convert to proper HTML structure
function processCityContent($content) {
  if (empty($content)) return '';
  
  // Split content into lines
  $lines = explode("\n", $content);
  $html = '';
  $inAreaList = false;
  
  foreach ($lines as $line) {
    $line = trim($line);
    if (empty($line)) continue;
    
    // Check for main title (first line with city name)
    if (strpos($line, 'Escorts – SuperB Party Girl') !== false) {
      $html .= '<h1 class="main-title">' . htmlspecialchars($line) . '</h1>';
    }
    // Check for section headings
    elseif (strpos($line, 'The ') === 0 && (strpos($line, 'Lifestyle') !== false || strpos($line, 'Vibe') !== false || strpos($line, 'Mood') !== false || strpos($line, 'Atmosphere') !== false || strpos($line, 'Charm') !== false)) {
      $html .= '<h2 class="section-title">' . htmlspecialchars($line) . '</h2>';
      $inAreaList = false;
    }
    elseif (strpos($line, 'Top Areas We Serve') !== false) {
      $html .= '<h2 class="section-title">' . htmlspecialchars($line) . '</h2>';
      $inAreaList = true;
    }
    elseif (strpos($line, 'Sexy Date Scenarios') !== false) {
      $html .= '<h2 class="section-title">' . htmlspecialchars($line) . '</h2>';
      $inAreaList = false;
    }
    elseif (strpos($line, 'Who Books') !== false) {
      $html .= '<h2 class="section-title">' . htmlspecialchars($line) . '</h2>';
      $inAreaList = false;
    }
    // Check for area lists (when we're in area list mode and line is short)
    elseif ($inAreaList && strlen($line) < 50 && !strpos($line, '.') && !strpos($line, '?') && !strpos($line, '!') && !strpos($line, 'Each of these')) {
      $html .= '<div class="area-item">' . htmlspecialchars($line) . '</div>';
    }
    // Regular paragraphs
    else {
      $html .= '<p>' . htmlspecialchars($line) . '</p>';
      $inAreaList = false;
    }
  }
  
  return $html;
}
?>

<link rel="stylesheet" href="/assets/css/cities.css">
<link rel="stylesheet" href="/assets/css/index.css">

<!-- Hero Section -->
<div class="city-hero" style="background-image: url('/modelsimages/model4.webp');">
  <div class="city-hero-content">
    <h1><?= $city_display_name ?> and <?= $city_name ?> B2B Massage Premium Companionship</h1>
    <p><?= $texts[$page_key]['description'] ?? 'Welcome to SuperB Party Girl, the elegant choice for ' . $city_name . ' escort, ' . $city_name . ' call girl, and ' . $city_name . ' B2B massage services. Our companions deliver a premium lifestyle experience that is romantic, stunning, and discreet.' ?></p>
    <div class="hero-buttons">
      <a href="<?= env('TELEGRAM_LINK') ?>" class="btn-primary">Book Now</a>
      <a href="/premium-escort" class="btn-secondary">Our Services</a>
    </div>
  </div>
</div>

<main>
  <!-- Dynamic City Content Section -->
  <?php if (!empty($city_content)): ?>
  <section class="city-content-section">
    <div class="content-wrapper">
      <div class="content-card">
        <div class="city-dynamic-content">
          <?= processCityContent($city_content) ?>
          
          <!-- Book Your Experience Section -->
          <div class="book-experience-section">
            <h2 class="section-title">Book Your <?= $city_name ?> Experience</h2>
            <p>Contact SuperB Party Girl today and let us create a night in <?= $city_name ?> where every touch, every kiss, and every moan feels like pure indulgence.</p>
            <div class="book-buttons">
              <a href="<?= env('TELEGRAM_LINK') ?>" class="btn-primary">Book Now</a>
              <a href="tel:+60123456789" class="btn-secondary">Call Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php else: ?>
  <!-- Fallback Introduction Section -->
  <section class="city-intro-section">
    <div class="content">
      <h2>Introduction</h2>
      <p>
        We are not a typical escort directory. We are a boutique brand that curates classy companions who bring chemistry, conversation, and comfort. <?= $city_name ?> connects with luxury condos, vibrant dining scenes, and premium lifestyle experiences.
      </p>
    </div>
  </section>
  <?php endif; ?>

  <style>
    .city-intro-section {
      padding: 60px 20px;
      text-align: center;
    }

    .city-intro-section .content {
      max-width: 800px;
      margin: 0 auto;
    }

    .city-intro-section h2 {
      font-size: 2.2rem;
      font-weight: 700;
      color: #ff2491;
      margin-bottom: 20px;
    }

    .city-intro-section p {
      font-size: 1.1rem;
      color: #4b5563;
      line-height: 1.7;
      margin-bottom: 30px;
    }

    .city-dynamic-content {
      font-size: 1.1rem;
      line-height: 1.8;
      color: #333;
      max-width: 1000px;
      margin: 0 auto;
    }

    .city-dynamic-content .main-title {
      font-size: 2.5rem;
      font-weight: 700;
      color: #ff2491;
      margin: 0 0 30px 0;
      text-align: center;
    }

    .city-dynamic-content .section-title {
      font-size: 2rem;
      font-weight: 700;
      color: #ff2491;
      margin: 40px 0 20px 0;
      border-bottom: 2px solid #ff2491;
      padding-bottom: 10px;
    }

    .city-dynamic-content h2 {
      font-size: 2rem;
      font-weight: 700;
      color: #ff2491;
      margin: 30px 0 20px 0;
    }

    .city-dynamic-content h3 {
      font-size: 1.5rem;
      font-weight: 600;
      color: #333;
      margin: 25px 0 15px 0;
    }

    .city-dynamic-content p {
      margin-bottom: 15px;
      text-align: justify;
    }

    .city-dynamic-content .area-item {
      background: #f8f9fa;
      padding: 15px 20px;
      margin: 10px 0;
      border-left: 4px solid #ff2491;
      font-weight: 600;
      color: #333;
      border-radius: 5px;
    }

    .city-dynamic-content ul {
      margin: 15px 0;
      padding-left: 20px;
    }

    .city-dynamic-content li {
      margin-bottom: 8px;
    }

    .book-experience-section {
      background: linear-gradient(135deg, #ff2491, #ff6b9d);
      padding: 40px;
      border-radius: 15px;
      text-align: center;
      margin-top: 40px;
    }

    .book-experience-section h2 {
      color: white;
      margin-bottom: 20px;
    }

    .book-experience-section p {
      color: white;
      font-size: 1.2rem;
      margin-bottom: 30px;
    }

    .book-buttons {
      display: flex;
      gap: 20px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .book-buttons .btn-primary,
    .book-buttons .btn-secondary {
      padding: 15px 30px;
      font-size: 1.1rem;
      font-weight: 600;
      text-decoration: none;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .book-buttons .btn-primary {
      background: white;
      color: #ff2491;
    }

    .book-buttons .btn-primary:hover {
      background: #f8f9fa;
      transform: translateY(-2px);
    }

    .book-buttons .btn-secondary {
      background: transparent;
      color: white;
      border: 2px solid white;
    }

    .book-buttons .btn-secondary:hover {
      background: white;
      color: #ff2491;
      transform: translateY(-2px);
    }
  </style>


  <!-- FAQ Section -->
  <div class="faq-section">
    <h2>Frequently Asked Questions for <?= $city_name ?></h2>
    <div class="faq-container">
      <?php if (!empty($city_faqs)): ?>
        <?php foreach ($city_faqs as $index => $faq): ?>
          <?php 
          $parts = explode('?', $faq, 2);
          $question = trim($parts[0]) . '?';
          $answer = isset($parts[1]) ? trim($parts[1]) : '';
          ?>
          <div class="faq-item">
            <button class="accordion" onclick="toggleAccordion(this)">
              <h3><?= htmlspecialchars($question) ?></h3>
            </button>
            <div class="panel">
              <p><?= htmlspecialchars($answer) ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <!-- Default FAQs if no city-specific FAQs are provided -->
        <div class="faq-item">
          <button class="accordion" onclick="toggleAccordion(this)">
            <h3>Do you only provide escort services?</h3>
          </button>
          <div class="panel">
            <p>We offer more than a typical escort service. SuperB Party Girl focuses on premium companionship and B2B massage with a refined boutique approach.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="accordion" onclick="toggleAccordion(this)">
            <h3>Which areas do you cover in <?= $city_name ?>?</h3>
          </button>
          <div class="panel">
            <p>We cover the listed hotspots and many nearby neighborhoods. Share your exact location and we will recommend the best option.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="accordion" onclick="toggleAccordion(this)">
            <h3>Is the booking private and secure?</h3>
          </button>
          <div class="panel">
            <p>Yes. Your information remains confidential and our companions arrive discreetly.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="accordion" onclick="toggleAccordion(this)">
            <h3>Do you meet at hotels and condos?</h3>
          </button>
          <div class="panel">
            <p>Yes. Outcall to hotels, serviced suites, and private condos is available. Incall can be arranged on request in convenient zones.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="accordion" onclick="toggleAccordion(this)">
            <h3>Can I request a specific look or personality?</h3>
          </button>
          <div class="panel">
            <p>Tell us your preferences. We will recommend a match who fits your style, from sweet and romantic to bold and playful.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="accordion" onclick="toggleAccordion(this)">
            <h3>Do you accept last minute requests?</h3>
          </button>
          <div class="panel">
            <p>Same day bookings are often possible in central areas. Advance notice is recommended for longer dates or special requests.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="accordion" onclick="toggleAccordion(this)">
            <h3>What makes your <?= $city_name ?> companions special?</h3>
          </button>
          <div class="panel">
            <p>Our <?= $city_name ?> companions are carefully selected for their elegance, intelligence, and ability to provide meaningful companionship. They understand the local culture and can enhance your experience in the city.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="accordion" onclick="toggleAccordion(this)">
            <h3>How do I book a companion in <?= $city_name ?>?</h3>
          </button>
          <div class="panel">
            <p>Simply contact us through our Telegram channel with your preferred time, location, and any specific requirements. We'll arrange everything for you.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="accordion" onclick="toggleAccordion(this)">
            <h3>Are your services available 24/7 in <?= $city_name ?>?</h3>
          </button>
          <div class="panel">
            <p>Yes, we provide 24-hour coverage across central, condo, and residential zones in <?= $city_name ?> for your convenience.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="accordion" onclick="toggleAccordion(this)">
            <h3>What should I expect during our meeting?</h3>
          </button>
          <div class="panel">
            <p>Expect a refined, professional experience with genuine conversation, elegant companionship, and a memorable time tailored to your preferences and the occasion.</p>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>

  <?= generateCityPageFAQSchema($city_faqs ?? [], $city_name) ?>

  <!-- Book Your Experience Section -->
  <section class="city-content-section" style="background: linear-gradient(135deg, #ff2491, #ff6b9d);">
    <div class="content-wrapper">
      <div class="content-card" style="text-align: center;">
        <h2 style="color: white;">Book Your Experience</h2>
        <p style="color: white; font-size: 1.2rem; margin-bottom: 30px;">
          Enjoy a romantic, classy, and unforgettable evening with <?= $city_name ?> Party Girl companions. Message us with your preferred time, location, and the mood you want. We will tailor a private experience that feels effortless and exclusive.
        </p>
        <a href="<?= env('TELEGRAM_LINK') ?>" class="btn" style="background: white; color: #ff2491; font-weight: 600; padding: 15px 30px; font-size: 1.1rem;">Book Now</a>
      </div>
    </div>
  </section>
</main>

<script>
// Enhanced FAQ Accordion Functionality - Same as home page
function toggleAccordion(element) {
  // Close all other accordions
  const allAccordions = document.querySelectorAll('.accordion');
  const allPanels = document.querySelectorAll('.panel');
  
  allAccordions.forEach(acc => {
    if (acc !== element) {
      acc.classList.remove('active');
    }
  });
  
  allPanels.forEach(panel => {
    if (panel !== element.nextElementSibling) {
      panel.style.maxHeight = null;
    }
  });
  
  // Toggle current accordion
  element.classList.toggle('active');
  const panel = element.nextElementSibling;
  
  if (panel.style.maxHeight) {
    panel.style.maxHeight = null;
  } else {
    panel.style.maxHeight = panel.scrollHeight + "px";
  }
}

// Initialize accordion on page load
document.addEventListener('DOMContentLoaded', function() {
  // Set initial state for all panels
  const panels = document.querySelectorAll('.panel');
  panels.forEach(panel => {
    panel.style.maxHeight = null;
  });
  
  // Add smooth transitions
  const style = document.createElement('style');
  style.textContent = `
    .panel {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease-out;
      background-color: #f8f9fa;
      border-radius: 0 0 8px 8px;
    }
    
    .accordion {
      background-color: #fff;
      border: 1px solid #e9ecef;
      border-radius: 8px;
      margin-bottom: 10px;
      padding: 20px;
      text-align: left;
      cursor: pointer;
      transition: all 0.3s ease;
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
    }
    
    .accordion:hover {
      background-color: #f8f9fa;
      border-color: #ff2491;
    }
    
    .accordion.active {
      background-color: #ff2491;
      color: white;
      border-color: #ff2491;
    }
    
    .accordion h3 {
      margin: 0;
      font-size: 18px;
      font-weight: 600;
    }
    
    
    .panel p {
      margin: 0;
      padding: 20px;
      line-height: 1.6;
      /* color: #333; */
    }
    
    .faq-container {
      max-width: 800px;
      margin: 0 auto;
    }
    
    .faq-item {
      margin-bottom: 15px;
    }
  `;
  document.head.appendChild(style);
});

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
</script>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>
