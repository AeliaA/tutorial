<?php get_header(); ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<article>

				<h2 id="sech2" ><?php the_title(); ?></h2>

				<?php the_content(); ?>

			</article>

		<?php endwhile; ?>

	<div class="container">
		<div class="row homepg">
			<div class="col-md-8 ">

						
				<!-- To order the order of posts on home page  -->
				<?php query_posts('showposts=&order=ASC'); ?>

				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

					<?php if ( is_sticky() ) { ?>

						<article>	
							
							<h1><?php the_title(); ?></h1> 

					    <?php the_content(); ?>

					  </article>

					<?php } else { ?>

				    <article class="myexcerpt" id="just">
					
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="row">
							<div class="col-md-12"> 
					
							<div class="col-md-4 thumbnail1">
									<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('post-thumbnail'); } ?></a>
							</div><!-- /col -->
							<div class="col-md-8 excerpt1">		
								<?php the_excerpt(); ?>
							</div><!-- /col -->
						</div> <!-- /colmd12 -->
					</div><!-- /row -->
					
					
					</article>

					<?php } ?> 
						
					<?php endwhile; else: ?>

						<p><?php_e( 'Sorry, no posts matched your criteria.' ); ?></p>

					<?php endif; ?>
				
			</div>
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
		</div> <!--/row -->
	</div> <!--/container -->


<?php get_footer(); ?>