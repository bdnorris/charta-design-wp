<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _foundation
 */
?>

	</div><!-- #content -->

	<footer class="row hide-for-small">
	    <div class="footer1 small-6 large-2 columns">
			<h4><a href="<?php echo home_url(); ?>">Home</a></h4>
	        <?php wp_nav_menu( array( 'theme_location' => 'footer1' ) ); ?>	        
	    </div>
	    <div class="footer2 small-6 large-2 columns">
			<h4>Shop</h4>
	        <?php wp_nav_menu( array( 'theme_location' => 'footer2' ) ); ?>	        
	    </div>
	    <div class="footer3 small-6 large-2 columns">
			<h4>Info</h4>
	        <?php wp_nav_menu( array( 'theme_location' => 'footer3' ) ); ?>	        
	    </div>
	    <div class="footer4 small-6 large-2 columns">
			<h4>Help</h4>
	        <?php wp_nav_menu( array( 'theme_location' => 'footer4' ) ); ?>	        
	    </div>
	    <div class="footer5 small-6 large-2 columns">
			<h4>Get Involved</h4>
	        <?php wp_nav_menu( array( 'theme_location' => 'footer5' ) ); ?>	        
	    </div>
	    <div class="footer6 small-6 large-2 columns">
			<h4>Get Social</h4>
	        <?php wp_nav_menu( array( 'theme_location' => 'footer6' ) ); ?>	        
	    </div>
	    
	</footer>

	<footer class="row show-for-small mobile ">
		<div class="small-12 columns centered"><h4><a href="<?php echo home_url(); ?>">Home</a></h4></div>
		<div class="small-12 columns"><?php dropdown_menu( array( 'theme_location' => 'footer_mobile2' ) ); ?></div>
		<div class="small-12 columns"><?php dropdown_menu( array( 'theme_location' => 'footer_mobile3' ) ); ?></div>
		<div class="small-12 columns"><?php dropdown_menu( array( 'theme_location' => 'footer_mobile4' ) ); ?></div>
		<div class="small-12 columns"><?php dropdown_menu( array( 'theme_location' => 'footer_mobile5' ) ); ?></div>
		<div class="small-12 columns"><?php dropdown_menu( array( 'theme_location' => 'footer_mobile6' ) ); ?></div>
		
	</footer>
	
	<footer id="colophon" class="site-footer row" role="contentinfo">
		<div class="site-info small-12 columns">
			<?php //wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
			<p>&copy;2011&ndash;<?php echo date('Y');  ?> Charta Design</p>
			<p><a href="<?php echo get_page_link(63); ?>">Terms of Use</a>  |  Privacy Policy</p>
			<p>Please do not reproduce without the expressed written consent of Charta Design.</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->



<?php wp_footer(); ?>

<script>
      jQuery(document).foundation();
    </script>
<script>
	  jQuery(function() {
    	jQuery('.banner').unslider({
			speed: 500,               //  The speed to animate each slide (in milliseconds)
			delay: 3000,              //  The delay between slide animations (in milliseconds)
			complete: function() {},  //  A function that gets called after every slide animation
			keys: true,               //  Enable keyboard (left, right) arrow shortcuts
			dots: true,               //  Display dot navigation
			fluid: true       
		});
	  });
  </script>
<script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>

</body>
</html>