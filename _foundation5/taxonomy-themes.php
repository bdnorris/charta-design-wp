<?php
/**
 * Downloads Archive Template
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _foundation
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row">
				<div class="small-12 columns">
					<?php if ( have_posts() ) : ?>

					<header class="page-header">
					<?php
						$tax_is = 'themes';
                		include(locate_template('summaries.php'));
					?>
					</header><!-- .page-header -->

			<ul class="archiveBlocks small-block-grid-2 medium-block-grid-3 large-block-grid-4">
			<?php /* Start the Loop */
			while ( have_posts() ) : the_post(); ?>
				<li>
				<?php
					get_template_part( 'content', 'archive');
				?> 
					</li>
			<?php endwhile; ?>
			</ul>
			<?php _foundation_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'archive' ); ?>

		<?php endif; ?>
			
			</div>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
