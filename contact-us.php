<?php
/* Template Name: Contact Us */
get_header();
?>

<section class="relative bg-[#DCD7C9] py-20">
  <h1> Contact Us </h1>
  <div class="absolute inset-0">
    <img src="your-background-image.jpg" alt="Background" class="w-full h-full object-cover opacity-20">
  </div>
  <div class="relative max-w-7xl mx-auto px-6">
    <div class="text-center">
      <h2 class="text-6xl font-bold text-black mb-4" style="font-family: 'Playfair Display', serif;">Contact Us</h2>
      <hr class="w-20 border-t-4 border-black mx-auto my-4">
      <p class="text-lg text-gray-800 max-w-2xl mx-auto">We’d love to hear from you. Get in touch with us to discuss your real estate needs. Our team is ready to assist you!</p>
    </div>
    
    <div class="bg-white shadow-2xl rounded-3xl p-12 max-w-4xl mx-auto mt-12 relative overflow-hidden">
      <div class="absolute -top-10 -right-10 w-40 h-40 bg-gray-200 rounded-full opacity-30"></div>
      <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-gray-200 rounded-full opacity-30"></div>
      <?php echo do_shortcode('[contact-form-7 id="abb32cd" title="Contact form 1"]'); ?>
    </div>
  </div>
</section>


<?php get_footer(); ?>
