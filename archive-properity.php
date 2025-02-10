<?php get_header(); ?>
<div class="container mx-auto py-12">
    <h2 class="text-3xl font-bold">Properties</h2>
    <div class="grid grid-cols-3 gap-6">
        <?php while (have_posts()) : the_post(); ?>
            <div class="border p-4">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium'); ?>
                    <h3 class="text-xl font-semibold"><?php the_title(); ?></h3>
                    <p>Price: <?php echo get_field('property_price'); ?>€</p>
                </a>
            </div>
        <?php endwhile; ?>
    </div>
</div>
<?php get_footer(); ?>
