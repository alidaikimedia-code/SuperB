<?php
/**
 * FAQ Schema Markup Generator
 * Generates structured data for FAQ sections
 */

function generateFAQSchema($faqs, $page_title = '') {
    if (empty($faqs)) {
        return '';
    }
    
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => []
    ];
    
    foreach ($faqs as $faq) {
        $question = '';
        $answer = '';
        
        // Handle different FAQ formats
        if (is_array($faq)) {
            // Array format: ['question' => '...', 'answer' => '...']
            $question = $faq['question'] ?? '';
            $answer = $faq['answer'] ?? '';
        } elseif (is_string($faq)) {
            // String format: "Question? Answer"
            $parts = explode('?', $faq, 2);
            $question = trim($parts[0]) . '?';
            $answer = isset($parts[1]) ? trim($parts[1]) : '';
        }
        
        if (!empty($question) && !empty($answer)) {
            $schema['mainEntity'][] = [
                '@type' => 'Question',
                'name' => htmlspecialchars($question),
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => htmlspecialchars($answer)
                ]
            ];
        }
    }
    
    if (empty($schema['mainEntity'])) {
        return '';
    }
    
    return '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
}

function generateHomePageFAQSchema($texts) {
    $faqs = [];
    
    // Extract FAQs from home page texts
    for ($i = 1; $i <= 6; $i++) {
        $faq_key = 'faq' . $i;
        $ans_key = 'ans' . $i;
        
        if (isset($texts['home'][$faq_key]) && isset($texts['home'][$ans_key])) {
            $faqs[] = [
                'question' => $texts['home'][$faq_key],
                'answer' => $texts['home'][$ans_key]
            ];
        }
    }
    
    return generateFAQSchema($faqs, 'SuperB Party Girl - Frequently Asked Questions');
}

function generateCityPageFAQSchema($city_faqs, $city_name) {
    if (empty($city_faqs)) {
        // Default FAQs for city pages
        $default_faqs = [
            [
                'question' => 'Do you only provide escort services?',
                'answer' => 'We offer more than a typical escort service. SuperB Party Girl focuses on premium companionship and B2B massage with a refined boutique approach.'
            ],
            [
                'question' => 'Which areas do you cover in ' . $city_name . '?',
                'answer' => 'We cover the listed hotspots and many nearby neighborhoods. Share your exact location and we will recommend the best option.'
            ],
            [
                'question' => 'Is the booking private and secure?',
                'answer' => 'Yes. Your information remains confidential and our companions arrive discreetly.'
            ]
        ];
        return generateFAQSchema($default_faqs, 'Frequently Asked Questions for ' . $city_name);
    }
    
    return generateFAQSchema($city_faqs, 'Frequently Asked Questions for ' . $city_name);
}

function generateBlogPageFAQSchema($blog_faqs, $blog_title) {
    return generateFAQSchema($blog_faqs, $blog_title . ' - FAQs');
}
?>
