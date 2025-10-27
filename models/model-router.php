<?php
// Model Router - handles dynamic model profile URLs
// This file should be included in your main routing system

function handleModelRoutes() {
    $requestUri = $_SERVER['REQUEST_URI'];
    $pathParts = explode('/', trim($requestUri, '/'));
    
    // Check if this is a model profile request
    // Patterns: /models/C01, /models/chinese-party-girl/C01, etc.
    $isModelRoute = false;
    $modelId = '';
    
    // Look for 'models' in the path
    foreach ($pathParts as $index => $part) {
        if ($part === 'models' && isset($pathParts[$index + 1])) {
            $nextPart = $pathParts[$index + 1];
            
            // Check if next part is a model ID (starts with letter followed by numbers)
            if (preg_match('/^[A-Z]\d+$/i', $nextPart)) {
                $isModelRoute = true;
                $modelId = strtoupper($nextPart);
                break;
            }
        }
    }
    
    // If it's a model route, include the model profile page
    if ($isModelRoute && !empty($modelId)) {
        // Set the model ID as a global variable for the profile page
        $GLOBALS['modelId'] = $modelId;
        
        // Include the model profile page
        include $_SERVER['DOCUMENT_ROOT'] . '/models/model-profile.php';
        return true;
    }
    
    return false;
}

// Alternative routing method using .htaccess rewrite rules
function setupModelRewriteRules() {
    // Add these rules to your .htaccess file:
    /*
    RewriteEngine On
    
    # Model profile routes
    RewriteRule ^models/([A-Z]\d+)/?$ /models/model-profile.php?model=$1 [L,QSA]
    RewriteRule ^models/chinese-party-girl/([A-Z]\d+)/?$ /models/model-profile.php?model=$1 [L,QSA]
    RewriteRule ^cn/models/chinese-party-girl/([A-Z]\d+)/?$ /models/model-profile.php?model=$1&lang=zh-my [L,QSA]
    */
}

// Function to generate model URLs
function getModelUrl($modelId, $lang = 'en') {
    $baseUrl = ($lang === 'zh') ? '/cn/models/chinese-party-girl' : '/models';
    return $baseUrl . '/' . strtolower($modelId) . '/';
}

// Function to check if a model exists
function modelExists($modelId) {
    $langFile = $_SERVER['DOCUMENT_ROOT'] . '/lang/en-my.php';
    if (file_exists($langFile)) {
        $texts = include $langFile;
        return isset($texts['modelPages'][strtoupper($modelId)]);
    }
    return false;
}

// Function to get all available model IDs
function getAllModelIds() {
    $langFile = $_SERVER['DOCUMENT_ROOT'] . '/lang/en-my.php';
    if (file_exists($langFile)) {
        $texts = include $langFile;
        return array_keys($texts['modelPages'] ?? []);
    }
    return [];
}

// Function to generate sitemap entries for models
function generateModelSitemapEntries() {
    $modelIds = getAllModelIds();
    $entries = [];
    
    foreach ($modelIds as $modelId) {
        $entries[] = [
            'url' => 'https://superbpartygirl.com/models/' . strtolower($modelId) . '/',
            'lastmod' => date('Y-m-d'),
            'changefreq' => 'weekly',
            'priority' => '0.8'
        ];
        
        $entries[] = [
            'url' => 'https://superbpartygirl.com/cn/models/chinese-party-girl/' . strtolower($modelId) . '/',
            'lastmod' => date('Y-m-d'),
            'changefreq' => 'weekly',
            'priority' => '0.8'
        ];
    }
    
    return $entries;
}
