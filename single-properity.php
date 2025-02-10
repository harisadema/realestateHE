<?php get_header(); ?>
<div class="container mx-auto py-12">
    <div class="grid grid-cols-2 gap-6">
        <div>
            <?php the_post_thumbnail('large'); ?>
        </div>
        <div>
            <h1 class="text-3xl font-bold"><?php the_title(); ?></h1>
            <p class="text-xl text-gray-600"><?php echo get_field('property_location'); ?></p>
            <p class="text-2xl font-bold mt-4"><?php echo get_field('property_price'); ?>€</p>
            <ul class="mt-4 space-y-2">
                <li><strong>Size:</strong> <?php echo get_field('property_size'); ?> m²</li>
                <li><strong>Bedrooms:</strong> <?php echo get_field('property_bedrooms'); ?></li>
                <li><strong>Bathrooms:</strong> <?php echo get_field('property_bathrooms'); ?></li>
                <li><strong>Garage:</strong> <?php echo get_field('property_garage'); ?></li>
            </ul>
        </div>
    </div>
</div>
<?php get_footer(); ?>
