<?php
// Language initialization file
// This file is included by header.php

// If config.php hasn't been loaded yet, load it
if (!isset($texts)) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
}

// Set default values if not already set
if (!isset($lang)) {
    $lang = 'en-my';
}

if (!isset($page_key)) {
    $page_key = 'home';
}

if (!isset($texts)) {
    $texts = [];
}

// Ensure required text arrays exist
if (!isset($texts['header'])) {
    $texts['header'] = [];
}

if (!isset($texts['blog'])) {
    $texts['blog'] = [];
}

if (!isset($texts['common'])) {
    $texts['common'] = [];
}

if (!isset($texts['cities'])) {
    $texts['cities'] = [];
}

// Ensure cities array is properly loaded
if (empty($texts['cities'])) {
    // Force reload the language file to get cities
    $lang_file = __DIR__ . '/' . $lang . '.php';
    if (file_exists($lang_file)) {
        $reloaded_texts = include $lang_file;
        if (isset($reloaded_texts['cities']) && !empty($reloaded_texts['cities'])) {
            $texts['cities'] = $reloaded_texts['cities'];
        }
    }
}

// Set default values for missing keys
$texts['header']['blog'] = $texts['header']['blog'] ?? 'Blog';
$texts['blog']['title'] = $texts['blog']['title'] ?? 'Our Blog';
$texts['blog']['subtitle'] = $texts['blog']['subtitle'] ?? 'Stay updated with the latest news and insights';
?>
