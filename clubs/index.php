<?php 
$page_key = 'clubs';
include $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>
  <link rel="stylesheet" href="/assets/css/blogs.css">
  <style>
    /* Clubs Styling - Matching Website Theme */
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
    .clubs-hero {
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
    
    .clubs-hero::before {
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

    .clubs-hero-content {
      max-width: 800px;
      padding: 40px 20px;
      position: relative;
      z-index: 3;
      animation: fadeInUp 1s ease-out;
    }
    
    .clubs-hero-content .clubs-h1 {
      font-size: clamp(2.5rem, 5vw, 4rem);
      margin-bottom: 20px;
      color: #ffffff;
      text-shadow: 0 0 25px rgba(255,36,145,0.9), 0 0 50px rgba(255,36,145,0.5);
      font-weight: 800;
      line-height: 1.2;
      animation: clubsGlow 2.5s infinite alternate;
    }
    
    .clubs-hero-content .clubs-p {
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

    /* Sections */
    .clubs-section {
      max-width: 1200px;
      margin: 0 auto;
      padding: 80px 20px;
    }
    
    .clubs-h2 {
      text-align: center;
      font-size: clamp(2rem, 4vw, 2.5rem);
      margin-bottom: 60px;
      position: relative;
      color: #ff2491;
      text-shadow: 0 0 20px rgba(255,36,145,0.6);
    }
    
    .clubs-h2::after {
      content: "";
      width: 90px;
      height: 4px;
      background: linear-gradient(90deg, #ff2491, #ff5ab3);
      display: block;
      margin: 20px auto 0;
      border-radius: 2px;
      box-shadow: 0 0 10px rgba(255,36,145,0.7);
    }

    /* Club Cards Grid */
    .clubs-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      gap: 40px;
      margin-top: 60px;
    }
    
    .club-card {
      background: rgba(255, 255, 255, 0.05);
      border-radius: 24px;
      overflow: hidden;
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255,36,145,0.2);
      box-shadow: 
        0 20px 40px rgba(0,0,0,0.6),
        0 0 0 1px rgba(255,36,145,0.1),
        inset 0 1px 0 rgba(255,255,255,0.1);
      transition: all 0.5s ease;
      cursor: pointer;
      opacity: 0;
      transform: translateY(30px);
    }
    
    .club-card.visible {
      opacity: 1;
      transform: translateY(0);
    }
    
    .club-card:hover {
      transform: translateY(-10px);
      border-color: rgba(255,36,145,0.5);
      box-shadow: 
        0 30px 60px rgba(0,0,0,0.8),
        0 0 0 1px rgba(255,36,145,0.3),
        inset 0 1px 0 rgba(255,255,255,0.2),
        0 0 40px rgba(255,36,145,0.2);
    }
    
    .club-card-image {
      width: 100%;
      height: 250px;
      object-fit: cover;
      transition: transform 0.6s ease;
    }
    
    .club-card:hover .club-card-image {
      transform: scale(1.1);
    }
    
    .club-card-content {
      padding: 30px;
    }
    
    .club-card-title {
      font-size: 1.5rem;
      color: #ff2491;
      margin-bottom: 15px;
      font-weight: 700;
      text-shadow: 0 0 15px rgba(255,36,145,0.5);
    }
    
    .club-card-desc {
      color: #e0e0e0;
      font-size: 1rem;
      line-height: 1.6;
      margin-bottom: 20px;
    }
    
    .club-card-link {
      display: inline-block;
      color: #ff2491;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
      position: relative;
    }
    
    .club-card-link::after {
      content: '→';
      margin-left: 8px;
      transition: transform 0.3s ease;
      display: inline-block;
    }
    
    .club-card:hover .club-card-link {
      color: #ff5ab3;
      text-shadow: 0 0 10px rgba(255,36,145,0.5);
    }
    
    .club-card:hover .club-card-link::after {
      transform: translateX(5px);
    }

    @keyframes fadeInUp {
      0% { opacity: 0; transform: translateY(30px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    /* Responsive */
    @media (max-width: 768px) {
      .clubs-hero {
        height: 50vh;
        min-height: 400px;
      }
      
      .clubs-grid {
        grid-template-columns: 1fr;
        gap: 30px;
      }
      
      .clubs-section {
        padding: 60px 15px;
      }
    }
  </style>

<section class="clubs-body">
  <!-- Hero Section -->
  <div class="clubs-hero">
    <div class="clubs-hero-content">
      <h1 class="clubs-h1"><?= $texts['clubs']['title'] ?? 'Premium Nightlife Clubs' ?></h1>
      <p class="clubs-p"><?= $texts['clubs']['subtitle'] ?? 'Discover Malaysia\'s top nightlife destinations with Superb Party Girl' ?></p>
    </div>
  </div>

  <!-- Clubs Listing Section -->
  <section class="clubs-section">
    <h2 class="clubs-h2"><?= $texts['clubs']['title'] ?? 'Premium Nightlife Clubs' ?></h2>
    <div class="clubs-grid">

      <?php 
      // Function to dynamically get all clubs from /clubs/ folder
      function getAllClubsFromFolder($texts) {
        $clubsDir = $_SERVER['DOCUMENT_ROOT'] . '/clubs';
        $clubFolders = [];
        $excludedFiles = ['index.php', 'club-template.php', '.', '..'];
        
        // Scan clubs directory
        if (is_dir($clubsDir)) {
          $items = scandir($clubsDir);
          
          foreach ($items as $item) {
            // Skip excluded files and non-directories
            if (in_array($item, $excludedFiles) || !is_dir($clubsDir . '/' . $item)) {
              continue;
            }
            
            $clubIndexFile = $clubsDir . '/' . $item . '/index.php';
            
            // Check if index.php exists in the club folder
            if (file_exists($clubIndexFile)) {
              $clubSlug = $item;
              $clubUrl = '/clubs/' . $clubSlug;
              
              // Read page_key from club's index.php file
              $langKey = $clubSlug; // Default to slug
              $pageKeyFile = file_get_contents($clubIndexFile);
              
              // Extract $page_key from the file
              if (preg_match("/page_key\s*=\s*['\"]([^'\"]+)['\"]/", $pageKeyFile, $matches)) {
                $langKey = $matches[1];
              }
              
              // Try alternative lang key patterns
              $possibleKeys = [
                $langKey, // Direct match from index.php
                $clubSlug, // Folder slug
                str_replace('-', '_', $clubSlug) // Just underscores
              ];
              
              // Try to get club data from lang file using all possible keys
              $clubTitle = '';
              $clubDesc = '';
              $clubImg = '';
              $foundLangKey = false;
              
              foreach ($possibleKeys as $key) {
                if (isset($texts[$key])) {
                  // Use hero_title or title from lang file
                  $clubTitle = $texts[$key]['hero_title'] ?? $texts[$key]['title'] ?? '';
                  $clubDesc = $texts[$key]['short_description'] ?? $texts[$key]['hero_description'] ?? $texts[$key]['description'] ?? '';
                  $clubImg = $texts[$key]['hero_image'] ?? '';
                  $foundLangKey = true;
                  break; // Found a match, stop searching
                }
              }
              
              // If title is empty, generate from slug
              if (empty($clubTitle)) {
                $clubTitle = ucwords(str_replace('-', ' ', $clubSlug));
              }
              
              // If description is empty, use default
              if (empty($clubDesc)) {
                $clubDesc = 'Experience premium nightlife at ' . strtolower($clubTitle);
              }
              
              // Use image from language file - if we found it and it's not empty, use it directly
              // Only use fallback if hero_image is truly empty in language file
              // IMPORTANT: If $foundLangKey is true and $clubImg is set, we should use it directly
              if (empty($clubImg)) {
                // Map slugs to actual image filenames
                $slugToImageMap = [
                  'zouk-kl-nightlife' => '/clubs-images/zouk-kl.jpg',
                  'kyo-kl-nightlife' => '/clubs-images/kyo-kl.jpg',
                  'spark-kl-nightlife' => '/clubs-images/Spark-kl.webp',
                  'rootz-kl-nightlife' => '/clubs-images/Rootz-kl.jpg',
                  'havana-kl-nightlife' => '/clubs-images/havana-kl.jpg',
                  'soho-free-house-penang' => '/clubs-images/soho-kl.jpg',
                  'slippery-senoritas-penang' => '/clubs-images/slippery-senoritas-kl.jpg',
                  'mansion-32-penang' => '/clubs-images/manson-32-kl.jpg',
                  'three-sixty-penang' => '/clubs-images/sixty-revolving-kl.jpg',
                  'le-dream-penang' => '/clubs-images/le-dreams-kl.jpeg',
                ];
                
                // Check if we have a direct mapping
                if (isset($slugToImageMap[$clubSlug])) {
                  $clubImg = $slugToImageMap[$clubSlug];
                }
                
                // If still not found, try to find image in clubs-images folder based on slug
                if (empty($clubImg)) {
                  // Create variations of the slug for matching
                  $slugVariations = [
                    $clubSlug, // original slug
                    str_replace('-nightlife', '', $clubSlug), // remove -nightlife
                    str_replace('-penang', '', $clubSlug), // remove -penang
                    str_replace('-penang', '-kl', $clubSlug), // replace -penang with -kl
                    str_replace('-nightlife', '-kl', $clubSlug), // replace -nightlife with -kl
                  ];
                  
                  // Remove duplicates
                  $slugVariations = array_unique($slugVariations);
                  
                  $possibleImages = [];
                  foreach ($slugVariations as $slugVar) {
                    $possibleImages[] = '/clubs-images/' . $slugVar . '_hero.jpg';
                    $possibleImages[] = '/clubs-images/' . $slugVar . '.jpg';
                    $possibleImages[] = '/clubs-images/' . $slugVar . '.jpeg';
                    $possibleImages[] = '/clubs-images/' . $slugVar . '.webp';
                    // Try with capitalized first letter
                    $possibleImages[] = '/clubs-images/' . ucfirst($slugVar) . '.jpg';
                    $possibleImages[] = '/clubs-images/' . ucfirst($slugVar) . '.webp';
                  }
                  
                  // Try to find matching image (use first match found)
                  foreach ($possibleImages as $imgPath) {
                    // Just use the path - browser will handle 404s
                    $clubImg = $imgPath;
                    break; // Use first pattern match
                  }
                }
                
                // If still no image, use default
                if (empty($clubImg)) {
                  $clubImg = '/clubs-images/default-club.jpg';
                }
              }
              
              // Add to clubs array
              $clubFolders[] = [
                'slug' => $clubSlug,
                'url' => $clubUrl,
                'title' => $clubTitle,
                'desc' => $clubDesc,
                'img' => $clubImg
              ];
            }
          }
        }
        
        return $clubFolders;
      }
      
      $allClubs = getAllClubsFromFolder($texts);
      
      if (empty($allClubs)) {
        echo '<p class="clubs-p" style="text-align: center; grid-column: 1 / -1;">No clubs available at the moment.</p>';
      } else {
        foreach ($allClubs as $index => $club):
      ?>
        <div class="club-card" style="animation-delay: <?= $index * 0.1 ?>s;">
          <img src="<?= htmlspecialchars($club['img']) ?>" 
               alt="<?= htmlspecialchars($club['title']) ?>" 
               class="club-card-image">
          <div class="club-card-content">
            <h3 class="club-card-title"><?= htmlspecialchars($club['title']) ?></h3>
            <p class="club-card-desc"><?= htmlspecialchars($club['desc']) ?></p>
            <a href="<?= htmlspecialchars($club['url']) ?>" class="club-card-link">Read More</a>
          </div>
        </div>
      <?php 
        endforeach;
      }
      ?>
    </div>
  </section>
</section>

<script>
  // Scroll animations for club cards
  const clubCardObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, { 
    threshold: 0.1,
    rootMargin: '0px 0px -30px 0px'
  });
  
  // Observe all club cards
  document.querySelectorAll('.club-card').forEach(card => {
    clubCardObserver.observe(card);
  });
</script>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>
