<?php
$page_key = 'blog_single';
include $_SERVER['DOCUMENT_ROOT'] . '/headernew.php';

// Get the current post
$post = get_post();
if (!$post) {
    // Handle 404 or redirect
    wp_redirect(home_url('/blog/'));
    exit;
}

$featured_image = get_the_post_thumbnail_url($post->ID, 'full');
$categories = get_the_category($post->ID);
$tags = get_the_tags($post->ID);
$author = get_the_author_meta('display_name', $post->post_author);
$read_time = ceil(str_word_count($post->post_content) / 200);
?>

<link rel="stylesheet" href="/assets/css/blog.css">

<main class="blog-single-main">
    <div class="container">
        <!-- Breadcrumb -->
        <nav class="blog-breadcrumb">
            <a href="<?= home_url('/blog/') ?>">
                <i class="fas fa-home"></i> Blog
            </a>
            <i class="fas fa-chevron-right"></i>
            <span><?= get_the_title() ?></span>
        </nav>

        <!-- Blog Post Header -->
        <header class="blog-post-header">
            <?php if ($featured_image): ?>
                <div class="blog-post-featured-image">
                    <img src="<?= $featured_image ?>" alt="<?= get_the_title() ?>">
                </div>
            <?php endif; ?>
            
            <div class="blog-post-meta">
                <div class="blog-post-categories">
                    <?php if (!empty($categories)): ?>
                        <?php foreach ($categories as $category): ?>
                            <span class="category-tag"><?= esc_html($category->name) ?></span>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                
                <h1 class="blog-post-title"><?= get_the_title() ?></h1>
                
                <div class="blog-post-details">
                    <div class="blog-post-author">
                        <i class="fas fa-user"></i>
                        <span>By <?= $author ?></span>
                    </div>
                    <div class="blog-post-date">
                        <i class="fas fa-calendar"></i>
                        <span><?= get_the_date() ?></span>
                    </div>
                    <div class="blog-post-read-time">
                        <i class="fas fa-clock"></i>
                        <span><?= $read_time ?> min read</span>
                    </div>
                </div>
            </div>
        </header>

        <!-- Blog Post Content -->
        <article class="blog-post-content">
            <div class="blog-post-body">
                <?= apply_filters('the_content', $post->post_content) ?>
            </div>
            
            <!-- Tags -->
            <?php if (!empty($tags)): ?>
                <div class="blog-post-tags">
                    <h4>Tags:</h4>
                    <div class="tags-list">
                        <?php foreach ($tags as $tag): ?>
                            <a href="<?= get_tag_link($tag->term_id) ?>" class="tag-link">
                                #<?= esc_html($tag->name) ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </article>

        <!-- Author Bio -->
        <div class="blog-author-bio">
            <div class="author-avatar">
                <?= get_avatar($post->post_author, 80) ?>
            </div>
            <div class="author-info">
                <h4><?= $author ?></h4>
                <p><?= get_the_author_meta('description', $post->post_author) ?: 'No bio available.' ?></p>
            </div>
        </div>

        <!-- Related Posts -->
        <?php
        $related_posts = get_posts(array(
            'category__in' => wp_get_post_categories($post->ID),
            'numberposts' => 3,
            'post__not_in' => array($post->ID)
        ));
        
        if (!empty($related_posts)):
        ?>
            <section class="related-posts">
                <h3>Related Posts</h3>
                <div class="related-posts-grid">
                    <?php foreach ($related_posts as $related_post): ?>
                        <div class="related-post-card">
                            <div class="related-post-image">
                                <?php
                                $related_image = get_the_post_thumbnail_url($related_post->ID, 'medium');
                                if ($related_image):
                                ?>
                                    <img src="<?= $related_image ?>" alt="<?= get_the_title($related_post->ID) ?>">
                                <?php else: ?>
                                    <div class="blog-placeholder-image">
                                        <i class="fas fa-image"></i>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="related-post-content">
                                <h4>
                                    <a href="<?= get_permalink($related_post->ID) ?>">
                                        <?= get_the_title($related_post->ID) ?>
                                    </a>
                                </h4>
                                <p><?= wp_trim_words(get_the_excerpt($related_post->ID), 15, '...') ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endif; ?>

        <!-- Navigation -->
        <nav class="blog-post-navigation">
            <div class="nav-previous">
                <?php
                $prev_post = get_previous_post();
                if ($prev_post):
                ?>
                    <a href="<?= get_permalink($prev_post->ID) ?>">
                        <i class="fas fa-chevron-left"></i>
                        <div class="nav-content">
                            <span class="nav-label">Previous Post</span>
                            <span class="nav-title"><?= get_the_title($prev_post->ID) ?></span>
                        </div>
                    </a>
                <?php endif; ?>
            </div>
            
            <div class="nav-next">
                <?php
                $next_post = get_next_post();
                if ($next_post):
                ?>
                    <a href="<?= get_permalink($next_post->ID) ?>">
                        <div class="nav-content">
                            <span class="nav-label">Next Post</span>
                            <span class="nav-title"><?= get_the_title($next_post->ID) ?></span>
                        </div>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                <?php endif; ?>
            </div>
        </nav>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add smooth scrolling for anchor links
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
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
});
</script>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>
