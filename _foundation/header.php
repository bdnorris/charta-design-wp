<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _foundation
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header row" role="banner">
		<div class="site-branding small-12 large-6 columns">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ChartaDesign2x.png" class="site-title" alt="<?php bloginfo( 'name' ); ?>">
			</a>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>
		<div class="small-12 large-2 hide-for-small columns"></div>
        <div class="small-12 large-4 columns">
			<div class="social">
				<a class="facebookIcon"></a>
				<a class="twitterIcon"></a>
				<a class="pinterestIcon"></a>
			</div>
			<div class="row">
				<div class="small-12 large-5 columns cartLinks">
					<a href="<?php echo get_page_link(157); ?>" class="">Shopping Cart</a>
				</div>
				<div class="small-12 large-7 columns">
					<?php get_sidebar( 'search' ); ?>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
	
	<div class="row" id="navWrap">
       
        <nav id="site-navigation" class="main-navigation small-12 columns" role="navigation">
    
                <h1 class="menu-toggle"><?php _e( 'Menu', '_foundation' ); ?> <span class="entypo-menu"></span></h1>
                <div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', '_foundation' ); ?>"><?php _e( 'Skip to content', '_foundation' ); ?></a></div>
    
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    	
			
			
        </nav><!-- #site-navigation -->
     
    </div>

	<div id="content" class="site-content">
