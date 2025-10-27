<?php
// Simple blog admin interface
// This is a basic admin interface for managing blog posts

// Simple authentication (you should implement proper authentication)
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    if (isset($_POST['password']) && $_POST['password'] === 'admin123') {
        $_SESSION['admin_logged_in'] = true;
    } else {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Blog Admin Login</title>
            <style>
                body { font-family: Arial, sans-serif; max-width: 400px; margin: 100px auto; padding: 20px; }
                input { width: 100%; padding: 10px; margin: 10px 0; }
                button { background: #ff2491; color: white; padding: 10px 20px; border: none; cursor: pointer; }
            </style>
        </head>
        <body>
            <h2>Blog Admin Login</h2>
            <form method="post">
                <input type="password" name="password" placeholder="Enter password" required>
                <button type="submit">Login</button>
            </form>
        </body>
        </html>
        <?php
        exit;
    }
}

// Handle form submissions
if ($_POST) {
    if (isset($_POST['action']) && $_POST['action'] === 'create_post') {
        // Create a new blog post
        $post_data = array(
            'post_title' => sanitize_text_field($_POST['title']),
            'post_content' => wp_kses_post($_POST['content']),
            'post_status' => 'publish',
            'post_type' => 'post',
            'post_author' => 1
        );
        
        $post_id = wp_insert_post($post_data);
        
        if ($post_id) {
            echo '<div style="background: #d4edda; color: #155724; padding: 10px; margin: 10px 0; border-radius: 5px;">Blog post created successfully!</div>';
        } else {
            echo '<div style="background: #f8d7da; color: #721c24; padding: 10px; margin: 10px 0; border-radius: 5px;">Error creating blog post.</div>';
        }
    }
}

// Get all blog posts
$posts = get_posts(array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'numberposts' => -1,
    'orderby' => 'date',
    'order' => 'DESC'
));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Blog Admin</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 1200px; margin: 0 auto; padding: 20px; }
        .container { display: flex; gap: 20px; }
        .sidebar { width: 300px; }
        .main-content { flex: 1; }
        .form-group { margin: 15px 0; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input, textarea { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; }
        textarea { height: 200px; }
        button { background: #ff2491; color: white; padding: 10px 20px; border: none; cursor: pointer; border-radius: 5px; }
        button:hover { background: #e01e7a; }
        .post-item { background: #f8f9fa; padding: 15px; margin: 10px 0; border-radius: 5px; border-left: 4px solid #ff2491; }
        .post-title { font-weight: bold; margin-bottom: 5px; }
        .post-date { color: #666; font-size: 0.9em; }
        .post-actions { margin-top: 10px; }
        .post-actions a { color: #ff2491; text-decoration: none; margin-right: 10px; }
        .logout { float: right; }
    </style>
</head>
<body>
    <h1>Blog Admin Panel</h1>
    <a href="?logout=1" class="logout">Logout</a>
    
    <div class="container">
        <div class="sidebar">
            <h3>Create New Post</h3>
            <form method="post">
                <input type="hidden" name="action" value="create_post">
                
                <div class="form-group">
                    <label for="title">Post Title:</label>
                    <input type="text" name="title" id="title" required>
                </div>
                
                <div class="form-group">
                    <label for="content">Post Content:</label>
                    <textarea name="content" id="content" required></textarea>
                </div>
                
                <button type="submit">Create Post</button>
            </form>
        </div>
        
        <div class="main-content">
            <h3>Existing Posts</h3>
            <?php if (empty($posts)): ?>
                <p>No blog posts found.</p>
            <?php else: ?>
                <?php foreach ($posts as $post): ?>
                    <div class="post-item">
                        <div class="post-title"><?= esc_html($post->post_title) ?></div>
                        <div class="post-date"><?= date('F j, Y', strtotime($post->post_date)) ?></div>
                        <div class="post-actions">
                            <a href="<?= get_permalink($post->ID) ?>" target="_blank">View</a>
                            <a href="<?= get_edit_post_link($post->ID) ?>" target="_blank">Edit</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    
    <script>
        // Auto-resize textarea
        document.getElementById('content').addEventListener('input', function() {
            this.style.height = 'auto';
            this.style.height = this.scrollHeight + 'px';
        });
    </script>
</body>
</html>

<?php
// Handle logout
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
?>
