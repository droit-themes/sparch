<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $opt_name = 'sparch';

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
        'menu_title'           => esc_html__( 'Sparch Options', 'sparch' ),
        'customizer'           => true,
		'dev_mode'             => false,
    );

    Redux::setArgs( $opt_name, $args );

	require SPARCH_THEMEROOT_DIR . '/lib/options/opt_header.php';
    require SPARCH_THEMEROOT_DIR . '/lib/options/opt_menu.php';
	// require SPARCH_THEMEROOT_DIR . '/lib/options/opt_banner.php';
	// require SPARCH_THEMEROOT_DIR . '/lib/options/opt_banner_search.php';
	// require SPARCH_THEMEROOT_DIR . '/lib/options/opt_banner_404.php';
	require SPARCH_THEMEROOT_DIR . '/lib/options/opt_blog.php';
    require SPARCH_THEMEROOT_DIR . '/lib/options/opt_page.php';
    require SPARCH_THEMEROOT_DIR . '/lib/options/opt_404.php';
	require SPARCH_THEMEROOT_DIR . '/lib/options/opt_shop_page.php';
    require SPARCH_THEMEROOT_DIR . '/lib/options/opt_typo.php';
	require SPARCH_THEMEROOT_DIR . '/lib/options/opt_style.php';
	require SPARCH_THEMEROOT_DIR . '/lib/options/opt_footer.php';
