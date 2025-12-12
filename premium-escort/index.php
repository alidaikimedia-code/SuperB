<?php
$page_key = 'premium-escort';
include $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>
<style>
        /* .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        } */

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 100px 20px 60px;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600"><rect fill="%23000" width="1200" height="600"/></svg>') center/cover;
            opacity: 0.3;
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            color: white;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            background: linear-gradient(45deg, #ff2491, #ff6b9d, #ff8fc6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 4px 8px rgba(0,0,0,0.3);
        }

        .hero-content h1 .highlight {
            color: #ff2491;
        }

        /* Pink Banner Section */
        .pink-banner {
            background: linear-gradient(135deg, #ff2491 0%, #ff6b9d 100%);
            padding: 80px 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .pink-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
            animation: shimmer 3s infinite;
        }

        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        .pink-banner h2 {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: white;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }

        .pink-banner .subtitle {
            font-size: 1.3rem;
            margin-bottom: 25px;
            color: rgba(255,255,255,0.95);
            font-weight: 500;
        }

        .pink-banner .description {
            max-width: 800px;
            margin: 0 auto 40px;
            font-size: 1.1rem;
            line-height: 1.8;
            color: rgba(255,255,255,0.9);
        }

        .cta-button {
            background: white;
            color: #ff2491;
            border: none;
            padding: 18px 40px;
            font-size: 1.1rem;
            font-weight: 700;
            border-radius: 50px;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 8px 25px rgba(255, 36, 145, 0.4);
            position: relative;
            overflow: hidden;
            text-decoration: none;
        }

        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,36,145,0.2), transparent);
            transition: left 0.5s ease;
        }

        .cta-button:hover::before {
            left: 100%;
        }

        .cta-button:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 15px 35px rgba(255, 36, 145, 0.6);
        }

        
        /* Hotels Section */
        .hotels-section {
            background: #0a0a0a;
            padding: 80px 20px;
        }

        .hotels-section h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #ff2491;
            font-weight: 700;
        }

        .hotels-section .intro {
            text-align: center;
            margin-bottom: 50px;
            color: #b0b0b0;
            font-size: 1.2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .hotels-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .hotel-card {
            background: linear-gradient(135deg, #1a1a1a 0%, #2a2a2a 100%);
            padding: 25px 20px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            gap: 15px;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid #2a2a2a;
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
            position: relative;
            overflow: hidden;
        }

        .hotel-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent, rgba(255, 36, 145, 0.1), transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 1;
        }

        .hotel-card:hover::before {
            opacity: 1;
        }

        .hotel-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(255, 36, 145, 0.3);
            border-color: #ff2491;
        }

       

        .hotel-card i {
            color: #ff2491;
            font-size: 1.2rem;
            margin-right: 10px;
            z-index: 2;
            position: relative;
        }

        .hotel-card span {
            font-size: 1rem;
            font-weight: 600;
            color: white;
            z-index: 2;
            position: relative;
        }

        .hotels-footer {
            text-align: center;
            font-style: italic;
            color: #ff2491;
            font-size: 1.1rem;
            margin-top: 30px;
            font-weight: 500;
        }

        /* Benefits Section */
        .benefits-section {
            background: #1a1a1a;
            padding: 80px 20px;
        }

        .benefits-section h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #ff2491;
            font-weight: 700;
        }

        .benefits-section .intro {
            text-align: center;
            color: #b0b0b0;
            margin-bottom: 50px;
            font-size: 1.2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .benefits-list {
            max-width: 1000px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .benefit-item {
            background: linear-gradient(135deg, #23242a 0%, #1a1a1a 100%);
            border: 1px solid #2a2a2a;
            border-radius: 15px;
            padding: 25px;
            display: flex;
            gap: 20px;
            align-items: flex-start;
            transition: all 0.3s ease;
            box-shadow: 0 4px 20px rgba(0,0,0,0.3);
        }

        .benefit-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(255, 36, 145, 0.2);
            border-color: #ff2491;
        }

        .benefit-check {
            background: linear-gradient(135deg, #ff2491 0%, #ff6b9d 100%);
            color: white;
            min-width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
            font-size: 1.3rem;
            box-shadow: 0 4px 15px rgba(255, 36, 145, 0.4);
        }

        .benefit-content h3 {
            color: #ff2491;
            font-size: 1.2rem;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .benefit-content p {
            color: #b0b0b0;
            font-size: 1rem;
            line-height: 1.6;
        }

        /* Occasions Section */
        .occasions-section {
            background: #0a0a0a;
            padding: 80px 20px;
            text-align: center;
        }

        .occasions-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #ff2491;
            font-weight: 700;
        }

        .occasions-section .intro {
            color: #b0b0b0;
            margin-bottom: 50px;
            font-size: 1.2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .occasions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 25px;
            max-width: 900px;
            margin: 0 auto 40px;
        }

        .occasion-card {
            background: linear-gradient(135deg, #1a1a1a 0%, #2a2a2a 100%);
            padding: 40px 25px;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid #2a2a2a;
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
            position: relative;
            overflow: hidden;
        }

        .occasion-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(255, 36, 145, 0.1), rgba(255, 107, 157, 0.1));
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .occasion-card:hover::before {
            opacity: 1;
        }

        .occasion-card:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 20px 40px rgba(255, 36, 145, 0.3);
            border-color: #ff2491;
        }

        .occasion-icon {
            font-size: 3rem;
            margin-bottom: 15px;
            color: #ff2491;
            position: relative;
            z-index: 2;
        }

        .occasion-card h3 {
            font-size: 1.1rem;
            font-weight: 700;
            line-height: 1.4;
            color: white;
            position: relative;
            z-index: 2;
        }

        .occasions-footer {
            color: #b0b0b0;
            font-size: 1.1rem;
            font-weight: 500;
        }

        /* Booking Section */
        .booking-section {
            background: linear-gradient(135deg, #ff2491 0%, #ff6b9d 100%);
            padding: 80px 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .booking-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
            animation: shimmer 3s infinite;
        }

        .booking-section h2 {
            font-size: 2.8rem;
            margin-bottom: 20px;
            color: white;
            font-weight: 700;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }

        .booking-section .intro {
            margin-bottom: 40px;
            font-size: 1.2rem;
            color: rgba(255,255,255,0.9);
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .booking-steps {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-bottom: 45px;
        }

        .step-button {
            background: rgba(255,255,255,0.2);
            border: 2px solid rgba(255,255,255,0.8);
            color: white;
            padding: 15px 30px;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            backdrop-filter: blur(10px);
        }

        .step-button:hover {
            background: white;
            color: #ff2491;
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 10px 25px rgba(255,255,255,0.3);
        }

        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }
            
            .pink-banner h2, .booking-section h2 {
                font-size: 2.2rem;
            }
            
            .hotels-grid {
                grid-template-columns: 1fr;
            }
            
            .occasions-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .benefits-section h2, .occasions-section h2, .hotels-section h2 {
                font-size: 2rem;
            }

            .booking-steps {
                flex-direction: column;
                align-items: center;
            }

            .step-button {
                width: 85%;
                max-width: 300px;
            }
        }

        @media (max-width: 480px) {
            .hero-content h1 {
                font-size: 2rem;
            }
            
            .pink-banner h2, .booking-section h2 {
                font-size: 1.8rem;
            }

            .occasions-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <!-- Pink Banner -->
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
          <a href="/premium-escort-<?= $city_key ?>/" class="city-link"><?= $city_name ?></a>
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

    <!-- Hotels Section -->
    <section class="hotels-section">
        <div class="container">
            <h2><?= $texts['hotel']['hotelsCoveredTitle'] ?></h2>
            <p class="intro"><?= $texts['hotel']['hotelsCoveredIntro'] ?></p>
            
            <div class="hotels-grid">
                <div class="hotel-card"><i class="fa-solid fa-location-dot"></i><span>W Kuala Lumpur</span></div>
                <div class="hotel-card"><i class="fa-solid fa-location-dot"></i><span>The St. Regis Kuala Lumpur</span></div>
                <div class="hotel-card"><i class="fa-solid fa-location-dot"></i><span>The Ritz-Carlton, Kuala Lumpur</span></div>
                <div class="hotel-card"><i class="fa-solid fa-location-dot"></i><span>JW Marriott Kuala Lumpur</span></div>
                <div class="hotel-card"><i class="fa-solid fa-location-dot"></i><span>Le Méridien Kuala Lumpur</span></div>
                <div class="hotel-card"><i class="fa-solid fa-location-dot"></i><span>Le Méridien Petaling Jaya</span></div>
                <div class="hotel-card"><i class="fa-solid fa-location-dot"></i><span>Sheraton Imperial Kuala Lumpur</span></div>
                <div class="hotel-card"><i class="fa-solid fa-location-dot"></i><span>Sheraton Petaling Jaya</span></div>
                <div class="hotel-card"><i class="fa-solid fa-location-dot"></i><span>Four Points by Sheraton Kuala Lumpur, Chinatown</span></div>
                <div class="hotel-card"><i class="fa-solid fa-location-dot"></i><span>Four Points by Sheraton Puchong</span></div>
                <div class="hotel-card"><i class="fa-solid fa-location-dot"></i><span>The Westin Kuala Lumpur</span></div>
                <div class="hotel-card"><i class="fa-solid fa-location-dot"></i><span>AC Hotel by Marriott Kuala Lumpur</span></div>
                <div class="hotel-card"><i class="fa-solid fa-location-dot"></i><span>Element Kuala Lumpur</span></div>
                <div class="hotel-card"><i class="fa-solid fa-location-dot"></i><span>Hotel Stripes Kuala Lumpur, Autograph Collection</span></div>
                <div class="hotel-card"><i class="fa-solid fa-location-dot"></i><span>The Majestic Hotel Kuala Lumpur, Autograph Collection</span></div>
                <div class="hotel-card"><i class="fa-solid fa-location-dot"></i><span>Renaissance Kuala Lumpur Hotel & Convention Centre</span></div>
                <div class="hotel-card"><i class="fa-solid fa-location-dot"></i><span>Courtyard by Marriott Kuala Lumpur South</span></div>
                <div class="hotel-card"><i class="fa-solid fa-location-dot"></i><span>Moxy Putrajaya</span></div>
                <div class="hotel-card"><i class="fa-solid fa-location-dot"></i><span>Marriott Putrajaya</span></div>
            </div>
            
            <p class="hotels-footer"><?= $texts['hotel']['hotelsFooter'] ?></p>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits-section">
        <div class="container">
            <h2><?= $texts['hotel']['benefitsTitle'] ?></h2>
            <p class="intro"><?= $texts['hotel']['benefitsIntro'] ?></p>
            
            <div class="benefits-list">
                <div class="benefit-item">
                    <div class="benefit-check">✓</div>
                    <div class="benefit-content">
                        <h3><?= $texts['hotel']['benefit1Title'] ?></h3>
                        <p><?= $texts['hotel']['benefit1Desc'] ?></p>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-check">✓</div>
                    <div class="benefit-content">
                        <h3><?= $texts['hotel']['benefit2Title'] ?></h3>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-check">✓</div>
                    <div class="benefit-content">
                        <h3><?= $texts['hotel']['benefit3Title'] ?></h3>
                        <p><?= $texts['hotel']['benefit3Desc'] ?></p>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-check">✓</div>
                    <div class="benefit-content">
                        <h3><?= $texts['hotel']['benefit4Title'] ?></h3>
                        <p><?= $texts['hotel']['benefit4Desc'] ?></p>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-check">✓</div>
                    <div class="benefit-content">
                        <h3><?= $texts['hotel']['benefit5Title'] ?></h3>
                        <p><?= $texts['hotel']['benefit5Desc'] ?></p>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-check">✓</div>
                    <div class="benefit-content">
                        <h3><?= $texts['hotel']['benefit6Title'] ?></h3>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-check">✓</div>
                    <div class="benefit-content">
                        <h3><?= $texts['hotel']['benefit7Title'] ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Occasions Section -->
    <section class="occasions-section">
        <div class="container">
            <h2><?= $texts['hotel']['occasionsTitle'] ?></h2>
            <p class="intro"><?= $texts['hotel']['occasionsIntro'] ?></p>
            
            <div class="occasions-grid">
                <div class="occasion-card">
                    <div class="occasion-icon"><i class="fa-solid fa-heart"></i></div>
                    <h3><?= $texts['hotel']['occasion1'] ?></h3>
                </div>
                <div class="occasion-card">
                    <div class="occasion-icon"><i class="fa-solid fa-camera"></i></div>
                    <h3><?= $texts['hotel']['occasion2'] ?></h3>
                </div>
                <div class="occasion-card">
                    <div class="occasion-icon"><i class="fa-solid fa-briefcase"></i></div>
                    <h3><?= $texts['hotel']['occasion3'] ?></h3>
                </div>
                <div class="occasion-card">
                    <div class="occasion-icon"><i class="fa-solid fa-birthday-cake"></i></div>
                    <h3><?= $texts['hotel']['occasion4'] ?></h3>
                </div>
            </div>
            
            <p class="occasions-footer"><?= $texts['hotel']['occasionsFooter'] ?></p>
        </div>
    </section>

    <!-- Booking Section -->
    <section class="booking-section">
        <div class="container">
            <h2><?= $texts['hotel']['bookingTitle'] ?></h2>
            <p class="intro"><?= $texts['hotel']['bookingIntro'] ?></p>
            
            <div class="booking-steps">
                <div class="step-button"><?= $texts['hotel']['bookingStep1'] ?></div>
                <div class="step-button"><?= $texts['hotel']['bookingStep2'] ?></div>
                <div class="step-button"><?= $texts['hotel']['bookingStep3'] ?></div>
            </div>
            
            <a class="cta-button primary" href="<?= env('TELEGRAM_LINK') ?>?text=<?=$texts['home']['promo1Msg']?>" target="_blank" aria-label="<?= $texts['home']['promo1Aria'] ?? 'SuperB Party Girl' ?>"><i class="fab fa-telegram-plane"></i> <?= $texts['hotel']['ctaButton'] ?></a>
        </div>
    </section>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>
