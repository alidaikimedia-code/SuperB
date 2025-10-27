<?php
// $page_meta = [
//   'title' => $texts['party_hosting']['title'],
//   'description' => $texts['party_hosting']['description'],
//   'canonical' => $texts['party_hosting']['canonical_link'],
//   'og_title' => $texts['party_hosting']['og_title'],
//   'og_description' => $texts['party_hosting']['og_description'],
//   'lang' => $lang,
//   'custom_css' => "/assets/css/services.css"
// ];


$page_key = 'party_hosting';
include '../../header.php';
?>
<link rel="stylesheet" href="/assets/css/services.css">
<!-- content -->
<div class="banner-section service-models">
  <!-- Mobile/tablet: <img>, Desktop: background-image -->
  <img class="banner-img-mobile" src="/wp-content/uploads/services/services-bg.webp" alt="superbpartygirl">
  <div class="banner-overlay">
    <h1><?= $texts['party_hosting']['bookingTitle'] ?></h1>
    <div class="banner-btn">
      <a href="https://t.me/SuperBvvip" class="btn"><?= $texts['common']['telegram'] ?></a>
    </div>
    <div class="banner-btn">
      <a href="https://t.me/SuperBvvip" class="btn"><?= $texts['common']['book_now'] ?></a>
    </div>
  </div>
</div>
<main>
	<div class="contentBox-card">
    <section class="service-hero">
      <h1><?= $texts['party_hosting']['bookingSubTitle'] ?></h1>
      <p class="tagline"><?= $texts['party_hosting']['bookingSubDesc1'] ?></p>
    </section>

    <section class="service-summary">
      <p>
        <?= $texts['party_hosting']['bookingSubDesc2'] ?>
      </p>
    </section>

    <section class="service-areas">
      <h2><?= $texts['party_hosting']['ourPTService'] ?></h2>
      <div class="areas-list">
        <?php
        // Get random 9 cities from all 27 cities
        $all_cities = $texts['cities'];
        $random_cities = array_rand($all_cities, 9);
        foreach($random_cities as $city_key): ?>
        <div class="area-card">
          <i class="fas fa-map-marker-alt"></i> 
          <a href="/cities/premium-escort-<?= $city_key ?>/" class="city-link"><?= $all_cities[$city_key] ?></a>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="service-hours"><i class="fas fa-clock"></i> <?= $texts['party_hosting']['serviceTime'] ?></div>
    </section>

    <section class="service-packages">
        <h2><?= $texts['party_hosting']['packageTitle'] ?></h2>
        <div class="packages-list">
          <!-- Package 1 -->
          <div class="package-block">
            <div class="package-number">01</div>
            <div class="package-card">
              <div class="package-bg-img package_01">
                <div class="package-content">
                  <div class="package-title"><?= $texts['party_hosting']['pkg1Title'] ?></div>
                  <div class="package-desc"><?= $texts['party_hosting']['pkg1Desc'] ?></div>
                  <a href="https://t.me/SuperBvvip?url=&text=Hi, I would like to book the Party Host (6 Hours) package." class="read-more-btn" target="_blank"><?= $texts['common']['book_now'] ?></a>
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
                  <div class="package-title"><?= $texts['party_hosting']['pkg2Title'] ?></div>
                  <div class="package-desc"><?= $texts['party_hosting']['pkg2Desc'] ?></div>
                  <a href="https://t.me/SuperBvvip?url=&text=Hi, I would like to book the Event Coordinator (8 Hours) package." class="read-more-btn" target="_blank"><?= $texts['common']['book_now'] ?></a>
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
                  <div class="package-title"><?= $texts['party_hosting']['pkg3Title'] ?></div>
                  <div class="package-desc"><?= $texts['party_hosting']['pkg3Desc'] ?></div>
                  <a href="https://t.me/SuperBvvip?url=&text=Hi, I would like to book the VIP Host (10 Hours) package." class="read-more-btn" target="_blank"><?= $texts['common']['book_now'] ?></a>
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
                  <div class="package-title"><?= $texts['party_hosting']['pkg4Title'] ?></div>
                  <div class="package-desc"><?= $texts['party_hosting']['pkg4Desc'] ?></div>
                  <a href="https://t.me/SuperBvvip?url=&text=Hi, I would like to book the Weekend Host (24 Hours) package." class="read-more-btn" target="_blank"><?= $texts['common']['book_now'] ?></a>
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
                    <div class="package-title"><?= $texts['party_hosting']['pkg5Title'] ?></div>
                    <div class="package-desc"><?= $texts['party_hosting']['pkg5Desc'] ?></div>
                    <a href="https://t.me/SuperBvvip?url=&text=Hi, I would like to book the Corporate Host (12 Hours) package." class="read-more-btn" target="_blank"><?= $texts['common']['book_now'] ?></a>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </section>

    <section class="service-details">
      <p>
        <?= $texts['party_hosting']['pkgExtraDesc'] ?>
      </p>
    </section>

    <section class="why-choose">
      <h2><?= $texts['party_hosting']['whyChooseUs'] ?></h2>
      <p>
        <?= $texts['party_hosting']['whyChooseUsDesc'] ?>
      </p>
    </section>

    <div class="cta">
      <a href="https://t.me/SuperBvvip" class="book-now-btn"><?= $texts['common']['book_now'] ?></a>
    </div>
  </div>
</main>
<?php
include '../../footer.php';
?>