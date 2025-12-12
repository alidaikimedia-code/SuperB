<?php
// $page_meta = [
//   'title' => $texts['chinaModel']['title'],
//   'description' => $texts['chinaModel']['description'],
//   'canonical' => $texts['chinaModel']['canonical_link'],
//   'og_title' => $texts['chinaModel']['og_title'],
//   'og_description' => $texts['chinaModel']['og_description'],
//   'lang' => $lang,
//   'custom_css' => "/assets/css/models.css"
// ];

$page_key = 'chinaModel';
include $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>
<link rel="stylesheet" href="/assets/css/models.css">
<!-- content -->
<div class="banner-section china-models">
  <img class="banner-img-mobile" src="/wp-content/uploads/models/background/china-models-bg.webp" alt="Chinese Party Girl">
  <div class="banner-overlay">
    <h1><?= $texts['chinaModel']['modelsTitle'] ?></h1>
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
      <h2><?= $texts['chinaModel']['modelsSubTitle'] ?>
        <i class="fas fa-angle-double-right ml-2"></i>
      </h2>
    </div>
    <button id="toggle-filter-btn" class="toggle-filter-btn" style="display: none;">
      <?= $texts['models']['showFilters'] ?>
    </button>
    <!-- FILTER BAR -->
    <div id ="filter-bar" class="filter-bar"></div>

    <div id="models-list" class="row"></div>
    <div id="pagination"></div>

    <div class="cta">
      <a href="<?= env('TELEGRAM_LINK') ?>?text=<?= $texts['chinaModel']['chinaFullListMsg'] ?>"><?= $texts['models']['contactFullList'] ?></a>
    </div>
  </div>
  <div class="booking-desc">
    <h2><?= $texts['chinaModel']['BookChinesepartygirlsonline'] ?></h2>
    <p><?= $texts['chinaModel']['BookChinesepartygirlsonlinedesc'] ?></p>
    <h2><?= $texts['chinaModel']['HireChinesepartygirls'] ?></h2>
    <p><?= $texts['chinaModel']['HireChinesepartygirlsDesc'] ?></p>
    <h2><?= $texts['chinaModel']['Meet Charming Chinese Party Girls for Unforgettable Nights'] ?></h2>
    <p><?= $texts['chinaModel']['MeetCharmingChinesePartyGirlsforUnforgettableNightsDesc'] ?></p>
    <h2><?= $texts['chinaModel']['Perfect Choice for Every Occasion'] ?></h2>
    <p><?= $texts['chinaModel']['PerfectChoiceforEveryOccasionDesc'] ?></p>
    <h2><?= $texts['chinaModel']['Book Today with Confidence'] ?></h2>
    <p><?= $texts['chinaModel']['BookTodaywithConfidenceDesc'] ?></p>
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
