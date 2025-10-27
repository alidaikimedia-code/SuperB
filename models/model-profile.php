<?php
// Dynamic Model Profile Page
$page_key = 'modelProfile';
$lang = 'en-my';

// Load config and language files
include $_SERVER['DOCUMENT_ROOT'] . '/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/header.php';

// Get model ID from URL or query parameter
$modelId = '';
$modelType = 'china'; // default type

// First try to get from query parameter (from .htaccess rewrite)
if (isset($_GET['model'])) {
    $modelId = strtoupper($_GET['model']);
}

// If no model ID from query, try to extract from URL path
if (empty($modelId)) {
    $requestUri = $_SERVER['REQUEST_URI'];
    $pathParts = explode('/', trim($requestUri, '/'));
    
    // Extract model ID from URL (e.g., /models/C01 or /models/chinese-party-girl/C01)
    foreach ($pathParts as $index => $part) {
        if ($part === 'models' && isset($pathParts[$index + 1])) {
            $nextPart = $pathParts[$index + 1];
            // Check if it's a model ID pattern (letter + numbers)
            if (preg_match('/^[A-Z]\d+$/i', $nextPart)) {
                $modelId = strtoupper($nextPart);
                break;
            }
        }
    }
}

// Get model type from query parameter if available
if (isset($_GET['type'])) {
    $modelType = $_GET['type'];
}

// Get language from query parameter if available
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
}

// Check if model exists in our data
$modelData = null;
if (!empty($modelId) && isset($texts['modelPages'][$modelId])) {
    $modelData = $texts['modelPages'][$modelId];
} else {
    // Model not found, redirect to models page
    header('Location: /models/chinese-party-girl/');
    exit;
}

// Get model info from JavaScript data for additional details
$modelInfo = null;
if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/assets/js/models.js')) {
    $modelsJs = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/assets/js/models.js');
    // Extract model data using regex
    if (preg_match('/id:\s*["\']' . preg_quote($modelId, '/') . '["\'][^}]*}/', $modelsJs, $matches)) {
        // This is a simplified extraction - in production you might want to parse JSON properly
        $modelInfo = $matches[0];
    }
}

// Set page meta data
$page_meta = [
    'title' => $modelData['metaTitle'],
    'description' => $modelData['metaDescription'],
    'canonical' => "https://superbpartygirl.com/models/{$modelId}/",
    'og_title' => $modelData['metaTitle'],
    'og_description' => $modelData['metaDescription'],
    'lang' => $lang,
    'custom_css' => "/assets/css/model-profile.css"
];
?>

<link rel="stylesheet" href="/assets/css/model-profile.css">

<!-- Model Profile Banner -->
<div class="model-banner">
    <div class="banner-overlay">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="model-name"><?= htmlspecialchars($modelData['name']) ?></h1>
                    <p class="model-intro"><?= htmlspecialchars($modelData['intro']) ?></p>
                    <div class="banner-actions">
                        <a href="https://t.me/SuperBbaby?text=<?= urlencode("Book {$modelId} - {$modelData['name']}") ?>" class="btn btn-primary btn-lg" target="_blank">
                            <i class="fas fa-calendar-plus"></i> Book Now
                        </a>
                        <a href="/models/chinese-party-girl/" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-arrow-left"></i> Back to Models
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="model-image-container">
                        <img src="/wp-content/uploads/models/cn/<?= $modelId ?>.webp" 
                             alt="<?= htmlspecialchars($modelData['name']) ?>" 
                             class="model-main-image"
                             onerror="this.src='/wp-content/uploads/2024/12/Party-Girl-Logo-01.png'">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<main class="model-profile-content">
    <div class="container">
        <!-- Fast Highlights Section -->
        <section class="highlights-section">
            <h2>Fast Highlights</h2>
            <div class="highlights-grid">
                <?php foreach ($modelData['highlights'] as $highlight): ?>
                    <div class="highlight-item">
                        <i class="fas fa-check-circle"></i>
                        <span><?= htmlspecialchars($highlight) ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Her Vibe Section -->
        <section class="vibe-section">
            <h2>Her Vibe</h2>
            <p><?= htmlspecialchars($modelData['vibe']) ?></p>
        </section>

        <!-- Why People Love Her Section -->
        <section class="why-love-section">
            <h2>Why People Love Her</h2>
            <div class="love-points">
                <?php foreach ($modelData['whyLove'] as $point): ?>
                    <div class="love-point">
                        <i class="fas fa-heart"></i>
                        <span><?= htmlspecialchars($point) ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Best For Section -->
        <section class="best-for-section">
            <h2>Best For</h2>
            <div class="best-for-grid">
                <?php foreach ($modelData['bestFor'] as $item): ?>
                    <div class="best-for-item">
                        <i class="fas fa-star"></i>
                        <span><?= htmlspecialchars($item) ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Style Notes Section -->
        <section class="style-notes-section">
            <h2>Style Notes</h2>
            <p><?= htmlspecialchars($modelData['styleNotes']) ?></p>
        </section>

        <!-- Gallery Teaser Section -->
        <section class="gallery-teaser-section">
            <h2>Gallery Teaser</h2>
            <p><?= htmlspecialchars($modelData['galleryTeaser']) ?></p>
        </section>

        <!-- Booking Info Section -->
        <section class="booking-info-section">
            <h2>Booking Info</h2>
            <p><?= htmlspecialchars($modelData['bookingInfo']) ?></p>
            <div class="booking-cta">
                <a href="https://t.me/SuperBbaby?text=<?= urlencode("Book {$modelId} - {$modelData['name']}") ?>" 
                   class="btn btn-primary btn-lg" target="_blank">
                    <i class="fas fa-calendar-plus"></i> Book <?= htmlspecialchars($modelData['name']) ?>
                </a>
            </div>
        </section>

        <!-- Related Models Section -->
        <section class="related-models-section">
            <h2>More Chinese Models</h2>
            <div class="related-models-grid">
                <?php 
                $relatedModels = array_slice($texts['modelPages'], 0, 3, true);
                foreach ($relatedModels as $id => $relatedModel): 
                    if ($id !== $modelId): ?>
                        <div class="related-model-card">
                            <a href="/models/<?= strtolower($id) ?>/">
                                <img src="/wp-content/uploads/models/cn/<?= $id ?>.webp" 
                                     alt="<?= htmlspecialchars($relatedModel['name']) ?>"
                                     onerror="this.src='/wp-content/uploads/2024/12/Party-Girl-Logo-01.png'">
                                <h3><?= htmlspecialchars($relatedModel['name']) ?></h3>
                            </a>
                        </div>
                    <?php endif;
                endforeach; ?>
            </div>
        </section>
    </div>
</main>

<script>
// Add any JavaScript functionality here if needed
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
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
