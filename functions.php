<?php
/**
 * sparch functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sparch
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! defined( 'SPARCH_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'SPARCH_VERSION', wp_get_theme()->get( 'Version' ) );
}

if ( ! defined( 'SPARCH_THEMEROOT' ) ) {
	// Replace the version number of the theme on each release.
	define( 'SPARCH_THEMEROOT', get_template_directory_uri());
}

if ( ! defined( 'SPARCH_THEMEROOT_DIR' ) ) {
	// Replace the version number of the theme on each release.
	define( 'SPARCH_THEMEROOT_DIR', get_template_directory());
}

if ( ! defined( 'SPARCH_IMAGES' ) ) {
	// Replace the version number of the theme on each release.
	define( 'SPARCH_IMAGES', SPARCH_THEMEROOT.'/assets/images');
}

if ( ! defined( 'SPARCH_CSS' ) ) {
	// Replace the version number of the theme on each release.
	define( 'SPARCH_CSS', SPARCH_THEMEROOT.'/assets/css');
}

if ( ! defined( 'SPARCH_JS' ) ) {
	// Replace the version number of the theme on each release.
	define( 'SPARCH_JS', SPARCH_THEMEROOT.'/assets/js');
}


if ( ! function_exists( 'sparch_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function sparch_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on sparch, use a find and replace
		 * to change 'sparch' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'sparch', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );


		add_image_size( 'sparch-blog-grid', 350, 350, true ); // Hard Crop Mode
		add_image_size( 'sparch-blog-list', 1110, 380, true ); // Hard Crop Mode

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
		add_theme_support( 'woocommerce' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'main_menu' => esc_html__( 'Main Menu', 'sparch' ),
				'top_menu' => esc_html__( 'Top Menu', 'sparch' ),
			)
		);

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

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'sparch_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'sparch_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sparch_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sparch_content_width', 640 );
}
add_action( 'after_setup_theme', 'sparch_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sparch_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'sparch' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'sparch' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

if(!function_exists('sparch_extention_wp_kses')) {
 
    function sparch_extention_wp_kses ( $data ) {
 
        $allow_html = array(
            'a' => array(
                'href' => array(),
                'title' => array()
            ),
            'p' => array(
                'cite' => array(),
                'title' => array(),
            ),
            'br' => array(),
            'em' => array(),
            'strong' => array(),
            'h1' => array(),
            'h2' => array(),
            'h3' => array(),
            'h4' => array(),
            'h5' => array(),
            'h6' => array(),
            'i' => array(),
            'strong' => array(),
            'code' => array(),
            'li' => array(
                'class' => array(),
            ),
            'ol' => array(
                'class' => array(),
            ),
            'ul' => array(
                'class' => array(),
            ),
            'img' => array(
                'alt'    => array(),
                'class'  => array(),
                'height' => array(),
                'src'    => array(),
                'width'  => array(),
            ),
            'span'   => array()
        );
 
      return  wp_kses($data, $allow_html);
    }
}

add_action( 'widgets_init', 'sparch_widgets_init' );

/**
 * sparch required function init  
 */
require_once SPARCH_THEMEROOT_DIR . '/inc/init.php'; 

/**
 *  sparch options and metabox init 
 */

require_once SPARCH_THEMEROOT_DIR . '/lib/init.php'; 

require_once SPARCH_THEMEROOT_DIR . '/inc/one_click_demo_config.php'; 

