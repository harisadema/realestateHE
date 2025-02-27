<?php
/* Template Name: About Us */
get_header();
?>

<!-- Hero Section -->
<div class="relative w-full h-[270px] bg-[#DCD7C9] flex items-center justify-center text-center">
    <div>
        <h1 class="text-5xl font-bold text-black" style="font-family: 'Playfair Display', serif; font-size: 60px;">About Us</h1>
        <hr class="w-16 border-t-2 border-gray-600 mx-auto my-4">
        <p class="text-lg text-gray-700 mt-2 max-w-2xl mx-auto" style="font-size: 20px;">
            Your trusted partner in real estate, committed to guiding you through every step.
        </p>
    </div>
</div>

<!-- About Section -->
<section class="bg-[#DCD7C9] py-4">
    <div class="container mx-auto max-w-6xl px-6">
        
        <!-- Grid Layout -->
        <div class="grid md:grid-cols-2 gap-12 items-center">
            
            <!-- Left: Image -->
            <div class="relative">
                <img src="<?php echo get_template_directory_uri(); ?>/images/aboutus.jpg" alt="Real Estate Team" class=" rounded-lg shadow-lg" style="width: 800px; height: 510px;">
                <div class="absolute top-4 left-4 bg-white p-4 shadow-md rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-800">10+ Years of Experience</h3>
                </div>
            </div>
            
            <!-- Right: Text Content -->
            <div>
                <h2 class="text-3xl font-semibold text-black">Who We Are</h2>
                <p class="text-lg text-gray-700 mt-4 leading-relaxed">
                    With years of experience, we specialize in connecting clients with properties that fit their needs. 
                    Our team values integrity, expertise, and customer satisfaction above all.
                </p>
                <h2 class="text-3xl font-semibold text-black mt-8">Why Choose Us?</h2>
                <div class="mt-4 space-y-3">
                    <div class="flex items-center space-x-3">
                        <span class="text-yellow-600 text-2xl"></span>
                        <p class="text-lg text-gray-800"><strong>Expert Guidance:</strong> Get professional insights and tailored recommendations.</p>
                    </div>
                    <div class="flex items-center space-x-3">
                        <span class="text-yellow-600 text-2xl"></span>
                        <p class="text-lg text-gray-800"><strong>Exclusive Listings:</strong> Access a wide range of handpicked properties.</p>
                    </div>
                    <div class="flex items-center space-x-3">
                        <span class="text-yellow-600 text-2xl"></span>
                        <p class="text-lg text-gray-800"><strong>Client-First Approach:</strong> Your needs and satisfaction come first.</p>
                    </div>
                </div>
                <a href="/contact" class="mt-6 inline-block bg-[#A27B5C] hover:bg-[#8C5A38] text-[#DCD7C9] text-lg font-medium py-3 px-6 rounded-lg shadow-md transition-all duration-300">
                    Contact Us
                </a>
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>
