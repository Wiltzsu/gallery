<?php get_header(); ?>

<div class="container p-5 frontpageStyling" id="about">
  <?php
    if ( is_active_sidebar( 'custom-sidebar1' ) ) {
      dynamic_sidebar( 'custom-sidebar1' );
    }
  ?>
</div>

<div class="container " id="about">
  <?php
    if ( is_active_sidebar( 'custom-sidebar2' ) ) {
      dynamic_sidebar( 'custom-sidebar2' );
    }
  ?>
</div>

<div class="container-fluid p-5 footerStyling" id="backToTop">
  <?php
    if ( is_active_sidebar( 'custom-sidebar4' ) ) {
      dynamic_sidebar( 'custom-sidebar4' );
    }
  ?>
</div>

<?php get_footer(); ?>
