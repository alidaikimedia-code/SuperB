<?php 
// Universal Blog Template
// This template can be used for any blog by setting the $page_key variable
// Usage: $page_key = 'blog_key_name'; include 'blog-template.php';

if (!isset($page_key)) {
    die('Error: $page_key must be set before including this template');
}

include $_SERVER['DOCUMENT_ROOT'] . '/header.php';

?>

<link rel="stylesheet" href="/assets/css/blogs.css">
<style>
  /* Blog Template - Matching Website Theme */
  .blogs-body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    color: #fff;
    line-height: 1.6;
    background: #000;
    min-height: 100vh;
  }
  
  .blogs-h1, .blogs-h2, .blogs-h3 {
    color: #ff2491;
    font-weight: 700;
    letter-spacing: 1px;
    text-shadow: 0 0 20px rgba(255, 36, 145, 0.3);
  }
  
  .blogs-p { 
    color: #e0e0e0; 
    font-size: 1.1rem;
    line-height: 1.7;
  }

  /* Hero Section - More Visible Image */
  .blogs-hero-section {
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
  
  .blogs-hero-section img {
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
  
  .blogs-hero-section:hover img {
    transform: scale(1.08);
    filter: brightness(0.7) saturate(1.4);
  }
  
  .blogs-hero-bg-overlay {
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
  
  .blogs-hero-text-content {
    max-width: 800px;
    padding: 40px 20px;
    position: relative;
    z-index: 3;
    animation: fadeInUp 1s ease-out;
  }
  
  .blogs-hero-text-content .blogs-h1 {
    font-size: clamp(2.5rem, 5vw, 4rem);
    margin-bottom: 20px;
    color: #ffffff;
    text-shadow: 0 0 25px rgba(255,36,145,0.9), 0 0 50px rgba(255,36,145,0.5);
    font-weight: 800;
    line-height: 1.2;
    animation: blogsGlow 2.5s infinite alternate;
  }
  
  .blogs-hero-text-content .blogs-p {
    font-size: clamp(1.1rem, 2.5vw, 1.3rem);
    color: #f0f0f0;
    text-shadow: 0 2px 10px rgba(0,0,0,0.8);
    max-width: 600px;
    margin: 0 auto;
  }

  @keyframes blogsGlow {
    0% { text-shadow: 0 0 25px rgba(255,36,145,0.8), 0 0 50px rgba(255,36,145,0.4);}
    100% { text-shadow: 0 0 35px rgba(255,36,145,1), 0 0 70px rgba(255,36,145,0.6);}
  }

  /* Content Section - Dark Theme */
  .blogs-page-section {
    max-width: 1200px;
    margin: 0 auto;
    padding: 80px 20px;
  }
  
  .blogs-section-inner {
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
  
  .blogs-section-inner.visible {
    opacity: 1;
    transform: translateY(0);
  }
  
  .blogs-h2 {
    text-align: center;
    font-size: clamp(1.8rem, 4vw, 2.5rem);
    position: relative;
    margin-bottom: 30px;
    color: #ff2491;
    text-shadow: 0 0 20px rgba(255,36,145,0.6);
  }
  
  .blogs-h2::after {
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
  
  .blogs-h3 {
    font-size: clamp(1.4rem, 3vw, 1.8rem);
    color: #ff5ab3;
    margin-top: 40px;
    margin-bottom: 20px;
  }
  
  .blogs-img {
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
  
  .blogs-img:hover {
    transform: scale(1.02);
    box-shadow: 
      0 20px 45px rgba(0,0,0,0.8),
      0 0 0 1px rgba(255,36,145,0.4);
  }

  .blogs-image-container, .blogs-main-image-container {
    margin: 40px 0;
    text-align: center;
    position: relative;
  }

  .blogs-main-img {
    max-width: 900px;
    border-radius: 20px;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.6);
  }

  .blogs-section-wrapper {
    margin-bottom: 60px;
    padding: 30px 0;
    border-bottom: 1px solid rgba(255, 36, 145, 0.1);
  }

  .blogs-section-wrapper:last-of-type {
    border-bottom: none;
  }

  /* FAQ Section - Dark Theme */
  .blogs-faq-card {
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
  
  .blogs-faq-card.visible {
    opacity: 1;
    transform: translateY(0);
  }
  
  .blogs-faq-card:hover {
    border-color: rgba(255,36,145,0.4);
    box-shadow: 0 12px 35px rgba(0,0,0,0.6);
  }
  
  .blogs-faq-header-card {
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
  
  .blogs-faq-header-card:hover {
    background: rgba(255,36,145,0.05);
    color: #ff5ab3;
  }
  
  .blogs-faq-header-card span {
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
  
  .blogs-faq-card.active .blogs-faq-header-card span {
    transform: rotate(45deg);
    background: rgba(255,36,145,0.2);
  }
  
  .blogs-faq-content-card {
    max-height: 0;
    overflow: hidden;
    padding: 0 30px;
    color: #e0e0e0;
    transition: all 0.5s ease;
    font-size: 1rem;
    line-height: 1.7;
  }
  
  .blogs-faq-card.active .blogs-faq-content-card {
    max-height: 500px;
    padding: 20px 30px 30px;
  }

  /* Animations */
  @keyframes fadeInUp {
    0% { opacity: 0; transform: translateY(30px); }
    100% { opacity: 1; transform: translateY(0); }
  }

  /* Responsive Design */
  @media (max-width: 768px) {
    .blogs-hero-section {
      height: 50vh;
      min-height: 400px;
    }
    
    .blogs-hero-text-content {
      padding: 30px 15px;
    }
    
    .blogs-page-section {
      padding: 60px 15px;
    }
    
    .blogs-section-inner {
      padding: 30px 20px;
      margin: 0 10px;
    }
    
    .blogs-h2 {
      font-size: clamp(1.5rem, 6vw, 2rem);
    }
    
    .blogs-p {
      font-size: 1rem;
    }
    
    .blogs-img {
      height: 250px;
      margin: 30px auto;
    }
    
    .blogs-faq-header-card {
      padding: 20px 15px;
      font-size: 1rem;
    }
    
    .blogs-faq-content-card {
      padding: 0 15px;
    }
    
    .blogs-faq-card.active .blogs-faq-content-card {
      padding: 15px 15px 20px;
    }
  }
</style>

<section class="blogs-body">
  <!-- Hero Section -->
  <header class="blogs-hero-section">
    <img src="<?= $texts[$page_key]['hero_image'] ?? '/blogs-images/default-hero.png' ?>" 
         alt="<?= $texts[$page_key]['hero_image_alt'] ?? 'Blog Image' ?>">
    <div class="blogs-hero-bg-overlay"></div>
    <div class="blogs-hero-text-content">
      <h1 class="blogs-h1"><?= $texts[$page_key]['hero_title'] ?? 'Blog Title' ?></h1>
      <p class="blogs-p"><?= $texts[$page_key]['hero_description'] ?? 'Blog Description' ?></p>
    </div>
  </header>

  <!-- Blog Content Section -->
  <section id="blog-content" class="blogs-page-section">
    <div class="blogs-section-inner">
      
      <!-- Introduction -->
      <?php if (isset($texts[$page_key]['content']['intro'])): ?>
        <p class="blogs-p"><?= $texts[$page_key]['content']['intro'] ?></p>
      <?php endif; ?>
      
      <!-- Dynamic Sections -->
      <?php 
      $section_count = 1;
      while (isset($texts[$page_key]['content']['section' . $section_count . '_title'])): 
      ?>
        <div class="blogs-section-wrapper">
          <h2 class="blogs-h2"><?= $texts[$page_key]['content']['section' . $section_count . '_title'] ?></h2>
          <p class="blogs-p"><?= $texts[$page_key]['content']['section' . $section_count . '_content'] ?></p>
          
          <!-- Content Image (if exists for this section) -->
          <?php if (isset($texts[$page_key]['content']['section' . $section_count . '_image'])): ?>
            <div class="blogs-image-container">
              <img src="<?= $texts[$page_key]['content']['section' . $section_count . '_image'] ?>" 
                   alt="<?= $texts[$page_key]['content']['section' . $section_count . '_image_alt'] ?? 'Content Image' ?>" 
                   class="blogs-img">
            </div>
          <?php endif; ?>
        </div>
        
        <?php $section_count++; ?>
      <?php endwhile; ?>

      <!-- Main Content Image (if exists) -->
      <?php if (isset($texts[$page_key]['content_image'])): ?>
        <div class="blogs-main-image-container">
          <img src="<?= $texts[$page_key]['content_image'] ?>" 
               alt="<?= $texts[$page_key]['content_image_alt'] ?? 'Content Image' ?>" 
               class="blogs-img blogs-main-img">
        </div>
      <?php endif; ?>

      <!-- Conclusion Section -->
      <?php if (isset($texts[$page_key]['content']['conclusion_title'])): ?>
        <h2 class="blogs-h2"><?= $texts[$page_key]['content']['conclusion_title'] ?></h2>
        <p class="blogs-p"><?= $texts[$page_key]['content']['conclusion_content'] ?></p>
      <?php endif; ?>
    </div>
  </section>

  <!-- FAQ Section -->
  <?php if (isset($texts[$page_key]['faqs']) && !empty($texts[$page_key]['faqs'])): ?>
  <section class="blogs-page-section">
    <h2 class="blogs-h2">FAQs</h2>
    <?php foreach($texts[$page_key]['faqs'] as $faq): ?>
    <div class="blogs-faq-card">
      <div class="blogs-faq-header-card"><?= $faq['question'] ?></div>
      <div class="blogs-faq-content-card"><?= $faq['answer'] ?></div>
    </div>
    <?php endforeach; ?>
  </section>
  <?php endif; ?>

  <?php if (isset($texts[$page_key]['faqs']) && !empty($texts[$page_key]['faqs'])): ?>
    <?= generateBlogPageFAQSchema($texts[$page_key]['faqs'], $texts[$page_key]['title'] ?? 'Blog Post') ?>
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
    document.querySelectorAll('.blogs-section-inner, .blogs-faq-card').forEach((el, index) => {
      el.style.animationDelay = `${index * 0.15}s`;
      sectionObserver.observe(el);
    });

    // Professional FAQ Accordion with smooth animations
    document.querySelectorAll('.blogs-faq-card').forEach(faq => {
      const header = faq.querySelector('.blogs-faq-header-card');
      const content = faq.querySelector('.blogs-faq-content-card');
      
      header.addEventListener('click', () => {
        const isActive = faq.classList.contains('active');
        
        // Close all other FAQs
        document.querySelectorAll('.blogs-faq-card.active').forEach(otherFaq => {
          if (otherFaq !== faq) {
            otherFaq.classList.remove('active');
            otherFaq.querySelector('.blogs-faq-content-card').style.maxHeight = '0';
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
