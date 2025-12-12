<?php
$page_key = 'home';
include $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>

<link rel="stylesheet" href="/assets/css/index.css">
<link rel="stylesheet" href="/assets/css/models.css">
<!-- content -->
<!-- Video Header -->
<div class="video-header">
  <video autoplay muted loop playsinline class="video-bg1 mobile-video">
    <source src="/wp-content/uploads/2025/02/klpartygirl.webm" type="video/webm">
    Your browser does not support the video tag.
  </video>
  <div class="overlay"></div>
  <div class="header-content">
    <h1><?= $texts['home']['homeTitle'] ?></h1>
    <p><?= $texts['home']['homeSubTitle'] ?></p>
    <p><?= $texts['home']['homeDesc1'] ?></p>
    </br>
    <div class="buttons">
      <a href="<?= env('TELEGRAM_CHANNEL') ?>" class="btn"><?= $texts['common']['telegram'] ?></a>
    </div>
    </br>
    <div class="buttons">
      <a href="<?= env('TELEGRAM_LINK') ?>" class="btn"><?= $texts['common']['book_now'] ?></a>
    </div>
  </div>
</div>

<main>
  <div class="promo-section">
    <h2 class="promo-section-title"><?= $texts['home']['promoSectionTitle'] ?></h2>
    <div class="promo-grid">
      <!-- Promo 1 -->
      <a class="promo-card promo-card1" href="<?= localizedPath('/hotel') ?>" aria-label="<?= $texts['home']['promo1Aria'] ?? 'SuperB Party Girl' ?>">
        <picture>
          <source media="(max-width: 1199px)" srcset="/wp-content/uploads/index/superB_free_hotel_promo_mobile_<?= $lang ?>.webp">
          <img
            id="promo1-img"
            src="/wp-content/uploads/index/superB_free_hotel_promo_<?= $lang ?>.webp"
            alt="<?= $texts['home']['promo1Alt'] ?? 'Exclusive Party Girl Promotions' ?>"
            loading="lazy"
          />
        </picture>
        <span class="promo-badge"><?= $texts['home']['promo1Badge'] ?? 'VIP' ?></span>
        <span class="promo-cta"><?= $texts['home']['promo1PromoCTA'] ?? 'Book Now' ?></span>
      </a>

      <!-- Promo 2 -->
      <a class="promo-card promo-card2" href="<?= env('TELEGRAM_LINK') ?>?url=&text=<?=$texts['home']['promo2Msg'] ?>" target="_blank" rel="noopener" aria-label="<?= $texts['home']['promo2Aria'] ?? 'Book VIP now on Telegram' ?>">
        <picture>
          <source media="(max-width: 1199px)" srcset="/wp-content/uploads/index/superB_refer_friend_promo_mobile_<?= $lang ?>.webp">
          <img
            id="promo2-img"
            src="/wp-content/uploads/index/superB_refer_friend_promo_<?= $lang ?>.webp"
            alt="<?= $texts['home']['promo2Alt'] ?? 'VIP Booking — Limited Slots' ?>"
            loading="lazy"
          />
        </picture>
        <span class="promo-badge"><?= $texts['home']['promo2Badge'] ?? 'VIP' ?></span>
        <span class="promo-cta"><?= $texts['home']['promo2PromoCTA'] ?? 'Book Now' ?></span>
      </a>
    </div>
  </div>
  <!-- <div class="top10-section">
    <h2 class="top10-title"><?= $texts['home']['top10Title'] ?></h2>
    <div class="swiper top10-swiper">
      <div class="swiper-wrapper" id="top10-wrapper"></div>
    </div>
  </div> -->

  <div class="contentBox-card">
    <div class="card-slider">
      <div class="contentBox">
        <div class="title">
          <h2><a href="<?= localizedPath('/models') ?>"><?= $texts['home']['allPrtyGirl'] ?></a>
            <i class="fas fa-angle-double-right ml-2"></i>
          </h2>
        </div>
        <div>
          <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-4 col-6">
              <article class="card-standard">
                <a title="superbpartygirl" href="<?= localizedPath('/models/local-party-girl/') ?>" class="productCard text-center">
                  <div class="productCard-mainPic">
                    <img alt="superbpartygirl" src="/wp-content/uploads/index/cn/local_kol.webp">
                    <div class="overlay1">
                      <span><?= $texts['home']['local'] ?></span>
                    </div>
                  </div>
                </a>
              </article>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-6">
              <article class="card-standard">
                <a title="superbpartygirl" href="<?= localizedPath('/models/chinese-party-girl/') ?>" class="productCard text-center">
                  <div class="productCard-mainPic">
                    <img alt="superbpartygirl" src="/wp-content/uploads/index/cn/china_kol.webp">
                    <div class="overlay1">
                      <span><?= $texts['home']['china'] ?></span>
                    </div>
                  </div>
                </a>
              </article>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-6">
              <article class="card-standard">
                <a title="superbpartygirl" href="<?= localizedPath('/models/vietnam-party-girl/') ?>" class="productCard text-center">
                  <div class="productCard-mainPic">
                    <img alt="superbpartygirl" src="/wp-content/uploads/index/cn/vn_kol.webp">
                    <div class="overlay1">
                      <span><?= $texts['home']['vietnam'] ?></span>
                    </div>
                  </div>
                </a>
              </article>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-6">
              <article class="card-standard">
                <a title="superbpartygirl" href="<?= localizedPath('/models/japan-party-girl/') ?>" class="productCard text-center">
                  <div class="productCard-mainPic">
                    <img alt="superbpartygirl" src="/wp-content/uploads/index/cn/jp_kol.webp">
                    <div class="overlay1">
                      <span><?= $texts['home']['japan'] ?></span>
                    </div>
                  </div>
                </a>
              </article>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-6">
              <article class="card-standard">
                <a title="superbpartygirl" href="<?= localizedPath('/models/korea-party-girl/') ?>" class="productCard text-center">
                  <div class="productCard-mainPic">
                    <img alt="superbpartygirl" src="/wp-content/uploads/index/cn/kr_kol.webp">
                    <div class="overlay1">
                      <span><?= $texts['home']['korea'] ?></span>
                    </div>
                  </div>
                </a>
              </article>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-6">
              <article class="card-standard">
                <a title="superbpartygirl" href="<?= localizedPath('/models/europe-party-girl/') ?>" class="productCard text-center">
                  <div class="productCard-mainPic">
                    <img alt="superbpartygirl" src="/wp-content/uploads/index/cn/eu_kol.webp">
                    <div class="overlay1">
                      <span><?= $texts['home']['europe'] ?></span>
                    </div>
                  </div>
                </a>
              </article>
            </div>
          </div>
        </div>
      </div>
            <!-- Models Section -->
            <div class="contentBox">
        <div class="title">
          <h2><?= $texts['models']['modelsSubTitle'] ?>
            <i class="fas fa-angle-double-right ml-2"></i>
          </h2>
        </div>
        <button id="toggle-filter-btn" class="toggle-filter-btn" style="display: none;">
          <?= $texts['models']['showFilters'] ?>
        </button>
     
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
        <h2><?= $texts['models']['Malaysiamodelescorts'] ?></h2>
        <p><?= $texts['models']['Malaysiamodelescortsdesc'] ?></p>
      </div>

      <div class="feature-article">
        <h2><?= $texts['home']['whatisptgirl'] ?></h2>
        <p class="lead">
          <?= $texts['home']['whatisptgDesc1'] ?>
        </p>
        <p class="lead">
          <?= $texts['home']['whatisptgDesc2'] ?>
        </p>

        <section class="feature-card">
          <h2><?= $texts['home']['theArtPerfect'] ?></h2>
          <p>
            <?= $texts['home']['theArtPerfectDesc1'] ?>
          </p>
          <p>
            <?= $texts['home']['theArtPerfectDesc2'] ?>
          </p>
        </section>

        <section class="feature-card">
          <h2><?= $texts['home']['pgVSpr'] ?></h2>
          <div>
            <p><?= $texts['home']['pgVSprDesc1'] ?></p>
          </div>
          <p>
            <span class="tag"><?= $texts['home']['prTags'] ?></span> <?= $texts['home']['prTagsDesc1'] ?>
          </p>
          <p>
            <span class="tag tag-pink"><?= $texts['home']['pgTags'] ?></span> <?= $texts['home']['pgTagsDesc1'] ?>
          </p>
          <p>
            <?= $texts['home']['pgVSprDesc2'] ?>
          </p>
        </section>

        <section class="feature-card">
          <h2><?= $texts['home']['premiumExceeds'] ?></h2>
          <ul>
            <li><?= $texts['home']['premiumExceedsL1'] ?></li>
            <li><?= $texts['home']['premiumExceedsL2'] ?></li>
            <li><?= $texts['home']['premiumExceedsL3'] ?></li>
          </ul>
        </section>

        <h2 class="section-heading"><?= $texts['home']['whyYouNeedPG'] ?></h2>
        <div class="sub-text">
          <p><?= $texts['home']['whyYouNeedPGDesc1'] ?></p>
        </div>
        <div class="grid-3">
          <section class="feature-card">
            <h3><?= $texts['home']['socialConfi'] ?></h3>
            <p><?= $texts['home']['socialConfiDesc'] ?></p>
          </section>
          <section class="feature-card">
            <h3><?= $texts['home']['escapeLife'] ?></h3>
            <p><?= $texts['home']['escapeLifeDesc'] ?></p>
          </section>
          <section class="feature-card">
            <h3><?= $texts['home']['transformGather'] ?></h3>
            <p><?= $texts['home']['transformGatherDesc'] ?></p>
          </section>
        </div>
        <div class="grid-3">
          <section class="feature-card">
            <h3><?= $texts['home']['freedomEmo'] ?></h3>
            <p><?= $texts['home']['freedomEmoDesc'] ?></p>
          </section>
          <section class="feature-card">
            <h3><?= $texts['home']['yourDesires'] ?></h3>
            <p><?= $texts['home']['yourDesiresDesc'] ?></p>
          </section>
          <section class="feature-card">
            <h3><?= $texts['home']['instantAccess'] ?></h3>
            <p><?= $texts['home']['instantAccessDesc'] ?></p>
          </section>
        </div>

        <section class="feature-card">
          <h2><?= $texts['home']['typesOfPG'] ?></h2>
          <p>
            <?= $texts['home']['typesOfPGDesc'] ?>
          </p>
          <h3 class="sub-text">
            <?= $texts['home']['physicalAttract'] ?>
          </h3>
          <ul>
            <li>
              <b class="tag tag-orange"><?= $texts['models']['bigBooty'] ?>:</b> <?= $texts['home']['bigBootyDesc'] ?>
            </li>
            <li>
              <b class="tag tag-indigo"><?= $texts['models']['bigTits'] ?>:</b> <?= $texts['home']['bigTitsDesc'] ?>
            </li>

            <li>
              <b class="tag tag-purple"><?= $texts['models']['longLegs'] ?>:</b> <?= $texts['home']['longLegsDesc'] ?>
            </li>

            <li>
              <b class="tag tag-green"><?= $texts['models']['tinyWaist'] ?>:</b> <?= $texts['home']['tinyWaistDesc'] ?>
            </li>
          </ul>
          <h3 class="sub-text">
            <?= $texts['home']['personalityType'] ?>
          </h3>
          <ul>
            <li>
              <b class="tag tag-teal"><?= $texts['models']['energetic'] ?>:</b> <?= $texts['home']['energeticDesc'] ?>
            </li>

            <li>
              <b class="tag tag-grey"><?= $texts['models']['flirty'] ?>:</b> <?= $texts['home']['flirtyDesc'] ?>
            </li>

            <li>
              <b class="tag tag-brown"><?= $texts['models']['charmSmile'] ?>:</b> <?= $texts['home']['charmSmileDesc'] ?>
            </li>

            <li><b class="tag tag-gold">
                <?= $texts['models']['shyness'] ?>:</b> <?= $texts['home']['shynessDesc'] ?>
            </li>
          </ul>
          <h3 class="sub-text">
            <?= $texts['models']['specializedExp'] ?>
          </h3>
          <ul>
            <li><b class="tag tag-blue">
                <?= $texts['models']['gfe'] ?>:</b> <?= $texts['home']['gfeDesc'] ?>
            </li>
            <li><b class="tag tag-red">
                <?= $texts['models']['student'] ?>:</b> <?= $texts['home']['studentDesc'] ?>
            </li>

            <li><b class="tag tag-cyan">
                <?= $texts['models']['tattoos'] ?>:</b> <?= $texts['home']['tattoosDesc'] ?>
            </li>

            <li><b class="tag tag-lime">
                <?= $texts['models']['kol'] ?>:</b> <?= $texts['home']['kolDesc'] ?>
            </li>
          </ul>
        </section>

        <section class="feature-card">
          <h2><?= $texts['home']['howPGBooking'] ?></h2>
          <ol>
            <li>
              <b style="color:#ff2491;"><?= $texts['home']['findPerfect'] ?></b> <?= $texts['home']['findPerfectDesc'] ?>
            </li>
            <li>
              <b style="color:#ff2491;"><?= $texts['home']['bookDream'] ?></b> <?= $texts['home']['bookDreamDesc'] ?>
            </li>
            <li>
              <b style="color:#ff2491;"><?= $texts['home']['safeCheck'] ?></b> <?= $texts['home']['safeCheckDesc'] ?>
            </li>
            <li>
              <b style="color:#ff2491;"><?= $texts['home']['getReady'] ?></b> <?= $texts['home']['getReadyDesc'] ?>
            </li>
            <li>
              <b style="color:#ff2491;"><?= $texts['home']['perfectDeliver'] ?></b> <?= $texts['home']['perfectDeliverDesc'] ?>
            </li>
          </ol>
          <b style="color:#ff2491;"> <?= $texts['home']['readyForAmazing'] ?></b>

        </section>

        <section class="feature-card">
          <h2><?= $texts['home']['safetyDiscre'] ?></h2>
          <p class="lead">
            <?= $texts['home']['safetyDiscreDesc1'] ?>
          </p>
          <p class="lead">
            <?= $texts['home']['safetyDiscreDesc2'] ?>
          </p>
        </section>

        <section class="feature-card">
          <h2><?= $texts['home']['Safe party escort'] ?></h2>
          <p class="lead">
            <?= $texts['home']['Safe party escortDesc'] ?>
          </p>
        </section>

        <section class="feature-card">
          <h2><?= $texts['home']['howChooseRepuPG'] ?></h2>

          <ul>
            <li>
              <b style="color: #ff2491;"><?= $texts['home']['proQuality'] ?></b>
              <p class="lead"><?= $texts['home']['proQualityDesc'] ?></p>
            </li>
            <li>
              <b style="color: #ff2491;"><?= $texts['home']['safetyStandard'] ?></b>
              <p class="lead"><?= $texts['home']['safetyStandardDesc'] ?></p>
            </li>
            <li>
              <b style="color: #ff2491;"><?= $texts['home']['compPrivacy'] ?></b>
              <p class="lead"><?= $texts['home']['compPrivacyDesc'] ?></p>
            </li>
            <li>
              <b style="color: #ff2491;"><?= $texts['home']['reviewMatters'] ?></b>
              <p class="lead"><?= $texts['home']['reviewMattersDesc'] ?></p>
            </li>
            <li>
              <b style="color: #ff2491;"><?= $texts['home']['transOperation'] ?></b>
              <p class="lead"><?= $texts['home']['transOperationDesc'] ?></p>
            </li>
          </ul>
        </section>
      </div>

      <div class="reviews-section">
        <h2><?= $texts['home']['sayAboutUs'] ?></h2>
        <div class="subtitle">
          <?= $texts['home']['sayAboutUsDesc'] ?>
        </div>
        <div class="reviews-list">
          <div class="review-card">
            <h3><?= $texts['home']['comment1Title'] ?></h3>
            <span class="reviewer">- <?= $texts['home']['comment1Person'] ?> -</span>
            <p><?= $texts['home']['comment1Desc1'] ?></p>
            <p><?= $texts['home']['comment1Desc2'] ?></p>
          </div>
          <div class="review-card">
            <h3><?= $texts['home']['comment2Title'] ?></h3>
            <span class="reviewer">- <?= $texts['home']['comment2Person'] ?> -</span>
            <p><?= $texts['home']['comment2Desc1'] ?></p>
            <p><?= $texts['home']['comment2Desc2'] ?></p>
          </div>
          <div class="review-card">
            <h3><?= $texts['home']['comment3Title'] ?></h3>
            <span class="reviewer">- <?= $texts['home']['comment3Person'] ?>, <?= $texts['home']['comment3Location'] ?> -</span>
            <p><?= $texts['home']['comment3Desc1'] ?></p>
            <p><?= $texts['home']['comment3Desc2'] ?></p>
          </div>
          <div class="review-card">
            <h3><?= $texts['home']['comment4Title'] ?></h3>
            <span class="reviewer">- <?= $texts['home']['comment4Person'] ?>, <?= $texts['home']['comment4Location'] ?> -</span>
            <p><?= $texts['home']['comment4Desc1'] ?></p>
            <p><?= $texts['home']['comment4Desc2'] ?></p>
          </div>
        </div>
      </div>

      <div class="faq-section">
        <h2>
          <?= $texts['home']['faqAboutUs'] ?>
        </h2>
        <div class="faq-container">
          <div class="faq-item">
            <button class="accordion" onclick="toggleAccordion(this)">
              <h3><?= $texts['home']['faq1'] ?></h3>
            </button>
            <div class="panel">
              <p><?= $texts['home']['ans1'] ?></p>
            </div>
          </div>

          <div class="faq-item">
            <button class="accordion" onclick="toggleAccordion(this)">
              <h3><?= $texts['home']['faq2'] ?></h3>
            </button>
            <div class="panel">
              <p><?= $texts['home']['ans2'] ?></p>
            </div>
          </div>

          <div class="faq-item">
            <button class="accordion" onclick="toggleAccordion(this)">
              <h3><?= $texts['home']['faq3'] ?></h3>
            </button>
            <div class="panel">
              <p><?= $texts['home']['ans3'] ?></p>
            </div>
          </div>

          <div class="faq-item">
            <button class="accordion" onclick="toggleAccordion(this)">
              <h3><?= $texts['home']['faq4'] ?></h3>
            </button>
            <div class="panel">
              <p><?= $texts['home']['ans4'] ?></p>
            </div>
          </div>

          <div class="faq-item">
            <button class="accordion" onclick="toggleAccordion(this)">
              <h3><?= $texts['home']['faq5'] ?></h3>
            </button>
            <div class="panel">
              <p><?= $texts['home']['ans5'] ?></p>
            </div>
          </div>

          <div class="faq-item">
            <button class="accordion" onclick="toggleAccordion(this)">
              <h3><?= $texts['home']['faq6'] ?></h3>
            </button>
            <div class="panel">
              <p><?= $texts['home']['ans6'] ?></p>
            </div>
          </div>

          <div class="faq-item">
            <button class="accordion" onclick="toggleAccordion(this)">
              <h3><?= $texts['home']['faq7'] ?></h3>
            </button>
            <div class="panel">
              <p><?= $texts['home']['ans7'] ?></p>
            </div>
          </div>

          <div class="faq-item">
            <button class="accordion" onclick="toggleAccordion(this)">
              <h3><?= $texts['home']['faq8'] ?></h3>
            </button>
            <div class="panel">
              <p><?= $texts['home']['ans8'] ?></p>
            </div>
          </div>

          <div class="faq-item">
            <button class="accordion" onclick="toggleAccordion(this)">
              <h3><?= $texts['home']['faq9'] ?></h3>
            </button>
            <div class="panel">
              <p><?= $texts['home']['ans9'] ?></p>
            </div>
          </div>

          <div class="faq-item">
            <button class="accordion" onclick="toggleAccordion(this)">
              <h3><?= $texts['home']['faq10'] ?></h3>
            </button>
            <div class="panel">
              <p><?= $texts['home']['ans10'] ?></p>
            </div>
          </div>
        </div>
      </div>

      <?= generateHomePageFAQSchema($texts) ?>


</main>

<script>
  const i18nModels = <?= json_encode($texts['models']) ?>;
  const i18nCommon = <?= json_encode($texts['common']) ?>;
</script>

<script>
// Enhanced FAQ Accordion Functionality
function toggleAccordion(element) {
  // Close all other accordions
  const allAccordions = document.querySelectorAll('.accordion');
  const allPanels = document.querySelectorAll('.panel');
  const allIcons = document.querySelectorAll('.accordion-icon');
  
  allAccordions.forEach(acc => {
    if (acc !== element) {
      acc.classList.remove('active');
    }
  });
  
  allPanels.forEach(panel => {
    if (panel !== element.nextElementSibling) {
      panel.style.maxHeight = null;
    }
  });
  
  allIcons.forEach(icon => {
    if (icon !== element.querySelector('.accordion-icon')) {
      icon.textContent = '+';
    }
  });
  
  // Toggle current accordion
  element.classList.toggle('active');
  const panel = element.nextElementSibling;
  const icon = element.querySelector('.accordion-icon');
  
  if (panel.style.maxHeight) {
    panel.style.maxHeight = null;
    icon.textContent = '+';
  } else {
    panel.style.maxHeight = panel.scrollHeight + "px";
    icon.textContent = '−';
  }
}

// Initialize accordion on page load
document.addEventListener('DOMContentLoaded', function() {
  // Set initial state for all panels
  const panels = document.querySelectorAll('.panel');
  panels.forEach(panel => {
    panel.style.maxHeight = null;
  });
  
  // Add smooth transitions
  const style = document.createElement('style');
  style.textContent = `
    .panel {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease-out;
      background-color: #f8f9fa;
      border-radius: 0 0 8px 8px;
    }
    
    .accordion {
      background-color: #fff;
      border: 1px solid #e9ecef;
      border-radius: 8px;
      margin-bottom: 10px;
      padding: 20px;
      text-align: left;
      cursor: pointer;
      transition: all 0.3s ease;
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
    }
    
    .accordion:hover {
      background-color: #f8f9fa;
      border-color: #ff2491;
    }
    
    .accordion.active {
      background-color: #ff2491;
      color: white;
      border-color: #ff2491;
    }
    
    .accordion h3 {
      margin: 0;
      font-size: 18px;
      font-weight: 600;
    }
    
    .accordion-icon {
      font-size: 24px;
      font-weight: bold;
      transition: transform 0.3s ease;
    }
    
    .accordion.active .accordion-icon {
      transform: rotate(180deg);
    }
    
    .panel p {
      margin: 0;
      padding: 20px;
      line-height: 1.6;
      /* color: #333; */
    }
    
    .faq-container {
      max-width: 800px;
      margin: 0 auto;
    }
    
    .faq-item {
      margin-bottom: 15px;
    }
  `;
  document.head.appendChild(style);
});
</script>

<script src="/assets/js/models.js"></script>
<script src="/assets/js/model_filter.js"></script>
<script src="/assets/js/index.js"></script>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>
