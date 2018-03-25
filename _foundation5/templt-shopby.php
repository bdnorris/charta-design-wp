<?php
/**
 * Template Name: Shop By
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _foundation
 */

get_header(); ?>
<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row">
				<div class="small-12 columns">
		<?php while ( have_posts() ) : the_post(); ?>


			<?php get_template_part( 'content', 'page' ); ?>

			<?php //_foundation_content_nav( 'nav-below' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>

		<?php endwhile; // end of the loop. ?>



		<?php if ( have_posts() ) :

			if (is_page(24)===true) {$shopBy = 'download_category';}
			elseif (is_page(18)===true) {$shopBy = 'themes';}
			else {echo "ERROR";}

		?>
					
			<header class="page-header">
				<h1 class="page-title">
					<?php
						if ($shopBy == 'download_category') {echo "Categories";}
						elseif ($shopBy == 'themes') {echo "Themes";}
						else {}
					?>
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;




				?>
			</header><!-- .page-header -->
					
			<?php
			//list terms in a given taxonomy using wp_list_categories  (also useful as a widget)
			/*
			$orderby = 'name';
			$show_count = 0; // 1 for yes, 0 for no
			$pad_counts = 0; // 1 for yes, 0 for no
			$hierarchical = 1; // 1 for yes, 0 for no
			//$taxonomy = 'themes';
			$title = '';
			
			$args = array(
			  'orderby' => $orderby,
			  'show_count' => $show_count,
			  'pad_counts' => $pad_counts,
			  'hierarchical' => $hierarchical,
			  'taxonomy' => $shopBy,
			  'title_li' => $title
			);
			*/
			?>
			<!--<ul>
			<?php
			//wp_list_categories($args);
			?>
			</ul>-->
					
			<ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
			<?php
			// Get all terms (e.g. categories or post tags), 
			// then display 5 posts in each term
			$taxonomy = $shopBy;//  e.g. post_tag, category
			$param_type = 'category__in'; //  e.g. tag__in, category__in
			$term_args=array(
  				'orderby' => 'name',
  				'order' => 'ASC'
			);
			$terms = get_terms($taxonomy,$term_args);
			if ($terms) {
  				foreach( $terms as $term ) {
     				echo "<li><a href='".get_term_link( $term );
					echo "' title='".$term->name."'>";
					echo "<h3>".$term->name."</h3>";

					echo "<img src='";
					echo z_taxonomy_image_url($term->term_id);
					echo "' alt='".$term->name."'>";
					
					//echo "<img src='http://placehold.it/596x240/f7cac2'>";
					//echo '<li>'.$taxonomy .' '.$term->name.'</li>';
      				//echo $term->name.': ';
	  				//echo get_term_link( $term );
    				// echo category_description($term->ID).'</li>';
	  				echo "</a><p>".$term->description."</p>";
	 				// echo category_description($term->term_taxonomy_id);
					echo "</li>";
					
    			}
  			}

			?>
			</ul>
					
					
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					//get_template_part( 'content', 'archive' );

					

				?>

			<?php endwhile; ?>

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
