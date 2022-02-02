<?php 
/**
 * Enqueue scripts and styles.
 */
function _themename_scripts() {

	wp_enqueue_style( '_themename-style', get_stylesheet_uri(), array(), _THEMENAME_VERSION );
	wp_style_add_data( '_themename-style', 'rtl', 'replace' );

	wp_enqueue_style( 'Reggae', 'https://fonts.googleapis.com/css2?family=Reggae+One&display=swap', array( '_themename-style' ), _THEMENAME_VERSION );
	wp_enqueue_style( 'mediaelementplayer', _THEMENAME_CSS.'/mediaelementplayer.css', array( '_themename-style' ), _THEMENAME_VERSION );
	wp_enqueue_style( 'fontawesome', _THEMENAME_CSS.'/all.min.css', array( '_themename-style' ), _THEMENAME_VERSION );
	wp_enqueue_style( '_themename-icon-moon', _THEMENAME_CSS.'/icon-moon.css', array( '_themename-style' ), _THEMENAME_VERSION );

	wp_enqueue_style( '_themename-style-main', get_theme_file_uri('/assets/css/style.css'), array(), _THEMENAME_VERSION );

   //  Enqueue script   
	wp_enqueue_script( 'mediaelement-and-player', _THEMENAME_JS. '/mediaelement-and-player.min.js', array('jquery'), _THEMENAME_VERSION, true );
	wp_enqueue_script( 'parallaxie', _THEMENAME_JS. '/parallaxie.js', array('jquery'), _THEMENAME_VERSION, true );
	wp_enqueue_script( '_themename-navigation', _THEMENAME_JS . '/navigation.js', array(), _THEMENAME_VERSION, true );
	wp_enqueue_script( '_themename-main', _THEMENAME_JS . '/main.js', array('jquery'), _THEMENAME_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_themename_scripts' );