<?php
function mytheme_enqueue_styles() {
    // Enqueue the main css file
    wp_enqueue_style('main-css', get_stylesheet_uri());

    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');

    // Enqueue Bootstrap Bundle JS (includes Popper)
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), false, true);

    // Enqueues custom Google font.
    wp_enqueue_style('add-google-fonts', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap', false);

}

// Adds the mytheme_enqueue_styles function to the 'wp_enqueue_scripts' action hook.
// This ensures that the main stylesheet is loaded in the theme.
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

###

// Registers a menu location for the WordPress Theme.
// This allows users to create a custom menu under Appearance > Menu in the WordPress dashboard.
function mytheme_register_nav_menu() {
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'mytheme' ), // 'primary_menu' is the menu location identifier.
    ) );
}
add_action( 'after_setup_theme', 'mytheme_register_nav_menu' );

###

// Registers a widget area (jumbotron)
function mytheme_register_widgets0() {
    register_sidebar( array(
        'name'          => esc_html__( 'Front Page Header', 'theme-domain' ), // 'name' is what will appear in your WordPress admin area for the widget area.
        'id'            => 'custom-sidebar0', // 'id' is use for customizing and styling the widget area.
        'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'theme-domain' ), // 'description' provides a description of the widget area for the admin area.
        // Define the HTML that will be used before and after each widget and widget title in this area.
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'mytheme_register_widgets0' );

###

// Registers a widget area (about)
function mytheme_register_widgets1() {
    register_sidebar( array(
        'name'          => esc_html__( 'About Section', 'theme-domain' ), // 'name' is what will appear in your WordPress admin area for the widget area.
        'id'            => 'custom-sidebar1', // 'id' is use for customizing and styling the widget area.
        'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'theme-domain' ), // 'description' provides a description of the widget area for the admin area.
        // Define the HTML that will be used before and after each widget and widget title in this area.
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'mytheme_register_widgets1' );

###

// Registers a widget area (frontpagegallery)
function mytheme_register_widgets2() {
    register_sidebar( array(
        'name'          => esc_html__( 'Front Page Gallery', 'theme-domain' ), // 'name' is what will appear in your WordPress admin area for the widget area.
        'id'            => 'custom-sidebar2', // 'id' is use for customizing and styling the widget area.
        'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'theme-domain' ), // 'description' provides a description of the widget area for the admin area.
        // Define the HTML that will be used before and after each widget and widget title in this area.
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'mytheme_register_widgets2' );

###

// Registers a widget area (contact)
function mytheme_register_widgets3() {
    register_sidebar( array(
        'name'          => esc_html__( 'Contact Form', 'theme-domain' ), // 'name' is what will appear in your WordPress admin area for the widget area.
        'id'            => 'custom-sidebar3', // 'id' is use for customizing and styling the widget area.
        'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'theme-domain' ), // 'description' provides a description of the widget area for the admin area.
        // Define the HTML that will be used before and after each widget and widget title in this area.
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'mytheme_register_widgets3' );

###

// Registers a widget area (footer)
function mytheme_register_widgets4() {
    register_sidebar( array(
        'name'          => esc_html__( 'Footer', 'theme-domain' ), // 'name' is what will appear in your WordPress admin area for the widget area.
        'id'            => 'custom-sidebar4', // 'id' is use for customizing and styling the widget area.
        'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'theme-domain' ), // 'description' provides a description of the widget area for the admin area.
        // Define the HTML that will be used before and after each widget and widget title in this area.
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'mytheme_register_widgets4' );

###

// Registers a widget area (gallery)
function mytheme_register_widgets5() {
    register_sidebar( array(
        'name'          => esc_html__( 'Gallery Page', 'theme-domain' ), // 'name' is what will appear in your WordPress admin area for the widget area.
        'id'            => 'custom-sidebar5', // 'id' is use for customizing and styling the widget area.
        'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'theme-domain' ), // 'description' provides a description of the widget area for the admin area.
        // Define the HTML that will be used before and after each widget and widget title in this area.
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'mytheme_register_widgets5' );

###

// Registers a widget area (contact)
function mytheme_register_widgets6() {
    register_sidebar( array(
        'name'          => esc_html__( 'About me', 'theme-domain' ), // 'name' is what will appear in your WordPress admin area for the widget area.
        'id'            => 'custom-sidebar6', // 'id' is use for customizing and styling the widget area.
        'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'theme-domain' ), // 'description' provides a description of the widget area for the admin area.
        // Define the HTML that will be used before and after each widget and widget title in this area.
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'mytheme_register_widgets6' );

###

// Registers a widget area (winter gallery)
function mytheme_register_widgets7() {
    register_sidebar( array(
        'name'          => esc_html__( 'Winter gallery', 'theme-domain' ), // 'name' is what will appear in your WordPress admin area for the widget area.
        'id'            => 'custom-sidebar7', // 'id' is use for customizing and styling the widget area.
        'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'theme-domain' ), // 'description' provides a description of the widget area for the admin area.
        // Define the HTML that will be used before and after each widget and widget title in this area.
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'mytheme_register_widgets7' );

###

// Registers a widget area (summer & spring gallery)
function mytheme_register_widgets8() {
    register_sidebar( array(
        'name'          => esc_html__( 'Summer & Spring gallery', 'theme-domain' ), // 'name' is what will appear in your WordPress admin area for the widget area.
        'id'            => 'custom-sidebar8', // 'id' is use for customizing and styling the widget area.
        'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'theme-domain' ), // 'description' provides a description of the widget area for the admin area.
        // Define the HTML that will be used before and after each widget and widget title in this area.
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'mytheme_register_widgets8' );
?>