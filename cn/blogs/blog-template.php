<?php 
// Universal Blog Template for Chinese
// This template can be used for any blog by setting the $page_key variable
// Usage: $page_key = 'blog_key_name'; include 'blog-template.php';

if (!isset($page_key)) {
    die('Error: $page_key must be set before including this template');
}
include $_SERVER['DOCUMENT_ROOT'] . '/header.php';

?>

<link rel="stylesheet" href="/assets/css/blogs.css">

<section class="blogs-body">
  <!-- Hero Section -->
  <header class="blogs-hero-section">
    <img src="<?= $texts[$page_key]['hero_image'] ?? '/blogs-images/default-hero.png' ?>" 
         alt="<?= $texts[$page_key]['hero_image_alt'] ?? '博客图片' ?>">
    <div class="blogs-hero-bg-overlay"></div>
    <div class="blogs-hero-text-content">
      <h1 class="blogs-h1"><?= $texts[$page_key]['hero_title'] ?? '博客标题' ?></h1>
      <p class="blogs-p"><?= $texts[$page_key]['hero_description'] ?? '博客描述' ?></p>
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
                   alt="<?= $texts[$page_key]['content']['section' . $section_count . '_image_alt'] ?? '内容图片' ?>" 
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
               alt="<?= $texts[$page_key]['content_image_alt'] ?? '内容图片' ?>" 
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
    <h2 class="blogs-h2">常见问题</h2>
    <?php foreach($texts[$page_key]['faqs'] as $faq): ?>
    <div class="blogs-faq-card">
      <div class="blogs-faq-header-card"><?= $faq['question'] ?></div>
      <div class="blogs-faq-content-card"><?= $faq['answer'] ?></div>
    </div>
    <?php endforeach; ?>
  </section>
  <?php endif; ?>

  <script>
    // Enhanced scroll animations
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
      rootMargin: '0px 0px -50px 0px'
    });
    
    // Observe all elements that need animation
    document.querySelectorAll('.blogs-section-inner, .blogs-faq-card').forEach((el, index) => {
      el.style.animationDelay = `${index * 0.1}s`;
      sectionObserver.observe(el);
    });

    // Enhanced FAQ Accordion with smooth animations
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

    // Parallax effect for hero image
    window.addEventListener('scroll', () => {
      const scrolled = window.pageYOffset;
      const heroImg = document.querySelector('.blogs-hero-section img');
      if (heroImg) {
        heroImg.style.transform = `translateY(${scrolled * 0.5}px) scale(1.05)`;
      }
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
