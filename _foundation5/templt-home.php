<?php
/**
 * Template Name: Home
 
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _foundation
 */

get_header(); ?>

	<?php
		// The Query
		$args = array(
			'post_type' => 'slides',
			//'people' => 'bob'
		);
		$the_query = new WP_Query( $args );

	?>
<!--
	<div class="banner has-dots">
			<ul>
				<?php
				// The Loop
				$i = 0;
				while ( $the_query->have_posts() ) : $the_query->the_post();
				?>
				<li>
					<div class="row">
						<div class="small-12 columns">
							<?php 
								if (has_post_thumbnail( $post->ID ) ):
								$image = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
								//$thumb_id = get_post_thumbnail_id($post->id);
								//$alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
								//echo $alt;
							?>
				            	<img src="<?php echo $image[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" alt="<?php the_title(); ?>">			
							<?php 
								endif; 
							?>
						</div>
					</div>
				</li>
				<?php
				$i++;
				endwhile;
				?>
	
			</ul>

				<?php
				/* Restore original Post Data */
				wp_reset_postdata();
				?>
		
	</div>

-->

<div class="row"><div class="orbit small-12 columns">
			<ul data-orbit
    data-options="animation:slide;
                  animation_speed:500;
                  pause_on_hover:true;
                  navigation_arrows:true;
				  stack_on_small:false;
                  bullets:false;
				  slide_number:false;
                  next_on_click:true;">
				<?php
				// The Loop
				$i = 0;
				while ( $the_query->have_posts() ) : $the_query->the_post();
				?>
				<li>
					<div class="row">
						<div class="small-12 columns">
							<?php 
								if (has_post_thumbnail( $post->ID ) ):
								$image = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
								//$thumb_id = get_post_thumbnail_id($post->id);
								//$alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
								//echo $alt;
							?>
				            	<img src="<?php echo $image[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" alt="<?php the_title(); ?>">			
							<?php 
								endif; 
							?>
						</div>
					</div>
				</li>
				<?php
				$i++;
				endwhile;
				?>
	
			</ul>
	</div></div>

				<?php
				/* Restore original Post Data */
				wp_reset_postdata();
				?>




    <div class="row boxes">
		<?php
			// The Query
			$args = array(
				'post_type' => 'cta',
				//'people' => 'bob'
			);
			$the_query = new WP_Query( $args );

			while ( $the_query->have_posts() ) : $the_query->the_post();
		?>
		
		<div class="small-6 medium-3 large-3 columns">
			<?php
			if (has_post_thumbnail( $post->ID ) ):
				$image = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
			?>
				<img src="<?php echo $image[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" alt="<?php the_title(); ?>">			
			<?php 
				endif; 
			?>
		</div>
	
		
		<?php
			endwhile;
			/* Restore original Post Data */
			wp_reset_postdata();
		?>
	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
                
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'home' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
				//	if ( comments_open() || '0' != get_comments_number() )
				//		comments_template();
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->




<?php get_footer(); ?>
