<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _foundation
 */
?>
	<div class="email row">
		<div class="small-12 medium-7 large-8 columns">
			<img id="envelope" src="<?php echo get_template_directory_uri(); ?>/images/envelope.png" title="Join Our E-Mail List">
			<h2>Join Our E-Mail List</h2>
			<p>We&rsquo;ll keep you informed of new product releases &amp; promotions each month.</p>
		</div>
		<div class="small-12 medium-5 large-4 columns">
			<?php echo do_shortcode('[mc4wp_form]'); ?>
		</div>
	</div>

	</div><!-- #content -->

	<footer class="row hide-for-small">
	    <div class="footer1 small-6 medium-2 columns">
			<h4><a href="<?php echo home_url(); ?>">Home</a></h4>
	        <?php wp_nav_menu( array( 'theme_location' => 'footer1' ) ); ?>	        
	    </div>
	    <div class="footer2 small-6 medium-2 columns">
			<h4>Shop</h4>
	        <?php wp_nav_menu( array( 'theme_location' => 'footer2' ) ); ?>	        
	    </div>
	    <div class="footer3 small-6 medium-2 columns">
			<h4>Info</h4>
	        <?php wp_nav_menu( array( 'theme_location' => 'footer3' ) ); ?>	        
	    </div>
	    <div class="footer4 small-6 medium-2 columns">
			<h4>Help</h4>
	        <?php wp_nav_menu( array( 'theme_location' => 'footer4' ) ); ?>	        
	    </div>
	    <div class="footer5 small-6 medium-2 columns">
			<h4>Get Involved</h4>
	        <?php wp_nav_menu( array( 'theme_location' => 'footer5' ) ); ?>	        
	    </div>
	    <div class="footer6 small-6 medium-2 columns">
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
			<p>&copy;<?php echo date("Y") ?>&ndash;<?php echo date('Y');  ?> Charta Design</p>
			<p><a href="<?php echo get_page_link(63); ?>">Terms of Use</a>  |  Privacy Policy</p>
			<p>Please do not reproduce without the expressed written consent of Charta Design.</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->



<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/foundation/foundation.orbit.js"></script>
<script>
      jQuery(document).foundation();
</script>
<script type="text/javascript" async src="https://apis.google.com/js/plusone.js"></script>
<script type="text/javascript" async src="https://assets.pinterest.com/js/pinit.js"></script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


</body>
</html>