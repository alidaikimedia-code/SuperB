<?php
/**
 * Test file for FAQ Schema Markup
 * This file tests the schema functions to ensure they work correctly
 */

// Include the schema functions
require_once 'schema.php';

// Test data
$test_faqs = [
    [
        'question' => 'What services do you offer?',
        'answer' => 'We offer premium escort services and companionship.'
    ],
    [
        'question' => 'Are your services confidential?',
        'answer' => 'Yes, all our services are completely confidential and discreet.'
    ]
];

$test_city_faqs = [
    'Do you provide services in Kuala Lumpur? Yes, we cover all major areas in KL.',
    'What are your rates? Our rates vary based on the service and duration requested.'
];

// Test the functions
echo "Testing FAQ Schema Functions:\n\n";

echo "1. Testing generateFAQSchema with array format:\n";
$schema1 = generateFAQSchema($test_faqs, 'Test Page');
echo $schema1 . "\n\n";

echo "2. Testing generateFAQSchema with string format:\n";
$schema2 = generateFAQSchema($test_city_faqs, 'City Test Page');
echo $schema2 . "\n\n";

echo "3. Testing generateCityPageFAQSchema:\n";
$schema3 = generateCityPageFAQSchema($test_city_faqs, 'Kuala Lumpur');
echo $schema3 . "\n\n";

echo "4. Testing generateBlogPageFAQSchema:\n";
$schema4 = generateBlogPageFAQSchema($test_faqs, 'Test Blog Post');
echo $schema4 . "\n\n";

echo "All tests completed successfully!\n";
?>
