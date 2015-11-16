<?php get_header(); ?>

 
 <div class="container wrapper">
    <div class="row">
        <div class="col-md-8">

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                			
            <article>

                <h2><style>h2 {color: #006400;}</style><?php the_title(); ?></h2>

                <small><?php the_date(); ?></small>

                <p>Article by <?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?></p>

                <p><?php the_author_meta( 'description' ); ?></p>
                               
                <?php the_content(); ?> 


            </article>

        <?php endwhile; else: ?>

            <p><?php_e( 'Sorry, no posts matched your criteria.' ); ?></p> 

        <?php endif; ?> 

        <div class="btn-group btn-group-justified" role="group" aria-label="...">
          <a class="btn btn-default" role="button" target="_blank" href="https://twitter.com/intent/tweet?&amp;url=<?php the_permalink(); ?>">Tweet</a>
          <a class="btn btn-default" role="button" target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">Facebook Share</a>
          <a class="btn btn-default" role="button" target="_blank" href="https://plus.google.com/share?url={<?php the_permalink(); ?>}">Google+ Share</a>
          <a class="btn btn-default" role="button" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>">Linked In Share</a>
        </div>

<!--         <ul class="share">              
            <li><a target="_blank" href="https://twitter.com/intent/tweet?&amp;url=<?php the_permalink(); ?>">Tweet</a></li>
            <li><a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>">Facebook Share</a></li>
            <li><a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>">Google Plus Share</a></li>
            <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>">Linked In Share</a></li>
        </ul> -->

        </div><!--/col-md-8 -->
        <div class="col-md-4">

        <?php dynamic_sidebar('Aside'); ?> 

        </div> <!--/col-md-4 -->
    </div> <!--/row -->
  
    <div class="row">
        <div class="col-xs-12">
            <h3>Comments</h3>
            <div id="comments"><?php comments_template(); ?></div>
        </div>
    </div><!--/row -->
</div> <!--/container wrapper -->

<?php get_footer(); ?>