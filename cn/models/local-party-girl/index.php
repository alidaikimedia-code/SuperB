<?php

$page_key = 'localModel';
include $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>
<link rel="stylesheet" href="/assets/css/models.css">
<!-- content -->
<div class="banner-section local-models">
  <img class="banner-img-mobile" src="/wp-content/uploads/models/background/local-models-bg.webp" alt="KL Local Party Girl">
  <div class="banner-overlay">
    <h1><?= $texts['localModel']['modelsTitle'] ?></h1>
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
      <h2><?= $texts['localModel']['modelsSubTitle'] ?>
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
      <a href="<?= env('TELEGRAM_LINK') ?>?text=<?= $texts['localModel']['localFullListMsg'] ?>"><?= $texts['models']['contactFullList'] ?></a>
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
include '../../footer.php';
?>