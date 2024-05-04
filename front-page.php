<?php get_header(); ?>

<!--
<div class="container-fluid p-0">
  <?php
    if ( is_active_sidebar( 'custom-sidebar0' ) ) {
      dynamic_sidebar( 'custom-sidebar0' );
    }
  ?>
</div>
-->
<div class="container p-5 aboutStyling" id="about">
  <?php
    if ( is_active_sidebar( 'custom-sidebar1' ) ) {
      dynamic_sidebar( 'custom-sidebar1' );
    }
  ?>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
