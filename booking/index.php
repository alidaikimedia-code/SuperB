
<?php

$page_key = 'booking';
include '../header.php';
?>
<link rel="stylesheet" href="/assets/css/booking.css">
<!-- content -->
<div class="banner-section booking-models">
  <img class="banner-img-mobile" src="/wp-content/uploads/booking/booking-models-bg.webp" alt="superbpartygirl">
  <div class="banner-overlay">
    <h1><?= $texts['booking']['bookingTitle'] ?></h1>
    <div class="banner-btn">
      <a href="<?= env('TELEGRAM_CHANNEL') ?>" class="btn"><?= $texts['common']['telegram'] ?></a>
    </div>
    <div class="banner-btn">
      <a href="<?= env('TELEGRAM_LINK') ?>" class="btn"><?= $texts['common']['book_now'] ?></a>
    </div>
  </div>
</div>
<main>
<div class="booking-container">
  <form class="booking-form" id="bookingForm">
    <h2><?= $texts['booking']['bookingSubTitle'] ?></h2>
    <div class="form-group">
      <label><?= $texts['booking']['nationality'] ?></label>
      <div class="btn-row" id="nationalityRow"></div>
    </div>
    <div class="form-group">
      <label><?= $texts['booking']['location'] ?></label>
      <div class="btn-row" id="locationRow"></div>
    </div>
    <div class="form-group">
      <label><?= $texts['booking']['cup'] ?></label>
      <div class="btn-row" id="cupRow"></div>
    </div>
    <div class="form-group">
      <label><?= $texts['booking']['age'] ?></label>
      <div class="btn-row" id="ageRow"></div>
    </div>
    <div class="form-group">
      <label><?= $texts['booking']['drinkLvl'] ?></label>
      <div class="btn-row" id="drinkRow"></div>
    </div>
    <div class="form-group">
      <label><?= $texts['booking']['personality'] ?></label>
      <div class="btn-row" id="personalityRow"></div>
    </div>
    <div class="form-group">
      <label><?= $texts['booking']['package'] ?></label>
      <div class="btn-row" id="packageRow"></div>
    </div>
    <div class="preview-row" id="previewRow"></div>
    <div class="form-group">
      <label><?= $texts['booking']['more'] ?></label>
      <input type="text" id="moreInput" placeholder="<?= $texts['booking']['placeholder'] ?>">
    </div>

    <div class="submit-row">
      <button class="reset-btn" type="button" id="resetBtn"><?= $texts['booking']['reset'] ?></button>
      <button class="book-btn" id="submitBtn" type="submit"><?= $texts['common']['book_now'] ?></button>
    </div>
  </form>
  <div class="booking-desc">
    <h2><?= $texts['booking']['Kuala Lumpur party girl booking '] ?></h2>
    <p><?= $texts['booking']['Kuala Lumpur party girl booking Desc'] ?></p>
    <h2><?= $texts['booking']['BookYourPerfectPartyExperienceToday'] ?></h2>
    <p><?= $texts['booking']['BookYourPerfectPartyExperienceTodayDesc'] ?></p>
    <h2><?= $texts['booking']['Trusted Nightclub Girl Booking Service'] ?></h2>
    <p><?= $texts['booking']['TrustedNightclubGirlBookingServiceDesc'] ?></p>
  </div>
</div>
</main>

<script>
  const i18n  = <?= json_encode($texts['booking']) ?>;
</script>

<script src="/assets/js/booking.js"></script>

<?php
include '../footer.php';
?>


