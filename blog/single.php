<?php
require __DIR__ . '/helpers.php';
$slug = $_GET['slug'] ?? '';
if ($slug===''){ http_response_code(404); exit('Not found'); }

[$arr,$res,$url] = fetch_single_by_slug($slug);
$post = (is_array($arr) && !empty($arr)) ? $arr[0] : null;

debug_panel(['Single slug='.$slug, 'Fetch URL='.$url, 'HTTP code='.$res['code'], 'Found=' . ($post?'yes':'no')]);

if (!$post){ http_response_code(404); exit('Post not found'); }

$title = $post['title']['rendered'] ?? '(untitled)';
$content = $post['content']['rendered'] ?? '';
$img = media_url($post);
$date = !empty($post['date']) ? date('M j, Y', strtotime($post['date'])) : '';

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
  details .blogs-faq-content-card p {
    margin-bottom: unset!important;
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
    /* transition: all 0.5s ease; */
    transition: max-height 0.35s ease, padding 0.35s ease;
    font-size: 1rem;
    line-height: 1.7;
    padding: 0;
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
      <?php if ($img): ?><img src="<?php echo esc($img); ?>" style="max-width:100%;border-radius:10px"><?php endif; ?>
      <div class="blogs-hero-bg-overlay"></div>
    <div class="blogs-hero-text-content">
      <h1 class="blogs-h1"><?php echo $title; ?></h1>
    </div>
    
  </header>
    <!-- Blog Content Section -->
  <section id="blog-content" class="blogs-page-section">
    <div class="blogs-section-inner">
      <div><?php echo $content !== '' ? $content : '<p>(no content)</p>'; ?></div>
    </div>
  </section>
  <script>
document.addEventListener("DOMContentLoaded", function () {
  const container = document.getElementById("blog-content");
  if (!container) return;

  // 1) Headings/img/p -> add classes (scoped to #blog-content)
  const rules = {
    h1: "blogs-h1",
    h2: "blogs-h2",
    h3: "blogs-h3",
    img: "blogs-img",
    p:  "blogs-p"
  };
  Object.keys(rules).forEach(tag => {
    container.querySelectorAll(tag).forEach(el => {
      const cls = rules[tag];
      if (!el.classList.contains(cls)) el.classList.add(cls);
    });
  });

  // 2) FAQs: normalize structure to ONE content wrapper per <details>
  const detailsList = container.querySelectorAll("details");
  detailsList.forEach(d => {
    d.classList.add("blogs-faq-card");

    // summary
    let sum = d.querySelector("summary");
    if (!sum) {
      // create a fallback summary to avoid invalid details structure
      sum = document.createElement("summary");
      sum.textContent = "Details";
      d.insertBefore(sum, d.firstChild);
    }
    sum.classList.add("blogs-faq-header-card");

    // Ensure exactly ONE .blogs-faq-content-card wrapping all content except summary
    let content = d.querySelector(".blogs-faq-content-card");
    if (!content) {
      content = document.createElement("div");
      content.className = "blogs-faq-content-card";
      // move all siblings after summary into the wrapper
      const nodesToMove = [];
      for (let n = sum.nextSibling; n; n = n.nextSibling) nodesToMove.push(n);
      nodesToMove.forEach(n => content.appendChild(n));
      d.appendChild(content);
    } else {
      // if there are multiple wrappers, merge them
      const extras = d.querySelectorAll(".blogs-faq-content-card");
      if (extras.length > 1) {
        extras.forEach((wrap, i) => {
          if (i === 0) return;
          while (wrap.firstChild) content.appendChild(wrap.firstChild);
          wrap.remove();
        });
      }
    }

    // start collapsed visuals (native <details> may be closed; reflect with styles)
    content.style.overflow = "hidden";
    content.style.transition = "max-height 250ms ease";
    content.style.maxHeight = d.open ? content.scrollHeight + "px" : "0";
  });

  // 3) Animate via native <details> toggle; also close others
  detailsList.forEach(d => {
    d.addEventListener("toggle", () => {
      const content = d.querySelector(".blogs-faq-content-card");
      if (!content) return;

      if (d.open) {
        // close others
        detailsList.forEach(other => {
          if (other !== d && other.open) other.open = false;
        });
        d.classList.add("active");
        // expand
        content.style.maxHeight = content.scrollHeight + "px";
        // ensure reflow after dynamic content changes
        requestAnimationFrame(() => {
          content.style.maxHeight = content.scrollHeight + "px";
        });
      } else {
        d.classList.remove("active");
        // collapse
        content.style.maxHeight = "0";
      }
    });
  });

  // 4) Optional: IntersectionObserver (run AFTER classes/wrappers exist)
  const sectionObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
        entry.target.style.opacity = 1;
        entry.target.style.transform = "translateY(0)";
      }
    });
  }, { threshold: 0.1, rootMargin: "0px 0px -30px 0px" });

  container.querySelectorAll(".blogs-section-inner, .blogs-faq-card").forEach((el, i) => {
    el.style.animationDelay = `${i * 0.15}s`;
    sectionObserver.observe(el);
  });

  // 5) Smooth scroll (optional)
  document.documentElement.style.scrollBehavior = "smooth";
  window.addEventListener("load", () => { document.body.style.opacity = "1"; });
  container.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener("click", e => {
      e.preventDefault();
      const target = document.querySelector(a.getAttribute("href"));
      if (target) target.scrollIntoView({ behavior: "smooth", block: "start" });
    });
  });
});
</script>

</section>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>