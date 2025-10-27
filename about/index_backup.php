<?php

$page_meta = [
  'title' => $texts['about']['title'],
  'description' => $texts['about']['description'],
  'canonical' => $texts['about']['canonical_link'],
  'og_title' => $texts['about']['og_title'],
  'og_description' => $texts['about']['og_description'],
  'lang' => $lang,
  'custom_css' => "/assets/css/about.css"
];

include '../header.php';
?>
<!-- content -->
<div class="banner-section about-models">
  <img class="banner-img-mobile" src="/wp-content/uploads/about/about-models-bg.webp" alt="About Party Girl">
  <div class="banner-overlay">
    <h1><?= $texts['about']['aboutTitle'] ?></h1>
    <div class="banner-btn">
      <a href="https://t.me/superBlocalgirls" class="btn"><?= $texts['common']['telegram'] ?></a>
    </div>
    <div class="banner-btn">
      <a href="https://t.me/m/PY3Xovo4N2Vl" class="btn"><?= $texts['common']['book_now'] ?></a>
    </div>
  </div>
</div>
<main>
  <section class="about-cards">
    <div class="about-card glass">
      <h2 class="about-heading"><?= $texts['about']['ourStory'] ?></h2>
      <p>
        <?= $texts['about']['ourStoryyDesc1'] ?>
      </p>
    </div>

    <div class="about-card glass highlight-card">
      <h2 class="about-heading about-highlight"><?= $texts['about']['enterSuperb'] ?></h2>
      <p>
        <?= $texts['about']['enterSuperbDesc1'] ?>
      </p>
      <a class="about-btn" href="https://t.me/m/PY3Xovo4N2Vl"><?= $texts['about']['booksuperbPartyGirl'] ?></a>
    </div>

    <div class="about-card glass">
      <h2 class="about-heading"><?= $texts['about']['whyUs'] ?></h2>
      <p>
        <?= $texts['about']['whyUsDesc1'] ?>
      </p>
      <p class="about-quote">"<?= $texts['about']['whyUsDesc2'] ?>"</p>
    </div>

    <div class="about-cards-group">
      <div class="about-mini glass">
        <h3><?= $texts['about']['captComp'] ?></h3>
        <p>
          <?= $texts['about']['captCompDesc1'] ?>
        </p>
      </div>
      <div class="about-mini glass">
        <h3><?= $texts['about']['specialties'] ?></h3>
        <p>
          <?= $texts['about']['specialtiesDesc1'] ?>
        </p>
      </div>
      <div class="about-mini glass">
        <h3><?= $texts['about']['personalExp'] ?></h3>
        <p>
          <?= $texts['about']['personalExpDesc1'] ?>
        </p>
      </div>
      <div class="about-mini glass">
        <h3><?= $texts['about']['trustnDiscretion'] ?></h3>
        <p>
          <?= $texts['about']['trustnDiscretionDesc1'] ?>
        </p>
      </div>
    </div>
  </section>

  <section class="about-cta">
    <h2 class="about-cta-text"><?= $texts['about']['readytoupgrade'] ?></h2>
    <p><?= $texts['about']['readytoupgradeDesc1'] ?></p>
    <a class="about-btn book-now-btn" href="https://t.me/m/PY3Xovo4N2Vl"><?= $texts['common']['book_now'] ?></a>
  </section>
</main>

<?php
include '../footer.php';
?>


