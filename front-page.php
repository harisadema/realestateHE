<?php get_header(); ?>
<section class="bg-gray-100 py-16 text-center">
    <h1 class="text-4xl font-bold">Find Your Dream Home</h1>
    <form method="GET" action="<?php echo home_url('/properties'); ?>" class="mt-6 flex justify-center">
        <input type="text" name="search" placeholder="Enter city, address..." class="p-3 w-80 border rounded-l">
        <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded-r">Search</button>
    </form>
</section>
