<?php
/**
 * @package _foundation
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>" rel="bookmark">
		<?php
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			the_post_thumbnail();
			} 
		?>
	
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php
			echo edd_price($post->ID);
		?>
	</a>
</article><!-- #post-## -->
