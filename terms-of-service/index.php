<?php
// English Terms of Service Page
$page_key = 'legal';
$legal_section = 'terms_of_service';
$lang = 'en-my';

// Load config and language files
// include $_SERVER['DOCUMENT_ROOT'] . '/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>
<link rel="stylesheet" href="/assets/css/about.css">
<!-- content -->
<div class="banner-section about-models">
  <img class="banner-img-mobile" src="/wp-content/uploads/about/about-models-bg.webp" alt="SuperB Party Girl Terms of Service">
  <div class="banner-overlay">
    <h1><?= $texts['legal']['terms_of_service']['title'] ?></h1>
  </div>
</div>

<main>
  <div class="about-cards">
    <!-- Terms of Service Header -->
    <div class="about-card highlight-card">
      <h2 class="about-heading">
        <?= $texts['legal']['terms_of_service']['title'] ?>
      </h2>
      <p class="about-quote"><?= $texts['legal']['last_updated'] ?></p>
      <p><?= $texts['legal']['terms_of_service']['intro'] ?></p>
    </div>

    <!-- Eligibility -->
    <div class="about-card">
      <h2 class="about-heading">
        <?= $texts['legal']['terms_of_service']['eligibility']['title'] ?>
      </h2>
      <p><?= $texts['legal']['terms_of_service']['eligibility']['description'] ?></p>
    </div>

    <!-- Bookings and Payments -->
    <div class="about-card">
      <h2 class="about-heading">
        <?= $texts['legal']['terms_of_service']['bookings']['title'] ?>
      </h2>
      <ul>
        <li><?= $texts['legal']['terms_of_service']['bookings']['accurate'] ?></li>
        <li><?= $texts['legal']['terms_of_service']['bookings']['prices'] ?></li>
        <li><?= $texts['legal']['terms_of_service']['bookings']['deposits'] ?></li>
        <li><?= $texts['legal']['terms_of_service']['bookings']['cancellations'] ?></li>
      </ul>
    </div>

    <!-- User Responsibilities -->
    <div class="about-card">
      <h2 class="about-heading">
        <?= $texts['legal']['terms_of_service']['user_responsibilities']['title'] ?>
      </h2>
      <ul>
        <li><?= $texts['legal']['terms_of_service']['user_responsibilities']['lawful'] ?></li>
        <li><?= $texts['legal']['terms_of_service']['user_responsibilities']['harass'] ?></li>
        <li><?= $texts['legal']['terms_of_service']['user_responsibilities']['interfere'] ?></li>
        <li><?= $texts['legal']['terms_of_service']['user_responsibilities']['privacy'] ?></li>
      </ul>
    </div>

    <!-- Prohibited Use -->
    <div class="about-card">
      <h2 class="about-heading">
        <?= $texts['legal']['terms_of_service']['prohibited']['title'] ?>
      </h2>
      <p><?= $texts['legal']['terms_of_service']['prohibited']['description'] ?></p>
    </div>

    <!-- Content and Intellectual Property -->
    <div class="about-card">
      <h2 class="about-heading">
        <?= $texts['legal']['terms_of_service']['content']['title'] ?>
      </h2>
      <p><?= $texts['legal']['terms_of_service']['content']['description'] ?></p>
    </div>

    <!-- Third Party Links -->
    <div class="about-card">
      <h2 class="about-heading">
        <?= $texts['legal']['terms_of_service']['third_party']['title'] ?>
      </h2>
      <p><?= $texts['legal']['terms_of_service']['third_party']['description'] ?></p>
    </div>

    <!-- Disclaimers -->
    <div class="about-card">
      <h2 class="about-heading">
        <?= $texts['legal']['terms_of_service']['disclaimers_section']['title'] ?>
      </h2>
      <p><?= $texts['legal']['terms_of_service']['disclaimers_section']['description'] ?></p>
    </div>

    <!-- Limitation of Liability -->
    <div class="about-card">
      <h2 class="about-heading">
        <?= $texts['legal']['terms_of_service']['limitation']['title'] ?>
      </h2>
      <p><?= $texts['legal']['terms_of_service']['limitation']['description'] ?></p>
    </div>

    <!-- Indemnity -->
    <div class="about-card">
      <h2 class="about-heading">
        <?= $texts['legal']['terms_of_service']['indemnity']['title'] ?>
      </h2>
      <p><?= $texts['legal']['terms_of_service']['indemnity']['description'] ?></p>
    </div>

    <!-- Governing Law -->
    <div class="about-card">
      <h2 class="about-heading">
        <?= $texts['legal']['terms_of_service']['governing']['title'] ?>
      </h2>
      <p><?= $texts['legal']['terms_of_service']['governing']['description'] ?></p>
    </div>

    <!-- Contact -->
    <div class="about-card">
      <h2 class="about-heading">
        <?= $texts['legal']['terms_of_service']['contact']['title'] ?>
      </h2>
      <p><?= $texts['legal']['terms_of_service']['contact']['description'] ?></p>
    </div>

    <!-- CTA Section -->
    <div class="about-cta">
      <p class="about-cta-text">Questions about our Terms of Service?</p>
      <p>If you have any questions about our terms and conditions, please don't hesitate to reach out to us.</p>
      <a href="<?= env('TELEGRAM_LINK') ?>" class="about-btn book-now-btn">Contact Us</a>
    </div>
  </div>
</main>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>
