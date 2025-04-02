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
<div class="bg-[#DCD7C9] min-h-screen text-center">
<div class="pt-[50px] pb-[50px]">
        <h2 class="text-4xl font-bold text-gray-900 text-center" style="font-family: 'Playfair Display', serif; font-size: 50px;">
            Property Details
        </h2>


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
        <p class="text-gray-700"><span class="font-semibold">Price:</span> <?php echo esc_html(get_post_meta(get_the_ID(), '_home_price', true)); ?></p>
        <p class="text-gray-700"><span class="font-semibold">Size:</span> <?php echo esc_html(get_post_meta(get_the_ID(), '_home_size', true)); ?> ft²</p>
        <p class="text-gray-700"><span class="font-semibold">Bedrooms:</span> <?php echo esc_html(get_post_meta(get_the_ID(), '_home_rooms', true)); ?></p>
        <p class="text-gray-700"><span class="font-semibold">Bathrooms:</span> <?php echo esc_html(get_post_meta(get_the_ID(), '_home_bathrooms', true)); ?></p>
        <p class="text-gray-700"><span class="font-semibold">Garage:</span> 3 cars</p>
        <p class="text-gray-700"><span class="font-semibold">Location:</span> Mission Beach, San Diego</p>
        <p class="text-gray-700"><span class="font-semibold">Year Built:</span> 1982</p>
        <p class="text-gray-700"><span class="font-semibold">MLS ID:</span> 156</p>
    </div>

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
                <button type="submit" class="px-5 py-2 bg-[#A27B5C] hover:bg-[#8C5A38] text-[#DCD7C9] font-semibold rounded-lg shadow-md hover:shadow-lg hover:from-yellow-500 hover:to-yellow-700 transition-all duration-300">Send Message</button>
            </form>
        </div>
    </div>

  
</body>
</html>
  <?php get_footer(); ?>