<?php
// Theme Functions
function wolf_it_after_setup_theme() {

    /*
    * Make theme available for translation.
    * Translations can be filed in the /languages/ directory.
    * If you're building a theme based on wolf_it, use a find and replace
    * to change 'wolf_it' to the name of your theme in all the template files.
    */
	load_theme_textdomain( 'wolf_it', get_template_directory() . '/languages' );

    /*
    * Let WordPress manage the document title.
    * By adding theme support, we declare that this theme does not use a
    * hard-coded <title> tag in the document head, and expect WordPress to
    * provide it for us.
    */
    add_theme_support('title-tag');
    add_theme_support('woocommerce');
    add_theme_support( "wp-block-styles" );
    add_theme_support( "responsive-embeds" );
    add_theme_support( "custom-header");
    add_theme_support( "custom-background");
    add_theme_support( "align-wide" );
    add_theme_support( "register_block_style" );
    add_theme_support( "register_block_pattern" );
    add_editor_style();
    /*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */
    add_theme_support( 'post-thumbnails', array('post', 'page', 'project', 'services','teams'));

    // This theme uses wp_nav_menu() in one location.
    register_nav_menu( 'Primary_Menu', __('Main Menu', 'wolf_it'));

    /*
    * Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.
    */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

    /**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
    add_theme_support( 'custom-logo' );

    // Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

    // Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
    
    }
add_action( 'after_setup_theme', 'wolf_it_after_setup_theme' );

//Post Excerpt
function wolf_it_custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'wolf_it_custom_excerpt_length', 999 );

function wolf_it_excerpt_more( $more ) {
    return ' ...';
}
add_filter( 'excerpt_more', 'wolf_it_excerpt_more' );


// CSS JS Enqueue
function wolf_it_theme_style(){

    // CSS Enqueue
    wp_enqueue_style( 'theme_style', get_stylesheet_uri() );
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/css/all.min.css', array(), '5.15.1', 'all' );
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '5.3.0', 'all' );
    wp_enqueue_style('venobox', get_template_directory_uri().'/css/venobox.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('slick', get_template_directory_uri().'/css/slick.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('animated_barfiller', get_template_directory_uri().'/css/animated_barfiller.css', array(), '1.1.0', 'all' );
    wp_enqueue_style('select2', get_template_directory_uri().'/css/select2.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('animate', get_template_directory_uri().'/css/animate.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('utilities', get_template_directory_uri().'/css/utilities.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('style', get_template_directory_uri().'/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('responsive', get_template_directory_uri().'/css/responsive.css', array(), '1.0.0', 'all' );

    // JS Enqueue
    wp_enqueue_script( 'jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.bundle.min.js', array(), '5.15.1', 'true' );
    wp_enqueue_script('Font-Awesome', get_template_directory_uri().'/js/Font-Awesome.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('venobox', get_template_directory_uri().'/js/venobox.min.js', array(), '5.3.0', 'true' );
    wp_enqueue_script('isotope', get_template_directory_uri().'/js/isotope.pkgd.min.js', array(), '3.0.6', 'true' );
    wp_enqueue_script('slick', get_template_directory_uri().'/js/slick.min.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('marquee', get_template_directory_uri().'/js/jquery.marquee.min.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('animated_barfiller', get_template_directory_uri().'/js/animated_barfiller.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('sticky_sidebar', get_template_directory_uri().'/js/sticky_sidebar.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('select2', get_template_directory_uri().'/js/select2.min.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('waypoints', get_template_directory_uri().'/js/jquery.waypoints.min.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('countup', get_template_directory_uri().'/js/jquery.countup.min.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('wow', get_template_directory_uri().'/js/wow.min.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'true' );
}
add_action('wp_enqueue_scripts', 'wolf_it_theme_style');

