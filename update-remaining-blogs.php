<?php
// Simple script to update remaining blog files

$blogs_to_update = [
    'escort-packages-tailored-for-luxury-travelers-and-businessmen' => 'blog_escort_packages_tailored',
    'from-gala-nights-to-yacht-parties-escorts-in-elite-social-circles' => 'blog_gala_nights_yacht_parties',
    'health-and-safety-standards-in-luxury-escort-services' => 'blog_health_safety_standards',
    'how-escort-agencies-ensure-safety-for-clients-and-companios' => 'blog_escort_agencies_safety',
    'how-escort-services-protect-client-privacy-in-the-digital-era' => 'blog_digital_privacy_protection',
    'how-escorts-adapt-to-business-events-and-corporate-functions' => 'blog_escorts_business_events',
    'how-mens-party-and-social-services-add-spark-to-events' => 'blog_mens_party_social_services',
    'how-private-escort-services-elevate-elite-nightlife-experiences' => 'blog_private_escort_services_elevate',
    'outcall-escorts-enhance-the-private-celebration-experience' => 'blog_outcall_escorts_enhance',
    'why-confidentiality-matters-most-in-escort-services' => 'blog_why_confidentiality',
    'why-online-escort-booking-platforms-are-rising-in-popularity' => 'blog_online_booking_platforms'
];

$template = '<?php 
$page_key = \'%s\';
include $_SERVER[\'DOCUMENT_ROOT\'] . \'/blogs/blog-template.php\';
?>';

foreach ($blogs_to_update as $dir => $key) {
    $file = "blogs/$dir/index.php";
    if (file_exists($file)) {
        file_put_contents($file, sprintf($template, $key));
        echo "Updated: $file\n";
    }
}

echo "Done!\n";
?>
