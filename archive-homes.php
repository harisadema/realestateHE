<?php get_header(); ?>
<script src="https://cdn.tailwindcss.com"></script>
<div class="bg-[#DCD7C9] min-h-screen text-center pt-[50px]">

<!-- <div class="container mx-auto my-5 px-4 md:px-6 lg:px-8 mt-10 min-h-[500px] pb-20">


    
   
<div class="container mx-auto my-10 px-8 md:px-6 lg:px-8"> -->
    <div class="pb-20">
        <h2 class="text-4xl font-bold text-gray-900 text-center" style="font-family: 'Playfair Display', serif; font-size: 50px;">
            Find the Perfect Home for You
        </h2>
        <hr class="w-20 border-t-2 border-gray-600 mx-auto my-4 ">
        <p class="text-lg text-gray-700 mt-2 max-w-2xl mx-auto" style="font-size: 18px;">
            Browse through our exclusive selection of homes available for sale, featuring modern designs, prime locations, and luxury living.
        </p>
</div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 h-[400px]">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $homes_args = array(
                'post_type'      => 'homes', // Updated to your post type "homes"
                'posts_per_page' => 9, // Adjust as needed
                'paged'          => $paged
            );
            $homes_query = new WP_Query($homes_args);

            if ($homes_query->have_posts()) :
                while ($homes_query->have_posts()) : $homes_query->the_post();
                    ?>
                    <article class="bg-white shadow-md rounded-lg overflow-hidden">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>" class="block">
                                <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="w-full h-auto max-h-56 object-cover">
                            </a>
                        <?php else : 
                            $post_type = get_post_type();
                            $default_image_id = get_option("default_image_{$post_type}");
                            if ($default_image_id) {
                                $default_image_url = wp_get_attachment_url($default_image_id);
                                echo '<img src="' . esc_url($default_image_url) . '" alt="Default Home Image" class="w-full h-auto max-h-56 object-cover">';

                            }
                        endif; ?>

                        <div class="p-4">
                            <h3 class="text-lg font-semibold mb-2 h-16 overflow-hidden text-ellipsis">
                                <a href="<?php the_permalink(); ?>" class="text-gray-800 hover:underline"><?php echo wp_trim_words(get_the_title(), 10, '...'); ?></a>
                            </h3>
                            <p class="text-gray-500 text-sm">
                                <?php echo esc_html(get_post_meta(get_the_ID(), '_home_price', true)); ?>  
                                <span class="text-xs lg:text-sm text-gray-600" >
                                    <?php echo esc_html(get_post_meta(get_the_ID(), '_home_location', true)); ?>
                                </span>
                            </p>
                        </div>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p class="text-gray-700">No homes found.</p>';
            endif;
            ?>
        </div>

        <?php get_template_part('includes/pagination', null, array('query' => $homes_query)); ?>
    </section>

    <div class="w-full px-4 py-2">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="w-full px-4 py-2">
        <?php the_content(); ?>
    </div>
<?php endwhile; endif; ?>

    </div>
</div>
        </div>
<?php get_footer(); ?>
