<?php

$queried_object = get_queried_object();  
$term_id = $queried_object->term_id;
$term = get_term($term_id, $tax_is);
$theSlug = $term->slug;

$args = array(
	'post_type' => 'summary',
	'posts_per_page' => 1,
	'name' => $theSlug,
);

$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() ) : $the_query->the_post();
	?>
	<div class="row" id="summary">
		<div class="small-12 medium-6 large-6 columns">
			<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail('original');
				} 
			?>
		</div>
		<div class="small-12 medium-6 large-6 columns">
			<h1><?php echo get_post_meta( get_the_ID(), 'display_title', true ); ?></h1>
			<?php echo the_content(); ?>
		</div>
	</div>
	<?php
		endwhile;
		wp_reset_postdata(); 
	else:
	endif;
	?>

	<?php
	
	if($tax_is=='download_tag') {
		$queried_object = get_queried_object();  
		$tag_id = $queried_object->term_id;
		$tag = get_term($tag_id, $tax_is);
		$theTagSlug = $tag->slug;
	?>
		<h1>
	<?php
		echo $theTagSlug;
	}
	else {}
	

		/* Show an optional term description.
		$term_description = term_description();
		if ( ! empty( $term_description ) ) :
			printf( '<div class="taxonomy-description">%s</div>', $term_description );
		endif;
		*/
	?>
		</h1>