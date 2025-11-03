<?php
// Chinese Contact Us Page
$page_key = 'contact';
$lang = 'zh-my';

// Load config and language files
// include $_SERVER['DOCUMENT_ROOT'] . '/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>
<link rel="stylesheet" href="/assets/css/booking.css">
<link rel="stylesheet" href="/assets/css/contact.css">
<!-- content -->
<div class="banner-section contact-models">
  <img class="banner-img-mobile" src="/wp-content/uploads/contactus/contact-models-bg.webp" alt="SuperB Party Girl Contact">
  <div class="banner-overlay">
    <h1><?= $texts['contact']['contactTitle'] ?></h1>
    <div class="banner-btn">
      <a href="<?= env('TELEGRAM_CHANNEL') ?>" class="btn"><?= $texts['common']['telegram'] ?></a>
    </div>
    <div class="banner-btn">
      <a href="<?= env('TELEGRAM_LINK') ?>" class="btn"><?= $texts['common']['book_now'] ?></a>
    </div>
  </div>
</div>

<main>
  <div class="callout-process">
    <h2><i class="fas fa-star"></i><?= $texts['contact']['contactSubTitle'] ?></h2>
    <div class="callout-intro">
      <?= $texts['contact']['calloutDesc1'] ?>
    </div>

    <!-- Contact Methods -->
    <div class="contact-row">
      <div class="contact-bubble">
        <i class="fab fa-telegram"></i>
      </div>
      <span class="contact-label"><?= $texts['contact']['prefredfastresp'] ?></span>
      <a href="<?= env('TELEGRAM_LINK') ?>" class="contact-link" target="_blank">@<?= env('TELEGRAM_USERNAME') ?></a>
      <span class="contact-tip">(推荐)</span>
    </div>

    <!-- <div class="contact-row">
      <div class="contact-bubble">
        <i class="fab fa-whatsapp"></i>
      </div>
      <span class="contact-label">WhatsApp:</span>
      <a href="https://wa.me/60123456789" class="contact-link" target="_blank">+60 12-345-6789</a>
    </div> -->

    <!-- Steps Section -->
    <div class="steps-title">
      <i class="fas fa-list-ol"></i><?= $texts['contact']['stepTitle'] ?>
    </div>

    <ol class="process-steps">
      <li>
        <span class="step-badge">1</span>
        <div>
          <b><?= $texts['contact']['step1Sub'] ?></b>
          <div class="step-desc"><?= $texts['contact']['step1Desc'] ?></div>
        </div>
      </li>
      <li>
        <span class="step-badge">2</span>
        <div>
          <b><?= $texts['contact']['step2Sub'] ?></b>
          <div class="step-desc"><?= $texts['contact']['step2Desc'] ?></div>
        </div>
      </li>
      <li>
        <span class="step-badge">3</span>
        <div>
          <b><?= $texts['contact']['step3Sub'] ?></b>
          <div class="step-desc"><?= $texts['contact']['step3Desc'] ?></div>
        </div>
      </li>
      <li>
        <span class="step-badge">4</span>
        <div>
          <b><?= $texts['contact']['step4Sub'] ?></b>
          <div class="step-desc"><?= $texts['contact']['step4Desc'] ?></div>
        </div>
      </li>
      <li>
        <span class="step-badge">5</span>
        <div>
          <b><?= $texts['contact']['step5Sub'] ?></b>
          <div class="step-desc"><?= $texts['contact']['step5Desc'] ?></div>
        </div>
      </li>
    </ol>

    <!-- Why Easy and Safe -->
    <div class="callout-safe">
      <div class="safe-title"><?= $texts['contact']['easySafe'] ?></div>
      <p><?= $texts['contact']['easySafeDesc'] ?></p>
    </div>

    <!-- Hire Today -->
    <div class="hire-today">
      <div class="hire-title"><?= $texts['contact']['hirePartyGirl'] ?></div>
      <p><?= $texts['contact']['hirePartyGirlDesc'] ?></p>
      <a href="<?= env('TELEGRAM_LINK') ?>" class="book-now-btn"><?= $texts['common']['book_now'] ?></a>
    </div>
  </div>
</main>

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
  </div>
</div>
</main>

<script>
  const i18n  = <?= json_encode($texts['booking']) ?>;
</script>

<script src="/assets/js/booking.js"></script>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>
