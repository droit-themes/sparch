<?php 
/**
 * Enqueue scripts and styles.
 */

function sparch_fonts_url() {
    $fonts_url = '';
    $fonts     = array();
    $subsets   = '';

    /* Body font */
    if ( 'off' !== 'on' ) {
        $fonts[] = "Poppins:200,300,400,500,600,700,800,900";
    }

    $is_ssl = is_ssl() ? 'https' : 'http';

    if ( $fonts ) {
        $fonts_url = add_query_arg( array(
            'family' => urlencode( implode( '|', $fonts ) ),
            'subset' => urlencode( $subsets ),
        ), "$is_ssl://fonts.googleapis.com/css" );
    }

    return $fonts_url;
}


function sparch_scripts() {
	wp_enqueue_style('sparchfonts', sparch_fonts_url(), array(), null);
	wp_enqueue_style( 'sparch-style', get_stylesheet_uri(), array(), SPARCH_VERSION );

	wp_enqueue_style( 'mediaelementplayer', SPARCH_CSS.'/mediaelementplayer.css', array( 'sparch-style' ), SPARCH_VERSION );
	wp_enqueue_style( 'fontawesome', SPARCH_CSS.'/all.min.css', array( 'sparch-style' ), SPARCH_VERSION );
	wp_enqueue_style( 'sparch-icon-moon', SPARCH_CSS.'/icon-moon.css', array( 'sparch-style' ), SPARCH_VERSION );

	wp_enqueue_style( 'sparch-style-main', get_theme_file_uri('/assets/css/style.css'), array(), SPARCH_VERSION );

	wp_enqueue_style( 'sparch-extra-style', get_theme_file_uri('/assets/css/sparch-extra-style.css'), array(), SPARCH_VERSION );
    wp_enqueue_style( 'sparch-extra-responsive', get_theme_file_uri('/assets/css/responsive.css'), array(), SPARCH_VERSION );
   
    wp_enqueue_style( 'splitting', get_theme_file_uri('/assets/css/splitting.css'), array(), SPARCH_VERSION );
    wp_enqueue_style( 'magnific-popup', get_theme_file_uri('/assets/css/magnific-popup.css'), array(), SPARCH_VERSION );

   //  Enqueue script   
	wp_enqueue_script( 'mediaelement-and-player', SPARCH_JS. '/mediaelement-and-player.min.js', array('jquery'), SPARCH_VERSION, true );

    wp_enqueue_script( 'splitting', SPARCH_JS. '/splitting/splitting.min.js', array('jquery'), SPARCH_VERSION, true );
    wp_enqueue_script( 'popper', SPARCH_JS . '/popper.min.js', array('jquery'), SPARCH_VERSION, true );

	wp_enqueue_script( 'parallaxie', SPARCH_JS. '/parallaxie.js', array('jquery'), SPARCH_VERSION, true );
	wp_enqueue_script( 'magnific-popup', SPARCH_JS . '/jquery.magnific-popup.min.js', array('jquery'), SPARCH_VERSION, true );
	wp_enqueue_script( 'sparch-main', SPARCH_JS . '/main.js', array('jquery'), SPARCH_VERSION, true );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


    // Custome Header Option
    $dynamic_css_style = '';
    if(function_exists( 'get_field' )) {
        $menu_font_color    = function_exists( 'get_field' ) ? get_field( 'menu_color' ) : '';
        $menu_font_color_sticky    = function_exists( 'get_field' ) ? get_field( 'menu_color_sticky' ) : '';
        if ( $menu_font_color ) {
            $dynamic_css_style .= "
            .menu_dark .main_menu .navbar .nav.navbar-nav > li > a, .menu_dark .main_menu .navbar .number{
                color: $menu_font_color  !important;
            }";

            $dynamic_css_style .= "
            .header_area.navbar_fixed .main_menu .navbar .nav.navbar-nav > li > a{
                color: $menu_font_color_sticky  !important;
            }";
            
        }
    }

    wp_add_inline_style('sparch-style', $dynamic_css_style);

 // Header bg End
}
add_action( 'wp_enqueue_scripts', 'sparch_scripts' );