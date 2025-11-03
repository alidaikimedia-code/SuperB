<?php
// Chinese Disclaimer Page
$page_key = 'legal';
$legal_section = 'disclaimer';
$lang = 'zh-my';

// Load config and language files
include $_SERVER['DOCUMENT_ROOT'] . '/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>
<link rel="stylesheet" href="/assets/css/about.css">
<!-- content -->
<div class="banner-section about-models">
  <img class="banner-img-mobile" src="/wp-content/uploads/about/about-models-bg.webp" alt="SuperB Party Girl 免责声明">
  <div class="banner-overlay">
    <h1><?= $texts['legal']['disclaimer']['title'] ?></h1>
  </div>
</div>

<main>
  <div class="about-cards">
    <!-- Disclaimer Header -->
    <div class="about-card highlight-card">
      <h2 class="about-heading">
        <?= $texts['legal']['disclaimer']['title'] ?>
      </h2>
      <p class="about-quote"><?= $texts['legal']['last_updated'] ?></p>
      <p><?= $texts['legal']['disclaimer']['intro'] ?></p>
    </div>

    <!-- Nature of Services -->
    <div class="about-card">
      <h2 class="about-heading">
        <?= $texts['legal']['disclaimer']['nature']['title'] ?>
      </h2>
      <p><?= $texts['legal']['disclaimer']['nature']['description'] ?></p>
    </div>

    <!-- Accuracy of Information -->
    <div class="about-card">
      <h2 class="about-heading">
        <?= $texts['legal']['disclaimer']['accuracy']['title'] ?>
      </h2>
      <p><?= $texts['legal']['disclaimer']['accuracy']['description'] ?></p>
    </div>

    <!-- No Professional Advice -->
    <div class="about-card">
      <h2 class="about-heading">
        <?= $texts['legal']['disclaimer']['professional_advice']['title'] ?>
      </h2>
      <p><?= $texts['legal']['disclaimer']['professional_advice']['description'] ?></p>
    </div>

    <!-- External Links -->
    <div class="about-card">
      <h2 class="about-heading">
        <?= $texts['legal']['disclaimer']['external_links']['title'] ?>
      </h2>
      <p><?= $texts['legal']['disclaimer']['external_links']['description'] ?></p>
    </div>

    <!-- Limitation of Liability -->
    <div class="about-card">
      <h2 class="about-heading">
        <?= $texts['legal']['disclaimer']['limitation_liability']['title'] ?>
      </h2>
      <p><?= $texts['legal']['disclaimer']['limitation_liability']['description'] ?></p>
    </div>

    <!-- Contact -->
    <div class="about-card">
      <h2 class="about-heading">
        <?= $texts['legal']['disclaimer']['contact']['title'] ?>
      </h2>
      <p><?= $texts['legal']['disclaimer']['contact']['description'] ?></p>
    </div>

    <!-- CTA Section -->
    <div class="about-cta">
      <p class="about-cta-text">对我们的免责声明有疑问吗？</p>
      <p>如果您对我们的免责声明有任何疑问或疑虑，请随时与我们联系。</p>
      <a href="https://t.me/SuperBvvip" class="about-btn book-now-btn">联系我们</a>
    </div>
  </div>
</main>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>

