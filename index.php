<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sparch
 */

get_header();

$blog_sidebar = sparch_options('sparch_blog_setting');

$opt = get_option( 'sparch' );
$defult_blog_format = isset($opt['defult_blog_format']) ? $opt['defult_blog_format'] : '';

?>

	<main id="primary" class="site-main">

	<?php get_template_part('template-parts/banner/banner', 'blog'); 

	sparch_wrapper_start($blog_sidebar);

		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;
			
			if($defult_blog_format =='off'){
				/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/blog/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
					endwhile;
				}else{ ?>
				<div class="_skin_2 dl_row  page type-page status-publish hentry">
				<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/blog/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'grid' ) );
					endwhile;
				echo '</div>';
	
				}
				
			sparch_pagination();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		sparch_wrapper_end( $blog_sidebar );
		 ?>
		 
	</main><!-- #main -->

<?php

get_footer();
