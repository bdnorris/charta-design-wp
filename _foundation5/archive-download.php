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
				<h1 class="page-title">All Products</h1>
							
			

				
				
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .page-header -->

			<ul class="archiveBlocks small-block-grid-2 medium-block-grid-3 large-block-grid-4">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<li>
				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', 'archive');
				$id = get_the_ID();
				$before = '';
				$sep = ', ';
				$after = '<br>';
				echo "Categories: " . get_the_term_list( $id, 'download_category', $before, $sep, $after );
				echo "Themes: " . get_the_term_list( $id, 'themes', $before, $sep, $after );

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
