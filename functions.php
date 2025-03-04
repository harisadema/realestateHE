<?php // ✅ Register Navigation Menu
function realestate_register_menus() {
    register_nav_menus([
        'primary-menu' => __('Primary Menu', 'realestate')
    ]);
}
add_action('after_setup_theme', 'realestate_register_menus');


// ✅ Enqueue Styles (Tailwind + Theme CSS)
function realestate_enqueue_styles() {
    wp_enqueue_style('tailwind-css', 'https://cdn.jsdelivr.net/npm/tailwindcss@3.3.0/dist/tailwind.min.css');
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'realestate_enqueue_styles');



?>