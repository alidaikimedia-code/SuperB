<?php
// 动态城市模板 - 中文版本
// 此模板将用于所有中文城市页面

// 从page_key获取城市名称
$city_name = ucwords(str_replace(['-', '_'], ' ', $page_key));
$city_display_name = str_replace('伴游和B2B按摩', '派对女郎', $texts[$page_key]['title'] ?? $city_name . ' 派对女郎');
include $_SERVER['DOCUMENT_ROOT'] . '/header.php';

// 获取城市内容和常见问题
$city_content = $texts[$page_key]['content'] ?? '';
$city_faqs = $texts[$page_key]['faqs'] ?? [];

// 处理内容转换为适当的HTML结构
function processCityContent($content) {
  if (empty($content)) return '';
  
  // 将内容分割成行
  $lines = explode("\n", $content);
  $html = '';
  $inAreaList = false;
  
  foreach ($lines as $line) {
    $line = trim($line);
    if (empty($line)) continue;
    
    // 检查主标题（包含城市名称的第一行）
    if (strpos($line, '伴游 – SuperB 派对女郎') !== false) {
      $html .= '<h1 class="main-title">' . htmlspecialchars($line) . '</h1>';
    }
    // 检查章节标题
    elseif (strpos($line, '的') !== false && (strpos($line, '生活方式') !== false || strpos($line, '氛围') !== false || strpos($line, '情调') !== false || strpos($line, '魅力') !== false)) {
      $html .= '<h2 class="section-title">' . htmlspecialchars($line) . '</h2>';
      $inAreaList = false;
    }
    elseif (strpos($line, '我们服务的顶级区域') !== false) {
      $html .= '<h2 class="section-title">' . htmlspecialchars($line) . '</h2>';
      $inAreaList = true;
    }
    elseif (strpos($line, '性感约会场景') !== false) {
      $html .= '<h2 class="section-title">' . htmlspecialchars($line) . '</h2>';
      $inAreaList = false;
    }
    elseif (strpos($line, '谁预订') !== false) {
      $html .= '<h2 class="section-title">' . htmlspecialchars($line) . '</h2>';
      $inAreaList = false;
    }
    // 检查区域列表（当我们在区域列表模式且行较短时）
    elseif ($inAreaList && mb_strlen($line) < 20 && !strpos($line, '。') && !strpos($line, '？') && !strpos($line, '！') && !strpos($line, '这些')) {
      $html .= '<div class="area-item">' . htmlspecialchars($line) . '</div>';
    }
    // 常规段落
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

<!-- 英雄区域 -->
<div class="city-hero" style="background-image: url('/modelsimages/model4.webp');">
  <div class="city-hero-content">
    <h1><?= $city_display_name ?> 和 <?= $city_name ?> B2B按摩 高级陪伴服务</h1>
    <p><?= $texts[$page_key]['description'] ?? '欢迎来到SuperB派对女郎，优雅的' . $city_name . '伴游、' . $city_name . '应召女郎和' . $city_name . ' B2B按摩服务选择。我们的陪伴提供浪漫、惊艳且私密的高级生活方式体验。' ?></p>
    <div class="hero-buttons">
      <a href="<?= env('TELEGRAM_LINK') ?>" class="btn-primary">立即预订</a>
      <a href="#services" class="btn-secondary">我们的服务</a>
    </div>
  </div>
</div>

<main>
  <!-- 动态城市内容区域 -->
  <?php if (!empty($city_content)): ?>
  <section class="city-content-section">
    <div class="content-wrapper">
      <div class="content-card">
        <div class="city-dynamic-content">
          <?= processCityContent($city_content) ?>
          
          <!-- 预订您的体验区域 -->
          <div class="book-experience-section">
            <h2 class="section-title">预订您的<?= $city_name ?>体验</h2>
            <p>今天就联系SuperB派对女郎，让我们为您在<?= $city_name ?>创造一个夜晚，每一次触摸、每一个吻、每一声呻吟都感觉像纯粹的享受。</p>
            <div class="book-buttons">
              <a href="<?= env('TELEGRAM_LINK') ?>" class="btn-primary">立即预订</a>
              <!-- <a href="tel:+60123456789" class="btn-secondary">立即致电</a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php else: ?>
  <!-- 备用介绍区域 -->
  <section class="city-intro-section">
    <div class="content">
      <h2>介绍</h2>
      <p>
        我们不是典型的伴游目录。我们是一个精品品牌，精心策划优雅的陪伴，带来化学反应、对话和舒适。<?= $city_name ?>连接豪华公寓、充满活力的餐饮场景和高级生活方式体验。
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
      line-height: 1.8;
      margin-bottom: 30px;
    }

    .city-dynamic-content {
      font-size: 1.1rem;
      line-height: 1.8;
      color: #333;
      max-width: 1000px;
      margin: 0 auto;
      font-family: 'Microsoft YaHei', '微软雅黑', 'SimSun', '宋体', sans-serif;
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
      text-indent: 2em;
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
      text-indent: 0;
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


  <!-- 常见问题区域 -->
  <div class="faq-section">
    <h2><?= $city_name ?>常见问题</h2>
    <div class="faq-container">
      <?php if (!empty($city_faqs)): ?>
        <?php foreach ($city_faqs as $index => $faq): ?>
          <?php 
          $parts = explode('？', $faq, 2);
          $question = trim($parts[0]) . '？';
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
        <!-- 如果没有提供城市特定的常见问题，则使用默认常见问题 -->
        <div class="faq-item">
          <button class="accordion" onclick="toggleAccordion(this)">
            <h3>您只提供伴游服务吗？</h3>
          </button>
          <div class="panel">
            <p>我们提供的不仅仅是典型的伴游服务。SuperB派对女郎专注于高级陪伴和B2B按摩，采用精致的精品方法。</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="accordion" onclick="toggleAccordion(this)">
            <h3>您在<?= $city_name ?>覆盖哪些区域？</h3>
          </button>
          <div class="panel">
            <p>我们覆盖列出的热点地区和许多附近的社区。分享您的确切位置，我们将推荐最佳选择。</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="accordion" onclick="toggleAccordion(this)">
            <h3>预订是私密和安全的吗？</h3>
          </button>
          <div class="panel">
            <p>是的。您的信息保持机密，我们的陪伴会谨慎到达。</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="accordion" onclick="toggleAccordion(this)">
            <h3>您会在酒店和公寓见面吗？</h3>
          </button>
          <div class="panel">
            <p>是的。提供到酒店、服务式套房和私人公寓的外出服务。可以根据要求在便利区域安排上门服务。</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="accordion" onclick="toggleAccordion(this)">
            <h3>我可以要求特定的外观或个性吗？</h3>
          </button>
          <div class="panel">
            <p>告诉我们您的偏好。我们将推荐一个符合您风格的匹配，从甜美浪漫到大胆顽皮。</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="accordion" onclick="toggleAccordion(this)">
            <h3>您接受最后一分钟的请求吗？</h3>
          </button>
          <div class="panel">
            <p>在中心区域通常可以当天预订。建议提前通知较长的约会或特殊请求。</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="accordion" onclick="toggleAccordion(this)">
            <h3>什么让您的<?= $city_name ?>陪伴特别？</h3>
          </button>
          <div class="panel">
            <p>我们的<?= $city_name ?>陪伴经过精心挑选，具有优雅、智慧和提供有意义陪伴的能力。他们了解当地文化，可以增强您在这座城市的体验。</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="accordion" onclick="toggleAccordion(this)">
            <h3>如何在<?= $city_name ?>预订陪伴？</h3>
          </button>
          <div class="panel">
            <p>只需通过我们的Telegram频道联系我们，提供您偏好的时间、地点和任何特定要求。我们将为您安排一切。</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="accordion" onclick="toggleAccordion(this)">
            <h3>您在<?= $city_name ?>的服务是24/7可用吗？</h3>
          </button>
          <div class="panel">
            <p>是的，我们在<?= $city_name ?>的中心、公寓和住宅区域提供24小时覆盖，为您提供便利。</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="accordion" onclick="toggleAccordion(this)">
            <h3>在我们的会面期间我应该期待什么？</h3>
          </button>
          <div class="panel">
            <p>期待一个精致、专业的体验，具有真诚的对话、优雅的陪伴，以及根据您的偏好和场合量身定制的难忘时光。</p>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>

  <!-- 预订您的体验区域 -->
  <section class="city-content-section" style="background: linear-gradient(135deg, #ff2491, #ff6b9d);">
    <div class="content-wrapper">
      <div class="content-card" style="text-align: center;">
        <h2 style="color: white;">预订您的体验</h2>
        <p style="color: white; font-size: 1.2rem; margin-bottom: 30px; text-indent: 0;">
          与<?= $city_name ?>派对女郎陪伴享受浪漫、优雅和难忘的夜晚。向我们发送您偏好的时间、地点和您想要的氛围。我们将为您量身定制一个感觉轻松和专属的私人体验。
        </p>
        <a href="<?= env('TELEGRAM_LINK') ?>" class="btn" style="background: white; color: #ff2491; font-weight: 600; padding: 15px 30px; font-size: 1.1rem;">立即预订</a>
      </div>
    </div>
  </section>
</main>

<script>
// 增强的常见问题手风琴功能 - 与主页相同
function toggleAccordion(element) {
  // 关闭所有其他手风琴
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
  
  // 切换当前手风琴
  element.classList.toggle('active');
  const panel = element.nextElementSibling;
  
  if (panel.style.maxHeight) {
    panel.style.maxHeight = null;
  } else {
    panel.style.maxHeight = panel.scrollHeight + "px";
  }
}

// 在页面加载时初始化手风琴
document.addEventListener('DOMContentLoaded', function() {
  // 设置所有面板的初始状态
  const panels = document.querySelectorAll('.panel');
  panels.forEach(panel => {
    panel.style.maxHeight = null;
  });
  
  // 添加平滑过渡
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
      text-indent: 0;
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

// 锚链接的平滑滚动
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
