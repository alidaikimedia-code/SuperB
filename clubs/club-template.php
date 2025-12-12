<?php 
// Universal Club Template
// This template can be used for any club by setting the $page_key variable
// Usage: $page_key = 'club_key_name'; include 'club-template.php';

if (!isset($page_key)) {
    die('Error: $page_key must be set before including this template');
}

include $_SERVER['DOCUMENT_ROOT'] . '/header.php';

?>

<link rel="stylesheet" href="/assets/css/blogs.css">
<style>
  /* Club Template - Matching Website Theme */
  .clubs-body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    color: #fff;
    line-height: 1.6;
    background: #000;
    min-height: 100vh;
  }
  
  .clubs-h1, .clubs-h2, .clubs-h3 {
    color: #ff2491;
    font-weight: 700;
    letter-spacing: 1px;
    text-shadow: 0 0 20px rgba(255, 36, 145, 0.3);
  }
  
  .clubs-p { 
    color: #e0e0e0; 
    font-size: 1.1rem;
    line-height: 1.7;
  }

  /* Hero Section */
  .clubs-hero-section {
    position: relative;
    height: 70vh;
    min-height: 600px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    overflow: hidden;
    background: linear-gradient(135deg, #0a0a0a 0%, #1a0015 50%, #0a0a0a 100%);
  }
  
  .clubs-hero-section img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(0.6) saturate(1.3);
    z-index: 1;
    transition: all 1.5s ease;
  }
  
  .clubs-hero-section:hover img {
    transform: scale(1.08);
    filter: brightness(0.7) saturate(1.4);
  }
  
  .clubs-hero-bg-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(
      135deg, 
      rgba(10,10,10,0.4) 0%, 
      rgba(26,0,21,0.3) 30%, 
      rgba(255,36,145,0.1) 70%, 
      rgba(10,10,10,0.5) 100%
    );
    z-index: 2;
  }
  
  .clubs-hero-text-content {
    max-width: 800px;
    padding: 40px 20px;
    position: relative;
    z-index: 3;
    animation: fadeInUp 1s ease-out;
  }
  
  .clubs-hero-text-content .clubs-h1 {
    font-size: clamp(2.5rem, 5vw, 4rem);
    margin-bottom: 20px;
    color: #ffffff;
    text-shadow: 0 0 25px rgba(255,36,145,0.9), 0 0 50px rgba(255,36,145,0.5);
    font-weight: 800;
    line-height: 1.2;
    animation: clubsGlow 2.5s infinite alternate;
  }
  
  .clubs-hero-text-content .clubs-p {
    font-size: clamp(1.1rem, 2.5vw, 1.3rem);
    color: #f0f0f0;
    text-shadow: 0 2px 10px rgba(0,0,0,0.8);
    max-width: 600px;
    margin: 0 auto;
  }

  @keyframes clubsGlow {
    0% { text-shadow: 0 0 25px rgba(255,36,145,0.8), 0 0 50px rgba(255,36,145,0.4);}
    100% { text-shadow: 0 0 35px rgba(255,36,145,1), 0 0 70px rgba(255,36,145,0.6);}
  }

  /* Content Section */
  .clubs-page-section {
    max-width: 1200px;
    margin: 0 auto;
    padding: 80px 20px;
  }
  
  .clubs-section-inner {
    max-width: 900px;
    margin: 0 auto;
    text-align: left;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 24px;
    padding: 50px 40px;
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255,36,145,0.2);
    box-shadow: 
      0 20px 40px rgba(0,0,0,0.8),
      0 0 0 1px rgba(255,36,145,0.1),
      inset 0 1px 0 rgba(255,255,255,0.1);
    transition: all 0.6s ease;
    opacity: 0;
    transform: translateY(30px);
    position: relative;
    overflow: hidden;
  }
  
  .clubs-section-inner.visible {
    opacity: 1;
    transform: translateY(0);
  }
  
  .clubs-h2 {
    text-align: center;
    font-size: clamp(1.8rem, 4vw, 2.5rem);
    position: relative;
    margin-bottom: 30px;
    color: #ff2491;
    text-shadow: 0 0 20px rgba(255,36,145,0.6);
  }
  
  .clubs-h2::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 3px;
    background: linear-gradient(90deg, #ff2491, #ff5ab3);
    border-radius: 2px;
    box-shadow: 0 0 15px rgba(255, 36, 145, 0.5);
  }
  
  .clubs-h3 {
    font-size: clamp(1.4rem, 3vw, 1.8rem);
    color: #ff5ab3;
    margin-top: 40px;
    margin-bottom: 20px;
  }
  
  .clubs-img {
    width: 100%;
    max-width: 700px;
    height: 400px;
    display: block;
    margin: 40px auto;
    border-radius: 20px;
    object-fit: cover;
    box-shadow: 
      0 15px 35px rgba(0,0,0,0.6),
      0 0 0 1px rgba(255,36,145,0.2);
    transition: all 0.5s ease;
  }
  
  .clubs-img:hover {
    transform: scale(1.02);
    box-shadow: 
      0 20px 45px rgba(0,0,0,0.8),
      0 0 0 1px rgba(255,36,145,0.4);
  }

  .clubs-image-container, .clubs-main-image-container {
    margin: 40px 0;
    text-align: center;
    position: relative;
  }

  .clubs-main-img {
    max-width: 900px;
    border-radius: 20px;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.6);
  }

  .clubs-section-wrapper {
    margin-bottom: 60px;
    padding: 30px 0;
    border-bottom: 1px solid rgba(255, 36, 145, 0.1);
  }

  .clubs-section-wrapper:last-of-type {
    border-bottom: none;
  }

  /* FAQ Section */
  .clubs-faq-card {
    background: rgba(255,255,255,0.03);
    border-radius: 16px;
    margin-bottom: 20px;
    overflow: hidden;
    border: 1px solid rgba(255,36,145,0.2);
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s ease;
    backdrop-filter: blur(10px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.4);
  }
  
  .clubs-faq-card.visible {
    opacity: 1;
    transform: translateY(0);
  }
  
  .clubs-faq-card:hover {
    border-color: rgba(255,36,145,0.4);
    box-shadow: 0 12px 35px rgba(0,0,0,0.6);
  }
  
  .clubs-faq-header-card {
    padding: 25px 30px;
    cursor: pointer;
    font-weight: 600;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #ff2491;
    font-size: 1.1rem;
    transition: all 0.3s ease;
    position: relative;
  }
  
  .clubs-faq-header-card:hover {
    background: rgba(255,36,145,0.05);
    color: #ff5ab3;
  }
  
  .clubs-faq-header-card span {
    transition: all 0.4s ease;
    font-size: 1.5rem;
    font-weight: 300;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: rgba(255,36,145,0.1);
  }
  
  .clubs-faq-card.active .clubs-faq-header-card span {
    transform: rotate(45deg);
    background: rgba(255,36,145,0.2);
  }
  
  .clubs-faq-content-card {
    max-height: 0;
    overflow: hidden;
    padding: 0 30px;
    color: #e0e0e0;
    transition: all 0.5s ease;
    font-size: 1rem;
    line-height: 1.7;
  }
  
  .clubs-faq-card.active .clubs-faq-content-card {
    max-height: 500px;
    padding: 20px 30px 30px;
  }

  /* CTA Button Section */
  .clubs-cta-section {
    max-width: 1200px;
    margin: 0 auto;
    padding: 60px 20px;
    text-align: center;
  }

  .clubs-cta-wrapper {
    background: rgba(255, 255, 255, 0.05);
    border-radius: 24px;
    padding: 50px 40px;
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255,36,145,0.2);
    box-shadow: 
      0 20px 40px rgba(0,0,0,0.8),
      0 0 0 1px rgba(255,36,145,0.1),
      inset 0 1px 0 rgba(255,255,255,0.1);
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s ease;
  }

  .clubs-cta-wrapper.visible {
    opacity: 1;
    transform: translateY(0);
  }

  .clubs-cta-button {
    display: inline-block;
    padding: 18px 45px;
    background: linear-gradient(135deg, #ff2491 0%, #ff5ab3 100%);
    color: #ffffff;
    text-decoration: none;
    font-size: 1.2rem;
    font-weight: 700;
    border-radius: 50px;
    box-shadow: 
      0 8px 25px rgba(255, 36, 145, 0.4),
      0 0 0 1px rgba(255,36,145,0.2);
    transition: all 0.4s ease;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    position: relative;
    overflow: hidden;
  }

  .clubs-cta-button::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    transition: left 0.5s ease;
  }

  .clubs-cta-button:hover {
    transform: translateY(-3px) scale(1.05);
    box-shadow: 
      0 12px 35px rgba(255, 36, 145, 0.6),
      0 0 0 1px rgba(255,36,145,0.4);
    background: linear-gradient(135deg, #ff5ab3 0%, #ff2491 100%);
  }

  .clubs-cta-button:hover::before {
    left: 100%;
  }

  .clubs-cta-text {
    color: #e0e0e0;
    font-size: 1.1rem;
    margin-bottom: 25px;
    line-height: 1.6;
  }

  /* Animations */
  @keyframes fadeInUp {
    0% { opacity: 0; transform: translateY(30px); }
    100% { opacity: 1; transform: translateY(0); }
  }

  /* Responsive Design */
  @media (max-width: 768px) {
    .clubs-hero-section {
      height: 50vh;
      min-height: 400px;
    }
    
    .clubs-hero-text-content {
      padding: 30px 15px;
    }
    
    .clubs-page-section {
      padding: 60px 15px;
    }
    
    .clubs-section-inner {
      padding: 30px 20px;
      margin: 0 10px;
    }
    
    .clubs-h2 {
      font-size: clamp(1.5rem, 6vw, 2rem);
    }
    
    .clubs-p {
      font-size: 1rem;
    }
    
    .clubs-img {
      height: 250px;
      margin: 30px auto;
    }
    
    .clubs-faq-header-card {
      padding: 20px 15px;
      font-size: 1rem;
    }
    
    .clubs-faq-content-card {
      padding: 0 15px;
    }
    
    .clubs-faq-card.active .clubs-faq-content-card {
      padding: 15px 15px 20px;
    }

    .clubs-cta-section {
      padding: 40px 15px;
    }

    .clubs-cta-wrapper {
      padding: 35px 25px;
    }

    .clubs-cta-button {
      padding: 16px 35px;
      font-size: 1.1rem;
      width: 100%;
      max-width: 300px;
    }

    .clubs-cta-text {
      font-size: 1rem;
      margin-bottom: 20px;
    }
  }
</style>

<section class="clubs-body">
  <!-- Hero Section -->
  <header class="clubs-hero-section">
    <img src="<?= $texts[$page_key]['hero_image'] ?? '/clubs-images/default-club.jpg' ?>" 
         alt="<?= $texts[$page_key]['hero_image_alt'] ?? 'Club Image' ?>">
    <div class="clubs-hero-bg-overlay"></div>
    <div class="clubs-hero-text-content">
      <h1 class="clubs-h1"><?= $texts[$page_key]['hero_title'] ?? 'Club Title' ?></h1>
      <p class="clubs-p"><?= $texts[$page_key]['hero_description'] ?? 'Club Description' ?></p>
    </div>
  </header>

  <!-- Club Content Section -->
  <section id="club-content" class="clubs-page-section">
    <div class="clubs-section-inner">
      
      <!-- Introduction -->
      <?php if (isset($texts[$page_key]['content']['intro'])): ?>
        <p class="clubs-p"><?= $texts[$page_key]['content']['intro'] ?></p>
      <?php endif; ?>
      
      <!-- Dynamic Sections -->
      <?php 
      $section_count = 1;
      while (isset($texts[$page_key]['content']['section' . $section_count . '_title'])): 
      ?>
        <div class="clubs-section-wrapper">
          <h2 class="clubs-h2"><?= $texts[$page_key]['content']['section' . $section_count . '_title'] ?></h2>
          <p class="clubs-p"><?= $texts[$page_key]['content']['section' . $section_count . '_content'] ?></p>
          
          <!-- Content Image (if exists for this section) -->
          <?php if (isset($texts[$page_key]['content']['section' . $section_count . '_image'])): ?>
            <div class="clubs-image-container">
              <img src="<?= $texts[$page_key]['content']['section' . $section_count . '_image'] ?>" 
                   alt="<?= $texts[$page_key]['content']['section' . $section_count . '_image_alt'] ?? 'Content Image' ?>" 
                   class="clubs-img">
            </div>
          <?php endif; ?>
        </div>
        
        <?php $section_count++; ?>
      <?php endwhile; ?>

      <!-- Main Content Image (if exists) -->
      <?php if (isset($texts[$page_key]['content_image'])): ?>
        <div class="clubs-main-image-container">
          <img src="<?= $texts[$page_key]['content_image'] ?>" 
               alt="<?= $texts[$page_key]['content_image_alt'] ?? 'Content Image' ?>" 
               class="clubs-img clubs-main-img">
        </div>
      <?php endif; ?>

      <!-- Conclusion Section -->
      <?php if (isset($texts[$page_key]['content']['conclusion_title'])): ?>
        <h2 class="clubs-h2"><?= $texts[$page_key]['content']['conclusion_title'] ?></h2>
        <p class="clubs-p"><?= $texts[$page_key]['content']['conclusion_content'] ?></p>
      <?php endif; ?>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="clubs-cta-section">
    <div class="clubs-cta-wrapper">
      <p class="clubs-cta-text">Ready to experience the night? Connect with us on Telegram and book your unforgettable evening.</p>
      <a href="https://t.me/superBlocalgirls" target="_blank" rel="noopener noreferrer" class="clubs-cta-button">
        Book Now
      </a>
    </div>
  </section>

  <!-- FAQ Section -->
  <?php if (isset($texts[$page_key]['faqs']) && !empty($texts[$page_key]['faqs'])): ?>
  <section class="clubs-page-section">
    <h2 class="clubs-h2">People Also Ask About <?= $texts[$page_key]['hero_title'] ?? 'This Club' ?></h2>
    <?php foreach($texts[$page_key]['faqs'] as $faq): ?>
    <div class="clubs-faq-card">
      <div class="clubs-faq-header-card">
        <?= $faq['question'] ?>
        <span>+</span>
      </div>
      <div class="clubs-faq-content-card"><?= $faq['answer'] ?></div>
    </div>
    <?php endforeach; ?>
  </section>
  <?php endif; ?>

  <script>
    // Professional scroll animations
    const sectionObserver = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          entry.target.style.opacity = 1;
          entry.target.style.transform = 'translateY(0)';
        }
      });
    }, { 
      threshold: 0.1,
      rootMargin: '0px 0px -30px 0px'
    });
    
    // Observe all elements that need animation
    document.querySelectorAll('.clubs-section-inner, .clubs-cta-wrapper, .clubs-faq-card').forEach((el, index) => {
      el.style.animationDelay = `${index * 0.15}s`;
      sectionObserver.observe(el);
    });

    // Professional FAQ Accordion with smooth animations
    document.querySelectorAll('.clubs-faq-card').forEach(faq => {
      const header = faq.querySelector('.clubs-faq-header-card');
      const content = faq.querySelector('.clubs-faq-content-card');
      
      header.addEventListener('click', () => {
        const isActive = faq.classList.contains('active');
        
        // Close all other FAQs
        document.querySelectorAll('.clubs-faq-card.active').forEach(otherFaq => {
          if (otherFaq !== faq) {
            otherFaq.classList.remove('active');
            otherFaq.querySelector('.clubs-faq-content-card').style.maxHeight = '0';
          }
        });
        
        // Toggle current FAQ
        if (isActive) {
          faq.classList.remove('active');
          content.style.maxHeight = '0';
        } else {
          faq.classList.add('active');
          content.style.maxHeight = content.scrollHeight + 'px';
        }
      });
    });

    // Smooth scroll behavior for better UX
    document.documentElement.style.scrollBehavior = 'smooth';
    
    // Add loading animation
    window.addEventListener('load', () => {
      document.body.style.opacity = '1';
    });

    // Smooth scroll for internal links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });
  </script>
</section>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>
