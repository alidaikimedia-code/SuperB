<?php
$page_key = 'ampang-02';
include $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>
<style>
/* Base */
.ampang-02-body{
  margin:0; 
  font-family:'Poppins',sans-serif; 
  background:#0a0a0a; 
  color:#fff; 
  line-height:1.7;
}
h1,h2,h3{ color:#ff2491; margin-bottom:15px; font-weight:600; }
p{ color:#ddd; margin-bottom:20px; }
a{ color:#ff2491; text-decoration:none; transition:0.3s;}
a:hover{ color:#fff; }

/* Hero Section */
.hero-section {
  position: relative;
  height: 90vh;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  overflow: hidden;
}
.hero-section img {
  position: absolute;
  top:0; left:0;
  width:100%;
  height:100%;
  object-fit: cover;
  filter: brightness(50%);
  z-index: -2;
  transition: transform 1.2s ease;
}
.hero-section:hover img { transform: scale(1.05); }

.hero-bg-overlay {
  position: absolute;
  top:0; left:0;
  width:100%;
  height:100%;
  background: linear-gradient(to bottom, rgba(10,10,10,0.5) 0%, rgba(26,0,21,0.8) 100%);
  z-index: -1;
}

.hero-text-content {
  max-width: 900px;
  padding: 20px;
  color: #fff;
  animation: fadeSlide 1.5s ease forwards;
  opacity: 0;
}
.hero-text-content h1 {
  font-size: clamp(36px,5vw,64px);
  color: #ff2491;
  margin-bottom: 20px;
  text-shadow: 0 0 15px #ff2491, 0 0 30px #ff5ab3, 0 0 50px #ff2491;
  animation: neonGlow 2s ease-in-out infinite alternate;
}
.hero-text-content p {
  font-size: clamp(18px,2.5vw,22px);
  color: #fff;
  line-height: 1.6;
  text-shadow: 0 0 15px rgba(0,0,0,0.6);
  margin-bottom: 30px;
}
.hero-button {
  display: inline-block;
  padding: 12px 28px;
  font-size: 18px;
  font-weight: 600;
  color: #fff;
  background: linear-gradient(90deg,#ff2491,#ff5ab3);
  border-radius: 50px;
  text-decoration: none;
  box-shadow: 0 8px 25px rgba(255,36,145,0.5);
  transition: 0.4s;
}
.hero-button:hover {
  transform: scale(1.05);
  box-shadow: 0 12px 35px rgba(255,36,145,0.7);
}

/* Animations */
@keyframes fadeSlide {
  0% { opacity:0; transform: translateY(30px);}
  100% { opacity:1; transform: translateY(0);}
}
@keyframes neonGlow {
  0% { text-shadow: 0 0 10px #ff2491, 0 0 20px #ff5ab3;}
  100% { text-shadow: 0 0 25px #ff2491, 0 0 50px #ff5ab3;}
}

/* Section */
.page-section{ max-width:1200px; margin:auto; padding:60px 20px; }
.section-inner{ max-width:900px; margin:auto; text-align:center; }

/* Feature Cards */
.feature-cards{ display:grid; grid-template-columns:repeat(auto-fit,minmax(260px,1fr)); gap:30px; margin-top:40px; }
.feature-card{ background:rgba(255,255,255,0.08); border-radius:18px; padding:28px; backdrop-filter:blur(12px); border:1px solid rgba(255,36,145,0.3); box-shadow:0 10px 30px rgba(0,0,0,0.6); transition:0.4s; opacity:0; transform:translateY(20px);}
.feature-card:hover{ transform:translateY(-8px) scale(1.03); box-shadow:0 15px 40px rgba(255,36,145,0.6); }
.feature-card img{ width:100%; border-radius:15px; margin-bottom:15px; }

/* FAQ */
.faq-card{ background:rgba(255,255,255,0.05); border-radius:12px; margin-bottom:15px; overflow:hidden; border:1px solid rgba(255,36,145,0.3); }
.faq-header-card{ padding:18px 22px; cursor:pointer; font-weight:bold; display:flex; justify-content:space-between; align-items:center; color:#ff2491;}
.faq-header-card span{ transition:transform 0.3s ease; }
.faq-card.active .faq-header-card span{ transform:rotate(45deg); }
.faq-content-card{ max-height:0; overflow:hidden; padding:0 22px; color:#ddd; transition:max-height 0.5s ease, padding 0.5s ease;}
.faq-card.active .faq-content-card{ max-height:300px; padding:15px 22px 22px; }

/* Footer */
.page-footer{ background: linear-gradient(90deg,#0a0a0a,#1a0015); color:#bbb; text-align:center; padding:25px; border-top:1px solid rgba(255,36,145,0.2); box-shadow:0 -5px 25px rgba(255,36,145,0.2); }
</style>

<section class="ampang-02-body">
<!-- Hero -->
<header class="hero-section">
  <img src="https://staging2.superbpartygirl.com/modelsimages/model5.webp" alt="Hero Image">
  <div class="hero-bg-overlay"></div>
  <div class="hero-text-content">
    <h1>Superb Party Girl – Exclusive Companionship in Ampang</h1>
    <p>Ampang sparkles with life. Luxury hotels, chic restaurants, and nightlife that never rests. Superb Party Girl offers companionship that feels refined, authentic, and unforgettable.</p>
    <a href="#intro" class="hero-button">Explore More</a>
  </div>
</header>

<!-- Intro Section -->
<section id="intro" class="page-section" style="background: url('https://staging2.superbpartygirl.com/modelsimages/model1.webp') center/cover no-repeat; padding:80px 20px; border-radius:20px;">
  <div class="section-inner" style="background: rgba(0,0,0,0.6); padding:40px; border-radius:20px;">
    <p style="font-size:1.2rem; line-height:1.8; color:#fff;">Our companions are never just about looks. They bring charm, warmth, and elegance into every moment. Each one is handpicked to ensure your time together isn’t ordinary, it’s memorable.</p>
    <p style="font-size:1.1rem; color:#ddd;">This isn’t just a typical escort service. We offer longer bookings and full-day experiences. Whether attending social events, exclusive travel, or private companionship, you’ll notice the difference instantly.</p>
    <p style="font-size:1.1rem; color:#ddd;">Details matter. Every model is chosen for beauty, intelligence, class, and presence. Privacy is protected. Comfort is a priority. Quality? Always unmatched.</p>
    <p style="font-size:1.1rem; color:#ddd;">Step into an exclusive escort service in Ampang where sophistication rules and moments linger long after the night ends.</p>
  </div>
</section>

<!-- Features Section -->
<section class="page-section">
  <h2 style="text-align:center;">Key Highlights</h2>
  <div class="feature-cards">
    <div class="feature-card">
      <img src="https://staging2.superbpartygirl.com/modelsimages/model2.webp" alt="Exclusivity">
      <h3>Exclusivity</h3>
      <p>Handpicked companions ensure a refined, unique experience every time.</p>
    </div>
    <div class="feature-card">
      <img src="https://staging2.superbpartygirl.com/modelsimages/model3.webp" alt="Full-Day Bookings">
      <h3>Full-Day Bookings</h3>
      <p>Enjoy freedom, connection, and luxury without limits.</p>
    </div>
    <div class="feature-card">
      <img src="https://staging2.superbpartygirl.com/modelsimages/model4.webp" alt="Privacy & Discretion">
      <h3>Privacy & Discretion</h3>
      <p>Your comfort and confidentiality are always guaranteed.</p>
    </div>
    <div class="feature-card">
      <img src="https://staging2.superbpartygirl.com/modelsimages/model5.webp" alt="Elegant Companions">
      <h3>Elegant Companions</h3>
      <p>Models chosen for beauty, charm, intelligence, and sophistication.</p>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="page-section">
  <h2>FAQs</h2>
  <div class="faq-card"><div class="faq-header-card">What makes Superb Party Girl stand out in Ampang?</div><div class="faq-content-card">Exclusivity, discretion, and real connection define our service.</div></div>
  <div class="faq-card"><div class="faq-header-card">Can I book a companion for a whole day?</div><div class="faq-content-card">Yes, extended and full-day experiences are available.</div></div>
  <div class="faq-card"><div class="faq-header-card">Is my privacy guaranteed?</div><div class="faq-content-card">Absolutely, confidentiality is always maintained.</div></div>
  <div class="faq-card"><div class="faq-header-card">Can companions attend public events with me?</div><div class="faq-content-card">Yes, they're perfect for social gatherings, parties, and dinners.</div></div>
  <div class="faq-card"><div class="faq-header-card">How do I book a Superb Party Girl in Ampang?</div><div class="faq-content-card">Complete the secure booking process through our platform.</div></div>
</section>



<script>
// Animate feature cards on scroll
const cardObserver = new IntersectionObserver(entries=>{
  entries.forEach(entry=>{
    if(entry.isIntersecting){
      entry.target.style.opacity=1;
      entry.target.style.transform='translateY(0)';
    }
  });
},{threshold:0.2});
document.querySelectorAll('.feature-card').forEach(el=>cardObserver.observe(el));

// FAQ Accordion
document.querySelectorAll('.faq-card').forEach(faq=>{
  faq.querySelector('.faq-header-card').addEventListener('click',()=>faq.classList.toggle('active'));
});
</script>


