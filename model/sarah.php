<?php
// Sample Model Page - Sarah
$page_key = 'singleModel';
$lang = 'en-my';

// Load config and language files
include $_SERVER['DOCUMENT_ROOT'] . '/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/header.php';

// Model data
$model_id = 'sarah';
$model_name = 'Sarah';
$model_age = '25';
$model_height = '165cm';
$model_weight = '50kg';
$model_nationality = 'Malaysian';
$model_languages = 'English, Malay, Mandarin';
?>

<link rel="stylesheet" href="/assets/css/models.css">
<link rel="stylesheet" href="/assets/css/single-model.css">

<!-- Model Profile Banner -->
<div class="banner-section single-model-banner">
  <div class="model-hero-image">
    <img src="/wp-content/uploads/models/single/sarah.webp" alt="<?= $model_name ?>" class="model-main-image">
  </div>
  <div class="banner-overlay">
    <h1><?= $model_name ?></h1>
    <div class="model-basic-info">
      <span class="model-age"><?= $model_age ?></span>
      <span class="model-height"><?= $model_height ?></span>
      <span class="model-nationality"><?= $model_nationality ?></span>
    </div>
    <div class="banner-btn">
      <a href="https://t.me/superBlocalgirls" class="btn"><?= $texts['singleModel']['bookNow'] ?></a>
    </div>
  </div>
</div>

<main>
  <div class="contentBox">
    
    <!-- Model Profile Section -->
    <section class="model-profile-section">
      <div class="row">
        <div class="col-md-8">
          <div class="model-details">
            <h2><?= $texts['singleModel']['modelProfile'] ?></h2>
            
            <div class="model-info-grid">
              <div class="info-item">
                <label><?= $texts['singleModel']['modelName'] ?>:</label>
                <span><?= $model_name ?></span>
              </div>
              <div class="info-item">
                <label><?= $texts['singleModel']['modelAge'] ?>:</label>
                <span><?= $model_age ?> years</span>
              </div>
              <div class="info-item">
                <label><?= $texts['singleModel']['modelHeight'] ?>:</label>
                <span><?= $model_height ?></span>
              </div>
              <div class="info-item">
                <label><?= $texts['singleModel']['modelWeight'] ?>:</label>
                <span><?= $model_weight ?></span>
              </div>
              <div class="info-item">
                <label><?= $texts['singleModel']['modelNationality'] ?>:</label>
                <span><?= $model_nationality ?></span>
              </div>
              <div class="info-item">
                <label><?= $texts['singleModel']['modelLanguages'] ?>:</label>
                <span><?= $model_languages ?></span>
              </div>
            </div>

            <div class="model-services">
              <h3><?= $texts['singleModel']['modelServices'] ?></h3>
              <div class="services-list">
                <span class="service-tag"><?= $texts['singleModel']['service1'] ?></span>
                <span class="service-tag"><?= $texts['singleModel']['service2'] ?></span>
                <span class="service-tag"><?= $texts['singleModel']['service3'] ?></span>
                <span class="service-tag"><?= $texts['singleModel']['service4'] ?></span>
                <span class="service-tag"><?= $texts['singleModel']['service5'] ?></span>
                <span class="service-tag"><?= $texts['singleModel']['service6'] ?></span>
              </div>
            </div>

            <div class="model-availability">
              <h3><?= $texts['singleModel']['modelAvailability'] ?></h3>
              <p>Available 24/7 for bookings. Advance notice preferred for best experience.</p>
            </div>

            <div class="model-rate">
              <h3><?= $texts['singleModel']['modelRate'] ?></h3>
              <p>Contact for current rates and packages</p>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="model-contact-card">
            <h3><?= $texts['singleModel']['contactTitle'] ?></h3>
            <p><?= $texts['singleModel']['contactDesc'] ?></p>
            
            <div class="contact-buttons">
              <a href="https://t.me/superBlocalgirls" class="btn btn-primary">
                <i class="fab fa-telegram"></i> <?= $texts['singleModel']['telegramContact'] ?>
              </a>
              <a href="https://wa.me/60123456789" class="btn btn-success">
                <i class="fab fa-whatsapp"></i> <?= $texts['singleModel']['whatsappContact'] ?>
              </a>
              <a href="tel:+60123456789" class="btn btn-info">
                <i class="fas fa-phone"></i> <?= $texts['singleModel']['phoneContact'] ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Hotel Booking Section -->
    <section class="hotel-booking-section">
      <div class="hotel-booking-header">
        <h2><?= $texts['singleModel']['hotelBookingTitle'] ?></h2>
        <h3><?= $texts['singleModel']['hotelBookingSubtitle'] ?></h3>
        <p><?= $texts['singleModel']['hotelBookingDesc'] ?></p>
      </div>

      <div class="hotel-claim-section">
        <div class="claim-content">
          <h2><?= $texts['singleModel']['claimTitle'] ?></h2>
          <h3><?= $texts['singleModel']['claimSubtitle'] ?></h3>
          <p><?= $texts['singleModel']['claimDescription'] ?></p>
          <a href="https://t.me/superBlocalgirls" class="btn btn-large"><?= $texts['singleModel']['ctaButton'] ?></a>
        </div>
      </div>

      <div class="hotels-covered">
        <h3><?= $texts['singleModel']['hotelsCoveredTitle'] ?></h3>
        <p><?= $texts['singleModel']['hotelsCoveredIntro'] ?></p>
        
        <div class="hotel-list">
          <div class="hotel-item">JW Marriott Kuala Lumpur</div>
          <div class="hotel-item">The Westin Kuala Lumpur</div>
          <div class="hotel-item">Le Méridien Kuala Lumpur</div>
          <div class="hotel-item">Courtyard by Marriott Kuala Lumpur</div>
          <div class="hotel-item">Four Points by Sheraton Kuala Lumpur</div>
          <div class="hotel-item">Aloft Kuala Lumpur Sentral</div>
        </div>
        
        <p class="hotels-footer"><?= $texts['singleModel']['hotelsFooter'] ?></p>
      </div>

      <div class="benefits-section">
        <h3><?= $texts['singleModel']['benefitsTitle'] ?></h3>
        <p><?= $texts['singleModel']['benefitsIntro'] ?></p>
        
        <div class="benefits-grid">
          <div class="benefit-item">
            <h4><?= $texts['singleModel']['benefit1Title'] ?></h4>
            <p><?= $texts['singleModel']['benefit1Desc'] ?></p>
          </div>
          <div class="benefit-item">
            <h4><?= $texts['singleModel']['benefit2Title'] ?></h4>
          </div>
          <div class="benefit-item">
            <h4><?= $texts['singleModel']['benefit3Title'] ?></h4>
            <p><?= $texts['singleModel']['benefit3Desc'] ?></p>
          </div>
          <div class="benefit-item">
            <h4><?= $texts['singleModel']['benefit4Title'] ?></h4>
            <p><?= $texts['singleModel']['benefit4Desc'] ?></p>
          </div>
          <div class="benefit-item">
            <h4><?= $texts['singleModel']['benefit5Title'] ?></h4>
            <p><?= $texts['singleModel']['benefit5Desc'] ?></p>
          </div>
          <div class="benefit-item">
            <h4><?= $texts['singleModel']['benefit6Title'] ?></h4>
          </div>
          <div class="benefit-item">
            <h4><?= $texts['singleModel']['benefit7Title'] ?></h4>
          </div>
        </div>
      </div>

      <div class="occasions-section">
        <h3><?= $texts['singleModel']['occasionsTitle'] ?></h3>
        <p><?= $texts['singleModel']['occasionsIntro'] ?></p>
        
        <div class="occasions-list">
          <div class="occasion-item"><?= $texts['singleModel']['occasion1'] ?></div>
          <div class="occasion-item"><?= $texts['singleModel']['occasion2'] ?></div>
          <div class="occasion-item"><?= $texts['singleModel']['occasion3'] ?></div>
          <div class="occasion-item"><?= $texts['singleModel']['occasion4'] ?></div>
        </div>
        
        <p><?= $texts['singleModel']['occasionsFooter'] ?></p>
      </div>

      <div class="booking-steps">
        <h3><?= $texts['singleModel']['bookingTitle'] ?></h3>
        <p><?= $texts['singleModel']['bookingIntro'] ?></p>
        
        <div class="steps-list">
          <div class="step-item">
            <span class="step-number">1</span>
            <span class="step-text"><?= $texts['singleModel']['bookingStep1'] ?></span>
          </div>
          <div class="step-item">
            <span class="step-number">2</span>
            <span class="step-text"><?= $texts['singleModel']['bookingStep2'] ?></span>
          </div>
          <div class="step-item">
            <span class="step-number">3</span>
            <span class="step-text"><?= $texts['singleModel']['bookingStep3'] ?></span>
          </div>
        </div>
      </div>
    </section>

    <!-- Additional Services Section -->
    <section class="additional-services-section">
      <h2><?= $texts['singleModel']['additionalServices'] ?></h2>
      <div class="services-grid">
        <div class="service-card">
          <i class="fas fa-plane"></i>
          <h4><?= $texts['singleModel']['service1'] ?></h4>
        </div>
        <div class="service-card">
          <i class="fas fa-utensils"></i>
          <h4><?= $texts['singleModel']['service2'] ?></h4>
        </div>
        <div class="service-card">
          <i class="fas fa-calendar-alt"></i>
          <h4><?= $texts['singleModel']['service3'] ?></h4>
        </div>
        <div class="service-card">
          <i class="fas fa-moon"></i>
          <h4><?= $texts['singleModel']['service4'] ?></h4>
        </div>
        <div class="service-card">
          <i class="fas fa-map-marked-alt"></i>
          <h4><?= $texts['singleModel']['service5'] ?></h4>
        </div>
        <div class="service-card">
          <i class="fas fa-shopping-bag"></i>
          <h4><?= $texts['singleModel']['service6'] ?></h4>
        </div>
      </div>
    </section>

  </div>
</main>

<style>
/* Single Model Page Styles */
.single-model-banner {
  position: relative;
  height: 60vh;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}

.model-hero-image {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
}

.model-main-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  opacity: 0.3;
}

.banner-overlay {
  position: relative;
  z-index: 2;
  text-align: center;
  color: white;
}

.model-basic-info {
  margin: 20px 0;
}

.model-basic-info span {
  background: rgba(255,255,255,0.2);
  padding: 8px 16px;
  margin: 0 10px;
  border-radius: 20px;
  font-size: 14px;
}

.model-profile-section {
  padding: 60px 0;
}

.model-info-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
  margin: 30px 0;
}

.info-item {
  display: flex;
  justify-content: space-between;
  padding: 15px;
  background: #f8f9fa;
  border-radius: 8px;
}

.info-item label {
  font-weight: bold;
  color: #333;
}

.services-list {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  margin: 20px 0;
}

.service-tag {
  background: #007bff;
  color: white;
  padding: 8px 16px;
  border-radius: 20px;
  font-size: 14px;
}

.model-contact-card {
  background: #f8f9fa;
  padding: 30px;
  border-radius: 12px;
  text-align: center;
  position: sticky;
  top: 20px;
}

.contact-buttons {
  display: flex;
  flex-direction: column;
  gap: 15px;
  margin-top: 20px;
}

.contact-buttons .btn {
  padding: 12px 20px;
  border-radius: 8px;
  text-decoration: none;
  font-weight: bold;
  transition: all 0.3s ease;
}

.btn-primary {
  background: #007bff;
  color: white;
}

.btn-success {
  background: #28a745;
  color: white;
}

.btn-info {
  background: #17a2b8;
  color: white;
}

.hotel-booking-section {
  background: #f8f9fa;
  padding: 60px 0;
  margin: 40px 0;
}

.hotel-booking-header {
  text-align: center;
  margin-bottom: 40px;
}

.hotel-claim-section {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
  padding: 40px;
  border-radius: 12px;
  text-align: center;
  margin: 30px 0;
}

.btn-large {
  padding: 15px 30px;
  font-size: 18px;
  background: white;
  color: #667eea;
  border-radius: 8px;
  text-decoration: none;
  font-weight: bold;
  margin-top: 20px;
  display: inline-block;
}

.hotel-list {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 15px;
  margin: 20px 0;
}

.hotel-item {
  background: white;
  padding: 15px;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.benefits-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 20px;
  margin: 30px 0;
}

.benefit-item {
  background: white;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.occasions-list {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 15px;
  margin: 20px 0;
}

.occasion-item {
  background: white;
  padding: 15px;
  border-radius: 8px;
  text-align: center;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.steps-list {
  display: flex;
  justify-content: space-around;
  margin: 30px 0;
}

.step-item {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
}

.step-number {
  background: #007bff;
  color: white;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bold;
  margin-bottom: 10px;
}

.services-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 20px;
  margin: 30px 0;
}

.service-card {
  background: white;
  padding: 30px;
  border-radius: 12px;
  text-align: center;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  transition: transform 0.3s ease;
}

.service-card:hover {
  transform: translateY(-5px);
}

.service-card i {
  font-size: 2em;
  color: #007bff;
  margin-bottom: 15px;
}

@media (max-width: 768px) {
  .single-model-banner {
    height: 40vh;
  }
  
  .model-info-grid {
    grid-template-columns: 1fr;
  }
  
  .steps-list {
    flex-direction: column;
    gap: 20px;
  }
  
  .contact-buttons {
    flex-direction: column;
  }
}
</style>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>
