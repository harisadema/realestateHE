<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Add Google Font for a refined cursive touch -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&display=swap" rel="stylesheet">

    <style>
        /* Video Background Styling */
        .video-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        /* Dark Overlay on Video */
        .video-container::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }

        /* Logo Styling */
        .logo {
            max-width: 230px;
            height: auto;
        }

        /* Navbar Styling */
        .navbar {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
        }

        .navbar a {
            font-size: 16px;
            font-weight: 600;
            transition: color 0.3s ease-in-out;
            color: white;
        }

        .navbar a:hover {
            color: #FACC15;
        }
    </style>

    <?php wp_head(); ?>
</head>
<body <?php body_class('relative w-full bg-gray-100'); ?>>

    <!-- Updated Header with Navigation -->
    <header class="header w-full bg-transparent">
        <div class="max-w-7xl mx-auto flex justify-between items-center py-4 px-4">
            <!-- Logo -->
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/HElogo.png" alt="Logo">

            <!-- Navbar + Login Button -->
            <div class="flex items-center space-x-6">
                <nav class="navbar">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary-menu', // Ensure this matches the location registered in functions.php
                        'container'      => false, // Don't wrap the menu in another <nav> tag, as we already have one
                        'menu_class'     => 'menu flex space-x-6', // Add classes to the <ul> element, e.g., flex
                        'fallback_cb'    => false, // Hide menu if not set in admin
                    ));
                    ?>
                </nav>

                <!-- Login Button -->
                <a href="<?php echo wp_login_url(); ?>" class="px-5 py-2 bg-[#A27B5C] hover:bg-[#8C5A38] text-[#DCD7C9] font-semibold rounded-full shadow-md hover:shadow-lg hover:from-yellow-500 hover:to-yellow-700 transition-all duration-300">
                    Login
                </a>
            </div>
        </div>
    </header>

    <!-- Background Video -->
    <div class="video-container">
        <video autoplay muted loop class="video-bg">
            <source src="<?php echo get_template_directory_uri(); ?>/video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <!-- Static Centered Text -->
    <div class="flex flex-col items-center justify-center text-center pt-8 pb-[210px]">
        <div>
            <h1 class="text-[#DCD7C9] text-6xl md:text-8xl leading-tight" style="font-family: 'Playfair Display', serif;">
                Top Real Estate
            </h1>
            <h2 class="text-[#DCD7C9] text-4xl md:text-6xl font-light mt-6" style="font-family: 'Playfair Display', serif;">
                Listings in Macedonia
            </h2>
            <a href="#" class="mt-8 mr-2 inline-block bg-[#A27B5C] hover:bg-[#8C5A38] text-[#DCD7C9] text-lg md:text-xl font-medium py-3 px-6 rounded-2xl transition-all duration-300 shadow-md">
                Villas
            </a>
            <a href="#" class="mt-8 mr-2 inline-block bg-[#A27B5C] hover:bg-[#8C5A38] text-[#DCD7C9] text-lg md:text-xl font-medium py-3 px-6 rounded-2xl transition-all duration-300 shadow-md">
                Apartments
            </a>
            <a href="#" class="mt-8 mr-2 inline-block bg-[#A27B5C] hover:bg-[#8C5A38] text-[#DCD7C9] text-lg md:text-xl font-medium py-3 px-6 rounded-2xl transition-all duration-300 shadow-md">
                Houses
            </a>
        </div>
    </div>

    <?php wp_footer(); ?>
</body>
</html>
