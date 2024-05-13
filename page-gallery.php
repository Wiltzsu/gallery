<?php get_header(); ?>

<div class="container p-5  " id="">
  <?php
    if ( is_active_sidebar( 'custom-sidebar5' ) ) {
      dynamic_sidebar( 'custom-sidebar5' );
    }
  ?>
</div>

<?php get_footer(); ?>