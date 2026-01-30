<?php
require __DIR__ . '/helpers.php';

$slug = $_GET['slug'] ?? '';
if (!$slug) { http_response_code(404); exit('Not found'); }

$cat = get_category_by_slug($slug);
if (!$cat) { http_response_code(404); exit('Category not found'); }

$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$per  = (int) blog_cfg('POSTS_PER_PAGE');

$url = wp_rest('/wp/v2/posts', ['per_page' => $per, 'page' => $page, 'categories' => $cat['id'], '_embed' => 1]);
$headers = [];
$posts = fetch_with_headers($url, $headers);
$totalPages = (int)($headers['x-wp-totalpages'] ?? 1);

?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Category: <?php echo esc($cat['name']); ?> – Blog</title>
  <link rel="canonical" href="https://superbpartygirl.com/blog/category/<?php echo esc($slug); ?>">
  <style>.grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:20px}article{border:1px solid #eee;padding:16px;border-radius:12px}</style>
</head>
<body>
  <h1>Category: <?php echo esc($cat['name']); ?></h1>

  <?php if (!$posts): ?>
    <p>No posts yet.</p>
  <?php else: ?>
    <div class="grid">
      <?php foreach ($posts as $p): 
        $title = $p['title']['rendered'];
        $pslug = $p['slug'];
        $img = media_url($p);
      ?>
      <article>
        <?php if ($img): ?><a href="/blog/<?php echo esc($pslug); ?>"><img src="<?php echo esc($img); ?>" alt="<?php echo esc(strip_tags($title)); ?>"></a><?php endif; ?>
        <h2><a href="/blog/<?php echo esc($pslug); ?>"><?php echo $title; ?></a></h2>
      </article>
      <?php endforeach; ?>
    </div>

    <?php if ($totalPages > 1): ?>
      <p>
        <?php for ($i=1; $i<=$totalPages; $i++): 
          $href = '/blog/category/'.esc($slug).($i>1?('/?page='.$i):''); ?>
          <?php if ($i == $page): ?><strong><?php echo $i; ?></strong>
          <?php else: ?><a href="<?php echo $href; ?>"><?php echo $i; ?></a>
          <?php endif; ?>
        <?php endfor; ?>
      </p>
    <?php endif; ?>
  <?php endif; ?>
</body>
</html>
