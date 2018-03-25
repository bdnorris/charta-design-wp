<?php
/**
 * @package _foundation
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
		<div class="small-12 columns">
			
			
			<?php 
				$id = get_the_ID();
				$before = '';
				$sep = '';
				$after = '';
				echo get_the_term_list( $id, 'download_category', $before, $sep, $after );
				echo get_the_term_list( $id, 'themes', $before, $sep, $after );
			?> 
	
			
		</div>
	</div>
			
	<div class="row">
		<div class="small-12 columns">
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
		
				<!--<div class="entry-meta">
					<?php //_foundation_posted_on(); ?>
				</div><!-- .entry-meta -->
			</header><!-- .entry-header -->
		</div>
	</div>
	<div class="row">
		<div class="small-12 large-8 columns">
			<?php 
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
			?>
				<a href="<?php echo $image[0]; ?>" data-lightbox="gallery">
				<?php
				  the_post_thumbnail('product-image-large');
				}
				//echo do_shortcode('[gallery]');
				?>
				</a>
<ul class="clearing-thumbs" data-clearing>
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
			echo wp_get_attachment_image( $attachment->ID, 'medium' );
			echo "</a>";
			//echo apply_filters( 'the_title', $attachment->post_title );
			echo '</li>';
          }
     }

 //endwhile; endif; ?>
</ul>
</div>
	<div class="entry-content small-12 large-4 columns">
			<?php the_content(); ?>
		
		
			<div class="price">Price: <?php edd_price($post->ID); ?></div>
			<?php echo do_shortcode('[purchase_link id="' . get_the_ID() . '" price="0" text="Add to Cart" class="addToCart button" style="button"]'); ?>

		<a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"  data-pin-color="red" data-pin-height="28"><img src="http://assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_28.png" /></a>
			<?php
				//echo do_shortcode('[pinit]');
				//wp_link_pages( array(
				//	'before' => '<div class="page-links">' . __( 'Pages:', '_foundation' ),
				//	'after'  => '</div>',
				//) );
			?>
		</div><!-- .entry-content -->


		</div>
</article><!-- #post-## -->

