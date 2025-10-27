<?php
$page_meta = [
  'title' => "Best KL Party Girl Malaysia Platform | Top Local KOL Models",
  'description' => "Discover Local KOLs, Penang, Johor, KL party girl experience with Superb Party Girl, Malaysia's leading party girl platform. Elevate your nights with unforgettable vibes!",
  'canonical' => "https://superbpartygirl.com/",
  'og_title' => "Best KL Party Girl Malaysia Platform | Top Local KOL Models",
  'og_description' => "Discover Local KOLs, Penang, Johor, KL party girl experience with Superb Party Girl, Malaysia's leading party girl platform. Elevate your nights with unforgettable vibes!",
  'lang' => "en-my",
  'custom_css' => "/assets/css/models.css",
];

include $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>
<style>
  .top10-section {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 12px;
  }

  .top10-title {
    text-align: center;
    font-size: 2rem;
    font-weight: bold;
    letter-spacing: 1px;
    color: #fff;
    padding: 20px 0;
  }

  .swiper-slide {
    display: flex;
    justify-content: center;
  }

  .card-standard {
    width: 100%;
    max-width: 240px;
    background: transparent;
    border-radius: 16px;
    box-shadow: 0 4px 24px 0 rgba(0, 0, 0, 0.10);
  }

  .productCard-mainPic img {
    width: 100%;
    height: 240px;
    border-radius: 16px 16px 0 0;
    object-fit: cover;
    line-height: 0;
  }

  .book-now-btn {
    display: inline-block;
    margin-top: 8px;
    background: #ff2491;
    color: #fff;
    border-radius: 24px;
    padding: 8px 20px;
    text-decoration: none;
    font-weight: bold;
  }

  .productCard-mainPic {
    height: auto;
  }

  .model-info {
    margin: 5px 0 0 0;
  }

  .contentBox {
    padding: unset;
  }

  @media (max-width: 700px) {
    .card-standard {
      max-width: 160px;
    }

    .productCard-mainPic img {
      height: 175px;
    }

    .top10-title {
      font-size: 1.3rem;
    }
  }

  .feature-article {
    max-width: 950px;
    margin: 0 auto;
    padding: 20px 8px;
    border-radius: 18px;
    box-shadow: 0 6px 36px 0 rgba(20, 8, 32, .2);
  }

  .feature-article h2 {
    /* font-size: 2.3rem; */
    letter-spacing: 1.5px;
    margin-bottom: 18px;
    color: #ff2491;
    /* font-weight: 800; */
    text-align: center;
  }

  .lead {
    font-size: 1.18rem;
    margin-bottom: 18px;
    line-height: 1.7;
    color: #e0e0e0;
  }

  .section-heading {
    margin-top: 40px;
    font-size: 1.6rem;
    color: #ff2491;
    letter-spacing: 1px;
    text-align: center;
  }

  .feature-card {
    background: #23242a;
    margin: 22px 0;
    border-radius: 14px;
    box-shadow: 0 1px 10px 0 rgba(10, 0, 30, 0.11);
    padding: 24px 24px 14px 24px;
  }

  .feature-card p {
    font-size: 16px;
    color: #ffffff;
    text-align: left;
    height: 100%;
    margin: 16px 0;
    line-height: 1.6;
  }

  .feature-article .sub-text {
    margin: 10px 0 0 0;
    line-height: 1.6;
  }

  .feature-card h2,
  .feature-card h3 {
    margin-top: 0;
    color: #ff2491;
    margin-bottom: 15px;
    text-align: center;
  }

  .feature-card h3 {
    text-align: center;
  }

  .feature-card ul,
  .feature-card ol {
    padding-left: 20px;
    margin: 10px 0;
  }

  .feature-card ul li,
  .feature-card ol li {
    margin-bottom: 7px;
    line-height: 1.7;
    color: #e7e7eb;
  }

  .grid-3 {
    display: flex;
    gap: 16px;
  }

  .grid-3 .feature-card {
    flex: 1 1 0;
  }

  .grid-3 .feature-card h3 {

    text-align: center;
  }

  .grid-3 .feature-card p {
    text-align: center;
    height: auto;
  }

  @media (max-width: 800px) {
    .grid-3 {
      flex-direction: column;
      gap: 0;
    }
  }

  .tags-wrap {
    margin: 10px 0 15px 0;
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
  }

  .tag {
    background: #23242a;
    color: #ff2491;
    border-radius: 12px;
    padding: 2px 13px;
    font-size: 0.93rem;
    display: inline-block;
    margin: 2px 5px 2px 0;
    font-weight: 600;
    letter-spacing: .5px;
    border: 1px solid #ff2491;
  }

  .tag-pink {
    background: #2b1726;
    color: #ff8fc6;
    border-color: #ff2491;
  }

  .tag-purple {
    background: #211e3a;
    color: #cba0ff;
    border-color: #af6eff;
  }

  .tag-green {
    background: #172823;
    color: #63e2b7;
    border-color: #32d184;
  }

  .tag-orange {
    background: #2c2321;
    color: #ffc081;
    border-color: #ffb568;
  }

  .tag-yellow {
    background: #26260d;
    color: #ffe86b;
    border-color: #e7c541;
  }

  .tag-blue {
    background: #182235;
    color: #83c6ff;
    border-color: #3fa6ff;
  }

  .tag-red {
    background: #2a1819;
    color: #ff9090;
    border-color: #ff3e3e;
  }

  .tag-cyan {
    background: #173235;
    color: #7ffffc;
    border-color: #29e3e7;
  }

  .tag-lime {
    background: #202b17;
    color: #cbff8f;
    border-color: #95e648;
  }

  .tag-brown {
    background: #2b2320;
    color: #f1c491;
    border-color: #bb8543;
  }

  .tag-grey {
    background: #222326;
    color: #b6bcc7;
    border-color: #838a99;
  }

  .tag-teal {
    background: #17292d;
    color: #7be6ff;
    border-color: #35b6c7;
  }

  .tag-gold {
    background: #282312;
    color: #ffe6a2;
    border-color: #ffd700;
  }

  .tag-indigo {
    background: #1c1a2e;
    color: #a8b0ff;
    border-color: #6366f1;
  }

  .reviews-section {
    max-width: 1400px;
    margin: 48px auto 32px auto;
    padding: 0 16px;
    color: #ededed;
    background: transparent;
  }

  .reviews-section h2 {
    text-align: center;
    font-size: 2.1rem;
    color: #fff;
    font-weight: 700;
    margin-bottom: 12px;
    letter-spacing: 1px;
  }

  .reviews-section .subtitle {
    color: #bbb;
    font-size: 1.17rem;
    text-align: center;
    margin-bottom: 36px;
    line-height: 1.5;
  }

  .reviews-list {
    display: flex;
    justify-content: space-between;
    gap: 28px;
    flex-wrap: wrap;
    margin-top: 18px;
  }

  .review-card {
    background: #16161a;
    border-radius: 16px;
    flex: 1 1 260px;
    min-width: 260px;
    max-width: 400px;
    margin: 0 auto;
    padding: 30px 26px 24px 26px;
    box-shadow: 0 2px 24px 0 rgba(0, 0, 0, 0.20);
    display: flex;
    flex-direction: column;
    align-items: center;
    transition: box-shadow 0.2s;
    border: 1px solid #292932;
  }

  .review-card:hover {
    box-shadow: 0 8px 36px 0 rgba(255, 36, 145, 0.14);
    border-color: #ff2491;
  }

  .review-card h3 {
    font-size: 1.22rem;
    color: #ff2491;
    margin-bottom: 4px;
    font-weight: 600;
    text-align: center;
  }

  .review-card .reviewer {
    font-size: 1.05rem;
    color: #c1a9ff;
    font-weight: 500;
    margin-bottom: 10px;
    display: block;
    text-align: center;
  }

  .review-card p {
    font-size: 1.08rem;
    color: #e3e3e3;
    text-align: center;
    margin-bottom: 0.5em;
    line-height: 1.6;
    height: auto;
  }

  @media (max-width: 1000px) {
    .reviews-list {
      flex-direction: column;
      gap: 24px;
      align-items: center;
    }

    .review-card {
      max-width: 95vw;
    }

    .reviews-section {
      padding: 0 6px;
    }
  }

  @media (max-width: 600px) {
    .reviews-section h2 {
      font-size: 1.2rem;
    }

    .review-card {
      padding: 18px 10px 14px 10px;
      min-width: unset;
    }
  }

  .faq-section {
    max-width: 1300px;
    margin: 32px auto 48px auto;
    color: #ededed;
    padding: 0 12px;
  }

  .faq-section h2 {
    text-align: center;
    font-size: 2rem;
    font-weight: 700;
    color: #fff;
    margin-bottom: 32px;
    letter-spacing: 1px;
  }

  .accordion {
    width: 100%;
    background: linear-gradient(90deg, #272626 75%, #232323 100%);
    color: #fff;
    padding: 22px 28px;
    margin-bottom: 10px;
    border: none;
    outline: none;
    cursor: pointer;
    border-radius: 13px 13px 0 0;
    transition: background 0.18s, color 0.18s, box-shadow 0.18s;
    box-shadow: 0 2px 16px 0 rgba(255, 36, 145, 0.05);
    letter-spacing: 0.5px;
    position: relative;
  }

  .accordion:hover,
  .accordion.active {
    background: linear-gradient(90deg, #28232a 75%, #272626 100%);
    color: #ff4081;
    box-shadow: 0 8px 24px 0 rgba(255, 36, 145, 0.18);
  }

  .accordion:after {
    content: '\25BC';
    color: #fff;
    font-size: 1.3rem;
    position: absolute;
    right: 24px;
    top: 50%;
    transform: translateY(-50%);
    transition: transform 0.18s;
  }

  .accordion.active:after {
    transform: translateY(-50%) rotate(-180deg);
  }

  @media (max-width:700px) {
    .accordion:after {
      display: none;
    }
  }

  .panel {
    background: rgba(32, 32, 38, 0.97);
    color: #fff;
    border-radius: 0 0 13px 13px;
    margin-bottom: 16px;
    margin-top: -5px;
    box-shadow: 0 4px 32px 0 rgba(0, 0, 0, 0.12);
    padding: 30px 35px;
    font-size: 1.13rem;
    line-height: 1.65;
    letter-spacing: 0.01em;
    display: none;
    animation: fadeInPanel 0.6s;
  }

  .panel p {
    text-align: left;
  }

  .panel.active {
    display: block;
  }

  @keyframes fadeInPanel {
    from {
      opacity: 0;
      transform: translateY(-20px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @media (max-width: 700px) {
    .faq-section h2 {
      font-size: 1.2rem;
    }

    .accordion {
      font-size: 1rem;
      padding: 14px 14px;
    }

    .panel {
      font-size: 1rem;
      /* padding: 18px 12px; */
    }
  }
</style>
<!-- content -->
<!-- Video Header -->
<div class="video-header">
  <video autoplay muted loop playsinline class="video-bg1 mobile-video">
    <source src="https://superbpartygirl.com/wp-content/uploads/2025/02/klpartygirl.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  <div class="overlay"></div>
  <div class="header-content">
    <h1>SuperB Party Girl</h1>
    <p>马来西亚 VVIP高端模特商务伴游 (本地网红, KL, Penang, Johor)</p>
    <p>To ensure you have the ultimate nightlife experience, allow us to connect you with the finest KOLs, Johor, Penang, KL Party Girls! Our girls are eager and prepared to cater to your needs!</p>
    
    <!-- Cities Section -->
    <div class="cities-hero-section">
      <h3>Malaysia Cities</h3>
      <div class="cities-grid">
        <a href="/cities/premium-escort-kuala-lumpur" class="city-link">Kuala Lumpur</a>
        <a href="/cities/premium-escort-ampang" class="city-link">Ampang</a>
        <a href="/cities/premium-escort-cheras" class="city-link">Cheras</a>
        <a href="/cities/premium-escort-cyberjaya" class="city-link">Cyberjaya</a>
        <a href="/cities/premium-escort-genting" class="city-link">Genting</a>
        <a href="/cities/premium-escort-ipoh" class="city-link">Ipoh</a>
        <a href="/cities/premium-escort-johor" class="city-link">Johor</a>
        <a href="/cities/premium-escort-kepong" class="city-link">Kepong</a>
        <a href="/cities/premium-escort-klang" class="city-link">Klang</a>
        <a href="/cities/premium-escort-kota-damansara" class="city-link">Kota Damansara</a>
        <a href="/cities/premium-escort-langkawi" class="city-link">Langkawi</a>
        <a href="/cities/premium-escort-local" class="city-link">Local</a>
        <a href="/cities/premium-escort-melaka" class="city-link">Melaka</a>
        <a href="/cities/premium-escort-mont-kiara" class="city-link">Mont Kiara</a>
        <a href="/cities/premium-escort-pahang" class="city-link">Pahang</a>
        <a href="/cities/premium-escort-penang" class="city-link">Penang</a>
        <a href="/cities/premium-escort-petaling-jaya" class="city-link">Petaling Jaya</a>
        <a href="/cities/premium-escort-port-dickson" class="city-link">Port Dickson</a>
        <a href="/cities/premium-escort-puchong" class="city-link">Puchong</a>
        <a href="/cities/premium-escort-sabah" class="city-link">Sabah</a>
        <a href="/cities/premium-escort-sarawak" class="city-link">Sarawak</a>
        <a href="/cities/premium-escort-serdang" class="city-link">Serdang</a>
        <a href="/cities/premium-escort-seremban" class="city-link">Seremban</a>
        <a href="/cities/premium-escort-setia-alam" class="city-link">Setia Alam</a>
        <a href="/cities/premium-escort-sri-petaling" class="city-link">Sri Petaling</a>
        <a href="/cities/premium-escort-subang" class="city-link">Subang</a>
        <a href="/cities/premium-escort-taiping" class="city-link">Taiping</a>
      </div>
    </div>
    
    </br>
    <div class="buttons">
      <a href="https://t.me/superBlocalgirls" class="btn">Telegram Channel</a>
    </div>
    </br>
    <div class="buttons">
      <a href="https://t.me/m/PY3Xovo4N2Vl" class="btn">Book Now</a>
    </div>
  </div>
</div>

<main>
  <div class="top10-section">
    <h2 class="top10-title">Top 10 Party Girls of the Month</h2>
    <div class="swiper top10-swiper">
      <div class="swiper-wrapper" id="top10-wrapper"></div>
      <!-- <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div> -->
    </div>
  </div>

  <div class="contentBox-card">
    <!-- <div class="title">
      <h2>Malaysia's Party Girl Picks of the Month
        <i class="fas fa-angle-double-right ml-2"></i>
      </h2>
	</div> -->
    <div class="card-slider">
      <!-- <div class="slider-container">
    <div class="card">
      <a title="superbpartygirl" href="https://t.me/m/PY3Xovo4N2Vl?text=Hi, I want to book MEGA KOL." class="productCard text-center">
            <div class="productCard-mainPic">
			<img alt="superbpartygirl" src="https://superbpartygirl.com/wp-content/uploads/2025/05/mega%20kol%20party%20girl.png">
              <div class="productCard-featureClass-cn">MEGA KOL</div>
               <div class="badge productCard-featureBadge rounded-0">
                <span>165 / 46 kg</span>
                <span class="cup">D Cup</span>
              </div>
            </div>
          </a>
    </div>
	<div class="card-slider">
  <div class="slider-container">
    <div class="card">
      <a title="superbpartygirl" href="https://t.me/m/PY3Xovo4N2Vl?text=Hi, I want to book C08." class="productCard text-center">
            <div class="productCard-mainPic">
			<img alt="superbpartygirl" src="https://superbpartygirl.com/wp-content/uploads/2024/12/C08.jpg">
              <div class="productCard-featureClass-cn">China</div>
               <div class="badge productCard-featureBadge rounded-0">
                <span>167 / 48 kg</span>
                <span class="cup">C Cup</span>
              </div>
            </div>
          </a>
    </div>
    <div class="card">
      <a title="superbpartygirl" href="https://t.me/m/PY3Xovo4N2Vl?text=Hi, I want to book C09." class="productCard text-center">
            <div class="productCard-mainPic">
			<img alt="superbpartygirl" src="https://superbpartygirl.com/wp-content/uploads/2024/12/C09.jpg">
              <div class="productCard-featureClass-cn">China</div>
              <div class="badge productCard-featureBadge rounded-0">
                <span>163 / 45 kg</span>
                <span class="cup">B Cup</span>
              </div>
            </div>
          </a>
    </div>
    <div class="card">
      <a title="superbpartygirl" href="https://t.me/m/PY3Xovo4N2Vl?text=Hi, I want to book V45." class="productCard text-center">
            <div class="productCard-mainPic">
			<img alt="superbpartygirl" src="https://superbpartygirl.com/wp-content/uploads/2024/12/V45.jpg">
              <div class="productCard-featureClass-vn">Vietnam</div>
              <div class="badge productCard-featureBadge rounded-0">
                <span>167 / 48 kg</span>
                <span class="cup">C Cup</span>
              </div>
            </div>
          </a>
    </div>
	<div class="card">
      <a title="superbpartygirl" href="https://t.me/m/PY3Xovo4N2Vl?text=Hi, I want to book V136." class="productCard text-center">
            <div class="productCard-mainPic">
			<img alt="superbpartygirl" src="https://superbpartygirl.com/wp-content/uploads/2024/12/V136.jpg">
              <div class="productCard-featureClass-vn">Vietnam</div>
              <div class="badge productCard-featureBadge rounded-0">
                <span>164 / 45 kg</span>
                <span class="cup">B Cup</span>
              </div>
            </div>
          </a>
    </div>
	<div class="card">
      <a title="superbpartygirl" href="https://t.me/m/PY3Xovo4N2Vl?text=Hi, I want to book A32." class="productCard text-center">
            <div class="productCard-mainPic">
			<img alt="superbpartygirl" src="https://superbpartygirl.com/wp-content/uploads/2024/12/A32.jpg">
              <div class="productCard-featureClass-my">Local</div>
              <div class="badge productCard-featureBadge rounded-0">
                <span>170 / 50 kg</span>
                <span class="cup">B Cup</span>
              </div>
            </div>
          </a>
    </div>
	<div class="card">
      <a title="superbpartygirl" href="https://t.me/m/PY3Xovo4N2Vl?text=Hi, I want to book A37." class="productCard text-center">
            <div class="productCard-mainPic">
			<img alt="superbpartygirl" src="https://superbpartygirl.com/wp-content/uploads/2024/12/A37.jpg">
              <div class="productCard-featureClass-my">Local</div>
              <div class="badge productCard-featureBadge rounded-0">
                <span>167 / 48 kg</span>
                <span class="cup">C Cup</span>
              </div>
            </div>
          </a>
    </div>
  </div>
  <button class="prev-btn">&lt;</button>
  <button class="next-btn">&gt;</button>
</div>
</div>  -->
      <div class="contentBox">
        <div class="title">
          <h2>All Party Girls
            <i class="fas fa-angle-double-right ml-2"></i>
          </h2>
        </div>
        <div>
          <div class="row">
            <!-- Example of a standardized card with hover overlay -->
            <div class="col-xl-3 col-lg-4 col-md-4 col-6">
              <article class="card-standard">
                <a title="superbpartygirl" href="https://superbpartygirl.com/models/local-party-girl/" class="productCard text-center">
                  <div class="productCard-mainPic">
                    <img alt="superbpartygirl" src="https://superbpartygirl.com/wp-content/uploads/2024/12/local_kol.jpeg">
                    <div class="overlay1">
                      <span>Local</span>
                    </div>
                  </div>
                </a>
              </article>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-6">
              <article class="card-standard">
                <a title="superbpartygirl" href="https://superbpartygirl.com/models/chinese-party-girl/" class="productCard text-center">
                  <div class="productCard-mainPic">
                    <img alt="superbpartygirl" src="https://superbpartygirl.com/wp-content/uploads/2024/12/china_kol.jpg">
                    <div class="overlay1">
                      <span>China</span>
                    </div>
                  </div>
                </a>
              </article>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-6">
              <article class="card-standard">
                <a title="superbpartygirl" href="https://superbpartygirl.com/models/vietnam-party-girl/" class="productCard text-center">
                  <div class="productCard-mainPic">
                    <img alt="superbpartygirl" src="https://superbpartygirl.com/wp-content/uploads/2024/12/vn_kol.jpg">
                    <div class="overlay1">
                      <span>Vietnam</span>
                    </div>
                  </div>
                </a>
              </article>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-6">
              <article class="card-standard">
                <a title="superbpartygirl" href="https://superbpartygirl.com/models/japan-party-girl/" class="productCard text-center">
                  <div class="productCard-mainPic">
                    <img alt="superbpartygirl" src="https://superbpartygirl.com/wp-content/uploads/2024/12/kol_jp.jpeg">
                    <div class="overlay1">
                      <span>Japan</span>
                    </div>
                  </div>
                </a>
              </article>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-6">
              <article class="card-standard">
                <a title="superbpartygirl" href="https://superbpartygirl.com/models/korea-party-girl/" class="productCard text-center">
                  <div class="productCard-mainPic">
                    <img alt="superbpartygirl" src="https://superbpartygirl.com/wp-content/uploads/2024/12/kr_kol.jpg">
                    <div class="overlay1">
                      <span>Korea</span>
                    </div>
                  </div>
                </a>
              </article>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-6">
              <article class="card-standard">
                <a title="superbpartygirl" href="https://superbpartygirl.com/models/europe-party-girl/" class="productCard text-center">
                  <div class="productCard-mainPic">
                    <img alt="superbpartygirl" src="https://superbpartygirl.com/wp-content/uploads/2024/12/eu.jpg">
                    <div class="overlay1">
                      <span>Europe</span>
                    </div>
                  </div>
                </a>
              </article>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="contentBox-card">
		  <div class="title">
		  <h2>Meet Our Party Girls in Malaysia</h2>
		  </div>
		  <p>What if I told you that the perfect night out is real and waiting for you? Welcome to SuperB Party Girl, where we provide fantastic KL party girl with you at the center.<br/><br/>
This is about making lasting memories, not just employing someone to tag along. Our Malaysia party girls make every night unforgettable, be it a party celebration or a one-night stand. Energy, charisma, and charm in one appealing package.
</p>
		  <p><b>Why Accept Ordinary?</b></p>
		  <p>Admit it. Many nights out fail because they lack spark. The spark that transforms an average night into a story you’ll never stop telling. This is what our party girls offer.<br/><br/>
Think of it: Our gorgeous party girl Malaysia accompany you into a room. Heads turn. Conversations start. The mood changes instantaneously. She can make a fancy meal, a lively club, or a cozy one-on-one electric.<br/><br/>
This night out is customized for you.</p>
		  <p><b>Meet Your Perfect KL Party Girl</b></p>
<p>We know that everyone has a different ideal night. Thus, we avoid cookie-cutter. Each party girl in our lineup is a unique mix of beauty, intelligence, and personality ready to match your needs.<br/><br/>
Want to visit the hottest KTVs? Done. Need a confident, charming corporate gala companion? She’s prepared. Want to relax with drinks and stories? We found the perfect match.<br/><br/>
No awkward small talk. No energy mismatch. Just effortless, predestined connections.</p>
		  <p><b>The Secret Sauce</b></p>
<p>Most people overlook this: it's more than appearances. You know our KL party girls are gorgeous, but what makes them special is how they connect.<br/><br/>
These females can start a conversation, make you laugh, and make you feel special. They make every moment better by being there. Their adaptability improves any situation.<br/><br/>
You're scheduling someone who gets you and can boost your vibe, not just someone to spend the night with.</p>
		  <p><b>Our Promise: Unmatched Experience</b></p>
<p>You're hiring more than a service with SuperB Party Girl. Years of experience producing remarkable nights are at your disposal.<br/><br/>
Very picky about the party females we hire. Beautiful, intellectual, personable, and able to leave an impression. Every element is planned to ensure a smooth night.<br/><br/>
Reputation speaks for itself. Clients love how our KL party girls make casual nights extraordinary. Fun, sophistication, or the right blend of both awaits you here.<br/><br/>
What Happens When You Say “Yes”?</p>
		  <h3><b>When you book a KL party girl:</b></h3>
<p>You feel different when she arrives. Not coerced. The process is easy.</p>
		  <p>The Energy: She can read the room and create the appropriate atmosphere, whether it is a celebration or a quiet moment.</p>
		  <p>The Experience: Every moment is personalized. Because it is.
Tonight is your chance to live in the moment instead of going through the motions.</p>
		  <p><b>The Next Step</b></p>
<p>Life is too short for dull nights and chats. Say “yes” to SuperB Party Girl for unparalleled energy, unmatched camaraderie, and lifelong experiences.<br/><br/>
Are you ready to elevate your night? We're ready to act. Make tonight superb.</p>
	  </div> -->

      <div class="feature-article">
        <h2>What is Party Girl in Malaysia?</h2>
        <p class="lead">
          Your perfect evening awaits, but something feels incomplete without her presence. The missing part is the magnetic energy that only Party Girls can give. That spark turns ordinary nights into memories that will last a lifetime.<br>
          <strong>Malaysian Party Girls</strong> represents premium companionship designed for discerning gentlemen like yourself.
        </p>
        <p class="lead">
          These aren't ordinary girls you meet at random places downtown. They are well-chosen beauties who are skilled at seduction. Every girl adds a magnetic charm that adds sparkle to any gathering.
          Their mission goes beyond simple conversation or basic entertainment services. They create atmospheres where inhibitions fade and genuine connections flourish naturally.
        </p>

        <section class="feature-card">
          <h2>The Art of Perfect Companionship</h2>
          <p>
            Party Girls excel at reading your deepest desires without saying a word. Superb party girls know when to tease and when to listen closely. Their presence turns boring corporate events into thrilling adventures worth remembering.
          </p>
          <p>
            From intimate dinners to exclusive private parties, they adjust perfectly. Their vibe matches yours seamlessly, creating authentic connections that feel electric.
            These girls strike the right balance between class and fun. They make every time exceptional with their real excitement.
          </p>
        </section>

        <section class="feature-card">
          <h2>Party Girls vs. PR Girls: Understanding the Difference</h2>
          <div>
            <p>Most men don't realize the crucial difference between these two options.</p>
          </div>
          <p>
            <span class="tag">PR Girls</span> work at established venues like popular nightclubs and bars. You visit their territory and compete for limited attention with others. Their attention spreads thin across many different customers all night.

          </p>
          <p>
            <span class="tag tag-pink">Party Girls</span> delivers exclusive experiences directly to your chosen location instead. Your space hosts wonderful private moments. You have their whole attention throughout.
          </p>
          <p>
            The experience transforms from ordinary to extraordinary when you control everything. No competition or distractions, only pure connection and tremendous chemistry.

          </p>
        </section>

        <section class="feature-card">
          <h2>Premium Standards That Exceed Every Expectation</h2>
          <ul>
            <li>Each Party Girl upholds the highest standards of discretion and intelligence.</li>
            <li>Superb party girls are trained to understand that confidentiality is the key.</li>
            <li>Your satisfaction becomes their primary mission from the first moment.</li>
          </ul>
        </section>

        <h2 class="section-heading">Why You Need KL Party Girl in Malaysia?</h2>
        <div class="sub-text">
          <p>Each Party Girl upholds the highest standards of discretion, intelligence. Superb party girls are trained and well addressed to understand that confidentiality is the key. Your satisfaction becomes their primary mission from the first moment.</p>
        </div>
        <div class="grid-3">
          <section class="feature-card">
            <h3>Social Confidence That Commands Respect</h3>
            <p>Walking into any room with a stunning party girl changes everything instantly. Superb party girls' pleasant smiles attract you with delight, and anxiety fades away in seconds. Party Girl becomes your perfect conversation starter, drawing curious glances and envious stares.Other men notice the confidence radiating from your presence immediately. And you level up your status without wasting words. Our Party Girl amplifies your natural charisma in ways you never imagined possible.</p>
          </section>
          <section class="feature-card">
            <h3>Escape From Life's Relentless Pressure</h3>
            <p>Work stress melts away when her soft voice fills the silence. Her engaging presence provides the mental break your mind desperately craves. For precious hours, responsibilities fade into distant background noise completely.This isn't about complicated emotions or messy relationship drama whatsoever. Pure enjoyment flows naturally when someone focuses entirely on your pleasure.</p>
          </section>
          <section class="feature-card">
            <h3>Transform Every Gathering Into Magnetic Moments</h3>
            <p>Business dinners become thrilling adventures when she's by your side. Professional networking feels effortless with her charming personality supporting you. Corporate events transform from boring obligations into anticipated experiences you'll remember.
              These private moments give you the excitement and satisfaction that are impossible to achieve in any other enjoyment. Her presence elevates ordinary gatherings into exclusive, intimate encounters worth treasuring.</p>
          </section>
        </div>
        <div class="grid-3">
          <section class="feature-card">
            <h3>Freedom Without Emotional Complications</h3>
            <p>You would like these great arrangements without relationship baggage. Long-term obligations never complicate things.Dating turmoil is irrelevant when plans are simple.</p>
          </section>
          <section class="feature-card">
            <h3>Your Desires, Perfectly Customized</h3>
            <p>Every conversation adapts to topics that genuinely interest your mind. Party girl adjusts her vibe to match your mood, whatever it may be. Your satisfaction becomes her singular mission from the first moment.</p>
          </section>
          <section class="feature-card">
            <h3>Instant Access to Premium Companionship</h3>
            <p>Avoid time-wasting dating games for months. Quality companionship arrives when you need it most.Tonight might change everything for you.</p>
          </section>
        </div>

        <section class="feature-card">
          <h2>Types of Malaysia Party Girls</h2>
          <p>
            Every man deeply desires something different. Others want mild comfort, while others want adventurous adventures. Our handpicked selection matches your wildest fantasies.
            Each Party Girl brings unique energy that transforms ordinary nights forever.

          </p>
          <h3 class="sub-text">
            Physical Attraction That Ignites Passion
          </h3>
          <ul>
            <li><b class="tag tag-orange">Big Booty:</b> Big booty girls captivate men who appreciate curves that command attention. Her confident swagger makes every step a seductive dance. This Party Girl knows exactly how her silhouette drives you wild.
            </li>
            <li><b class="tag tag-indigo">Big Tits:</b> Big tits companions attract gentlemen who love feminine abundance and sensuality. Her natural elegance in figure and style creates an attraction that you will never want to escape. Every gesture becomes an invitation to explore forbidden territories together.
            </li>

            <li><b class="tag tag-purple">Long-legged:</b> Long-legged beauties appeal to sophisticated men who admire elegant proportions. Her graceful movements turn simple walking into mesmerizing performances. This Party Girl makes you feel powerful beside her statuesque presence.
            </li>

            <li><b class="tag tag-green">Tiny:</b> Tiny-waisted girls enchant men who crave delicate beauty they can protect. Her petite frame awakens your masculine instincts to cherish something precious.
            </li>
          </ul>
          <h3 class="sub-text">
            Personality Types That Match Your Mood

          </h3>
          <ul>
            <li><b class="tag tag-teal">Energetic:</b>Energetic party girls are perfect companions for men seeking thrilling adventures tonight. Her boundless enthusiasm transforms quiet evenings into unforgettable wild experiences.
            </li>
            <li><b class="tag tag-grey">Flirty:</b>Flirty companions are ideal for gentlemen who love playful teasing and seduction. Her mischievous smile promises secrets only you will discover later. This Party Girl makes ordinary conversation feel like foreplay itself.

            </li>

            <li><b class="tag tag-brown">Charm Smile:</b> Charm smile beauties attract men who appreciate warmth that melts hearts. Her radiant expression makes you feel like the most important person. Party girls look, in a way, like an invitation to celebrate the intimate moments, and every glance raises up.

            </li>

            <li><b class="tag tag-gold">Shyness:</b> Student appeals to protective men who enjoy awakening hidden passion slowly. Her innocent demeanor conceals desires waiting for your gentle guidance. This Party Girl makes you feel like her personal hero.
            </li>
          </ul>
          <h3 class="sub-text">
            Specialized Experiences for Unique Desires
          </h3>
          <ul>
            <li><b class="tag tag-blue">GFE:</b>GFE party girls provide authentic girlfriend experiences without relationship complications whatsoever. Her genuine affection feels completely real throughout your time together. Every moment becomes the tender intimacy you've been craving desperately.
            </li>
            <li><b class="tag tag-red">Student:</b> Student companions attract men who fantasize about young, curious minds. Her eager innocence, combined with hidden desires, creates intoxicating combinations. This Party Girl makes you feel like her personal teacher.
            </li>

            <li><b class="tag tag-cyan">Tattoos:</b> Tattoos are beauties, perfect for rebellious souls who appreciate edgy artistic expression. Her inked skin tells stories only you will explore tonight. Every mark becomes a treasure map to her secrets.
            </li>

            <li><b class="tag tag-lime">KOL:</b> KOL party girls bring social media glamour directly to your door. Her immaculate look makes you think you're dating a celebrity.
            </li>
          </ul>
        </section>

        <section class="feature-card">
          <h2>How Party Girl Bookings Work</h2>
          <ol>
            <li><b style="color:#ff2491;">Find Your Perfect Girl Tonight:</b> Browse our online gallery of Malaysia's hottest Party Girls now. Filter by tags that match what you want most. Read profiles showing each girl's special skills and talents. Check who's free and see clear prices for everything.
            </li>
            <li><b style="color:#ff2491;">Book Your Dream Night Fast:</b> Contact us through our private website or phone number today. Tell us your date, time, and where you want her. Say how long you want, plus any special things. Get quick approval with all the details you need.
            </li>
            <li><b style="color:#ff2491;">Safe Check For Everyone:</b> We confirm your location works for our girl's visit. Easy payment keeps your booking secure without any problems. Final okay comes fast after you finish this step.
            </li>
            <li><b style="color:#ff2491;">Getting Ready For You:</b> Your Party Girl gets ready and looks perfect beforehand. We handle travel so the party girl arrives on time exactly. The final call gives you her arrival time perfectly. Everything gets done right, so you just wait.
            </li>
            <li><b style="color:#ff2491;">Perfect Delivery to Your Place:</b>Your girl comes straight to your private location tonight. A professional greeting starts everything perfectly from the first second. Service begins exactly as we agreed, with full attention. Flexible plans change with what you want over time.
            </li>
          </ol>
          <b style="color:#ff2491;">Ready for your amazing night? Contact us right now.</b>

        </section>

        <section class="feature-card">
          <h2>Safety & Discretion</h2>
          <p class="lead">
            Your secrets stay locked away forever with us tonight. Every secret wish, desire, and fantasy is private.
            Our party girls receive thorough health checks before meeting any client. Physical safety comes first in everything we do, always. We care most about your health.
            Digital privacy is protected through encrypted communication systems only. Your personal details never get shared with anyone outside. Phone records and messages disappear after each completed session.</p>
          <p class="lead">
            Even your most embarrassing requests stay between you two. Judgment never enters our world of pure pleasure tonight. Whatever makes you happy becomes our only mission, always.
            Men who are married are at peace since their spouses never find out. We take care of the most sensitive circumstances for corporate leaders. You can go into banned locations without hurting your reputation.
            Nothing you say or do ever leaves the room.
          </p>
        </section>

        <section class="feature-card">
          <h2>How to Choose a Reputable Party Girl Platform in Malaysia?</h2>

          <ul>
            <li><b style="color: #ff2491;">Professional Quality:</b>
              <p class="lead">Quality platforms invest heavily in sleek website design and functionality. Clear pricing eliminates nasty surprises that ruin perfect nights completely.
                High-quality photos showcase each girl's true beauty without deception. Easy navigation gets you to your fantasy faster than ever.
                SSL security protects every secret conversation you'll have tonight.</p>
            </li>
            <li><b style="color: #ff2491;">Safety Standards:</b>
              <p class="lead">Health screening keeps every encounter safe and worry-free. Identity verification ensures you meet exactly who you expect.
                Safety measures protect both you and your chosen companion. Clear health policies give peace of mind during intimate moments.</p>
            </li>
            <li><b style="color: #ff2491;">Complete Privacy:</b>
              <p class="lead">Strong agreements keep your identity locked away from everyone. Secure data handling means your information stays completely private.
                Client details never get shared with anyone outside ever. Encrypted channels protect every message you send or receive.
              </p>
            </li>
            <li><b style="color: #ff2491;">Reviews Matter:</b>
              <p class="lead">Positive feedback shows other men found exactly what they wanted. Established track records in Malaysia prove long-term reliability.
                Trusted recommendations come from satisfied clients who return regularly.</p>
            </li>
            <li><b style="color: #ff2491;">Transparent Operations:</b>
              <p class="lead"> Clear terms prevent confusion about what you're actually getting. Upfront pricing means no shocking bills after your pleasure ends.
                Honest descriptions match exactly what arrives at your door.</p>
            </li>
          </ul>
        </section>
      </div>


      <!-- <div class="contentBox-card">
	<div class="title">
        <i class="fas fa-angle-double-right ml-2"></i>
		  <h2>What People Say About SuperB Party Girl Malaysia</h2>
		<p>Imagine entering an exciting, unforgettable world. Malaysian SuperB <a href="https://superbpartygirl.com/" class="link">Party Girl</a> charisma. For a night of fun, leisure, or adventure, these party girls redefine entertainment with their beauty, grace, and dynamic energy. They host nights and create memories. SuperB Party Girl Malaysia can make ordinary evenings extraordinary, according to these reviews.</p>
    </div>
		<div class="row">
		<div class="col-xl-3 col-lg-4 col-md-4 col-6">
        <article class="card-standard">
          <h3>A Night of Comfort and Joy</h3>
                <p><span class="reviewer">- Wei Ming Tan -</span></p>
                <p>At the SuperB Party Girl Malaysia station, I knew I was in for something amazing. It was modern, friendly, and energetic. My host was warm and welcoming, making me feel at home immediately. Comedy, storytelling, and games helped the evening fly by.</p>
                <p>I was then shown a cozy private room to sleep in. It was more than a party—it was true bonding. The next morning was like waking up in a dream where fun and relaxation were perfect. SuperB Party Girl Malaysia creates memories, not simply services.</p>
        </article>
      </div>
		<div class="col-xl-3 col-lg-4 col-md-4 col-6">
        <article class="card-standard">
          <h3>Party Liveliness</h3>
                <p><span class="reviewer">- Ahmad -</span></p>
                <p>Private parties might be difficult, but SuperB Party Girl Malaysia made it easy. I book a KL party girl to my villa, and the vibe changed immediately. She had this magnetic energy that brought laughter and life to the room.</p>
                <p>She easily interacted with my guests, danced to the night, and helped us set up beverages and music. She was unrivaled at making an evening effortless and memorable. My buddies raved about how the party felt alive like never before. Excellent Party Girl Malaysia is where the magic happens, so book now.</p>
        </article>
      </div>
		<div class="col-xl-3 col-lg-4 col-md-4 col-6">
        <article class="card-standard">
			<h3>Sailing into Bliss</h3>
                <p><span class="reviewer">- Ryo, Japan -</span></p>
                <p>Taking a Penang party girl on a sea trip in Malaysia was the highlight of my trip. Everything was handled professionally and carefully by SuperB Party Girl Malaysia when I booked her.</p>
                <p>The cruise was perfect—gentle seas, magnificent sunsets, and great company. She danced and laughed on the terrace like we were the only two people. The vacation was a celebration of life. Everything felt like a dream with her at my side. SuperB Party Girl Malaysia is my top recommendation for an exciting trip.</p>
        </article>
      </div>
		<div class="col-xl-3 col-lg-4 col-md-4 col-6">
        <article class="card-standard">
          <h3>Unmatched Generosity and Joy</h3>
                <p><span class="reviewer">- Chong Wei Lee, Malaysia -</span></p>
                <p>One day, a few of my friends from England came to visit, and they said they wanted to dance with KL party girls. That’s when I decided to book through SuperB Party Girl Malaysia. The experience was absolutely incredible. The KL party girls arrived with their signature energy, lighting up the atmosphere with their charm and graceful moves.</p>
                <p>My friends were overjoyed. They laughed and had a wonderful time dancing all night. My buddies gave the Penang party girls a big tip at night for their great service. Rarely are professionalism and humility so evident. For sincere connection and unforgettable enjoyment, choose SuperB Party Girl Malaysia.</p>
        </article>
      </div>
    </div>
	</div> -->
      <div class="reviews-section">
        <h2>What People Say About SuperB Party Girl Malaysia</h2>
        <div class="subtitle">
          Imagine entering an exciting, unforgettable world. Malaysian SuperB <span style="color:#ff2491;">Party Girl</span> charisma. For a night of fun, leisure, or adventure, these party girls redefine entertainment with their beauty, grace, and dynamic energy. They host nights and create memories. SuperB Party Girl Malaysia can make ordinary evenings extraordinary, according to these reviews.
        </div>
        <div class="reviews-list">
          <div class="review-card">
            <h3>A Night of Comfort and Joy</h3>
            <span class="reviewer">- Wei Ming Tan -</span>
            <p>At the SuperB Party Girl Malaysia station, I knew I was in for something amazing. It was modern, friendly, and energetic. My host was warm and welcoming, making me feel at home immediately. Comedy, storytelling, and games helped the evening fly by.</p>
            <p>I was then shown a cozy private room to sleep in. It was more than a party—it was true bonding. The next morning was like waking up in a dream where fun and relaxation were perfect. SuperB Party Girl Malaysia creates memories, not simply services.</p>
          </div>
          <div class="review-card">
            <h3>Party Liveliness</h3>
            <span class="reviewer">- Ahmad -</span>
            <p>Private parties might be difficult, but SuperB Party Girl Malaysia made it easy. I book a KL party girl to my villa, and the vibe changed immediately. She had this magnetic energy that brought laughter and life to the room.</p>
            <p>She easily interacted with my guests, danced to the night, and helped us set up beverages and music. She was unrivaled at making an evening effortless and memorable. My buddies raved about how the party felt alive like never before. Excellent Party Girl Malaysia is where the magic happens, so book now.</p>
          </div>
          <div class="review-card">
            <h3>Sailing into Bliss</h3>
            <span class="reviewer">- Ryo, Japan -</span>
            <p>Taking a Penang party girl on a sea trip in Malaysia was the highlight of my trip. Everything was handled professionally and carefully by SuperB Party Girl Malaysia when I booked her.</p>
            <p>The cruise was perfect—gentle seas, magnificent sunsets, and great company. She danced and laughed on the terrace like we were the only two people. The vacation was a celebration of life. Everything felt like a dream with her at my side. SuperB Party Girl Malaysia is my top recommendation for an exciting trip.</p>
          </div>
          <div class="review-card">
            <h3>Unmatched Generosity and Joy</h3>
            <span class="reviewer">- Chong Wei Lee, Malaysia -</span>
            <p>One day, a few of my friends from England came to visit, and they said they wanted to dance with KL party girls. That’s when I decided to book through SuperB Party Girl Malaysia. The experience was absolutely incredible. The KL party girls arrived with their signature energy, lighting up the atmosphere with their charm and graceful moves.</p>
            <p>My friends were overjoyed. They laughed and had a wonderful time dancing all night. My buddies gave the Penang party girls a big tip at night for their great service. Rarely are professionalism and humility so evident. For sincere connection and unforgettable enjoyment, choose SuperB Party Girl Malaysia.</p>
          </div>
        </div>
      </div>

      <div class="contentBox-card">
        <div class="title">
          <h2>FAQs About Party Girls in Malaysia
            <i class="fas fa-angle-double-right ml-2"></i>
          </h2>
        </div>
        <button class="accordion">
          <h3>What services does SuperB Party Girl Malaysia offer?</h3>
        </button>
        <div class="panel">
          <p>Our services include night hosting, dancing, casual companionship, exclusive fun, nightlife assistance, and more. To make any night memorable, our girls adapt!</p>
        </div>
        <button class="accordion">
          <h3>Can I Choose The Party Girl I Want?</h3>
        </button>
        <div class="panel">
          <p>Indeed! Choose a party girl from our gallery by looking at her appearance, character, or abilities. We are pleased to help you make your decision if you require assistance.</p>
        </div>
        <button class="accordion">
          <h3>How Do I Book A Penang Party Girl?</h3>
        </button>
        <div class="panel">
          <p>Choose your service, pick a penang party girl from our portfolio, fill out the booking form, and pay securely. Starts quickly and easily.</p>
        </div>
        <button class="accordion">
          <h3>Are The Services Discreet?</h3>
        </button>
        <div class="panel">
          <p>Absolutely! We prioritize privacy and ensure that all transactions and experiences are completely confidential. You can trust us for a professional and secure service.</p>
        </div>
        <button class="accordion">
          <h3>How Much Do The Malaysia Party Girl Services Cost?</h3>
        </button>
        <div class="panel">
          <p>The price depends on service and duration. Please contact us for prices and to customize your dream night with a party girl.</p>
        </div>
        <button class="accordion">
          <h3>Can I Request A Specific Experience For My Night?</h3>
        </button>
        <div class="panel">
          <p>Yes! Our Malaysia party girls can alter their act to your liking. Need dancing, hosting, or companionship? We can help.</p>
        </div>
        <button class="accordion">
          <h3>Are The KL Party Girls Available For Short-notice Bookings?</h3>
        </button>
        <div class="panel">
          <p>We prefer scheduling ahead, although last-minute requests are possible given availability. Request short-notice bookings directly.</p>
        </div>
        <button class="accordion">
          <h3>How do I Contact SuperB Party Girl Malaysia?</h3>
        </button>
        <div class="panel">
          <p>You can reach us via Telegram.</p>
        </div>
        <button class="accordion">
          <h3>Can I Book A Party Girl KL For A Private Activity?</h3>
        </button>
        <div class="panel">
          <p>Yes! Our KL party girls are perfect for private dinners, intimate gatherings, or VIP activities. They will make sure your occasion is truly special and memorable.</p>
        </div>
      </div>
      <!-- <div class="faq-section">
        <h2>
          FAQs About Party Girls in Malaysia
        </h2>
        <button class="accordion">
          <h3>Why Choose Superb Party Girl Malaysia?</h3>
        </button>
        <div class="panel">
          <p><b style="color: #ff2491;">Superb Party Girl</b> combines premium quality with unmatched discretion for gentlemen. Our verified companions exceed expectations every single time, guaranteed.
            Book your perfect night with Malaysia's most trusted platform now.
          </p>
        </div>
        <button class="accordion">
          <h3>What services does SuperB Party Girl Malaysia offer?</h3>
        </button>
        <div class="panel">
          <p>Our services include night hosting, dancing, casual companionship, exclusive fun, nightlife assistance, and more. To make any night memorable, our girls adapt!</p>
        </div>

        <button class="accordion">
          <h3>Can I Choose The Party Girl I Want?</h3>
        </button>
        <div class="panel">
          <p>Indeed! Choose a party girl from our gallery by looking at her appearance, character, or abilities. We are pleased to help you make your decision if you require assistance.</p>
        </div>

        <button class="accordion">
          <h3>How Do I Book A Penang Party Girl?</h3>
        </button>
        <div class="panel">
          <p>Choose your service, pick a penang party girl from our portfolio, fill out the booking form, and pay securely. Starts quickly and easily.</p>
        </div>

        <button class="accordion">
          <h3>Are The Services Discreet?</h3>
        </button>
        <div class="panel">
          <p>Absolutely! We prioritize privacy and ensure that all transactions and experiences are completely confidential. You can trust us for a professional and secure service.</p>
        </div>

        <button class="accordion">
          <h3>How Much Do The Malaysia Party Girl Services Cost?</h3>
        </button>
        <div class="panel">
          <p>The price depends on service and duration. Please contact us for prices and to customize your dream night with a party girl.</p>
        </div>

        <button class="accordion">
          <h3>Can I Request A Specific Experience For My Night?</h3>
        </button>
        <div class="panel">
          <p>Yes! Our Malaysia party girls can alter their act to your liking. Need dancing, hosting, or companionship? We can help.</p>
        </div>

        <button class="accordion">
          <h3>Are The KL Party Girls Available For Short-notice Bookings?</h3>
        </button>
        <div class="panel">
          <p>We prefer scheduling ahead, although last-minute requests are possible given availability. Request short-notice bookings directly.</p>
        </div>

        <button class="accordion">
          <h3>How do I Contact SuperB Party Girl Malaysia?</h3>
        </button>
        <div class="panel">
          <p>You can reach us via Telegram.</p>
        </div>

        <button class="accordion">
          <h3>Can I Book A Party Girl KL For A Private Activity?</h3>
        </button>
        <div class="panel">
          <p>Yes! Our KL party girls are perfect for private dinners, intimate gatherings, or VIP activities. They will make sure your occasion is truly special and memorable.</p>
        </div>
      </div> -->

      <script>
        jQuery(document).ready(function() {
          setTimeout(function() {
            //var tag_new = jQuery("template").eq(38).attr("id");
            var tag_new = jQuery("template").last().attr("id");
            console.log(tag_new);
            //alert(tag_new);
            jQuery("#" + tag_new).css("display", "none");
            jQuery("#" + tag_new).next().next().css("display", "none");
          }, 100);
        });
      </script>

</main>

<script src="/assets/js/models.js"></script>
<script>
  // 1. 先加 cleanCup 函数（建议放最上面）
  function cleanCup(cup) {
    cup = (cup || '').replace(/real/gi, '').replace(/\s+/g, '').toUpperCase();
    if (/^\d{2}[B-E][+-]?$/.test(cup)) return cup;
    let match = cup.match(/^([B-E])([+-]?)$/);
    if (match) {
      let letter = match[1],
        sign = match[2] || '';
      switch (letter) {
        case 'B':
          return '32B' + sign;
        case 'C':
          return '34C' + sign;
        case 'D':
          return '36D' + sign;
        case 'E':
          return '36E' + sign;
        default:
          return letter + sign;
      }
    }
    return cup;
  }

  const top10Order = ["A02", "A29", "B33", "B22", "A63", "A70", "A38", "B05", "A04", "A07"];
  const altTags = "Party Girl Model"; // Or use your altTags logic if needed
  const originClass = "my"; // Or logic based on your use case
  const isMobileTablet = window.innerWidth <= 900;
  const container = document.getElementById('top10-wrapper');
  const top10 = top10Order
    .map(id => (models.local.data || []).find(m => m.id === id))
    .filter(Boolean);

  // 2. 赋值 cup_cleaned（重点！加在这里就够）
  top10.forEach(model => {
    model.cup_cleaned = cleanCup(model.cup);
  });

  container.innerHTML = top10.map(model => {
    const featureClass = (model.featureClass && model.featureClass.trim() !== '') ? model.featureClass : model.type;
    const link = `https://t.me/SuperBbaby?text=Hi, I want to book ${encodeURIComponent(model.id + ' - ' + model.name)}`;
    const cardHTML = `
    <article class="card-standard">
      <div class="productCard-mainPic">
        <img 
          alt="${altTags}" 
          src="${model.image}" 
          data-imgsrc="${model.image}" 
          style="object-fit:cover;"
          onerror="this.onerror=null;
            this.src='/wp-content/uploads/2024/12/Party-Girl-Logo-01.png';
            this.style.objectFit='contain';"
          ${isMobileTablet ? '' : `onclick="if(this.hasAttribute('data-imgsrc')) showImgPreview(this.getAttribute('data-imgsrc'))"`}
        >
        <div class="productCard-featureClass-${originClass}">${featureClass}</div>
      </div>
      <div class="model-wrapper">
        <div class="model-info">
          <div class="model-details">
            <div class="main-desc">
              <div class="model-id">${model.id}</div>
              <div class="model-name">${model.name}</div>
            </div>
            <div class="short-desc">
              <div class="model-cup">${model.cup_cleaned || ''}</div>
              <div class="model-hw">${model.age} /${model.heightWeight}</div>
            </div>
          </div>
        </div>
        <div class="model-tags">
          ${(model.tags || []).map(tag => `<span class="tag">${tag}</span>`).join('')}
        </div>
      </div>
      ${isMobileTablet ? '' : `<a href="${link}" class="book-now-btn" target="_blank">Book Now!</a>`}
    </article>
  `;

    // If mobile/tablet, wrap with <a>
    if (isMobileTablet) {
      return `
      <div class="swiper-slide col-xl-3 col-lg-4 col-md-4 col-6">
        <a href="${link}" target="_blank" style="text-decoration:none;color:inherit;">
          ${cardHTML}
        </a>
      </div>
    `;
    } else {
      return `
      <div class="swiper-slide col-xl-3 col-lg-4 col-md-4 col-6">
        ${cardHTML}
      </div>
    `;
    }
  }).join('');

  // Swiper init
  const topswiper = new Swiper('.top10-swiper', {
    loop: true,
    slidesPerView: 3,
    spaceBetween: 0,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    autoplay: {
      delay: 2000,
      disableOnInteraction: false
    },
    breakpoints: {
      320: {
        slidesPerView: 2
      },
      500: {
        slidesPerView: 3
      },
      768: {
        slidesPerView: 4
      },
      1024: {
        slidesPerView: 5
      }
    }
  });
</script>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>