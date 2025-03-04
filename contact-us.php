<?php
/* Template Name: Contact Us */
get_header();
?>

<section class="bg-[#F5EFE8] py-20">
  <div class="max-w-7xl mx-auto px-6">
    <h2 class="text-5xl font-bold text-center text-black mb-6" style="font-family: 'Playfair Display', serif; font-size: 60px;">Contact Us</h2>
    <hr class="w-16 border-t-2 border-gray-600 mx-auto my-4">
    <p class="text-center text-black text-lg mb-12">We’d love to hear from you. Let’s connect and discuss your real estate needs.</p>
    
    <div class="bg-white shadow-2xl rounded-xl p-10 max-w-4xl mx-auto">
      <form action="#" method="POST" class="space-y-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <div>
            <label for="name" class="block text-sm font-medium text-black">Full Name</label>
            <input type="text" id="name" name="name" class="mt-2 block w-full rounded-md border border-gray-300 shadow-sm p-4 focus:ring-black focus:border-black" placeholder="Your Name" required>
          </div>
          <div>
            <label for="email" class="block text-sm font-medium text-black">Email Address</label>
            <input type="email" id="email" name="email" class="mt-2 block w-full rounded-md border border-gray-300 shadow-sm p-4 focus:ring-black focus:border-black" placeholder="Your Email" required>
          </div>
        </div>

        <div>
          <label for="subject" class="block text-sm font-medium text-black">Subject</label>
          <input type="text" id="subject" name="subject" class="mt-2 block w-full rounded-md border border-gray-300 shadow-sm p-4 focus:ring-black focus:border-black" placeholder="Subject" required>
        </div>

        <div>
          <label for="message" class="block text-sm font-medium text-black">Message</label>
          <textarea id="message" name="message" rows="6" class="mt-2 block w-full rounded-md border border-gray-300 shadow-sm p-4 focus:ring-black focus:border-black" placeholder="Write your message here..." required></textarea>
        </div>

        <button type="submit" class="w-full bg-black text-white py-4 rounded-lg font-semibold hover:bg-gray-800 transition">Send Message</button>
      </form>
    </div>
  </div>
</section>



<?php get_footer(); ?>