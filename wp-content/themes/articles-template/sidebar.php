<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 */
?>

			<?php if ( is_active_sidebar( 'aside' ) ) : ?>
				<div id="secondary" class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'aside' ); ?>
				</div><!-- #secondary -->
			<?php endif; ?>
