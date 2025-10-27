# City Template Customization Guide

## आप कैसे अपने headings और paragraphs को customize कर सकते हैं:

### 1. Main Title (H1) Keywords
```php
$mainTitleKeywords = [
    '伴游 – SuperB Party Girl', 
    '伴游 – 超棒的派对女郎',
    'आपका custom keyword यहाँ add करें'
];
```

### 2. Section Title (H2) Keywords  
```php
$sectionTitleKeywords = [
    '生活方式', '氛围', '情调', '魅力', '节奏', 
    '特色', '文化', '体验',
    'आपके custom keywords यहाँ add करें'
];
```

### 3. Area Section Keywords
```php
$areaSectionKeywords = [
    '我们在', '服务的热门地区', 
    '服务的主要服务区域', '服务的重点地区',
    'आपके area keywords यहाँ add करें'
];
```

### 4. Special Section Keywords
```php
$specialSectionKeywords = [
    '性感约会场景', '约会体验', '浪漫场景',
    'आपके special keywords यहाँ add करें'
];
```

### 5. Booking Section Keywords
```php
$bookingSectionKeywords = [
    '谁在', '预订', '预订您的', '体验',
    'आपके booking keywords यहाँ add करें'
];
```

## Advanced Customization Examples:

### Example 1: अगर आप चाहते हैं कि specific words वाली lines H3 बनें
```php
// Line 47 के बाद add करें:
elseif (checkKeywords($line, $customRules['h3_keywords'])) {
    $html .= '<h3 class="subsection-title">' . $line . '</h3>';
    $inAreaList = false;
}
```

### Example 2: अगर आप चाहते हैं कि list items properly formatted हों
```php
// Line 47 के बाद add करें:
elseif (isListItem($line, $customRules['list_keywords'])) {
    $html .= '<li>' . $line . '</li>';
    $inAreaList = false;
}
```

### Example 3: अगर आप चाहते हैं कि quotes properly formatted हों
```php
// Line 47 के बाद add करें:
elseif (isQuote($line, $customRules['quote_keywords'])) {
    $html .= '<blockquote>' . $line . '</blockquote>';
    $inAreaList = false;
}
```

## Helper Functions Add करें:

```php
function isListItem($line, $keywords) {
    foreach ($keywords as $keyword) {
        if (strpos($line, $keyword) === 0) {
            return true;
        }
    }
    return false;
}

function isQuote($line, $keywords) {
    foreach ($keywords as $keyword) {
        if (strpos($line, $keyword) !== false) {
            return true;
        }
    }
    return false;
}
```

## Area Items की Conditions Customize करें:

```php
function isAreaItem($line) {
    // आप यहाँ अपनी conditions customize कर सकते हैं
    $excludeKeywords = ['。', '？', '！', '这些', '每个区域', '想象', '之后', '每个', '提供', '独特'];
    
    // आप यहाँ length भी change कर सकते हैं
    $maxLength = 30; // यह change करें
    
    return mb_strlen($line) < $maxLength && !checkKeywords($line, $excludeKeywords);
}
```

## Complete Example - आपका Custom Function:

```php
function processCityContent($content) {
    if (empty($content)) return '';
    
    $lines = explode("\n", $content);
    $html = '';
    $inAreaList = false;
    
    // आपके custom keywords
    $mainTitleKeywords = ['आपका keyword 1', 'आपका keyword 2'];
    $sectionTitleKeywords = ['आपका section keyword 1', 'आपका section keyword 2'];
    
    foreach ($lines as $line) {
        $line = trim($line);
        if (empty($line)) continue;
        
        // आपकी custom logic यहाँ
        if (strpos($line, 'आपका specific word') !== false) {
            $html .= '<h1 class="custom-title">' . $line . '</h1>';
        }
        elseif (strpos($line, 'आपका another word') !== false) {
            $html .= '<h2 class="custom-section">' . $line . '</h2>';
        }
        elseif (mb_strlen($line) < 20) {
            $html .= '<div class="custom-item">' . $line . '</div>';
        }
        else {
            $html .= '<p class="custom-paragraph">' . $line . '</p>';
        }
    }
    
    return $html;
}
```

## CSS Classes भी Add कर सकते हैं:

```css
.custom-title {
    font-size: 2.5rem;
    color: #ff2491;
    text-align: center;
}

.custom-section {
    font-size: 2rem;
    color: #333;
    border-bottom: 2px solid #ff2491;
}

.custom-item {
    background: #f8f9fa;
    padding: 10px;
    margin: 5px 0;
    border-left: 3px solid #ff2491;
}

.custom-paragraph {
    font-size: 1.1rem;
    line-height: 1.8;
    margin-bottom: 15px;
}
```
