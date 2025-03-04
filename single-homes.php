<?php
/* Template Name: Property Listing */
get_header();
$featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .hero {
            background: url('<?php echo esc_url($featured_image); ?>') center center/cover no-repeat;
            height: 60vh;
        }
        .hero-text {
            background: rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Hero Section -->
    <div class="hero flex items-center justify-center text-center text-white">
        <div class="hero-text p-8 rounded-lg">
            <h1 class="text-5xl font-bold">Modern Home for Sale</h1>
            <p class="text-2xl mt-4">1367 Kasson Ct, San Jose, CA</p>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <!-- Property Details -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
            <!-- Image Gallery -->
           <div class="home-gallery mb-8">
            <?php
                $gallery = get_post_meta(get_the_ID(), '_home_gallery', true);
                if (!empty($gallery)) :
                    echo '<h2 class="text-2xl font-semibold text-gray-800 mb-4">Gallery</h2>';
                    echo '<div class="gallery-images grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">';
                    foreach ($gallery as $image_id) :
                        $image_html = wp_get_attachment_image($image_id, 'full');
                        echo '<div class="gallery-image flex justify-center shadow-lg rounded-lg overflow-hidden">' . $image_html . '</div>';
                    endforeach;
                    echo '</div>';
                endif;
            ?>
        </div>

        <!-- Property Info -->
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Property Details</h2>
    <div class="space-y-4">
        <p class="text-gray-700"><span class="font-semibold">Price:</span> $<?php echo esc_html(get_post_meta(get_the_ID(), '_home_price', true)); ?></p>
        <p class="text-gray-700"><span class="font-semibold">Size:</span> <?php echo esc_html(get_post_meta(get_the_ID(), '_home_size', true)); ?> ft²</p>
        <p class="text-gray-700"><span class="font-semibold">Bedrooms:</span> <?php echo esc_html(get_post_meta(get_the_ID(), '_home_rooms', true)); ?></p>
        <p class="text-gray-700"><span class="font-semibold">Bathrooms:</span> <?php echo esc_html(get_post_meta(get_the_ID(), '_home_bathrooms', true)); ?></p>
        <p class="text-gray-700"><span class="font-semibold">Garage:</span> 3 cars</p>
        <p class="text-gray-700"><span class="font-semibold">Location:</span> Mission Beach, San Diego</p>
        <p class="text-gray-700"><span class="font-semibold">Year Built:</span> 1982</p>
        <p class="text-gray-700"><span class="font-semibold">MLS ID:</span> 156</p>
    </div>
    <button class="mt-6 bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300">Schedule a Tour</button>
</div>

<!-- Property Description -->
<div class="bg-white p-6 rounded-lg shadow-lg mb-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Description</h2>
    <p class="text-gray-700">
        <?php echo esc_html(get_post_meta(get_the_ID(), '_home_view', true)); ?>
    </p>
</div>


        <!-- Contact Form -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Contact Agent</h2>
            <form class="space-y-4">
                <input type="text" placeholder="Your Name" class="w-full p-2 border border-gray-300 rounded-lg">
                <input type="email" placeholder="Your Email" class="w-full p-2 border border-gray-300 rounded-lg">
                <input type="tel" placeholder="Your Phone" class="w-full p-2 border border-gray-300 rounded-lg">
                <textarea placeholder="Your Message" class="w-full p-2 border border-gray-300 rounded-lg"></textarea>
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300">Send Message</button>
            </form>
        </div>
    </div>

    <footer class="bg-gray-800 text-white py-6 mt-12">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 Real Estate Co. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>