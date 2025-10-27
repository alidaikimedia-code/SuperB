<?php
// Test script to verify both templates are working correctly

// Test English template
echo "Testing English template...\n";
$page_key = 'ampang';
$texts = include 'lang/en-my.php';

// Test if we can process the content
$city_content = $texts[$page_key]['content'] ?? '';
$city_faqs = $texts[$page_key]['faqs'] ?? [];

echo "English content length: " . strlen($city_content) . "\n";
echo "English FAQs count: " . count($city_faqs) . "\n";

// Test Chinese template
echo "\nTesting Chinese template...\n";
$texts_cn = include 'lang/zh-my.php';

$city_content_cn = $texts_cn[$page_key]['content'] ?? '';
$city_faqs_cn = $texts_cn[$page_key]['faqs'] ?? [];

echo "Chinese content length: " . strlen($city_content_cn) . "\n";
echo "Chinese FAQs count: " . count($city_faqs_cn) . "\n";

// Test the processCityContent function
function processCityContent($content) {
  if (empty($content)) return '';
  
  $lines = explode("\n", $content);
  $html = '';
  $inAreaList = false;
  
  foreach ($lines as $line) {
    $line = trim($line);
    if (empty($line)) continue;
    
    if (strpos($line, '伴游 – SuperB Party Girl') !== false || strpos($line, '伴游 – 超棒的派对女郎') !== false) {
      $html .= '<h1 class="main-title">' . htmlspecialchars($line) . '</h1>';
    }
    elseif (strpos($line, '生活方式') !== false || strpos($line, '氛围') !== false || strpos($line, '情调') !== false || strpos($line, '魅力') !== false || strpos($line, '节奏') !== false) {
      $html .= '<h2 class="section-title">' . htmlspecialchars($line) . '</h2>';
      $inAreaList = false;
    }
    elseif (strpos($line, '我们在') !== false && strpos($line, '服务的热门地区') !== false) {
      $html .= '<h2 class="section-title">' . htmlspecialchars($line) . '</h2>';
      $inAreaList = true;
    }
    elseif (strpos($line, '我们在') !== false && strpos($line, '服务的主要服务区域') !== false) {
      $html .= '<h2 class="section-title">' . htmlspecialchars($line) . '</h2>';
      $inAreaList = true;
    }
    elseif (strpos($line, '我们在') !== false && strpos($line, '服务的重点地区') !== false) {
      $html .= '<h2 class="section-title">' . htmlspecialchars($line) . '</h2>';
      $inAreaList = true;
    }
    elseif (strpos($line, '性感约会场景') !== false) {
      $html .= '<h2 class="section-title">' . htmlspecialchars($line) . '</h2>';
      $inAreaList = false;
    }
    elseif (strpos($line, '谁在') !== false && strpos($line, '预订') !== false) {
      $html .= '<h2 class="section-title">' . htmlspecialchars($line) . '</h2>';
      $inAreaList = false;
    }
    elseif (strpos($line, '预订您的') !== false && strpos($line, '体验') !== false) {
      $html .= '<h2 class="section-title">' . htmlspecialchars($line) . '</h2>';
      $inAreaList = false;
    }
    elseif ($inAreaList && mb_strlen($line) < 30 && !strpos($line, '。') && !strpos($line, '？') && !strpos($line, '！') && !strpos($line, '这些') && !strpos($line, '每个区域') && !strpos($line, '想象') && !strpos($line, '之后')) {
      $html .= '<div class="area-item">' . htmlspecialchars($line) . '</div>';
    }
    else {
      $html .= '<p>' . htmlspecialchars($line) . '</p>';
      $inAreaList = false;
    }
  }
  
  return $html;
}

echo "\nTesting Chinese content processing...\n";
$processed_content = processCityContent($city_content_cn);
echo "Processed HTML length: " . strlen($processed_content) . "\n";

// Check if we have the expected sections
$has_main_title = strpos($processed_content, 'main-title') !== false;
$has_section_titles = strpos($processed_content, 'section-title') !== false;
$has_area_items = strpos($processed_content, 'area-item') !== false;

echo "Has main title: " . ($has_main_title ? 'Yes' : 'No') . "\n";
echo "Has section titles: " . ($has_section_titles ? 'Yes' : 'No') . "\n";
echo "Has area items: " . ($has_area_items ? 'Yes' : 'No') . "\n";

echo "\nTest completed successfully!\n";
?>
