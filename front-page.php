


<?php get_header(); ?>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&display=swap" rel="stylesheet">

<!-- Featured Listings Section -->
<section id="section1" class="py-16 bg-[#DCD7C9]">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-4xl font-semibold text-gray-900" style="font-family: 'Playfair Display', serif; font-size: 40px;">Featured Listings</h2>
        <p class="text-lg text-gray-600 mt-2" >Browse the top properties in Macedonia</p>

        <div class="grid md:grid-cols-3 gap-8 mt-10">
            <!-- Example Property Card -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="<?php echo get_template_directory_uri(); ?>/images/luxuryvilla.jpg" alt="Property" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold">Luxury Villa</h3>
                    <p class="text-gray-600">$1,200,000 • 4 Beds • 3 Baths</p>
                    <a href="#" class="inline-block mt-4 text-yellow-600 font-semibold">View Details →</a>
                </div>
            </div>
            <!-- Example Property Card -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="<?php echo get_template_directory_uri(); ?>/images/modernapartment.jpg" alt="Property" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold">Modern Apartment</h3>
                    <p class="text-gray-600">$850,000 • 3 Beds • 2 Baths</p>
                    <a href="#" class="inline-block mt-4 text-yellow-600 font-semibold">View Details →</a>
                </div>
            </div>
            <!-- Example Property Card -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="<?php echo get_template_directory_uri(); ?>/images/familyhome.jpg" alt="Property" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold">Family Home</h3>
                    <p class="text-gray-600">$950,000 • 4 Beds • 3 Baths</p>
                    <a href="#" class="inline-block mt-4 text-yellow-600 font-semibold">View Details →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="flex flex-col md:flex-row items-center justify-between mx-auto py-16 px-[130px] bg-white">
  <!-- Left Side - Text Content -->
  <div class="md:w-1/2 space-y-6">
    <h2 class="text-4xl font-bold text-gray-900" style="font-family: 'Playfair Display', serif; font-size: 45px;">Why Choose Us?</h2>
    <p class="text-gray-600 text-lg pr-[80px]">
    At RealestateHE, we are committed to making your property journey seamless and stress-free. With years of experience and in-depth local market knowledge, we provide expert guidance whether you're buying, selling, or investing.

We offer a wide range of properties that suit all budgets and preferences, ensuring you find the perfect match. Our dedicated team is always available to provide personalized support, ensuring your needs are met every step of the way.

Choose RealestateHE for reliable service, trusted expertise, and a smooth experience. Let us help you make the right move today! We're here to turn your property dreams into reality with unmatched dedication and care.
</p>


  </div>

  <!-- Right Side - Image Carousel -->
  <div class="md:w-1/2 mt-8 md:mt-0 relative h-80 w-full md:h-96 overflow-hidden rounded-2xl shadow-lg">
    <div class="carousel-wrapper relative w-full h-full">
      <div class="carousel-images flex transition-all duration-1000 ease-in-out">
        <img src="<?php echo get_template_directory_uri(); ?>/images/wchu1.jpg" alt="Real Estate 1" class="carousel-image w-full h-full object-cover rounded-2xl" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/wchu2.jpg" alt="Real Estate 2" class="carousel-image w-full h-full object-cover rounded-2xl" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/wchu3.jpg" alt="Real Estate 3" class="carousel-image w-full h-full object-cover rounded-2xl" />
      </div>
    </div>
  </div>
</section>

<!-- Tailwind CSS and custom animation for the carousel -->
<style>
  /* 3D Slide Animation */
  .carousel-wrapper {
    perspective: 1000px;
  }

  .carousel-images {
    display: flex;
    transition: transform 1s ease-in-out;
    animation: slideAnimation 15s infinite;
  }

  .carousel-image {
    min-width: 100%;
    object-fit: cover;
    transition: opacity 1s ease-in-out;
  }

  /* Keyframes for the sliding transition */
  @keyframes slideAnimation {
    0%, 100% {
      transform: translateX(0%);
    }
    33.33% {
      transform: translateX(-100%);
    }
    66.66% {
      transform: translateX(-200%);
    }
  }
</style>


<section class=" mx-auto py-12 text-center bg-[#DCD7C9]">
<h2 class="text-4xl font-semibold text-gray-900" style="font-family: 'Playfair Display', serif; font-size: 40px;">
    Featured Neighborhoods
</h2>

<hr class="w-16 border-t-2 border-gray-600 mx-auto my-4">

<p class="mt-4 text-gray-600 max-w-2xl mx-auto">
    In the vibrant neighborhood of San Jose, California, Sam is renowned among residents, property developers, local businesses, and professionals in the real estate industry for her remarkable skills, dynamic approach, and tireless commitment to facilitating transactions for buyers and sellers.
</p>

    <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Neighborhood Cards with Different Sizes -->
        <div class="relative group col-span-2 row-span-2">
            <img src="<?php echo get_template_directory_uri(); ?>/images/mansion3.jpg" alt="Hillcrest" class="w-full h-full object-cover rounded-lg shadow-md">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition-opacity">
                <span class="text-white text-lg font-semibold">Hillcrest</span>
            </div>
        </div>

        <div class="relative group">
            <img src="<?php echo get_template_directory_uri(); ?>/images/mansion2.jpg" alt="Downtown" class="w-full h-56 object-cover rounded-lg shadow-md">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition-opacity">
                <span class="text-white text-lg font-semibold">Downtown</span>
            </div>
        </div>

        <div class="relative group">
            <img src="<?php echo get_template_directory_uri(); ?>/images/mansion1.jpg" alt="Point Loma" class="w-full h-56 object-cover rounded-lg shadow-md">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition-opacity">
                <span class="text-white text-lg font-semibold">Point Loma</span>
            </div>
        </div>

        <div class="relative group col-span-2">
            <img src="<?php echo get_template_directory_uri(); ?>/images/mansion4.jpg" alt="San Diego" class="w-full h-64 object-cover rounded-lg shadow-md">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition-opacity">
                <span class="text-white text-lg font-semibold">San Diego</span>
            </div>
        </div>

        <div class="relative group">
            <img src="<?php echo get_template_directory_uri(); ?>/images/mansion5.jpg" alt="Clairemont" class="w-full h-64 object-cover rounded-lg shadow-md">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition-opacity">
                <span class="text-white text-lg font-semibold">Clairemont</span>
            </div>
        </div>

        <div class="relative group">
            <img src="<?php echo get_template_directory_uri(); ?>/images/mansion6.jpg" alt="Pacific Beach" class="w-full h-64 object-cover rounded-lg shadow-md">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition-opacity">
                <span class="text-white text-lg font-semibold">Pacific Beach</span>
            </div>
        </div>

        <div class="relative group col-span-2">
            <img src="<?php echo get_template_directory_uri(); ?>/images/mansion7.jpg" alt="Miramar" class="w-full h-64 object-cover rounded-lg shadow-md">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition-opacity">
                <span class="text-white text-lg font-semibold">Miramar</span>
            </div>
        </div>


    </div>
</section>


<section class="bg-[#F5EFE8] py-24">
  <div class="max-w-7xl mx-auto px-6">
    <h2 class="text-5xl font-bold text-center text-black mb-16" style="font-family: 'Playfair Display', serif; font-size: 50px;">Hear From Our Happy Clients</h2>
    
    
    <div class="relative overflow-hidden">
      <div class="flex space-x-6 animate-scroll" aria-live="polite">
        <!-- Testimonial 1 -->
        <div class="bg-[#DCD7C9] rounded-2xl shadow-xl p-10 min-w-[300px] max-w-[400px]">
          <p class="text-black italic mb-8">"Finding my dream home was a smooth and delightful experience thanks to this team. Highly professional and attentive!"</p>
          <div class="flex items-center space-x-4">
            <img src="<?php echo get_template_directory_uri(); ?>/images/client1.jpg" alt="Client photo" class="w-16 h-16 rounded-full object-cover border-4 border-white">
            <div>
              <h3 class="text-lg font-bold text-black">John Doe</h3>
              <p class="text-sm text-gray-700">Home Buyer</p>
            </div>
          </div>
        </div>
        
        <!-- Testimonial 2 -->
        <div class="bg-[#DCD7C9] rounded-2xl shadow-xl p-10 min-w-[300px] max-w-[400px]">
          <p class="text-black italic mb-8">"They helped me sell my property quickly and at a great price. Excellent service all around!"</p>
          <div class="flex items-center space-x-4">
            <img src="<?php echo get_template_directory_uri(); ?>/images/client2.jpg" alt="Client photo" class="w-16 h-16 rounded-full object-cover border-4 border-white">
            <div>
              <h3 class="text-lg font-bold text-black">Jane Smith</h3>
              <p class="text-sm text-gray-700">Property Seller</p>
            </div>
          </div>
        </div>
        
        <!-- Testimonial 3 -->
        <div class="bg-[#DCD7C9] rounded-2xl shadow-xl p-10 min-w-[300px] max-w-[400px]">
          <p class="text-black italic mb-8">"I found a perfect rental home through this site. The agents were helpful and professional."</p>
          <div class="flex items-center space-x-4">
            <img src="<?php echo get_template_directory_uri(); ?>/images/client3.jpg" alt="Client photo" class="w-16 h-16 rounded-full object-cover border-4 border-white">
            <div>
              <h3 class="text-lg font-bold text-black">Michael Lee</h3>
              <p class="text-sm text-gray-700">Renter</p>
            </div>
          </div>
        </div>

        <!-- Testimonial 4 -->
        <div class="bg-[#DCD7C9] rounded-2xl shadow-xl p-10 min-w-[300px] max-w-[400px]">
          <p class="text-black italic mb-8">"Outstanding service! They truly care about finding the perfect home for you."</p>
          <div class="flex items-center space-x-4">
            <img src="<?php echo get_template_directory_uri(); ?>/images/client4.jpg" alt="Client photo" class="w-16 h-16 rounded-full object-cover border-4 border-white">
            <div>
              <h3 class="text-lg font-bold text-black">Sarah Johnson</h3>
              <p class="text-sm text-gray-700">First-Time Buyer</p>
            </div>
          </div>
        </div>

        <!-- Testimonial 5 -->
        <div class="bg-[#DCD7C9] rounded-2xl shadow-xl p-10 min-w-[300px] max-w-[400px]">
          <p class="text-black italic mb-8">"Fast, reliable, and transparent. Couldn’t have asked for better agents."</p>
          <div class="flex items-center space-x-4">
            <img src="<?php echo get_template_directory_uri(); ?>/images/client5.jpg" alt="Client photo" class="w-16 h-16 rounded-full object-cover border-4 border-white">
            <div>
              <h3 class="text-lg font-bold text-black">Chris Wilson</h3>
              <p class="text-sm text-gray-700">Investor</p>
            </div>
          </div>
        </div>

        <!-- Testimonial 6 -->
        <div class="bg-[#DCD7C9] rounded-2xl shadow-xl p-10 min-w-[300px] max-w-[400px]">
          <p class="text-black italic mb-8">"Their expertise and dedication helped us secure our new home hassle-free."</p>
          <div class="flex items-center space-x-4">
            <img src="<?php echo get_template_directory_uri(); ?>/images/client2.jpg" alt="Client photo" class="w-16 h-16 rounded-full object-cover border-4 border-white">
            <div>
              <h3 class="text-lg font-bold text-black">Emily Davis</h3>
              <p class="text-sm text-gray-700">Homeowner</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <style>
      @keyframes scroll {
        from { transform: translateX(0); }
        to { transform: translateX(-50%); }
      }
      .animate-scroll {
        display: flex;
        animation: scroll 30s linear infinite;
        width: calc(300px * 6 + 24px * 5); /* Adjust width based on number of testimonials */
      }
    </style>
  </div>
</section>







<?php get_footer(); ?>
