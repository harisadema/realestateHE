<?php // ✅ Register Navigation Menu
function realestate_register_menus() {
    register_nav_menus([
        'primary-menu' => __('Primary Menu', 'realestate')
    ]);
}
add_action('after_setup_theme', 'realestate_register_menus');

<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
// ✅ Enqueue Styles (Tailwind + Theme CSS)
function realestate_enqueue_styles() {
    wp_enqueue_style('tailwind-css', 'https://cdn.jsdelivr.net/npm/tailwindcss@3.3.0/dist/tailwind.min.css');
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'realestate_enqueue_styles');

<<<<<<< Updated upstream


?>
=======
// ✅ Register "Homes" Custom Post Type
function custom_post_type_homes() {
    $labels = array(
        'name'                  => 'Homes',
        'singular_name'         => 'Home',
        'menu_name'             => 'Homes',
        'name_admin_bar'        => 'Home',
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New Home',
        'new_item'              => 'New Home',
        'edit_item'             => 'Edit Home',
        'view_item'             => 'View Home',
        'all_items'             => 'All Homes',
        'search_items'          => 'Search Homes',
        'not_found'             => 'No homes found',
        'not_found_in_trash'    => 'No homes found in Trash'
    );

    $args = array(
        'label'                 => 'Homes',
        'labels'                => $labels,
        'public'                => true,
        'menu_icon'             => 'dashicons-building',
        'supports'              => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'),
        'taxonomies'            => array('home_category', 'home_feature'),
        'has_archive'           => true,
        'rewrite'               => array('slug' => 'homes'),
        'show_in_rest'          => true, // Enables Gutenberg support
    );

    register_post_type('homes', $args);
}
add_action('init', 'custom_post_type_homes');

// ✅ Register Taxonomy: Home Categories (Hierarchical)
function create_home_category_taxonomy() {
    $labels = array(
        'name'              => 'Home Categories',
        'singular_name'     => 'Home Category',
        'search_items'      => 'Search Home Categories',
        'all_items'         => 'All Home Categories',
        'edit_item'         => 'Edit Home Category',
        'update_item'       => 'Update Home Category',
        'add_new_item'      => 'Add New Home Category',
        'new_item_name'     => 'New Home Category Name',
        'menu_name'         => 'Home Categories',
    );

    $args = array(
        'hierarchical'      => true, 
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'home-category'),
        'show_in_rest'      => true, // Enables Gutenberg support
    );

    register_taxonomy('home_category', array('homes'), $args);
}
add_action('init', 'create_home_category_taxonomy');

// ✅ Register Taxonomy: Home Features (Non-Hierarchical like Tags)
function create_home_feature_taxonomy() {
    $labels = array(
        'name'              => 'Home Features',
        'singular_name'     => 'Home Feature',
        'search_items'      => 'Search Home Features',
        'all_items'         => 'All Home Features',
        'edit_item'         => 'Edit Home Feature',
        'update_item'       => 'Update Home Feature',
        'add_new_item'      => 'Add New Home Feature',
        'new_item_name'     => 'New Home Feature Name',
        'menu_name'         => 'Home Features',
    );

    $args = array(
        'hierarchical'      => false, // Features should be like tags
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'home-feature'),
        'show_in_rest'      => true, // Enables Gutenberg support
    );

    register_taxonomy('home_feature', array('homes'), $args);
}
add_action('init', 'create_home_feature_taxonomy');

// ✅ Ensure Taxonomies Appear in Admin Panel
function add_home_taxonomies_to_admin() {
    register_taxonomy_for_object_type('home_category', 'homes');
    register_taxonomy_for_object_type('home_feature', 'homes');
}
add_action('init', 'add_home_taxonomies_to_admin');

// ✅ Add Custom Meta Box for Home Details (Size, Capacity, etc.)
function add_home_details_meta_boxes() {
    add_meta_box('home_details', 'Home Features', 'home_details_callback', 'homes', 'normal', 'high');
}
add_action('add_meta_boxes', 'add_home_details_meta_boxes');

// ✅ Meta Box Callback Function for Home Features
function home_details_callback($post) {
    $size = get_post_meta($post->ID, '_home_size', true);
    $capacity = get_post_meta($post->ID, '_home_capacity', true);
    $rooms = get_post_meta($post->ID, '_home_rooms', true);
    $bathrooms = get_post_meta($post->ID, '_home_bathrooms', true);
    $garden = get_post_meta($post->ID, '_home_garden', true);
    $balcony = get_post_meta($post->ID, '_home_balcony', true);
    $view = get_post_meta($post->ID, '_home_view', true);
    $price= get_post_meta($post->ID, '_home_price', true);
    
   

    ?>
    <p><label>Home Size (sqm):</label> <input type="number" name="home_size" value="<?php echo esc_attr($size); ?>" /></p>
    <p><label>Home Capacity:</label> <input type="number" name="home_capacity" value="<?php echo esc_attr($capacity); ?>" /></p>
    <p><label>Number of Rooms:</label> <input type="number" name="home_rooms" value="<?php echo esc_attr($rooms); ?>" /></p>
    <p><label>Number of Bathrooms:</label> <input type="number" name="home_bathrooms" value="<?php echo esc_attr($bathrooms); ?>" /></p>
    <p><label>Garden:</label> <input type="checkbox" name="home_garden" value="1" <?php checked($garden, '1'); ?> /></p>
    <p><label>Balcony:</label> <input type="checkbox" name="home_balcony" value="1" <?php checked($balcony, '1'); ?> /></p>
    <p><label>View:</label> <input type="text" name="home_view" value="<?php echo esc_attr($view); ?>" /></p>
    <p><label>Price:</label> <input type="text" name="home_price" value="<?php echo esc_attr($price); ?>" /></p>

    <?php
}

// ✅ Save Home Details Meta Data
function save_home_details_meta($post_id) {
    if (isset($_POST['home_size'])) {
        update_post_meta($post_id, '_home_size', sanitize_text_field($_POST['home_size']));
        update_post_meta($post_id, '_home_capacity', sanitize_text_field($_POST['home_capacity']));
        update_post_meta($post_id, '_home_rooms', sanitize_text_field($_POST['home_rooms']));
        update_post_meta($post_id, '_home_bathrooms', sanitize_text_field($_POST['home_bathrooms']));
        update_post_meta($post_id, '_home_garden', isset($_POST['home_garden']) ? '1' : '0');
        update_post_meta($post_id, '_home_balcony', isset($_POST['home_balcony']) ? '1' : '0');
        update_post_meta($post_id, '_home_view', sanitize_text_field($_POST['home_view']));
        update_post_meta($post_id, '_home_price', sanitize_text_field($_POST['home_price']));

    }
}
add_action('save_post', 'save_home_details_meta');

// ✅ Add Custom Meta Box for Feature Image
function add_home_feature_image_meta_box() {
    add_meta_box(
        'home_feature_image',
        'Feature Image',
        'home_feature_image_callback',
        'homes',
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'add_home_feature_image_meta_box');

// ✅ Callback Function for Feature Image Meta Box
function home_feature_image_callback($post) {
    $image_url = get_post_meta($post->ID, '_home_feature_image', true);
    ?>
    <input type="text" name="home_feature_image" id="home_feature_image" value="<?php echo esc_url($image_url); ?>" style="width:100%;" />
    <button id="upload_feature_image" class="button">Upload Image</button>
    <p><img id="feature_image_preview" src="<?php echo esc_url($image_url); ?>" style="max-width:100%; height:auto; margin-top:10px;"></p>

    <script>
        jQuery(document).ready(function($) {
            $('#upload_feature_image').click(function(e) {
                e.preventDefault();
                var mediaUploader = wp.media({
                    title: 'Select Feature Image',
                    button: { text: 'Use this image' },
                    multiple: false
                }).on('select', function() {
                    var attachment = mediaUploader.state().get('selection').first().toJSON();
                    $('#home_feature_image').val(attachment.url);
                    $('#feature_image_preview').attr('src', attachment.url).show();
                }).open();
            });
        });
    </script>
    <?php
}

// ✅ Save Feature Image Meta Data
function save_home_feature_image_meta($post_id) {
    if (isset($_POST['home_feature_image'])) {
        update_post_meta($post_id, '_home_feature_image', sanitize_text_field($_POST['home_feature_image']));
    }
}
add_action('save_post', 'save_home_feature_image_meta');

// ✅ Add Custom Meta Box for Home Gallery
function add_home_gallery_meta_box() {
    add_meta_box(
        'home_gallery',
        'Home Gallery',
        'home_gallery_callback',
        'homes',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_home_gallery_meta_box');

// ✅ Callback Function for Home Gallery Meta Box
function home_gallery_callback($post) {
    // Get the current gallery images
    $gallery = get_post_meta($post->ID, '_home_gallery', true);
    ?>
    <div id="home-gallery-container">
        <?php
        if (!empty($gallery)) {
            foreach ($gallery as $image_id) {
                $image_url = wp_get_attachment_url($image_id);
                echo '<div class="gallery-image" style="margin-bottom: 10px;">
                        <img src="' . esc_url($image_url) . '" style="max-width: 100px; height: auto;">
                        <input type="hidden" name="home_gallery[]" value="' . esc_attr($image_id) . '" />
                        <button class="remove-gallery-image" style="margin-top: 5px;">Remove</button>
                    </div>';
            }
        }
        ?>
    </div>
    <button type="button" id="upload-gallery" class="button">Add Images to Gallery</button>
    <p class="description">You can add multiple images to the gallery.</p>

    <script>
        jQuery(document).ready(function($) {
            var frame;
            $('#upload-gallery').click(function(e) {
                e.preventDefault();

                // If the frame already exists, reopen it
                if (frame) {
                    frame.open();
                    return;
                }

                // Create a new media frame
                frame = wp.media({
                    title: 'Select Images for Gallery',
                    button: { text: 'Add to Gallery' },
                    multiple: true
                });

                // When images are selected
                frame.on('select', function() {
                    var selection = frame.state().get('selection');
                    selection.each(function(attachment) {
                        var image_id = attachment.id;
                        var image_url = attachment.url;

                        // Append the selected image to the gallery container
                        $('#home-gallery-container').append(
                            '<div class="gallery-image" style="margin-bottom: 10px;">' +
                                '<img src="' + image_url + '" style="max-width: 100px; height: auto;">' +
                                '<input type="hidden" name="home_gallery[]" value="' + image_id + '" />' +
                                '<button class="remove-gallery-image" style="margin-top: 5px;">Remove</button>' +
                            '</div>'
                        );
                    });
                });

                // Open the media frame
                frame.open();
            });

            // Remove gallery image
            $(document).on('click', '.remove-gallery-image', function() {
                $(this).closest('.gallery-image').remove();
            });
        });
    </script>
    <?php
}
// ✅ Save Gallery Images Meta Data
function save_home_gallery_meta($post_id) {
    if (isset($_POST['home_gallery'])) {
        // Sanitize and save the gallery images
        $gallery = array_map('intval', $_POST['home_gallery']); // Ensure it's an array of integers (image IDs)
        update_post_meta($post_id, '_home_gallery', $gallery);
    }
}
add_action('save_post', 'save_home_gallery_meta');
add_theme_support('post-thumbnails');
>>>>>>> Stashed changes
