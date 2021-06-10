<?php 


require SPARCH_THEMEROOT_DIR . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require SPARCH_THEMEROOT_DIR . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require SPARCH_THEMEROOT_DIR . '/inc/template-functions.php';
/**
 * Sparch helper 
 */
require SPARCH_THEMEROOT_DIR . '/inc/helper.php';

/**
 * Sparch comment area
*/
require SPARCH_THEMEROOT_DIR.'/inc/classes/comment_walker.php';
/**
 * Sparch nav walker
*/
require SPARCH_THEMEROOT_DIR.'/inc/classes/main-nav-walker.php';
/**
 * Customizer additions.
 */
require SPARCH_THEMEROOT_DIR . '/inc/customizer.php';

/**
 * Sparch Enqueue 
 */

require SPARCH_THEMEROOT_DIR . '/inc/static_enqueue.php';

/**
 * Sparch Admin Enqueue 
 */

require SPARCH_THEMEROOT_DIR . '/inc/admin_enqueue.php';


/**
 * Sparch breadcrumbs
 */

require SPARCH_THEMEROOT_DIR . '/inc/breadcrumbs.php';

/**
 * Sparch Tgm
 */
require SPARCH_THEMEROOT_DIR . '/inc/plugin_activation.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require SPARCH_THEMEROOT_DIR . '/inc/jetpack.php';
}
