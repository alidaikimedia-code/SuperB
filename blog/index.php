<?php 
$page_key = 'blogs';
include $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>
  <link rel="stylesheet" href="/assets/css/blogs.css">
  <style>
    /* Blog Styling - Matching Website Theme */
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
    .blogs-hero {
      position: relative;
      height: 70vh;
      min-height: 600px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      overflow: hidden;
      background: linear-gradient(135deg, #0a0a0a 0%, #1a0015 50%, #0a0a0a 100%);
    }
    
    .blogs-hero .blogs-hero-img {
      position: absolute;
      top: 0; 
      left: 0;
      width: 100%; 
      height: 100%;
      object-fit: cover;
      filter: brightness(0.6) saturate(1.3);
      z-index: 1;
      transition: transform 1.2s ease;
    }
    
    .blogs-hero:hover .blogs-hero-img {
      transform: scale(1.05);
      filter: brightness(0.7) saturate(1.4);
    }
    
    .blogs-hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(
        135deg, 
        rgba(10,10,10,0.4) 0%, 
        rgba(26,0,21,0.3) 30%, 
        rgba(255,36,145,0.1) 70%, 
        rgba(10,10,10,0.5) 100%
      );
      z-index: 2;
    }

    .blogs-hero-content {
      max-width: 800px;
      padding: 40px 20px;
      position: relative;
      z-index: 3;
      animation: fadeInUp 1s ease-out;
    }
    
    .blogs-hero-content .blogs-h1 {
      font-size: clamp(2.5rem, 5vw, 4rem);
      margin-bottom: 20px;
      color: #ffffff;
      text-shadow: 0 0 25px rgba(255,36,145,0.9), 0 0 50px rgba(255,36,145,0.5);
      font-weight: 800;
      line-height: 1.2;
      animation: blogsGlow 2.5s infinite alternate;
    }
    
    .blogs-hero-content .blogs-p {
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

    /* Sections */
    .blogs-section {
      max-width: 1200px;
      margin: 0 auto;
      padding: 80px 20px;
    }
    
    .blogs-h2 {
      text-align: center;
      font-size: clamp(2rem, 4vw, 2.5rem);
      margin-bottom: 60px;
      position: relative;
      color: #ff2491;
      text-shadow: 0 0 20px rgba(255,36,145,0.6);
    }
    
    .blogs-h2::after {
      content: "";
      width: 90px;
      height: 4px;
      background: linear-gradient(90deg, #ff2491, #ff5ab3);
      display: block;
      margin: 20px auto 0;
      border-radius: 2px;
      box-shadow: 0 0 10px rgba(255,36,145,0.7);
    }

    /* Blog Cards Grid - Dark Theme */
    .blogs-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
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
    
    /* .blog-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 2px;
      background: linear-gradient(90deg, transparent, #ff2491, #ff5ab3, #ff2491, transparent);
      animation: shimmer 3s ease-in-out infinite;
    } */
    
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

    @keyframes shimmer {
      0% { transform: translateX(-100%); }
      100% { transform: translateX(100%); }
    }

    /* Animations */
    @keyframes fadeInUp { 
      from {opacity: 0; transform: translateY(30px);} 
      to {opacity: 1; transform: translateY(0);} 
    }
    
    /* Responsive Design */
    @media (max-width: 768px) {
      .blogs-hero {
        height: 50vh;
        min-height: 400px;
      }
      
      .blogs-hero-content {
        padding: 30px 15px;
      }
      
      .blogs-section {
        padding: 60px 15px;
      }
      
      .blogs-grid {
        grid-template-columns: 1fr;
        gap: 25px;
      }
      
      .blog-content {
        padding: 25px;
      }
    }
  </style>

<section class="blogs-body">
  <header class="blogs-hero">
    <img class="blogs-hero-img" src="/modelsimages/model5.webp" alt="Escort Blogs">
    <div class="blogs-hero-content">
      <h1 class="blogs-h1"><?= $texts[$page_key]['heroTitle'] ?></h1>
      <p class="blogs-p"><?= $texts[$page_key]['heroDesc'] ?></p>
    </div>
  </header>

  
  <section class="blogs-section">
    <h2 class="blogs-h2"><?= $texts[$page_key]['latestBlogs'] ?></h2>
    <div class="blogs-grid">

      <?php 
      // Function to dynamically get all blogs from /blogs/ folder
      function getAllBlogsFromFolder($texts, $readMoreText) {
        $blogsDir = $_SERVER['DOCUMENT_ROOT'] . '/blogs';
        $blogFolders = [];
        $excludedFiles = ['index.php', 'blog-template.php', '.', '..'];
        
        // Scan blogs directory
        if (is_dir($blogsDir)) {
          $items = scandir($blogsDir);
          
          foreach ($items as $item) {
            // Skip excluded files and non-directories
            if (in_array($item, $excludedFiles) || !is_dir($blogsDir . '/' . $item)) {
              continue;
            }
            
            $blogIndexFile = $blogsDir . '/' . $item . '/index.php';
            
            // Check if index.php exists in the blog folder
            if (file_exists($blogIndexFile)) {
              $blogSlug = $item;
              $blogUrl = '/blogs/' . $blogSlug;
              
              // Read page_key from blog's index.php file
              $langKey = $blogSlug; // Default to slug
              $pageKeyFile = file_get_contents($blogIndexFile);
              
              // Extract $page_key from the file
              if (preg_match("/page_key\s*=\s*['\"]([^'\"]+)['\"]/", $pageKeyFile, $matches)) {
                $langKey = $matches[1];
              }
              
              // Try alternative lang key patterns (some blogs might use different formats)
              $possibleKeys = [
                $langKey, // Direct match from index.php
                $blogSlug, // Folder slug
                'blog_' . str_replace('-', '_', $blogSlug), // With blog_ prefix and underscores
                str_replace('-', '_', $blogSlug) // Just underscores
              ];
              
              // Try to get blog data from lang file using all possible keys
              $blogTitle = '';
              $blogDesc = '';
              $blogImg = '';
              
              foreach ($possibleKeys as $key) {
                if (isset($texts[$key])) {
                  // Use hero_title or title from lang file
                  $blogTitle = $texts[$key]['hero_title'] ?? $texts[$key]['title'] ?? '';
                  $blogDesc = $texts[$key]['hero_description'] ?? $texts[$key]['description'] ?? '';
                  $blogImg = $texts[$key]['hero_image'] ?? '';
                  break; // Found a match, stop searching
                }
              }
              
              // If title is empty, generate from slug
              if (empty($blogTitle)) {
                $blogTitle = ucwords(str_replace('-', ' ', $blogSlug));
              }
              
              // If description is empty, use default
              if (empty($blogDesc)) {
                $blogDesc = 'Read our latest article about ' . strtolower($blogTitle);
              }
              
              // Default image if not found
              if (empty($blogImg) || !file_exists($_SERVER['DOCUMENT_ROOT'] . $blogImg)) {
                // Try to find image in blogs-images folder based on slug
                $possibleImages = [
                  '/blogs-images/' . $blogSlug . '_hero.png',
                  '/blogs-images/' . $blogSlug . '.png',
                  '/blogs-images/blog1_hero.png' // fallback
                ];
                
                foreach ($possibleImages as $imgPath) {
                  if (file_exists($_SERVER['DOCUMENT_ROOT'] . $imgPath)) {
                    $blogImg = $imgPath;
                    break;
                  }
                }
                
                // If still no image, use default
                if (empty($blogImg) || !file_exists($_SERVER['DOCUMENT_ROOT'] . $blogImg)) {
                  $blogImg = '/blogs-images/blog1_hero.png';
                }
              }
              
              // Add to blogs array
              $blogFolders[] = [
                'slug' => $blogSlug,
                'url' => $blogUrl,
                'title' => $blogTitle,
                'desc' => $blogDesc,
                'img' => $blogImg
              ];
            }
          }
        }
        
        // Sort by slug alphabetically (newest first if you have date, or custom order)
        usort($blogFolders, function($a, $b) {
          return strcmp($b['slug'], $a['slug']); // Reverse alphabetical (newer slugs usually come first)
        });
        
        return $blogFolders;
      }
      
      // Get all blogs dynamically
      $allBlogs = getAllBlogsFromFolder($texts, $texts[$page_key]['readMore']);
      
      // Display blogs
      foreach($allBlogs as $blog) {
        echo '
        <div class="blog-card">
          <img src="'.$blog['img'].'" alt="'.htmlspecialchars($blog['title']).'">
          <div class="blog-content">
            <h3>'.htmlspecialchars($blog['title']).'</h3>
            <p>'.htmlspecialchars($blog['desc']).'</p>
            <a href="'.$blog['url'].'">'.$texts[$page_key]['readMore'].'</a>
          </div>
        </div>
        ';
      }
      
      // Fallback: If no blogs found dynamically, use manual list from lang file
      if (empty($allBlogs) && isset($texts[$page_key]['blog_list'])) {
        foreach($texts[$page_key]['blog_list'] as $blog) {
          echo '
          <div class="blog-card">
            <img src="'.$blog['img'].'" alt="'.htmlspecialchars($blog['title']).'">
            <div class="blog-content">
              <h3>'.htmlspecialchars($blog['title']).'</h3>
              <p>'.htmlspecialchars($blog['desc']).'</p>
              <a href="'.$blog['url'].'">'.$texts[$page_key]['readMore'].'</a>
            </div>
          </div>
          ';
        }
      }
      ?>
    </div>
</section>

  <script>
    // Professional blog card animations
    const blogObserver = new IntersectionObserver(entries => {
      entries.forEach((entry, index) => {
        if(entry.isIntersecting) {
          setTimeout(() => {
            entry.target.classList.add('blogs-visible');
          }, index * 150); // Smooth staggered animation
        }
      });
    }, {
      threshold: 0.1,
      rootMargin: '0px 0px -30px 0px'
    });
    
    document.querySelectorAll('.blog-card').forEach(el => {
      blogObserver.observe(el);
    });

    // Smooth scroll behavior for better UX
    document.documentElement.style.scrollBehavior = 'smooth';
    
    // Add subtle hover effects
    document.querySelectorAll('.blog-card').forEach(card => {
      card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-8px)';
      });
      
      card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0)';
      });
    });

    // Add loading animation
    window.addEventListener('load', () => {
      document.body.style.opacity = '1';
    });
  </script>
  </section>
  
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>
