<?php get_header(); ?>

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                			
            <article>

                <h2><?php the_title(); ?></h2>

                <small><?php the_date(); ?></small>

                <p>Article by, <?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?></p>

                <p><?php the_author_meta( 'description' ); ?></p>
                               
                <?php the_content(); ?> 

            </article>

        <?php endwhile; else: ?>

            <p><?php_e( 'Sorry, no posts matched your criteria.' ); ?></p> 

        <?php endif; ?> 
        <?php get_footer(); ?>