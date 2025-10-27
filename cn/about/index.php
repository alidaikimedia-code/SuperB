<?php
// Chinese About Page
$page_key = 'about';
$lang = 'zh-my';

// Load config and language files
include $_SERVER['DOCUMENT_ROOT'] . '/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>
<link rel="stylesheet" href="/assets/css/about.css">
<!-- content -->
<div class="banner-section about-models">
  <img class="banner-img-mobile" src="/wp-content/uploads/about/about-models-bg.webp" alt="SuperB Party Girl About">
  <div class="banner-overlay">
    <h1><?= $texts['about']['aboutTitle'] ?></h1>
    <div class="banner-btn">
      <a href="https://t.me/SuperBvvip" class="btn"><?= $texts['common']['telegram'] ?></a>
    </div>
    <div class="banner-btn">
      <a href="https://t.me/SuperBvvip" class="btn"><?= $texts['common']['book_now'] ?></a>
    </div>
  </div>
</div>

<main>
  <div class="about-cards">
    <!-- Our Story Card -->
    <div class="about-card highlight-card">
      <h2 class="about-heading">
        <i class="fas fa-cocktail"></i><?= $texts['about']['ourStory'] ?>
      </h2>
      <p><?= $texts['about']['ourStoryyDesc1'] ?></p>
    </div>

    <!-- Enter SuperB Card -->
    <div class="about-card">
      <h2 class="about-heading">
        <i class="fas fa-star"></i><?= $texts['about']['enterSuperb'] ?>
      </h2>
      <p><?= $texts['about']['enterSuperbDesc1'] ?></p>
      <a href="https://t.me/SuperBvvip" class="about-btn"><?= $texts['about']['booksuperbPartyGirl'] ?></a>
    </div>

    <!-- Why Choose Us Card -->
    <div class="about-card">
      <h2 class="about-heading">
        <i class="fas fa-heart"></i><?= $texts['about']['whyUs'] ?>
      </h2>
      <p><?= $texts['about']['whyUsDesc1'] ?></p>
      <p class="about-quote"><?= $texts['about']['whyUsDesc2'] ?></p>
    </div>

    <!-- Mini Cards Group -->
    <div class="about-cards-group">
      <div class="about-mini">
        <h3><?= $texts['about']['captComp'] ?></h3>
        <p><?= $texts['about']['captCompDesc1'] ?></p>
      </div>
      <div class="about-mini">
        <h3><?= $texts['about']['specialties'] ?></h3>
        <p><?= $texts['about']['specialtiesDesc1'] ?></p>
      </div>
    </div>

    <div class="about-cards-group">
      <div class="about-mini">
        <h3><?= $texts['about']['personalExp'] ?></h3>
        <p><?= $texts['about']['personalExpDesc1'] ?></p>
      </div>
      <div class="about-mini">
        <h3><?= $texts['about']['trustnDiscretion'] ?></h3>
        <p><?= $texts['about']['trustnDiscretionDesc1'] ?></p>
      </div>
    </div>

    <!-- CTA Section -->
    <div class="about-cta">
      <p class="about-cta-text"><?= $texts['about']['readytoupgrade'] ?></p>
      <p><?= $texts['about']['readytoupgradeDesc1'] ?></p>
      <a href="https://t.me/SuperBvvip" class="about-btn book-now-btn"><?= $texts['common']['book_now'] ?></a>
    </div>
  </div>
</main>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>
