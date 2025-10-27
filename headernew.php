<?php
$uri = $_SERVER['REQUEST_URI'];
// 去除结尾的斜杠
$uri = rtrim($uri, '/');

// 判断首页英文 `/` 或中文 `/cn`
if ($uri !== '' && $uri !== '/cn') {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
}
include_once __DIR__ . '/lang/init.php';
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
    <!-- <link rel="stylesheet" href="/wp-content/themes/theme/style.css"> -->
    <link rel="stylesheet" href="/wp-content/themes/theme/stylenew.css?v=<?= time() ?>">
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
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        if (window.innerWidth <= 1024) { // mobile/tablet breakpoint
            const dropdown = document.querySelector(".dropdown");
            if (dropdown) {
                const dropBtn = dropdown.querySelector(".dropbtn");
                const dropdownMenu = dropdown.querySelector(".dropdown-menu");

                if (dropBtn && dropdownMenu) {
                    // Change main link to #
                    dropBtn.setAttribute("href", "#");

                    // Create "All Models" li
                    const allModelsLi = document.createElement("li");
                    const allModelsA = document.createElement("a");
                    allModelsA.href = "<?= localizedPath('/models') ?>";
                    allModelsA.textContent = "<?= $texts['header']['allModels'] ?>";
                    allModelsLi.appendChild(allModelsA);

                    // Insert as first item
                    dropdownMenu.insertBefore(allModelsLi, dropdownMenu.firstChild);
                }
            }
        }
    });
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
                <li><a href="<?= localizedPath('/') ?>"><?= $texts['header']['home'] ?></a></li>
                <li class="dropdown">
                    <a href="<?= localizedPath('/models') ?>" class="dropbtn"><?= $texts['header']['models'] ?></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= localizedPath('/models/local-party-girl') ?>"><?= $texts['header']['local'] ?></a></li>
                        <li><a href="<?= localizedPath('/models/vietnam-party-girl') ?>"><?= $texts['header']['vietnam'] ?></a></li>
                        <li><a href="<?= localizedPath('/models/korea-party-girl') ?>"><?= $texts['header']['korea'] ?></a></li>
                        <li><a href="<?= localizedPath('/models/japan-party-girl') ?>"><?= $texts['header']['japan'] ?></a></li>
                        <li><a href="<?= localizedPath('/models/chinese-party-girl') ?>"><?= $texts['header']['china'] ?></a></li>
                        <li><a href="<?= localizedPath('/models/europe-party-girl') ?>"><?= $texts['header']['europe'] ?></a></li>
                    </ul>
                </li>
                <li><a href="<?= localizedPath('/service') ?>"><?= $texts['header']['services'] ?></a></li>
                <li><a href="<?= localizedPath('/booking') ?>"><?= $texts['header']['booking'] ?></a></li>

                 <li class="dropdown">
          <a href="<?= localizedPath('/cities') ?>" class="dropbtn">Malaysia Cities</a>
          <ul class="dropdown-menu">
            <li><a href="<?= localizedPath('/cities/ampang') ?>">Ampang</a></li>
            <li><a href="<?= localizedPath('/cities/cheras') ?>">Cheras</a></li>
            <li><a href="<?= localizedPath('/cities/cyberjaya') ?>">Cyberjaya</a></li>
            <li><a href="<?= localizedPath('/cities/genting') ?>">Genting</a></li>
            <li><a href="<?= localizedPath('/cities/ipoh') ?>">Ipoh</a></li>
            <li><a href="<?= localizedPath('/cities/johor') ?>">Johor</a></li>
            <li><a href="<?= localizedPath('/cities/kepong') ?>">Kepong</a></li>
            <li><a href="<?= localizedPath('/cities/klang') ?>">Klang</a></li>
            <li><a href="<?= localizedPath('/cities/kota-damansara') ?>">Kota Damansara</a></li>
            <li><a href="<?= localizedPath('/cities/kuala-lumpur') ?>">Kuala Lumpur</a></li>
          </ul>
        </li>

                <!-- <li class="dropdown">
                    <a href="<?= localizedPath('/models') ?>" class="dropbtn">Malaysia KOL's</a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= localizedPath('/models') ?>">Local KOL's</a></li>
                        <li><a href="<?= localizedPath('/models/ampang') ?>">ampang</a></li>
                        <li><a href="<?= localizedPath('/models/penang') ?>">Penang</a></li>
                        <li><a href="<?= localizedPath('/models') ?>">Johor</a></li>
                    </ul>
                </li> -->

                <li><a href="<?= localizedPath('/contact-us') ?>"><?= $texts['header']['contactus'] ?></a></li>
                <li><a href="<?= localizedPath('/about') ?>"><?= $texts['header']['aboutus'] ?></a></li>
                <li><a href="https://t.me/SuperBbaby?text=<?= $texts['header']['bomMsg'] ?>"><?= $texts['header']['bom'] ?></a></li>
                <li class="dropdown">
                    <i class="fas fa-globe language-icon"></i> <!-- Font Awesome globe icon -->
                    <ul class="dropdown-menu">
                        <li><a href="/"><?= $texts['header']['english'] ?></a></li>
                        <li><a href="/cn/"><?= $texts['header']['chinese'] ?></a></li>
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