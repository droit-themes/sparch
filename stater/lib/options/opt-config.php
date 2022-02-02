<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $opt_name = '_themename';

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
        'menu_title'           => esc_html__( '_themename Options', '_themename' ),
        'customizer'           => true,
		'dev_mode'             => 'true'
    );

    Redux::setArgs( $opt_name, $args );

	require _THEMENAME_THEMEROOT_DIR . '/lib/options/opt_header.php';
	require _THEMENAME_THEMEROOT_DIR . '/lib/options/opt_banner.php';
	require _THEMENAME_THEMEROOT_DIR . '/lib/options/opt_banner_search.php';
	require _THEMENAME_THEMEROOT_DIR . '/lib/options/opt_banner_404.php';
	require _THEMENAME_THEMEROOT_DIR . '/lib/options/opt_blog.php';
	require _THEMENAME_THEMEROOT_DIR . '/lib/options/opt_page.php';
	require _THEMENAME_THEMEROOT_DIR . '/lib/options/opt_style.php';
	require _THEMENAME_THEMEROOT_DIR . '/lib/options/opt_footer.php';
