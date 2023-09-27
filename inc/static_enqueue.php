<?php 
/**
 * Enqueueing Stylesheets
 */
$opt = get_option('sparch');
$font_load = 1;
if ( class_exists('Redux') ) {
    $font_load = !empty( $opt['is_default_font'] ) ? 1 : '';
}
if ( $font_load == 1 ) {
    wp_enqueue_style( 'sparch-fonts' );
}

function sparch_scripts() {
	wp_enqueue_style('sparch-fonts', sparch_fonts_url(), array(), null);
	wp_enqueue_style( 'sparch-style', get_stylesheet_uri(), array(), SPARCH_VERSION );

	wp_enqueue_style( 'mediaelementplayer', SPARCH_CSS.'/mediaelementplayer.css', array( 'sparch-style' ), SPARCH_VERSION );
	wp_enqueue_style( 'fontawesome', SPARCH_CSS.'/all.min.css', array( 'sparch-style' ), SPARCH_VERSION );
	wp_enqueue_style( 'sparch-icon-moon', SPARCH_CSS.'/icon-moon.css', array( 'sparch-style' ), SPARCH_VERSION );

	wp_enqueue_style( 'sparch-style-main', get_theme_file_uri('/assets/css/style.css'), array(), SPARCH_VERSION );

	wp_enqueue_style( 'sparch-extra-style', get_theme_file_uri('/assets/css/sparch-extra-style.css'), array(), SPARCH_VERSION );
    wp_enqueue_style( 'sparch-woocommerce', get_theme_file_uri('/assets/css/woocommerce.css'), array(), SPARCH_VERSION );
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


    $opt = get_option('sparch');

    if ( !empty($opt['mobile_menu_dropdown_bg']) ) {
        $dynamic_css .= "
            @media (max-width: 991px) {
                .navbar .navbar-collapse{
                    background: {$opt['mobile_menu_dropdown_bg']} !important;
                }
            }";
    }

    if ( !empty($opt['mobile_menu_font_color']) ) {
        $dynamic_css .= "
            @media (max-width: 991px) {
                .menu > .nav-item .nav-link, .menu > .nav-item.mega_menu{
                    color: {$opt['mobile_menu_font_color']} !important;
                }
            }";
    }

    if ( !empty($opt['mobile_menu_hover_color']) ) {
        $dynamic_css .= "
            @media (max-width: 991px) {
                .menu > .nav-item.active .nav-link{
                    color: {$opt['mobile_menu_hover_color']} !important;
                }
                .menu > .nav-item.hover .nav-link{
                    color: {$opt['mobile_menu_hover_color']} !important;
                }
            }";
    }


    if ( !empty($opt['mobile_menu_dropdown_color']) ) {
        $dynamic_css .= "
            @media (max-width: 991px) {
                .menu > .nav-item .mobile_dropdown_icon{
                    color: {$opt['mobile_menu_dropdown_color']} !important;
                }
            }";
    }

    if ( !empty($opt['hamburger_menu_icon_color']) ) {
        $dynamic_css .= "
            @media (max-width: 991px) {
                .navbar-toggler span{
                    background: {$opt['hamburger_menu_icon_color']} !important;
                }
            }";
    }

    if ( !empty($opt['hamburger_menu_icon_color_sticky']) ) {
        $dynamic_css .= "
            @media (max-width: 991px) {
                .navbar_fixed .navbar-toggler span{
                    background: {$opt['hamburger_menu_icon_color_sticky']} !important;
                }
            }";
    }




    wp_add_inline_style('sparch-style', $dynamic_css_style);

 // Header bg End
}
add_action( 'wp_enqueue_scripts', 'sparch_scripts' );