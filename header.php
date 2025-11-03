<?php
// require_once __DIR__ . '/env-loader.php';

// $uri = $_SERVER['REQUEST_URI'];
// // 去除结尾的斜杠
// $uri = rtrim($uri, '/');

// Always load config.php to ensure language system works for all pages
// require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
include_once __DIR__ . '/lang/init.php';

// Debug: Check language detection
// echo "<!-- Debug: Current URI: " . $_SERVER['REQUEST_URI'] . " -->";
// echo "<!-- Debug: Current lang: " . $lang . " -->";

// Ensure cities are properly loaded from language file
if (!isset($texts['cities']) || empty($texts['cities'])) {
    // Try to reload the language file
    $lang_file = __DIR__ . '/lang/' . $lang . '.php';
    if (file_exists($lang_file)) {
        $reloaded_texts = include $lang_file;
        if (isset($reloaded_texts['cities']) && !empty($reloaded_texts['cities'])) {
            $texts['cities'] = $reloaded_texts['cities'];
        }
    }
}

// Final fallback - only if cities still not loaded
if (!isset($texts['cities']) || empty($texts['cities'])) {
    // Use English as fallback
    $texts['cities'] = [
        'kuala_lumpur' => 'Kuala Lumpur',
        'ampang' => 'Ampang',
        'cheras' => 'Cheras',
        'cyberjaya' => 'Cyberjaya',
        'genting' => 'Genting',
        'ipoh' => 'Ipoh',
        'johor' => 'Johor',
        'kepong' => 'Kepong',
        'klang' => 'Klang',
        'kota_damansara' => 'Kota Damansara',
        'langkawi' => 'Langkawi',
        'local' => 'Local',
        'melaka' => 'Melaka',
        'mont_kiara' => 'Mont Kiara',
        'pahang' => 'Pahang',
        'penang' => 'Penang',
        'petaling_jaya' => 'Petaling Jaya',
        'port_dickson' => 'Port Dickson',
        'puchong' => 'Puchong',
        'sabah' => 'Sabah',
        'sarawak' => 'Sarawak',
        'serdang' => 'Serdang',
        'seremban' => 'Seremban',
        'setia_alam' => 'Setia Alam',
        'sri_petaling' => 'Sri Petaling',
        'subang' => 'Subang',
        'taiping' => 'Taiping',
    ];
}
$page_meta = [
  'title' => $texts[$page_key]['title'] ?? 'Default Title',
  'description' => $texts[$page_key]['description'] ?? '',
  'canonical' => $texts[$page_key]['canonical_link'] ?? '',
  'og_title' => $texts[$page_key]['og_title'] ?? '',
  'og_description' => $texts[$page_key]['og_description'] ?? '',
  'lang' => $lang ?? 'en-my'
];
?>
<!DOCTYPE html>
<html lang="<?= $page_meta['lang'] ?? 'en-my' ?>">

<head>
  <meta charset="UTF-8">
  <meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php if (!empty($page_meta['canonical'])): ?>
    <link rel="canonical" href="<?= htmlspecialchars($page_meta['canonical']) ?>">
  <?php endif; ?>
  <?php if (!empty($page_meta['description'])): ?>
    <meta name="description" content="<?= htmlspecialchars($page_meta['description']) ?>">
  <?php endif; ?>
  <meta property="og:url" content="https://superbpartygirl.com">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= htmlspecialchars($page_meta['og_title'] ?? $page_meta['title'] ?? '') ?>">
  <meta property="og:description" content="<?= htmlspecialchars($page_meta['og_description'] ?? $page_meta['description'] ?? '') ?>">
  <meta property="og:image" content="/wp-content/uploads/2024/12/Party-Girl-Logo-01.png">
  <meta name="google-site-verification" content="uFFdhSsXwLa7UmW0yGqHpd7Zsfsl0EYFQOKqoBXzpsc" />
  <title><?= htmlspecialchars($page_meta['title'] ?? 'SuperB Party Girl') ?></title>
  <link rel="shortcut icon" type="image/x-icon" href="/wp-content/uploads/2024/12/Party-Girl-Logo-01.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="/wp-content/themes/theme/style.css">
  <link rel="stylesheet" href="/assets/css/navbar.css">
  <style>
     
    /* Booking Button Styling */
    .booking-btn {
      background: #ff4081 !important;
      color: white !important;
      padding: 4px 8px !important;
      /* padding: 12px 24px !important; */
      border-radius: 8px !important;
      text-decoration: none !important;
      font-weight: bold !important;
      font-size: 16px !important;
      transition: all 0.3s ease !important;
      box-shadow: 0 4px 15px rgba(255, 64, 129, 0.3) !important;
      display: inline-block !important;
    }
    
    .booking-btn:hover {
      background: #ff1a6b !important;
      transform: translateY(-2px) !important;
      box-shadow: 0 6px 20px rgba(255, 64, 129, 0.4) !important;
      color: white !important;
    }
    
    /* Location dropdown styling */
    .locations-dropdown {
      max-height: 400px;
      /* overflow-y: auto; */
    }
    
    .locations-dropdown .divider {
      height: 1px;
      background-color: #e0e0e0;
      margin: 8px 0;
      list-style: none;
    }
    
    .locations-dropdown .view-all-locations {
      font-weight: bold !important;
      color: #ff4081 !important;
      background-color: #f8f8f8 !important;
      border-top: 1px solid #e0e0e0;
    }
    
    .locations-dropdown .view-all-locations:hover {
      background-color: #ff4081 !important;
      color: white !important;
    }

    /* Mobile Sticky Welcome Bar */
    .mysticky-welcomebar-fixed {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 60px;
      background: #f5f5f5;
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.2);
      z-index: 9999;
      display: none; /* Hidden by default */
    }

    .mysticky-welcomebar-content p {
      margin: 0;
      font-size: 16px;
      color: #333;
    }

    .mysticky-welcomebar-btn {
      margin-left: 15px;
    }

    .mysticky-welcomebar-btn a {
      background: #ff4081;
      color: white;
      padding: 8px 8px;
      text-decoration: none;
      border-radius: 6px;
      font-weight: bold;
      transition: background 0.3s ease;
      font-size: 14px;
    }

    .mysticky-welcomebar-btn a:hover {
      background: #e73370;
    }

    .mysticky-welcomebar-close {
      margin-left: 15px;
      cursor: pointer;
      font-weight: bold;
      color: #666;
      font-size: 18px;
    }
    .language-dropdown {
      position: relative;
    }
    .language-dropdown .language-toggle {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 8px;
    }
    .nav-links .dropdown > a::after,
    .nav-links .language-dropdown > a::after {
      content: " ▼";
      font-size: 12px;
      transition: transform 0.3s ease;
    }
    .nav-links .language-dropdown.active .dropdown-menu {
        display: block !important;
        opacity: 1 !important;
        visibility: visible !important;
      }

      .language-dropdown .dropdown-menu { display: none; }

      @media (hover:hover) and (pointer:fine) and (min-width: 1025px) {
        .language-dropdown:hover .dropdown-menu { display: block; }
      }


      .language-dropdown[data-current-lang="en"] .dropdown-menu a[data-lang="en"] { display: none; }
      .language-dropdown[data-current-lang="cn"] .dropdown-menu a[data-lang="cn"] { display: none; }
    /* Show only on mobile devices */
    @media (max-width: 768px) {
      .mysticky-welcomebar-fixed {
        display: flex;
      }
      
      /* Add bottom padding to body to prevent content from being hidden behind the bar */
      body {
        padding-bottom: 60px;
      }
      
      /* Mobile menu styles */
      .nav-links {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: rgba(0, 0, 0, 0.95);
        backdrop-filter: blur(10px);
        flex-direction: column;
        padding: 20px 0;
        transform: translateY(-10px);
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        z-index: 1002;
        max-height: 80vh;
        overflow-y: auto;
        gap: 15px;
      }
      
      .nav-links.active {
        display: flex !important;
        opacity: 1 !important;
        visibility: visible !important;
        transform: translateY(0) !important;
      }
      
      .nav-links li {
        /* margin: 5px 0; */
        text-align: center;
        width: 100%;
      }
      
      .nav-links a {
        display: block;
        padding: 15px 20px;
        font-size: 16px;
        font-weight: 500;
        border-radius: 8px;
        transition: all 0.3s ease;
      }
      
      .nav-links a:hover {
        background: rgba(255, 64, 129, 0.1);
        color: #ff4081;
      }
      
      /* Active dropdown indicator */
      .nav-links .dropdown.active > a {
        background: rgba(255, 64, 129, 0.2);
        color: #ff4081;
      }
      
      /* Dropdown arrow indicator */
      .nav-links .dropdown > a::after,
      .nav-links .language-dropdown > a::after {
        content: " ▼";
        font-size: 12px;
        transition: transform 0.3s ease;
      }
      
      .nav-links .dropdown.active > a::after {
        transform: rotate(180deg);
      }
      
      /* Mobile dropdown styles */
      .nav-links .dropdown-menu {
        position: static !important;
        display: none !important;
        background: rgba(255, 255, 255, 0.1);
        margin: 10px 0;
        border-radius: 8px;
        padding: 10px 0;
        box-shadow: none;
        transform: none;
        opacity: 1;
        visibility: visible;
        width: 100%;
        list-style: none;
      }
      
      .nav-links .dropdown.active .dropdown-menu,
      .nav-links .language-dropdown.active .dropdown-menu {
        display: block !important;
        opacity: 1 !important;
        visibility: visible !important;
      }
      
      /* Ensure dropdown is visible when parent is active */
      .nav-links .dropdown.active .dropdown-menu {
        display: block !important;
        max-height: 500px;
        overflow-y: auto;
      }
      
      .nav-links .dropdown-menu li {
        margin: 0;
      }
      
      .nav-links .dropdown-menu a {
        padding: 12px 30px;
        font-size: 14px;
        color: #ccc;
      }
      
      /* Hamburger animation */
      .menu-toggle.active .bar:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px);
      }
      
      .menu-toggle.active .bar:nth-child(2) {
        opacity: 0;
      }
      
      .menu-toggle.active .bar:nth-child(3) {
        transform: rotate(-45deg) translate(7px, -7px);
      }
    }
    @media (min-width: 360px) {
      .mysticky-welcomebar-btn a {
        font-size: 11px;
      }
    }
  </style>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-5LNHNEJN6S"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-5LNHNEJN6S');
  </script>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5DWMNXTD');
  </script>
  <!-- End Google Tag Manager -->

  <script src="https://plugin-code.salesmartly.com/js/project_75945_406607_1752654846.js"></script>

  <!-- clarity -->
  <script type="text/javascript">
    (function(c, l, a, r, i, t, y) {
      c[a] = c[a] || function() {
        (c[a].q = c[a].q || []).push(arguments)
      };
      t = l.createElement(r);
      t.async = 1;
      t.src = "https://www.clarity.ms/tag/" + i;
      y = l.getElementsByTagName(r)[0];
      y.parentNode.insertBefore(t, y);
    })(window, document, "clarity", "script", "r8jnowqoq7");
  </script>

  <?php if (!empty($page_meta['custom_css'])): ?>
    <link rel="stylesheet" href="<?= htmlspecialchars($page_meta['custom_css']) ?>">
  <?php endif; ?>
  
  <?php if ($page_key === 'blogs'): ?>
    <link rel="stylesheet" href="/assets/css/blogs.css">
  <?php endif; ?>

  <?php include __DIR__ . '/schema.php'; ?>

</head>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  // Add a 'scrolled' class to the navbar when the user scrolls
  window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });

  // Mobile menu toggle function
  function toggleNav() {
    const navLinks = document.querySelector('.nav-links');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (navLinks && mobileMenu) {
      navLinks.classList.toggle('active');
      mobileMenu.classList.toggle('active');
    }
  }
</script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    if (window.innerWidth <= 1024) { // mobile/tablet breakpoint
      const dropdowns = document.querySelectorAll(".dropdown");
      dropdowns.forEach(function(dropdown) {
        const dropBtn = dropdown.querySelector("a");
        const dropdownMenu = dropdown.querySelector(".dropdown-menu");

        if (dropBtn && dropdownMenu) {
          // Change main link to # for dropdowns
          dropBtn.setAttribute("href", "#");
          
          // Add click event for mobile
          dropBtn.addEventListener("click", function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            // Close other dropdowns first
            dropdowns.forEach(function(otherDropdown) {
              if (otherDropdown !== dropdown) {
                otherDropdown.classList.remove("active");
              }
            });
            
            // Toggle current dropdown
            dropdown.classList.toggle("active");
            
            console.log("Dropdown clicked:", dropdown.classList.contains("active"));
          });
          
          // For models dropdown, add "All Models" as first item
          if (dropdownMenu.classList.contains("models-dropdown")) {
            const allModelsLi = document.createElement("li");
            const allModelsA = document.createElement("a");
            allModelsA.href = "<?= localizedPath('/models') ?>";
            allModelsA.textContent = "<?= $texts['header']['allModels'] ?>";
            allModelsLi.appendChild(allModelsA);

            // Insert as first item
            dropdownMenu.insertBefore(allModelsLi, dropdownMenu.firstChild);
          }
          
          // For services dropdown, add "All Services" as first item
          if (dropdownMenu.classList.contains("services-dropdown")) {
            const allServicesLi = document.createElement("li");
            const allServicesA = document.createElement("a");
            allServicesA.href = "<?= localizedPath('/service') ?>";
            allServicesA.textContent = "<?= $texts['header']['services'] ?>";
            allServicesLi.appendChild(allServicesA);

            // Insert as first item
            dropdownMenu.insertBefore(allServicesLi, dropdownMenu.firstChild);
          }
          
          // For locations dropdown, add "All Locations" as first item
          if (dropdownMenu.classList.contains("locations-dropdown")) {
            const allLocationsLi = document.createElement("li");
            const allLocationsA = document.createElement("a");
            allLocationsA.href = "<?= localizedPath('/cities') ?>";
            allLocationsA.textContent = "<?= $texts['header']['view_all_locations'] ?>";
            allLocationsA.className = "view-all-locations";
            allLocationsLi.appendChild(allLocationsA);

            // Insert as first item
            dropdownMenu.insertBefore(allLocationsLi, dropdownMenu.firstChild);
          }
        }
      });
    }
  });
</script>

<!-- <script>
document.addEventListener("DOMContentLoaded", function () {
  const langDropdown = document.querySelector(".language-dropdown");
  if (!langDropdown) return;

  const toggle = langDropdown.querySelector(".language-toggle");
  const menu = langDropdown.querySelector(".dropdown-menu");
  const selectedSpan = langDropdown.querySelector(".selected-lang");
  const links = menu.querySelectorAll("a");

  // 当前语言：根据路径是否以 /cn 开头判断
  let currentLang = location.pathname === "/cn" || location.pathname.startsWith("/cn/")
    ? "cn" : "en";

  updateSelectedLang(currentLang);

  // 展开菜单并隐藏当前语言项
  toggle.addEventListener("click", function (e) {
    e.preventDefault();
    e.stopPropagation();
    langDropdown.classList.toggle("active");

    if (langDropdown.classList.contains("active")) {
      links.forEach(link => {
        const lang = link.getAttribute("data-lang");
        link.parentElement.style.display = (lang === currentLang) ? "none" : "block";
        // 可选：把 href 设为 #，避免默认跳转（我们用 JS 切换）
        link.setAttribute("href", "#");
      });
    }
  });

  // 点击语言项：切换语言（不 hardcode 路径）
  links.forEach(link => {
    link.addEventListener("click", function (e) {
      e.preventDefault();
      const lang = this.getAttribute("data-lang"); // "en" | "cn"
      if (!lang || lang === currentLang) return;
      switchToLang(lang);
    });
  });

  // 点击外面关闭
  document.addEventListener("click", function (e) {
    if (!langDropdown.contains(e.target)) {
      langDropdown.classList.remove("active");
    }
  });

  function updateSelectedLang(lang) {
    currentLang = lang;
    selectedSpan.textContent = (lang === "cn") ? "中文" : "EN";
  }

  // ========= 关键函数：根据当前 URL 动态加/去 /cn 前缀 =========
  function switchToLang(targetLang) {
    const { pathname, search, hash } = location;

    // 规范化：保留是否有结尾斜杠（用于还原）
    const hadTrailing = pathname.endsWith("/");
    const path = normalizePath(pathname);

    let newPath;
    if (targetLang === "cn") {
      // 已经是 /cn 或 /cn/... 就不变；否则加上 /cn
      if (path === "/cn" || path.startsWith("/cn/")) {
        newPath = path;
      } else if (path === "/") {
        newPath = "/cn/";
      } else {
        newPath = "/cn" + path; // 例如 "/models/xxx" -> "/cn/models/xxx"
      }
    } else {
      // 英文：去掉 /cn 前缀
      if (path === "/cn" || path === "/cn/") {
        newPath = "/";
      } else if (path.startsWith("/cn/")) {
        newPath = path.slice(3) || "/"; // 去掉 "/cn"
      } else {
        newPath = path; // 本来就是英文路径
      }
    }

    // 还原结尾斜杠（可选：也可以统一都加 /）
    if (hadTrailing && !newPath.endsWith("/")) newPath += "/";
    if (!hadTrailing && newPath !== "/" && newPath.endsWith("/")) newPath = newPath.slice(0, -1);

    // 拼回查询和哈希并跳转
    const newUrl = newPath + (search || "") + (hash || "");
    location.assign(newUrl);
  }

  // 使路径更干净：开头要 /，把多余连续斜杠合并，空路径视为 /
  function normalizePath(p) {
    if (!p) return "/";
    // 合并重复斜杠（保留协议外情况，这里只处理路径）
    p = p.replace(/\/{2,}/g, "/");
    if (!p.startsWith("/")) p = "/" + p;
    // 空路径 -> "/"
    if (p === "") p = "/";
    return p;
  }
});
</script> -->

<script>
document.addEventListener("DOMContentLoaded", function () {
  const langDropdown = document.querySelector(".language-dropdown");
  if (!langDropdown) return;

  const toggle = langDropdown.querySelector(".language-toggle");
  const menu = langDropdown.querySelector(".dropdown-menu");
  const selectedSpan = langDropdown.querySelector(".selected-lang");
  const links = menu.querySelectorAll("a");

  // 1) 判断是否为“桌面端（hover + fine pointer）”
  const mqlHover = window.matchMedia("(hover:hover) and (pointer:fine)");
  function isDesktop() {
    return mqlHover.matches && window.innerWidth > 1024;
  }

  // 2) 当前语言（路径前缀判断）
  let currentLang = location.pathname === "/cn" || location.pathname.startsWith("/cn/")
    ? "cn" : "en";
  applyCurrentLang(currentLang);

  // 3) 只有“非桌面端”才绑定点击展开
  function bindMobileClick() {
    toggle.addEventListener("click", onToggleClick);
    document.addEventListener("click", onDocClick);
  }
  function unbindMobileClick() {
    toggle.removeEventListener("click", onToggleClick);
    document.removeEventListener("click", onDocClick);
    langDropdown.classList.remove("active");
  }

  function onToggleClick(e) {
    e.preventDefault();
    e.stopPropagation();
    langDropdown.classList.toggle("active");
  }
  function onDocClick(e) {
    if (!langDropdown.contains(e.target)) {
      langDropdown.classList.remove("active");
    }
  }

  // 首次根据环境绑定/解绑
  isDesktop() ? unbindMobileClick() : bindMobileClick();

  // 监听尺寸/能力变化，实时切换交互模式
  window.addEventListener("resize", () => {
    isDesktop() ? unbindMobileClick() : bindMobileClick();
  });
  mqlHover.addEventListener?.("change", () => {
    isDesktop() ? unbindMobileClick() : bindMobileClick();
  });

  // 4) 点击语言项：切换语言（不 hardcode）
  links.forEach(link => {
    link.addEventListener("click", function (e) {
      e.preventDefault();
      const lang = this.getAttribute("data-lang"); // "en" | "cn"
      if (!lang || lang === currentLang) return;
      switchToLang(lang);
    });
  });

  // ===== helpers =====
  function applyCurrentLang(lang) {
    currentLang = lang;
    selectedSpan.textContent = (lang === "cn") ? "中文" : "EN";
    langDropdown.dataset.currentLang = lang; // ✅ 给容器打标，CSS 会隐藏当前语言项
  }

  function switchToLang(targetLang) {
    const { pathname, search, hash } = location;
    const hadTrailing = pathname.endsWith("/");
    const path = normalizePath(pathname);

    let newPath;
    if (targetLang === "cn") {
      if (path === "/cn" || path.startsWith("/cn/")) {
        newPath = path;
      } else if (path === "/") {
        newPath = "/cn/";
      } else {
        newPath = "/cn" + path;
      }
    } else {
      if (path === "/cn" || path === "/cn/") {
        newPath = "/";
      } else if (path.startsWith("/cn/")) {
        newPath = path.slice(3) || "/";
      } else {
        newPath = path;
      }
    }

    if (hadTrailing && !newPath.endsWith("/")) newPath += "/";
    if (!hadTrailing && newPath !== "/" && newPath.endsWith("/")) newPath = newPath.slice(0, -1);

    const newUrl = newPath + (search || "") + (hash || "");
    applyCurrentLang(targetLang);
    location.assign(newUrl);
  }

  function normalizePath(p) {
    if (!p) return "/";
    p = p.replace(/\/{2,}/g, "/");
    if (!p.startsWith("/")) p = "/" + p;
    if (p === "") p = "/";
    return p;
  }
});
</script>


<script>
  window.APP_CONFIG = {
    telegramLink: "<?= env('TELEGRAM_LINK') ?>"
  };
</script>

<meta name="msvalidate.01" content="ECA6FD964FAFAE511B9999D83DE1A2A4" />

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DWMNXTD"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- Navigation Bar -->
  <nav class="navbar">
    <div class="container">
      <a title="superbpartygirl" href="<?= localizedPath('/') ?>" class="logo">
        <img alt="superbpartygirl" src="/wp-content/uploads/2024/12/Party-Girl-Logo-01.png"></a>
      <ul class="nav-links">
      <li class="dropdown">
          <a href="<?= localizedPath('/') ?>"><?= $texts['header']['models'] ?></a>
          <ul class="dropdown-menu models-dropdown">
            <li><a href="<?= localizedPath('/models/local-party-girl') ?>"><?= $texts['header']['local'] ?></a></li>
            <li><a href="<?= localizedPath('/models/chinese-party-girl') ?>"><?= $texts['header']['china'] ?></a></li>
            <li><a href="<?= localizedPath('/models/vietnam-party-girl') ?>"><?= $texts['header']['vietnam'] ?></a></li>
            <li><a href="<?= localizedPath('/models/japan-party-girl') ?>"><?= $texts['header']['japan'] ?></a></li>
            <li><a href="<?= localizedPath('/models/korea-party-girl') ?>"><?= $texts['header']['korea'] ?></a></li>
            <li><a href="<?= localizedPath('/models/europe-party-girl') ?>"><?= $texts['header']['europe'] ?></a></li>
          </ul>
        </li>
        <!-- <li><a href="<?= localizedPath('/') ?>"><?= $texts['header']['home'] ?></a></li> -->

        <!-- <li><a href="<?= localizedPath('/hotel') ?>"><?= $texts['header']['hotel'] ?></a></li> -->
        <li class="dropdown">
          <a href="<?= localizedPath('/premium-escort') ?>"><?= $texts['header']['premium_escort'] ?></a>
          <ul class="dropdown-menu locations-dropdown">
          
          <!-- <li class="divider"></li> -->
            <li><a href="<?= localizedPath('/premium-escort-ampang') ?>"><?= $texts['cities']['ampang'] ?></a></li>
            <li><a href="<?= localizedPath('/premium-escort-cheras') ?>"><?= $texts['cities']['cheras'] ?></a></li>
            <li><a href="<?= localizedPath('/premium-escort-cyberjaya') ?>"><?= $texts['cities']['cyberjaya'] ?></a></li>
            <li><a href="<?= localizedPath('/premium-escort-genting') ?>"><?= $texts['cities']['genting'] ?></a></li>
            <li><a href="<?= localizedPath('/premium-escort-ipoh') ?>"><?= $texts['cities']['ipoh'] ?></a></li>
            
            
            <!-- <li class="divider"></li> -->
            <li><a href="<?= localizedPath('/cities') ?>" class="view-all-locations"><?= $texts['header']['view_all_locations'] ?></a></li>
          </ul>
        </li>
        <!-- <li class="dropdown">
          <a href="<?= localizedPath('/models') ?>"><?= $texts['header']['models'] ?></a>
          <ul class="dropdown-menu models-dropdown">
            <li><a href="<?= localizedPath('/models/local-party-girl') ?>"><?= $texts['header']['local'] ?></a></li>
            <li><a href="<?= localizedPath('/models/chinese-party-girl') ?>"><?= $texts['header']['china'] ?></a></li>
            <li><a href="<?= localizedPath('/models/vietnam-party-girl') ?>"><?= $texts['header']['vietnam'] ?></a></li>
            <li><a href="<?= localizedPath('/models/japan-party-girl') ?>"><?= $texts['header']['japan'] ?></a></li>
            <li><a href="<?= localizedPath('/models/korea-party-girl') ?>"><?= $texts['header']['korea'] ?></a></li>
            <li><a href="<?= localizedPath('/models/europe-party-girl') ?>"><?= $texts['header']['europe'] ?></a></li>
          </ul>
        </li> -->
        <!-- <li class="dropdown">
          <a href="<?= localizedPath('/service') ?>"><?= $texts['header']['services'] ?></a>
          <ul class="dropdown-menu services-dropdown">
            <li><a href="<?= localizedPath('/escort/premium') ?>"><?= $texts['header']['premium_escort_service'] ?></a></li>
            <li><a href="<?= localizedPath('/escort/party-hosting') ?>"><?= $texts['header']['party_escort_hosting'] ?></a></li>
            <li><a href="<?= localizedPath('/escort/events') ?>"><?= $texts['header']['exclusive_event_escort'] ?></a></li>
          </ul>
        </li> -->
       
        
        <li><a href="<?= localizedPath('/about') ?>"><?= $texts['header']['aboutus'] ?></a></li>
        <li><a href="https://t.me/SuperBvvip?text=<?= $texts['header']['bomMsg'] ?>"><?= $texts['header']['bom'] ?></a></li> 
        <li><a href="<?= localizedPath('/contact-us') ?>"><?= $texts['header']['contactus'] ?></a></li>
        <!-- <li><a href="<?= localizedPath('/booking') ?>" class="booking-btn"><?= $texts['header']['booking'] ?></a></li>        -->
        <li class="language-dropdown">
          <a href="#" class="language-toggle">
            <i class="fas fa-globe language-icon"></i>
            <span class="selected-lang"></span>
          </a> <!-- Font Awesome globe icon -->
          <ul class="dropdown-menu">
            <li><a href="/" data-lang="en"><?= $texts['header']['english'] ?></a></li>
            <li><a href="/cn/" data-lang="cn"><?= $texts['header']['chinese'] ?></a></li>
          </ul>
        </li>
      </ul>
      <div class="menu-toggle" id="mobile-menu" onclick="toggleNav()">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
    </div>
  </nav>

  <!-- Mobile Sticky Welcome Bar -->
  <div class="mysticky-welcomebar-fixed">
    <div class="mysticky-welcomebar-content">
      <p>Discreet & premium escort services</p>
    </div>
    <div class="mysticky-welcomebar-btn">
      <a href="/booking" target="_blank">Book Now!</a>
    </div>
    <div class="mysticky-welcomebar-close" onclick="this.parentElement.style.display='none'">
    </div>
  </div>

