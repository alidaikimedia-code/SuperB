<?php

$page_key = 'service';
include '../header.php';
?>
<link rel="stylesheet" href="/assets/css/services.css">
<!-- content -->
<div class="banner-section service-models">
  <!-- Mobile/tablet: <img>, Desktop: background-image -->
  <img class="banner-img-mobile" src="/wp-content/uploads/services/services-bg.webp" alt="superbpartygirl">
  <div class="banner-overlay">
    <h1><?= $texts['service']['bookingTitle'] ?></h1>
    <div class="banner-btn">
      <a href="<?= env('TELEGRAM_CHANNEL') ?>" class="btn"><?= $texts['common']['telegram'] ?></a>
    </div>
    <div class="banner-btn">
      <a href="<?= env('TELEGRAM_LINK') ?>" class="btn"><?= $texts['common']['book_now'] ?></a>
    </div>
  </div>
</div>
<main>
	<div class="contentBox-card">
    <section class="service-hero">
      <h2><?= $texts['service']['bookingSubTitle'] ?></h2>
      <p class="tagline"><?= $texts['service']['bookingSubDesc1'] ?></p>
    </section>

    <section class="service-summary">
      <p>
        <?= $texts['service']['bookingSubDesc2'] ?>
      </p>
    </section>

    <section class="service-areas">
      <h2><?= $texts['service']['ourPTService'] ?></h2>
      <div class="areas-list">
        <!-- All 27 Cities from language file -->
        <?php foreach($texts['cities'] as $city_key => $city_name): ?>
        <div class="area-card">
          <i class="fas fa-map-marker-alt"></i> 
          <a href="/cities/premium-escort-<?= $city_key ?>/" class="city-link"><?= $city_name ?></a>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="service-hours"><i class="fas fa-clock"></i> <?= $texts['service']['serviceTime'] ?></div>
    </section>

    <section class="service-packages">
        <h2><?= $texts['service']['packageTitle'] ?></h2>
        <div class="packages-list">
          <!-- Package 1 -->
          <div class="package-block">
            <div class="package-number">01</div>
            <div class="package-card">
              <div class="package-bg-img package_01">
                <div class="package-content">
                  <div class="package-title"><?= $texts['service']['pkg1Title'] ?></div>
                  <div class="package-desc"><?= $texts['service']['pkg1Desc'] ?></div>
                  <a href="<?= env('TELEGRAM_LINK') ?>?url=&text=<?= $texts['service']['pkg1Msg']?>" class="read-more-btn" target="_blank"><?= $texts['common']['book_now'] ?></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Package 2 -->
          <div class="package-block">
            <div class="package-number">02</div>
            <div class="package-card">
              <div class="package-bg-img package_02">
                <div class="package-content">
                  <div class="package-title"><?= $texts['service']['pkg2Title'] ?></div>
                  <div class="package-desc"><?= $texts['service']['pkg2Desc'] ?></div>
                  <a href="<?= env('TELEGRAM_LINK') ?>?url=&text=<?= $texts['service']['pkg2Msg']?>" class="read-more-btn" target="_blank"><?= $texts['common']['book_now'] ?></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Package 3 -->
          <div class="package-block">
            <div class="package-number">03</div>
            <div class="package-card">
              <div class="package-bg-img package_03">
                <div class="package-content">
                  <div class="package-title"><?= $texts['service']['pkg3Title'] ?></div>
                  <div class="package-desc"><?= $texts['service']['pkg3Desc'] ?></div>
                  <a href="<?= env('TELEGRAM_LINK') ?>?url=&text=<?= $texts['service']['pkg3Msg']?>" class="read-more-btn" target="_blank"><?= $texts['common']['book_now'] ?></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Package 4 -->
          <div class="package-block">
            <div class="package-number">04</div>
            <div class="package-card">
              <div class="package-bg-img package_04">
                <div class="package-content">
                  <div class="package-title"><?= $texts['service']['pkg4Title'] ?></div>
                  <div class="package-desc"><?= $texts['service']['pkg4Desc'] ?></div>
                  <a href="<?= env('TELEGRAM_LINK') ?>?url=&text=<?= $texts['service']['pkg4Msg']?>" class="read-more-btn" target="_blank"><?= $texts['common']['book_now'] ?></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Package 5 -->
          <div class="package-block">
            <div class="package-number">05</div>
              <div class="package-card">
                <div class="package-bg-img package_05">
                  <div class="package-content">
                    <div class="package-title"><?= $texts['service']['pkg5Title'] ?></div>
                    <div class="package-desc"><?= $texts['service']['pkg5Desc'] ?></div>
                    <a href="<?= env('TELEGRAM_LINK') ?>?url=&text=<?= $texts['service']['pkg5Msg']?>" class="read-more-btn" target="_blank"><?= $texts['common']['book_now'] ?></a>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </section>

    <section class="service-details">
      <p>
        <?= $texts['service']['pkgExtraDesc'] ?>
      </p>
    </section>

    <section class="why-choose">
    <h2><?= $texts['service']['Privatepartyescortservice'] ?></h2>
      <p>
        <?= $texts['service']['Privatepartyescortservicedesc'] ?>
      </p>
      <h2><?= $texts['service']['whyChooseUs'] ?></h2>
      <p>
        <?= $texts['service']['whyChooseUsDesc'] ?>
      </p>
      
    </section>

    <div class="cta">
      <a href="<?= env('TELEGRAM_LINK') ?>" class="book-now-btn"><?= $texts['common']['book_now'] ?></a>
    </div>
  </div>
</main>
<?php
include '../footer.php';
?>
