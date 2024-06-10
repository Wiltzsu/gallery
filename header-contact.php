<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="header-container" style="position: relative; z-index: 1;">
        <?php if ( is_active_sidebar( 'custom-sidebar01' ) ) : ?>
            <div class="widget-area bg-image-widget" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;">
                <?php dynamic_sidebar( 'custom-sidebar01' ); ?>
            </div>
        <?php endif; ?>
        <div class="container-fluid p-0">
        <h1 style="font-style: italic;"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
            <nav id="site-navigation" class="main-navigation" style="position: relative; z-index: 2;">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary_menu',
                    'menu_id'        => 'primary-menu',
                ) );
                ?>
            </nav>
        </div>
    </div>
</header>

<main>
