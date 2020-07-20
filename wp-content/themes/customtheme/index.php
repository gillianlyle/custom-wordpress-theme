<?php get_header(); ?>

<main class="posts">
    <?php
        if ( have_posts() ) : while ( have_posts() ): the_post(); ?>

        <article id="post-<?php the_ID(); ?>" class="post">
            <h2><?php the_title(); ?></h2>
            <?php the_excerpt(); ?>
        </article>

        <?php endwhile;
        endif;
    ?>
</main>

<?php get_footer(); ?>