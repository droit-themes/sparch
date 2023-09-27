<?php
/**
 * Show the excerpt.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage sparch
 * @since sparch 1.0
 */

 $opt = get_option( 'sparch' );
 $blog_excerpt = isset($opt['blog_excerpt']) ? $opt['blog_excerpt'] : '';
 ?>
<div class="blog_excerpt">
    <?php 
    echo wp_trim_words(get_the_excerpt(), $blog_excerpt);
    ?>
</div>
