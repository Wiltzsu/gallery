<?php get_header('about'); ?>

<!-- Contact -->
<div class="container p-5  " id="">
  <?php
    if ( is_active_sidebar( 'custom-sidebar6' ) ) {
      dynamic_sidebar( 'custom-sidebar6' );
    }
  ?>
</div>

<?php get_footer(); ?>
