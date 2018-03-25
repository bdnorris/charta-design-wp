<?php
/**
 * The Template for displaying all single posts.
 *
 * @package _foundation
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row">
				<div class="small-12 columns">
					<?php while ( have_posts() ) : the_post(); ?>
			
			
						<?php get_template_part( 'content', 'download' ); ?>
			
						<?php //_foundation_content_nav( 'nav-below' ); ?>
			
						<?php
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || '0' != get_comments_number() )
								comments_template();
						?>
			
					<?php endwhile; // end of the loop. ?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>