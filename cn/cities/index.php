<?php

// Include language file
include $_SERVER['DOCUMENT_ROOT'] . '/lang/zh-my.php';

// Cities Router - Handles both individual city pages and cities listing

$request = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');



// Check if it's a specific city page

if (strpos($request, 'cn/premium-escort-') === 0) {

    // Extract city name from URL

    $city_slug = str_replace('cn/premium-escort-', '', $request);

    

    // Check if city exists in language file

    if (isset($texts[$city_slug])) {

        $page_key = $city_slug;

        include './city-template-chinese.php';

        exit;

    }

}



// If not a specific city or city not found, show cities listing

$page_key = 'cities_page';



// Define available cities with their data - only cities that have actual folders

$available_cities = [
  
  'ampang' => ['name' => '安邦', 'display_name' => '安邦', 'url' => 'ampang', 'description' => '在安邦与SuperB Party Girl体验顶级伴游服务。我们的伴侣优雅、谨慎，提供B2B按摩、浪漫约会和私人会面。', 'image' => 'model1.webp'],
  'bangsar' => ['name' => '孟沙', 'display_name' => '孟沙', 'url' => 'bangsar', 'description' => '在孟沙与SuperB Party Girl体验顶级伴游服务。我们的伴侣大胆自信、热情似火，提供B2B按摩、浪漫约会和私人会面。', 'image' => 'model2.webp'],
  'bukitbintang' => ['name' => '武吉免登', 'display_name' => '武吉免登', 'url' => 'bukit-bintang', 'description' => '在武吉免登与SuperB Party Girl体验顶级伴游服务。我们的伴侣魅力四射、热情奔放，提供B2B按摩、浪漫约会和私人会面。', 'image' => 'model3.webp'],
  'cheras' => ['name' => '蕉赖', 'display_name' => '蕉赖', 'url' => 'cheras', 'description' => '在蕉赖与SuperB Party Girl体验顶级伴游服务。我们的伴侣热情、性感，提供B2B按摩、浪漫约会和私人会面。', 'image' => 'model4.webp'],
  'cyberjaya' => ['name' => '赛城', 'display_name' => '赛城', 'url' => 'cyberjaya', 'description' => '在赛城与SuperB Party Girl体验顶级伴游服务。我们的伴侣优雅、谨慎，提供B2B按摩、浪漫约会和私人会面。', 'image' => 'model5.webp'],
  'damansara' => ['name' => '白沙罗', 'display_name' => '白沙罗', 'url' => 'damansara', 'description' => '在白沙罗与SuperB Party Girl体验顶级伴游服务。我们的伴侣优雅浪漫、热情似火，提供B2B按摩、浪漫约会和私人会面。', 'image' => 'model6.webp'],
  'genting' => ['name' => '云顶', 'display_name' => '云顶', 'url' => 'genting', 'description' => '在云顶与SuperB Party Girl体验顶级伴游服务。我们的伴侣性感撩人、大胆前卫，提供B2B按摩、浪漫约会和私人会面。', 'image' => 'model1.webp'],
  'ipoh' => ['name' => '怡保', 'display_name' => '怡保', 'url' => 'ipoh', 'description' => '在怡保与SuperB Party Girl体验顶级伴游服务。我们的伴侣热情浪漫、床上激情四射，提供B2B按摩、浪漫约会和私人会面。', 'image' => 'model2.webp'],
  'johor' => ['name' => '柔佛', 'display_name' => '柔佛', 'url' => 'johor', 'description' => '在柔佛与SuperB Party Girl体验顶级伴游服务。我们的伴侣热情似火、优雅撩人，提供B2B按摩、浪漫约会和私人会面。', 'image' => 'model3.webp'],
  'kepong' => ['name' => '甲洞', 'display_name' => '甲洞', 'url' => 'kepong', 'description' => '在甲洞与SuperB Party Girl体验顶级伴游服务。我们的伴侣风趣迷人、热情浪漫，提供B2B按摩、浪漫约会和私人会面。', 'image' => 'model4.webp'],
  'klang' => ['name' => '巴生', 'display_name' => '巴生', 'url' => 'klang', 'description' => '在巴生与SuperB Party Girl体验顶级伴游服务。我们的伴侣热情似火、优雅撩人，提供B2B按摩、浪漫约会和私人会面。', 'image' => 'model5.webp'],
  'klangvalley' => ['name' => '巴生谷', 'display_name' => '巴生谷', 'url' => 'klang-valley', 'description' => '在巴生谷与SuperB Party Girl体验顶级伴游服务。我们的伴侣俏皮优雅、狂野性感，提供B2B按摩、浪漫约会和私人会面。', 'image' => 'model6.webp'],
  'kotadamansara' => ['name' => '哥打白沙罗', 'display_name' => '哥打白沙罗', 'url' => 'kota-damansara', 'description' => '在哥打白沙罗与SuperB Party Girl体验顶级伴游服务。我们的伴侣性感撩人、热情奔放，提供B2B按摩、浪漫约会和私人会面。', 'image' => 'model1.webp'],
  'kualalumpur' => ['name' => '吉隆坡', 'display_name' => '吉隆坡', 'url' => 'kuala-lumpur', 'description' => '在吉隆坡与SuperB Party Girl体验顶级伴游服务。我们的伴侣优雅浪漫、热情奔放，提供B2B按摩、浪漫约会和私人会面。', 'image' => 'model2.webp'],
  'montkiara' => ['name' => '满家乐', 'display_name' => '满家乐', 'url' => 'mont-kiara', 'description' => '在满家乐与SuperB Party Girl体验顶级伴游服务。我们的伴侣优雅浪漫、热情奔放，提供B2B按摩、浪漫约会和私人会面。', 'image' => 'model3.webp'],
  'petalingjaya' => ['name' => '八打灵再也', 'display_name' => '八打灵再也', 'url' => 'petalingjaya', 'description' => '在八打灵再也与SuperB Party Girl体验顶级伴游服务。我们的伴侣年轻性感、热情奔放，提供B2B按摩、浪漫约会和私人会面。', 'image' => 'model4.webp'],
  'puchong' => ['name' => '蒲种', 'display_name' => '蒲种', 'url' => 'puchong', 'description' => '在蒲种与SuperB Party Girl体验顶级伴游服务。我们的伴侣热情似火、活力四射，提供B2B按摩、浪漫约会和私人会面。', 'image' => 'model5.webp'],
  'putrajaya' => ['name' => '布城', 'display_name' => '布城', 'url' => 'putrajaya', 'description' => '在布城与SuperB Party Girl体验顶级伴游服务。我们的伴侣性感浪漫、热情奔放，提供B2B按摩、浪漫约会和私人会面。', 'image' => 'model6.webp'],
  'shahalam' => ['name' => '莎阿南', 'display_name' => '莎阿南', 'url' => 'shahalam', 'description' => '在莎阿南与SuperB Party Girl体验顶级伴游服务。我们的伴侣优雅浪漫、热情似火，提供B2B按摩、浪漫约会和私人会面。', 'image' => 'model1.webp'],
  'subangjaya' => ['name' => '梳邦再也', 'display_name' => '梳邦再也', 'url' => 'subangjaya', 'description' => '在梳邦再也与SuperB Party Girl体验顶级伴游服务。我们的伴侣风趣热情、魅力四射，提供B2B按摩、浪漫约会和私人会面。', 'image' => 'model2.webp']
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

      <h1>马来西亚城市</h1>

      <p>探索马来西亚最充满活力城市的高端伴游服务</p>

      <div class="hero-buttons">

        <a href="https://t.me/SuperBbaby" class="btn-primary">立即预订</a>

        <a href="#cities-grid" class="btn-secondary">探索城市</a>

      </div>

    </div>

  </div>

</div>



<main>

  <!-- Cities Grid Section -->

  <section id="cities-grid" class="cities-section">

    <div class="container">

      <div class="section-header">

        <h2>选择您的城市</h2>

        <p>马来西亚顶级目的地的高端伴游服务</p>

      </div>

      

      <div class="cities-grid">

        <?php foreach ($available_cities as $city_key => $city_data): ?>

        <div class="city-card" data-city="<?= $city_key ?>">

          <div class="city-image">

            <img src="/modelsimages/<?= $city_data['image'] ?>" alt="<?= $city_data['display_name'] ?>伴游服务" loading="lazy">

            <div class="city-overlay">

              <h3><?= $city_data['display_name'] ?></h3>

              <p>高端伴游服务</p>

            </div>

          </div>

          <div class="city-content">

            <h3><?= $city_data['display_name'] ?>伴游服务</h3>

            <p><?= $city_data['description'] ?></p>

            <a href="/cn/premium-escort-<?= $city_data['url'] ?>" class="city-btn">探索<?= $city_data['display_name'] ?></a>

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

        <h2>为什么选择SuperB Party Girl？</h2>

        <p>无与伦比质量和保密性的高端伴游服务</p>

      </div>

      

      <div class="features-grid">

        <div class="feature-card">

          <div class="feature-icon">

            <i class="fas fa-shield-alt"></i>

          </div>

          <h3>隐私与安全</h3>

          <p>您的隐私是我们的首要任务。所有服务都以完全保密和机密的方式处理。</p>

        </div>

        

        <div class="feature-card">

          <div class="feature-icon">

            <i class="fas fa-star"></i>

          </div>

          <h3>高端品质</h3>

          <p>精心挑选的伴侣，因其美丽、魅力和让每一刻都特别的能力而被选中。</p>

        </div>

        

        <div class="feature-card">

          <div class="feature-icon">

            <i class="fas fa-clock"></i>

          </div>

          <h3>24/7 可用性</h3>

          <p>无论白天还是夜晚，我们随时为您提供陪伴服务。</p>

        </div>

        

        <div class="feature-card">

          <div class="feature-icon">

            <i class="fas fa-map-marker-alt"></i>

          </div>

          <h3>广泛覆盖</h3>

          <p>马来西亚所有主要城市都有服务，提供便利的上门和外派选择。</p>

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
