<?php
/**
 * nightingale-retribution functions and definitions
 *
 * @package nightingale-retribution
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'ng_ret_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ng_ret_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on nightingale-retribution, use a find and replace
	 * to change 'ng-ret' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'ng-ret', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'ng-ret' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'ng_ret_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // ng_ret_setup
add_action( 'after_setup_theme', 'ng_ret_setup' );

remove_filter('the_content', 'wpautop');

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function ng_ret_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'ng-ret' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'ng_ret_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ng_ret_scripts() {
	wp_enqueue_style( 'ng-ret-style', get_stylesheet_uri() );

	wp_enqueue_script( 'ng-ret-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '20120206', true );

	wp_enqueue_script( 'ng-ret-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'ng-ret-imagelightbox', get_template_directory_uri() . '/js/imagelightbox.js', array(), '20140206', true );

	wp_enqueue_script( 'ng-ret-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ng_ret_scripts' );


/** GET RID OF DEM P TAGS YO **/
function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);

}


/*function filter_ptags_on_links($content){
   printf("<p>WHAT??</p>");
   //return preg_replace('/<p>\s*(<a .*>)?\s*(<\/a>)?\s*<\/p>/iU', '\1\2', $content);
}*/

add_filter('the_content', 'filter_ptags_on_images');
/*add_filter('the_content', 'filter_ptags_on_links');*/



function filter_ptags($content){
	return preg_replace('/<p[^>]*>[\s|&nbsp;]*<\/p>/','XYZ123', $content);

}

add_filter('the_content','filter_ptags');


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
