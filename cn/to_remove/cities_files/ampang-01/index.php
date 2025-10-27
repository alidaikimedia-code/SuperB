<?php 
$page_key = 'blogs';
include $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>
  <style>
    /* Base Styling */
    body {
      margin: 0;
      padding: 0;
      font-family: 'Arial', sans-serif;
      background: linear-gradient(135deg, #0a0a0a, #1a0015, #0a0a0a);
      color: #fff;
      line-height: 1.6;
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
    .blogs-hero:hover .blogs-hero-img { transform: scale(1.05); }

    .blogs-hero-content {
      max-width: 900px;
      padding: 20px;
      animation: blogsFadeIn 1.5s ease;
    }
    .blogs-hero-content .blogs-h1 {
      font-size: clamp(32px, 5vw, 64px);
      margin-bottom: 15px;
      text-shadow: 0 0 25px rgba(255,36,145,0.9), 0 0 50px rgba(255,36,145,0.5);
      animation: blogsGlow 2.5s infinite alternate;
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
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
    }
    .blog-card {
      background: rgba(255, 255, 255, 0.08);
      border-radius: 18px;
      overflow: hidden;
      backdrop-filter: blur(12px);
      border: 1px solid rgba(255,36,145,0.3);
      box-shadow: 0 10px 30px rgba(0,0,0,0.6);
      transition: all 0.5s ease;
      opacity: 0;
      transform: translateY(40px);
    }
    .blog-card.blogs-visible {
      opacity: 1;
      transform: translateY(0);
    }
    .blog-card:hover {
      transform: translateY(-10px) scale(1.05);
      box-shadow: 0 20px 50px rgba(255,36,145,0.6);
    }
    .blog-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      display: block;
    }
    .blog-content {
      padding: 20px;
    }
    .blog-content h3 {
      color: #ff2491;
      margin-bottom: 12px;
      font-size: 20px;
    }
    .blog-content p {
      font-size: 15px;
      color: #ddd;
      margin-bottom: 15px;
    }
    .blog-content a {
      display: inline-block;
      padding: 8px 16px;
      background: linear-gradient(90deg, #ff2491, #ff5ab3);
      color: #fff;
      text-decoration: none;
      border-radius: 8px;
      font-weight: 600;
      transition: background 0.3s;
    }
    .blog-content a:hover {
      background: linear-gradient(90deg, #ff5ab3, #ff2491);
    }

    @keyframes blogsFadeIn { from {opacity: 0; transform: translateY(20px);} to {opacity: 1; transform: translateY(0);} }
  </style>
</head>
<body>

  <!-- Hero -->
  <header class="blogs-hero">
    <img class="blogs-hero-img" src="/assets/images/blog-hero.webp" alt="Escort Blogs">
    <div class="blogs-hero-content">
      <h1 class="blogs-h1">Escort Blogs & Lifestyle Insights</h1>
      <p class="blogs-p">Read exclusive articles about premium companions, luxury nightlife, and tips to make every evening unforgettable.</p>
    </div>
  </header>

  <!-- Blogs List -->
  <section class="blogs-section">
    <h2 class="blogs-h2">Latest Escort Blogs</h2>
    <div class="blogs-grid">

      <?php 
      // Example 15 blogs (static for now, later tu DB/loop use kar sakta hai)
      $blogs = [
        ["img"=>"/assets/images/blog1.jpg", "title"=>"Why Mixed-Race Model Escorts Are in High Demand", "desc"=>"Discover why mixed-race model escorts are admired worldwide for their charm, beauty, and sophistication.", "url"=>"/why-mixed-race-model-escorts-are-in-high-demand"],
        ["img"=>"/assets/images/blog2.jpg", "title"=>"Exclusivity and Luxury in Escort Services", "desc"=>"How exclusivity ensures refined, unforgettable client experiences.", "url"=>"/exclusive-escort-services"],
        ["img"=>"/assets/images/blog3.jpg", "title"=>"Private Party Escorts: Adding Class to Events", "desc"=>"See how escorts elevate private parties with elegance and style.", "url"=>"/private-party-escorts"],
        ["img"=>"/assets/images/blog4.jpg", "title"=>"Safety & Professionalism in Escort Bookings", "desc"=>"Understand how safe escorts guarantee privacy, comfort, and confidence.", "url"=>"/safe-party-escort"],
        ["img"=>"/assets/images/blog5.jpg", "title"=>"Why Companionship Matters in KL Nightlife", "desc"=>"Explore why having the right companion transforms your Kuala Lumpur evenings.", "url"=>"/kl-nightlife-companions"],
        ["img"=>"/assets/images/blog6.jpg", "title"=>"Top Qualities of a Perfect Escort", "desc"=>"What makes a companion truly unforgettable? Discover the traits clients love.", "url"=>"/qualities-of-perfect-escort"],
        ["img"=>"/assets/images/blog7.jpg", "title"=>"Travel in Style with Escorts", "desc"=>"How companions turn your trips to Genting, Penang, or Singapore into memories.", "url"=>"/travel-in-style"],
        ["img"=>"/assets/images/blog8.jpg", "title"=>"Luxury Dining with Companions", "desc"=>"Fine dining feels better when shared with gorgeous escorts.", "url"=>"/luxury-dining-escorts"],
        ["img"=>"/assets/images/blog9.jpg", "title"=>"Escorts for Corporate Events", "desc"=>"Impress colleagues with professional, elegant companions at events.", "url"=>"/corporate-event-escorts"],
        ["img"=>"/assets/images/blog10.jpg", "title"=>"Nightclubs & Escorts", "desc"=>"Party harder with escorts who know how to bring energy to KL’s nightlife.", "url"=>"/nightclubs-and-escorts"],
        ["img"=>"/assets/images/blog11.jpg", "title"=>"How to Book an Escort Safely", "desc"=>"Step-by-step guide to ensuring secure and private bookings.", "url"=>"/how-to-book-escort"],
        ["img"=>"/assets/images/blog12.jpg", "title"=>"Escorts for Weekend Getaways", "desc"=>"Why a companion makes your trips more exciting and stress-free.", "url"=>"/weekend-getaway-escorts"],
        ["img"=>"/assets/images/blog13.jpg", "title"=>"KL’s Premium Party Girls", "desc"=>"The ultimate guide to finding the hottest party girls in Kuala Lumpur.", "url"=>"/kl-premium-party-girls"],
        ["img"=>"/assets/images/blog14.jpg", "title"=>"Discretion in Escort Services", "desc"=>"Why privacy and confidentiality are the backbone of this industry.", "url"=>"/discreet-escort-services"],
        ["img"=>"/assets/images/blog15.jpg", "title"=>"Ampang Escorts: Local Hotspots", "desc"=>"Best areas in Ampang to enjoy unforgettable evenings with escorts.", "url"=>"/ampang-escorts-hotspots"],
      ];

      foreach($blogs as $blog) {
        echo '
        <div class="blog-card">
          <img src="'.$blog['img'].'" alt="'.$blog['title'].'">
          <div class="blog-content">
            <h3>'.$blog['title'].'</h3>
            <p>'.$blog['desc'].'</p>
            <a href="'.$blog['url'].'">Read More</a>
          </div>
        </div>
        ';
      }
      ?>
    </div>
  </section>

  <script>
    // Scroll animations
    const blogObserver = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if(entry.isIntersecting) entry.target.classList.add('blogs-visible');
      });
    }, {threshold: 0.2});
    document.querySelectorAll('.blog-card').forEach(el => blogObserver.observe(el));
  </script>
  
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>
