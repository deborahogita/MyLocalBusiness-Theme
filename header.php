<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="header-logo">
        <?php
        // Check if a custom logo is set in the WordPress Customizer
        if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo(); // Display the custom logo
        } else {
            // Fallback: Display site title if no logo is set
            echo '<h1><a href="' . esc_url( home_url( '/' ) ) . '">' . get_bloginfo( 'name' ) . '</a></h1>';
        }
        ?>
    </div>

    <!-- Navigation Menu -->
    <nav>
        <?php
        wp_nav_menu( array(
            'theme_location' => 'primary', // Ensure your menu is registered
            'container' => false,
            'menu_class' => 'primary-menu',
        ) );
        ?>
    </nav>
</header>
