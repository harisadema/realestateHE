        <!-- Gallery Section -->
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

        <!-- Description at the bottom -->
        <div class="home-description bg-gray-50 p-6 rounded-lg shadow-md mt-6">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Description</h3>
            <div class="text-gray-600">
                <?php the_content(); ?>
            </div>
        </div>