<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body 
<?php body_class(); ?>>
<header class="bg-white shadow-md py-4">
    <div class="container mx-auto flex justify-between items-center">
    <h1 class="text-2xl text-red-500">Hello, Tailwind!</h1>

        <a href="<?php echo home_url(); ?>" class="text-2xl font-bold">
            <?php bloginfo('name'); ?>
        </a>
        <nav>
            <?php wp_nav_menu(['theme_location' => 'primary_menu', 'menu_class' => 'flex space-x-6']); ?>
        </nav>
    </div>
</header>

