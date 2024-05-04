<?php
// Enqueue the main css file
function mytheme_enqueue_styles() {
    wp_enqueue_style('main-css', get_stylesheet_uri());
}

// Enqueue bootstrap
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

function mytheme_enqueue_bootstrap() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');

    // Enqueue Bootstrap Bundle JS (includes Popper)
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'mytheme_enqueue_bootstrap');

// Register nav menu
function mytheme_register_nav_menu() {
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'mytheme' ), // 'primary_menu' is the menu location identifier.
    ) );
}
add_action( 'after_setup_theme', 'mytheme_register_nav_menu' );


?>