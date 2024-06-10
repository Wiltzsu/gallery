<?php get_header('contact'); ?>

<!-- Contact -->
<div class="container p-5  " id="">
  <?php
    if ( is_active_sidebar( 'custom-sidebar3' ) ) {
      dynamic_sidebar( 'custom-sidebar3' );
    }
  ?>
</div>

<?php get_footer(); ?>

