<?php 
$page_key = 'blogs';
include $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>
  <link rel="stylesheet" href="/assets/css/blogs.css">
  <style>
    /* Base Styling */
    .blogs-body {
      margin: 0;
      padding: 0;
      font-family: 'Arial', sans-serif;
      color: #fff;
      line-height: 1.6;
      background: linear-gradient(135deg, #0a0a0a, #1a0015, #0a0a0a);
    
    }
    
    .blogs-h1, .blogs-h2, .blogs-h3 {
      color: #ff2491;
      font-weight: 600;
      letter-spacing: 1px;
    }
    .blogs-p { color: #f1f1f1; }

    /* Hero Section */
    .blogs-hero {
      position: relative;
      height: 70vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      overflow: hidden;
    }
    .blogs-hero .blogs-hero-img {
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      object-fit: cover;
      filter: brightness(50%) blur(2px);
      z-index: -1;
      transition: transform 1.2s ease;
    }
    

    .blogs-hero-content {
      max-width: 900px;
      padding: 20px;
      animation: blogsFadeIn 1.5s ease;
    }
    .blogs-hero-content .blogs-h1 {
      font-size: clamp(32px, 5vw, 64px);
      margin-bottom: 15px;
      text-shadow: 0 0 25px rgba(255,36,145,0.9), 0 0 50px rgba(255,36,145,0.5);
      /* animation: blogsGlow 2.5s infinite alternate; */
    }
    .blogs-hero-content .blogs-p {
      font-size: clamp(16px, 2vw, 22px);
      color: #ddd;
      text-shadow: 0 0 15px rgba(0,0,0,0.6);
    }
    @keyframes blogsGlow {
      0% { text-shadow: 0 0 25px rgba(255,36,145,0.8), 0 0 50px rgba(255,36,145,0.4);}
      100% { text-shadow: 0 0 35px rgba(255,36,145,1), 0 0 70px rgba(255,36,145,0.6);}
    }

    /* Sections */
    .blogs-section {
      max-width: 1200px;
      margin: auto;
      padding: 60px 20px;
    }
    .blogs-h2 {
      text-align: center;
      font-size: clamp(28px, 4vw, 40px);
      margin-bottom: 50px;
      position: relative;
      text-shadow: 0 0 20px rgba(255,36,145,0.6);
    }
    .blogs-h2::after {
      content: "";
      width: 90px;
      height: 4px;
      background: linear-gradient(90deg, #ff2491, #ff5ab3);
      display: block;
      margin: 12px auto 0;
      border-radius: 2px;
      box-shadow: 0 0 10px rgba(255,36,145,0.7);
    }

    /* Blog Cards Grid */
    .blogs-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 40px;
      margin-top: 60px;
    }
    .blog-card {
      background: rgba(255, 255, 255, 0.05);
      border-radius: 24px;
      overflow: hidden;
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255,36,145,0.2);
      box-shadow: 
        0 20px 40px rgba(0,0,0,0.6),
        0 0 0 1px rgba(255,36,145,0.1),
        inset 0 1px 0 rgba(255,255,255,0.1);
      transition: all 0.6s ease;
      opacity: 0;
      transform: translateY(40px);
      position: relative;
    }
    .blog-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 2px;
      background: linear-gradient(90deg, transparent, #ff2491, #ff5ab3, #ff2491, transparent);
      animation: shimmer 3s ease-in-out infinite;
    }
    .blog-card.blogs-visible {
      opacity: 1;
      transform: translateY(0);
    }
    .blog-card:hover {
      transform: translateY(-10px);
      box-shadow: 
        0 30px 60px rgba(0,0,0,0.8),
        0 0 0 1px rgba(255,36,145,0.3),
        inset 0 1px 0 rgba(255,255,255,0.2);
      border-color: rgba(255,36,145,0.4);
    }
   
    .blog-card img {
      width: 100%;
      height: 220px;
      object-fit: cover;
      display: block;
      transition: transform 0.5s ease;
    }
    .blog-card:hover img {
      transform: scale(1.05);
    }
    .blog-content {
      padding: 30px 25px;
    }
    .blog-content h3 {
      color: #ff2491;
      margin-bottom: 15px;
      font-size: 1.4rem;
      font-weight: 700;
      line-height: 1.3;
      text-shadow: 0 0 10px rgba(255, 36, 145, 0.3);
    }
    .blog-content p {
      font-size: 1rem;
      color: #e0e0e0;
      margin-bottom: 20px;
      line-height: 1.6;
    }
    .blog-content a {
      display: inline-block;
      padding: 12px 24px;
      background: linear-gradient(45deg, #ff2491, #ff5ab3);
      color: #fff;
      text-decoration: none;
      border-radius: 25px;
      font-weight: 600;
      font-size: 0.9rem;
      transition: all 0.4s ease;
      box-shadow: 0 8px 25px rgba(255, 36, 145, 0.3);
      position: relative;
      overflow: hidden;
    }
    .blog-content a::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
      transition: left 0.5s ease;
    }
    .blog-content a:hover::before {
      left: 100%;
    }
    .blog-content a:hover {
      background: linear-gradient(45deg, #ff5ab3, #ff2491);
      transform: translateY(-2px);
      box-shadow: 0 12px 35px rgba(255, 36, 145, 0.5);
    }

    @keyframes blogsFadeIn { from {opacity: 0; transform: translateY(20px);} to {opacity: 1; transform: translateY(0);} }
    @keyframes shimmer {
      0% { transform: translateX(-100%); }
      100% { transform: translateX(100%); }
    }
  </style>

<section class="blogs-body">
  <header class="blogs-hero">
    <img class="blogs-hero-img" src="/modelsimages/model5.webp" alt="伴游博客">
    <div class="blogs-hero-content">
      <h1 class="blogs-h1"><?= $texts[$page_key]['heroTitle'] ?></h1>
      <p class="blogs-p"><?= $texts[$page_key]['heroDesc'] ?></p>
    </div>
  </header>

  
  <section class="blogs-section">
    <h2 class="blogs-h2"><?= $texts[$page_key]['latestBlogs'] ?></h2>
    <div class="blogs-grid">

      <?php 
      foreach($texts[$page_key]['blog_list'] as $blog) {
        echo '
        <div class="blog-card">
          <img src="'.$blog['img'].'" alt="'.$blog['title'].'">
          <div class="blog-content">
            <h3>'.$blog['title'].'</h3>
            <p>'.$blog['desc'].'</p>
            <a href="'.$blog['url'].'">'.$texts[$page_key]['readMore'].'</a>
          </div>
        </div>
        ';
      }
      ?>
    </div>
  </section>

  <script>
    // Enhanced blog card animations
    const blogObserver = new IntersectionObserver(entries => {
      entries.forEach((entry, index) => {
        if(entry.isIntersecting) {
          setTimeout(() => {
            entry.target.classList.add('blogs-visible');
          }, index * 100); // Staggered animation
        }
      });
    }, {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    });
    
    document.querySelectorAll('.blog-card').forEach(el => {
      blogObserver.observe(el);
    });

    // Add hover effects and smooth transitions
    document.querySelectorAll('.blog-card').forEach(card => {
      card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-10px) scale(1.02)';
      });
      
      card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0) scale(1)';
      });
    });

    // Parallax effect for hero image
    window.addEventListener('scroll', () => {
      const scrolled = window.pageYOffset;
      const heroImg = document.querySelector('.blogs-hero-img');
      if (heroImg) {
        heroImg.style.transform = `translateY(${scrolled * 0.3}px) scale(1.05)`;
      }
    });
  </script>
  </section>
  
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>
