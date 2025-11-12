<?php
// Enqueue theme styles and scripts
function my_custom_theme_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/js/theme.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');

// Register Custom Navigation Menus
function my_custom_theme_menus() {
    register_nav_menus(array(
        'primary' => 'Primary Menu',
    ));
}
add_action('after_setup_theme', 'my_custom_theme_menus');
?>
