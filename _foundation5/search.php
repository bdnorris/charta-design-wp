<?php
/**
 * The template for displaying Search Results pages.
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
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', '_foundation' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->
			
			<ul class="archiveBlocks small-block-grid-2 medium-block-grid-3 large-block-grid-4">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<li>
					<?php get_template_part( 'content', 'search' );
	
					$id = get_the_ID();
					$before = '';
					$sep = ', ';
					$after = '<br>';
					echo "Categories: " . get_the_term_list( $id, 'download_category', $before, $sep, $after );
					echo "Themes: " . get_the_term_list( $id, 'themes', $before, $sep, $after );
					?>
				</li>
				<?php endwhile; ?>
	
					<?php _foundation_content_nav( 'nav-below' ); ?>
	
				<?php else : ?>
	
					<?php get_template_part( 'no-results', 'search' ); ?>
	
				<?php endif; ?>
			</ul>
				</div>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>