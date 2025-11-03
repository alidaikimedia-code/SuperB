<?php
// Chinese Models Page
$page_key = 'models';
$lang = 'zh-my';

// Load config and language files
// include $_SERVER['DOCUMENT_ROOT'] . '/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>
<link rel="stylesheet" href="/assets/css/models.css">
<!-- content -->
<div class="banner-section all-models">
  <img class="banner-img-mobile" src="/wp-content/uploads/models/background/all-models-bg.webp" alt="Party Girl Models">
  <div class="banner-overlay">
    <h1><?= $texts['models']['modelsTitle'] ?></h1>
    <div class="banner-btn">
      <a href="https://t.me/superBlocalgirls" class="btn"><?= $texts['common']['telegram'] ?></a>
    </div>
    <div class="banner-btn">
      <a href="https://t.me/m/PY3Xovo4N2Vl" class="btn"><?= $texts['common']['book_now'] ?></a>
    </div>
  </div>
</div>

<main>
  <div class="contentBox">
    <div class="title">
      <h1><?= $texts['models']['modelsSubTitle'] ?>
        <i class="fas fa-angle-double-right ml-2"></i>
      </h1>
    </div>
    <button id="toggle-filter-btn" class="toggle-filter-btn" style="display: none;">
      <?= $texts['models']['showFilters'] ?>
    </button>
    <!-- FILTER BAR -->
    <div id="filter-bar" class="filter-bar"></div>

    <div id="models-list" class="row"></div>
    <div id="pagination"></div>

    <div class="cta">
      <a href="https://t.me/SuperBbaby?text=<?= $texts['models']['fullListMsg'] ?>"><?= $texts['models']['contactFullList'] ?></a>
    </div>
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
