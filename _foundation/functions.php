<?php
/**
 * _foundation functions and definitions
 *
 * @package _foundation
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( '_foundation_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function _foundation_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on _foundation, use a find and replace
	 * to change '_foundation' to the name of your theme in all the template files
	 */
	load_theme_textdomain( '_foundation', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', '_foundation' ),
		'footer1' => __( 'Footer Menu 1', '_foundation' ),
		'footer2' => __( 'Footer Menu 2', '_foundation' ),
		'footer3' => __( 'Footer Menu 3', '_foundation' ),
		'footer4' => __( 'Footer Menu 4', '_foundation' ),
		'footer5' => __( 'Footer Menu 5', '_foundation' ),
		'footer6' => __( 'Footer Menu 6', '_foundation' ),
		'footer_mobile1' => __( 'Footer Mobile 1', '_foundation' ),
		'footer_mobile2' => __( 'Footer Mobile 2', '_foundation' ),
		'footer_mobile3' => __( 'Footer Mobile 3', '_foundation' ),
		'footer_mobile4' => __( 'Footer Mobile 4', '_foundation' ),
		'footer_mobile5' => __( 'Footer Mobile 5', '_foundation' ),
		'footer_mobile6' => __( 'Footer Mobile 6', '_foundation' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( '_foundation_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // _foundation_setup
add_action( 'after_setup_theme', '_foundation_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function _foundation_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', '_foundation' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'Top Cart', '_foundation' ),
		'id'            => 'top-cart',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'Search', '_foundation' ),
		'id'            => 'search',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', '_foundation_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function _foundation_scripts() {
	wp_enqueue_style( '_foundation-style', get_stylesheet_uri() );
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/foundation.min.css' );
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css' );
	
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', array('jquery'), '20130924', false );

	wp_enqueue_script( '_foundation-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	
	wp_enqueue_script( '_foundation-foundation', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '5', true );

	wp_enqueue_script( '_foundation-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	
	wp_enqueue_script( 'unslider', get_template_directory_uri() . '/js/unslider.min.js', array(), '20131015', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( '_foundation-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', '_foundation_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
