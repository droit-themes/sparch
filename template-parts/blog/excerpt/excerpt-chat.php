<?php
/**
 * Show the appropriate content for the Chat post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage sparch
 * @since sparch
 */

// If there are paragraph blocks, print up to two.
// Otherwise this is legacy content, so print the excerpt.
if ( has_block( 'core/paragraph', get_the_content() ) ) {

    sparch_print_first_instance_of_block( 'core/paragraph', get_the_content(), 2 );
    
} else {

	the_excerpt();
}
