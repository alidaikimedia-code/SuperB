<?php
// English Privacy Policy Page
$page_key = 'legal';
$legal_section = 'privacy';
$lang = 'en-my';

// Load config and language files
include $_SERVER['DOCUMENT_ROOT'] . '/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>
<link rel="stylesheet" href="/assets/css/about.css">
<!-- content -->
<div class="banner-section about-models">
  <img class="banner-img-mobile" src="/wp-content/uploads/about/about-models-bg.webp" alt="SuperB Party Girl Privacy Policy">
  <div class="banner-overlay">
    <h1><?= $texts['legal']['privacy']['title'] ?></h1>
  </div>
</div>

<main>
  <div class="about-cards">
    <!-- Privacy Policy Header -->
    <div class="about-card highlight-card">
      <h2 class="about-heading">
      <?= $texts['legal']['privacy']['title'] ?>
      </h2>
      <p class="about-quote"><?= $texts['legal']['last_updated'] ?></p>
      <p><?= $texts['legal']['privacy']['intro'] ?></p>
    </div>

    <!-- Information We Collect -->
    <div class="about-card">
        <h2 class="about-heading">
          <?= $texts['legal']['privacy']['information_we_collect']['title'] ?>
      </h2>
      <p><?= $texts['legal']['privacy']['information_we_collect']['share'] ?></p>
      <p><?= $texts['legal']['privacy']['information_we_collect']['usage'] ?></p>
      <p><?= $texts['legal']['privacy']['information_we_collect']['communication'] ?></p>
    </div>

    <!-- How We Use Your Information -->
    <div class="about-card">
      <h2 class="about-heading">
        <?= $texts['legal']['privacy']['how_we_use']['title'] ?>
      </h2>
      <p><?= $texts['legal']['privacy']['how_we_use']['services'] ?></p>
      <p><?= $texts['legal']['privacy']['how_we_use']['operate'] ?></p>
      <p><?= $texts['legal']['privacy']['how_we_use']['updates'] ?></p>
      <p><?= $texts['legal']['privacy']['how_we_use']['law'] ?></p>
    </div>

    <!-- Cookies -->
    <div class="about-card">
      <h2 class="about-heading">
        <?= $texts['legal']['privacy']['cookies']['title'] ?>
      </h2>
      <p><?= $texts['legal']['privacy']['cookies']['description'] ?></p>
    </div>

    <!-- Sharing Your Information -->
    <div class="about-card">
      <h2 class="about-heading">
        <?= $texts['legal']['privacy']['sharing']['title'] ?>
      </h2>
      <p><strong>Service Providers:</strong> <?= $texts['legal']['privacy']['sharing']['service_providers'] ?></p>
      <p><strong>Legal Requirements:</strong> <?= $texts['legal']['privacy']['sharing']['legal'] ?></p>
      <p><strong>Business Changes:</strong> <?= $texts['legal']['privacy']['sharing']['business'] ?></p>
    </div>

    <!-- Data Retention -->
    <div class="about-card">
      <h2 class="about-heading">
        <?= $texts['legal']['privacy']['data_retention']['title'] ?>
      </h2>
      <p><?= $texts['legal']['privacy']['data_retention']['description'] ?></p>
    </div>

    <!-- Security -->
    <div class="about-card">
      <h2 class="about-heading">
        <?= $texts['legal']['privacy']['security']['title'] ?>
      </h2>
      <p><?= $texts['legal']['privacy']['security']['description'] ?></p>
    </div>

    <!-- Your Choices -->
    <div class="about-card">
      <h2 class="about-heading">
        <?= $texts['legal']['privacy']['your_choices']['title'] ?>
      </h2>
      <p><?= $texts['legal']['privacy']['your_choices']['access'] ?></p>
      <p><?= $texts['legal']['privacy']['your_choices']['marketing'] ?></p>
      <p><?= $texts['legal']['privacy']['your_choices']['cookies_manage'] ?></p>
    </div>

    <!-- Children -->
    <div class="about-card">
      <h2 class="about-heading">
        <?= $texts['legal']['privacy']['children']['title'] ?>
      </h2>
      <p><?= $texts['legal']['privacy']['children']['description'] ?></p>
    </div>

    <!-- Contact Us -->
    <div class="about-card">
      <h2 class="about-heading">
        <?= $texts['legal']['privacy']['contact']['title'] ?>
      </h2>
      <p><?= $texts['legal']['privacy']['contact']['description'] ?></p>
    </div>

    <!-- Changes to This Policy -->
    <div class="about-card">
      <h2 class="about-heading">
        <i class="fas fa-sync-alt"></i><?= $texts['legal']['privacy']['changes']['title'] ?>
      </h2>
      <p><?= $texts['legal']['privacy']['changes']['description'] ?></p>
    </div>

    <!-- CTA Section -->
    <div class="about-cta">
      <p class="about-cta-text">Questions about our Privacy Policy?</p>
      <p>If you have any questions or concerns about how we handle your personal data, please don't hesitate to reach out to us.</p>
      <a href="https://t.me/SuperBvvip" class="about-btn book-now-btn">Contact Us</a>
    </div>
  </div>
</main>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>

