<?php get_header(); ?>

    <div class="container-page">
        <?php 
            if( have_posts() ) : while( have_posts() ) : the_post(); 
        ?>
        <h1><?php ?></h1>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>

<?php get_footer(); ?>