<?php
/**
 * @package _foundation
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			

	<div class="row">
		<div class="small-12 medium-5 large-6 columns ">
			<?php 
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
			?>
				<a href="<?php echo $image[0]; ?>" data-lightbox="gallery" class="featuredImage">
				<?php
				  the_post_thumbnail('product-image-large');
				}
				//echo do_shortcode('[gallery]');
				?>
				</a>
			<ul class="clearing-thumbs">
			<?php //if ( have_posts() ) : while ( have_posts() ) : the_post();    
			
			 $args = array(
			   'post_type' => 'attachment',
			   //'numberposts' => -1,
			   //'post_status' => null,
			   'post_parent' => $post->ID
			  );
			
			  $attachments = get_posts( $args );
				 if ( $attachments ) {
					foreach ( $attachments as $attachment ) {
						echo "<li>";
						echo "<a href='";
						echo wp_get_attachment_url( $attachment->ID );
						echo "' data-lightbox='gallery'>";
						echo wp_get_attachment_image( $attachment->ID, 'thumb' );
						echo "</a>";
						//echo apply_filters( 'the_title', $attachment->post_title );
						echo '</li>';
					  }
				 }
			
			 //endwhile; endif; ?>
			</ul>
			
			
			

		</div>
		
		
		
		
		
		
		
		<div class="small-12 medium-7 large-6 columns">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php the_content(); ?>
			<?php echo do_shortcode('[purchase_link id="' . get_the_ID() . '" price="0" text="Add to Cart" class="addToCart button" style="button"]'); ?>
			<div class="price"><?php edd_price($post->ID); ?></div>
			
			<div id="sharing">
				Share: <g:plusone size="tall"></g:plusone><g:plusone size="medium" count="false" href="<?php the_permalink(); ?>"></g:plusone>
				<a href="//www.pinterest.com/pin/create/button/?url=<? the_permalink(); ?>&media=http%3A%2F%2Ffarm8.staticflickr.com%2F7027%2F6851755809_df5b2051c9_z.jpg&description=Next%20stop%3A%20Pinterest" data-pin-do="buttonPin" data-pin-config="none"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" /></a>
				<a href="https://twitter.com/share" class="twitter-share-button" data-via="twitterapi" data-lang="en">Tweet</a>
				<?php echo do_shortcode('[fb_button]'); ?>
			</div>
			
			
			<div id="tags">
				Tags: 
				<?php 
						$id = get_the_ID();
						$before = '';
						$sep = ' ';
						$after = '';
						//echo get_the_term_list( $id, 'download_category', $before, $sep, $after );
						echo get_the_term_list( $id, 'themes', $before, $sep, $after ) . " ";
						echo get_the_term_list( $id, 'download_tag', $before, $sep, $after );
						//echo get_the_tag_list( $before, $sep, $after );
						//var_dump($tags);
					?>
			</div>
			
			<div id="meta">
				<div class="small-12 large-6 columns">
					<div>
						<h4>Font List:</h4>
						<?php 
							$fonts = get_post_meta( $id, 'font_list', true );
							echo wpautop($fonts);
						?>
					</div>
					<div>
						<h4>Product Dimensions:</h4>
						<?php 
							$dimensions = get_post_meta( $id, 'product_dimensions', true ); 
							echo wpautop($dimensions);
						?>
					</div>
					<div>
						<h4>Compatibility:</h4>
						<?php 
							$compats = get_the_terms( $id, 'compatibilities'); 
							foreach ($compats as $compat) {
								echo $compat->name . "<br>";
							}
						?>
					</div>
				</div>
				<div class="small-12 large-6 columns">
					<div>
						<h4>File Type:</h4>
						<?php 
							$ftypes = get_the_terms( $id, 'file_types'); 
							foreach ($ftypes as $ftype) {
								echo $ftype->name . "<br>";
							}
						?>
					</div>
					<div>
						<h4>Print Specs:</h4>
						<?php echo get_post_meta( $id, 'print_specifications', true ); ?>
					</div>
				</div>
			</div>
		</div>


		</div>



				  <!--USAGE-->
					<?php 
						//$upost = get_page(192); 
						//$pcontent = apply_filters('the_content', $upost->post_content); 
						//echo $pcontent;  
					?>
	

</article><!-- #post-## -->

