<?php


$page_key = 'hotel';
include '../header.php';
?>
<link rel="stylesheet" href="/assets/css/promo_hotel.css">
<!-- Hotel Booking Content -->
<a class="promo-card" href="<?= env('TELEGRAM_LINK') ?>?text=<?= urlencode($texts['home']['promo1Msg']) ?>" target="_blank" aria-label="<?= $texts['home']['promo1Aria'] ?? 'SuperB Party Girl' ?>">
<div class="banner-section promo-hotel">
  <img src="/wp-content/uploads/hotel/superB_free_hotel_promo_en-my.webp" alt="Marriott Hotels" class="banner-img-mobile">
</div>
</a>


<main class="hotel-main">
  <section class="claim-section">
    <div class="hotel-container">
      <h1 class="claim-title"><?= $texts['hotel']['claimTitle'] ?></h1>
      <p class="claim-subtitle"><?= $texts['hotel']['claimSubtitle'] ?></p>
      <p class="claim-description"><?= $texts['hotel']['claimDescription'] ?></p>
    </div>
    <div class="cta-section">
      <a class="cta-button primary" href="<?= env('TELEGRAM_LINK') ?>?text=<?= urlencode($texts['home']['promo1Msg']) ?>" target="_blank" aria-label="<?= $texts['home']['promo1Aria'] ?? 'SuperB Party Girl' ?>"><i class="fab fa-telegram-plane"></i> <?= $texts['hotel']['ctaButton'] ?></a>
    </div>
  </section>
  <section class="hotels-covered">
    <div class="hotel-container">
      <h2><?= $texts['hotel']['hotelsCoveredTitle'] ?></h2>
      <p class="section-intro"><?= $texts['hotel']['hotelsCoveredIntro'] ?></p>
      
      <div class="hotels-grid">
        <div class="hotel-item"><i class="fas fa-map-marker-alt hotel-icon"></i><span>W Kuala Lumpur</span></div>
        <div class="hotel-item"><i class="fas fa-map-marker-alt hotel-icon"></i><span>The St. Regis Kuala Lumpur</span></div>
        <div class="hotel-item"><i class="fas fa-map-marker-alt hotel-icon"></i><span>The Ritz-Carlton, Kuala Lumpur</span></div>
        <div class="hotel-item"><i class="fas fa-map-marker-alt hotel-icon"></i><span>JW Marriott Kuala Lumpur</span></div>
        <div class="hotel-item"><i class="fas fa-map-marker-alt hotel-icon"></i><span>Le Méridien Kuala Lumpur</span></div>
        <div class="hotel-item"><i class="fas fa-map-marker-alt hotel-icon"></i><span>Le Méridien Petaling Jaya</span></div>
        <div class="hotel-item"><i class="fas fa-map-marker-alt hotel-icon"></i><span>Sheraton Imperial Kuala Lumpur</span></div>
        <div class="hotel-item"><i class="fas fa-map-marker-alt hotel-icon"></i><span>Sheraton Petaling Jaya</span></div>
        <div class="hotel-item"><i class="fas fa-map-marker-alt hotel-icon"></i><span>Four Points by Sheraton Kuala Lumpur, Chinatown</span></div>
        <div class="hotel-item"><i class="fas fa-map-marker-alt hotel-icon"></i><span>Four Points by Sheraton Kuala Lumpur, City Centre</span></div>
        <div class="hotel-item"><i class="fas fa-map-marker-alt hotel-icon"></i><span>Four Points by Sheraton Puchong</span></div>
        <div class="hotel-item"><i class="fas fa-map-marker-alt hotel-icon"></i><span>The Westin Kuala Lumpur</span></div>
        <div class="hotel-item"><i class="fas fa-map-marker-alt hotel-icon"></i><span>AC Hotel by Marriott Kuala Lumpur</span></div>
        <div class="hotel-item"><i class="fas fa-map-marker-alt hotel-icon"></i><span>Element Kuala Lumpur</span></div>
        <div class="hotel-item"><i class="fas fa-map-marker-alt hotel-icon"></i><span>Hotel Stripes Kuala Lumpur, Autograph Collection</span></div>
        <div class="hotel-item"><i class="fas fa-map-marker-alt hotel-icon"></i><span>The Majestic Hotel Kuala Lumpur, Autograph Collection</span></div>
        <div class="hotel-item"><i class="fas fa-map-marker-alt hotel-icon"></i><span>Renaissance Kuala Lumpur Hotel & Convention Centre</span></div>
        <div class="hotel-item"><i class="fas fa-map-marker-alt hotel-icon"></i><span>Courtyard by Marriott Kuala Lumpur South</span></div>
        <div class="hotel-item"><i class="fas fa-map-marker-alt hotel-icon"></i><span>Fairfield by Marriott Kuala Lumpur, Jalan Pahang (Chow Kit)</span></div>
        <div class="hotel-item"><i class="fas fa-map-marker-alt hotel-icon"></i><span>Moxy Putrajaya</span></div>
        <div class="hotel-item"><i class="fas fa-map-marker-alt hotel-icon"></i><span>Marriott Putrajaya</span></div>
      </div>
      
      <p class="hotels-footer"><?= $texts['hotel']['hotelsFooter'] ?></p>
    </div>
  </section>

  <section class="benefits-section">
    <div class="hotel-container">
      <div class="benefits-header">
        <h2><?= $texts['hotel']['benefitsTitle'] ?></h2>
        <p class="benefits-intro"><?= $texts['hotel']['benefitsIntro'] ?></p>
      </div>
      
      <div class="benefits-list">
        <div class="benefit-item">
          <span class="benefit-icon">✓</span>
          <div class="benefit-content">
            <strong><?= $texts['hotel']['benefit1Title'] ?></strong>
            <p><?= $texts['hotel']['benefit1Desc'] ?></p>
          </div>
        </div>
        
        <div class="benefit-item">
          <span class="benefit-icon">✓</span>
          <div class="benefit-content">
            <strong><?= $texts['hotel']['benefit2Title'] ?></strong>
          </div>
        </div>
        
        <div class="benefit-item">
          <span class="benefit-icon">✓</span>
          <div class="benefit-content">
            <strong><?= $texts['hotel']['benefit3Title'] ?></strong>
            <p><?= $texts['hotel']['benefit3Desc'] ?></p>
          </div>
        </div>
        
        <div class="benefit-item">
          <span class="benefit-icon">✓</span>
          <div class="benefit-content">
            <strong><?= $texts['hotel']['benefit4Title'] ?></strong>
            <p><?= $texts['hotel']['benefit4Desc'] ?></p>
          </div>
        </div>
        
        <div class="benefit-item">
          <span class="benefit-icon">✓</span>
          <div class="benefit-content">
            <strong><?= $texts['hotel']['benefit5Title'] ?></strong>
            <p><?= $texts['hotel']['benefit5Desc'] ?></p>
          </div>
        </div>
        
        <div class="benefit-item">
          <span class="benefit-icon">✓</span>
          <div class="benefit-content">
            <strong><?= $texts['hotel']['benefit6Title'] ?></strong>
          </div>
        </div>
        
        <div class="benefit-item">
          <span class="benefit-icon">✓</span>
          <div class="benefit-content">
            <strong><?= $texts['hotel']['benefit7Title'] ?></strong>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="occasions-section">
    <div class="hotel-container">
      <div class="occasions-header">
        <h2><?= $texts['hotel']['occasionsTitle'] ?></h2>
        <p class="occasions-intro"><?= $texts['hotel']['occasionsIntro'] ?></p>
      </div>
      
      <div class="occasions-grid">
        <div class="occasion-item">
          <i class="fas fa-heart occasion-icon"></i>
          <span><?= $texts['hotel']['occasion1'] ?></span>
        </div>
        <div class="occasion-item">
          <i class="fas fa-camera occasion-icon"></i>
          <span><?= $texts['hotel']['occasion2'] ?></span>
        </div>
        <div class="occasion-item">
          <i class="fas fa-briefcase occasion-icon"></i>
          <span><?= $texts['hotel']['occasion3'] ?></span>
        </div>
        <div class="occasion-item">
          <i class="fas fa-birthday-cake occasion-icon"></i>
          <span><?= $texts['hotel']['occasion4'] ?></span>
        </div>
      </div>
      
      <p class="occasions-footer"><?= $texts['hotel']['occasionsFooter'] ?></p>
    </div>
  </section>

  <section class="booking-section">
    <div class="hotel-container">
      <div class="booking-header">
        <h2><?= $texts['hotel']['bookingTitle'] ?></h2>
        <p class="booking-intro"><?= $texts['hotel']['bookingIntro'] ?></p>
      </div>
      
      <div class="booking-steps">
        <div class="booking-step"><?= $texts['hotel']['bookingStep1'] ?></div>
        <div class="booking-step"><?= $texts['hotel']['bookingStep2'] ?></div>
        <div class="booking-step"><?= $texts['hotel']['bookingStep3'] ?></div>
      </div>
      
      <div class="cta-section">
        <a class="cta-button primary" href="<?= env('TELEGRAM_LINK') ?>?text=<?=$texts['home']['promo1Msg']?>" target="_blank" aria-label="<?= $texts['home']['promo1Aria'] ?? 'SuperB Party Girl' ?>"><i class="fab fa-telegram-plane"></i> <?= $texts['hotel']['ctaButton'] ?></a>
      </div>
    </div>
  </section>
</main>
<script>
  const i18nModels = <?= json_encode($texts['models']) ?>;
  const i18nCommon = <?= json_encode($texts['common']) ?>;
</script>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>

