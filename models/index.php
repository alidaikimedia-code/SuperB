<?php
$page_key = 'models';
include $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>
<link rel="stylesheet" href="/assets/css/models.css">
<!-- content -->
<div class="banner-section all-models">
  <img class="banner-img-mobile" src="/wp-content/uploads/models/background/all-models-bg.webp" alt="Party Girl Models">
  <div class="banner-overlay">
    <h1><?= $texts['models']['modelsTitle'] ?></h1>
    <div class="banner-btn">
      <a href="<?= env('TELEGRAM_CHANNEL') ?>" class="btn"><?= $texts['common']['telegram'] ?></a>
    </div>
    <div class="banner-btn">
      <a href="<?= env('TELEGRAM_LINK') ?>" class="btn"><?= $texts['common']['book_now'] ?></a>
    </div>
  </div>
</div>

<main>
  <div class="contentBox">
    <div class="title">
      <h2><?= $texts['models']['modelsSubTitle'] ?>
        <i class="fas fa-angle-double-right ml-2"></i>
      </h2>
    </div>
    <button id="toggle-filter-btn" class="toggle-filter-btn" style="display: none;">
      <?= $texts['models']['showFilters'] ?>
    </button>
    <!-- FILTER BAR -->
    <div id="filter-bar" class="filter-bar"></div>

    <div id="models-list" class="row"></div>
    <div id="pagination"></div>

    <div class="cta">
      <a href="<?= env('TELEGRAM_LINK') ?>?text=<?= $texts['models']['fullListMsg'] ?>"><?= $texts['models']['contactFullList'] ?></a>
    </div>
  </div>
  <div class="booking-desc">
    <h2><?= $texts['models']['Malaysiaovernightmodelescort'] ?></h2>
    <p><?= $texts['models']['Malaysiaovernightmodelescortdesc'] ?></p>
  </div>
  <div class="booking-desc">
    <h2><?= $texts['models']['ExperiencetheBestwithSuperbPartyGirl'] ?></h2>
    <p><?= $texts['models']['ExperiencetheBestwithSuperbPartyGirlDesc'] ?></p>
  </div>

  <div class="booking-desc">
    <h2><?= $texts['models']['Malaysiamodelescorts'] ?></h2>
    <p><?= $texts['models']['Malaysiamodelescortsdesc'] ?></p>
    <h2><?= $texts['models']['Elite Companionship That Feels Effortless'] ?></h2>
    <p><?= $texts['models']['EliteCompanionshipThatFeelsEffortlessDesc'] ?></p>
    <h2><?= $texts['models']['Enjoy Memorable Dark and Overnight Visits'] ?></h2>
    <p><?= $texts['models']['EnjoyMemorableDarkandOvernightVisitsDesc'] ?></p>
    <h2><?= $texts['models']['Your Trusted Escort Experience'] ?></h2>
    <p><?= $texts['models']['YourTrustedEscortExperienceDesc'] ?></p>
  </div>
</main>
<script>
  const i18nModels = <?= json_encode($texts['models']) ?>;
  const i18nCommon = <?= json_encode($texts['common']) ?>;
</script>

<script src="/assets/js/models.js"></script>
<script src="/assets/js/model_filter.js"></script>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>