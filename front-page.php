<?php get_header(); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
        <div class="col-md-4">
            <h3>Sidebar</h3>
            <p>This is a sidebar where you can place widgets or additional information.</p>
            <p>dick</p>
            <p>dick</p>
        </div>
    </div>
</div>

<?php get_footer(); ?>
