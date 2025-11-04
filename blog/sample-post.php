<?php
// Sample blog post creation script
// Run this once to create sample blog posts

// Include WordPress
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/../');
    require_once ABSPATH . 'wp-config.php';
}

// Sample blog posts data
$sample_posts = [
    [
        'title' => 'Welcome to Our Blog - Premium Escort Services in Malaysia',
        'content' => '<p>Welcome to the SuperB Party Girl blog! We\'re excited to share insights, tips, and updates about our premium escort services across Malaysia.</p>

<h2>What You Can Expect</h2>
<p>Our blog will cover various topics including:</p>
<ul>
<li>Safety tips for booking escort services</li>
<li>Understanding different types of party girls</li>
<li>City guides for major Malaysian locations</li>
<li>Client testimonials and experiences</li>
<li>Industry insights and updates</li>
</ul>

<h2>Our Commitment to Quality</h2>
<p>At SuperB Party Girl, we maintain the highest standards of professionalism, discretion, and service quality. Our blog will help you make informed decisions and understand what to expect from our premium services.</p>

<p>Stay tuned for regular updates and valuable content!</p>',
        'excerpt' => 'Welcome to our blog where we share insights about premium escort services in Malaysia. Learn about safety, quality, and what to expect from our services.'
    ],
    [
        'title' => 'Safety First: Essential Tips for Booking Escort Services',
        'content' => '<p>When booking escort services, safety should always be your top priority. Here are essential tips to ensure a safe and enjoyable experience.</p>

<h2>Choose Reputable Agencies</h2>
<p>Always book through established, reputable agencies like SuperB Party Girl. Look for agencies that:</p>
<ul>
<li>Have a professional website with clear policies</li>
<li>Provide detailed profiles and photos</li>
<li>Offer transparent pricing</li>
<li>Have positive client reviews</li>
<li>Maintain strict confidentiality</li>
</ul>

<h2>Verify Before Booking</h2>
<p>Before making any arrangements:</p>
<ul>
<li>Verify the agency\'s legitimacy</li>
<li>Check for clear communication channels</li>
<li>Understand the terms and conditions</li>
<li>Confirm pricing and services included</li>
</ul>

<h2>Maintain Discretion</h2>
<p>Professional escort services prioritize client privacy. Ensure that:</p>
<ul>
<li>Your personal information is protected</li>
<li>All communications are confidential</li>
<li>Meeting locations are safe and private</li>
<li>Payment methods are secure</li>
</ul>

<h2>Trust Your Instincts</h2>
<p>If something doesn\'t feel right, trust your instincts. Professional agencies will always prioritize your comfort and safety.</p>',
        'excerpt' => 'Essential safety tips for booking escort services. Learn how to choose reputable agencies, verify services, and maintain discretion.'
    ],
    [
        'title' => 'Understanding Different Types of Party Girls',
        'content' => '<p>Every client has different preferences and needs. Understanding the various types of party girls available can help you make the perfect choice for your occasion.</p>

<h2>Local Malaysian Girls</h2>
<p>Local party girls offer:</p>
<ul>
<li>Familiarity with local culture and language</li>
<li>Understanding of Malaysian social norms</li>
<li>Flexibility in various social settings</li>
<li>Professional and discreet service</li>
</ul>

<h2>International Models</h2>
<p>Our international selection includes:</p>
<ul>
<li><strong>Vietnamese Girls:</strong> Known for their beauty and charm</li>
<li><strong>Korean Models:</strong> Professional and sophisticated</li>
<li><strong>Japanese Ladies:</strong> Elegant and refined</li>
<li><strong>Chinese Beauties:</strong> Graceful and intelligent</li>
<li><strong>European Models:</strong> Exotic and cosmopolitan</li>
</ul>

<h2>Specialized Services</h2>
<p>Different occasions may require different types of companions:</p>
<ul>
<li><strong>Corporate Events:</strong> Professional, well-dressed companions</li>
<li><strong>Social Gatherings:</strong> Outgoing and sociable personalities</li>
<li><strong>Private Dinners:</strong> Conversational and cultured companions</li>
<li><strong>Travel Companions:</strong> Adventurous and adaptable</li>
</ul>

<h2>Making Your Choice</h2>
<p>Consider your specific needs, the nature of your event, and your personal preferences when selecting a party girl. Our team can help you find the perfect match.</p>',
        'excerpt' => 'Learn about different types of party girls available, from local Malaysian girls to international models, and how to choose the right companion for your needs.'
    ]
];

// Create sample posts
foreach ($sample_posts as $post_data) {
    $post = array(
        'post_title' => $post_data['title'],
        'post_content' => $post_data['content'],
        'post_excerpt' => $post_data['excerpt'],
        'post_status' => 'publish',
        'post_type' => 'post',
        'post_author' => 1,
        'post_date' => date('Y-m-d H:i:s', strtotime('-' . rand(1, 30) . ' days'))
    );
    
    $post_id = wp_insert_post($post);
    
    if ($post_id) {
        echo "Created post: " . $post_data['title'] . " (ID: $post_id)\n";
    } else {
        echo "Failed to create post: " . $post_data['title'] . "\n";
    }
}

echo "\nSample blog posts created successfully!\n";
echo "Visit /blog to see your new blog posts.\n";
?>
