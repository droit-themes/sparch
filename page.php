<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sparch
 */

get_header();


$page_sidebar = sparch_options('sparch_page_setting');


?>

	<main id="primary" class="site-main">

		<?php get_template_part('template-parts/banner/banner', 'page');

	    sparch_wrapper_start( $page_sidebar  );

		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		sparch_wrapper_end( $page_sidebar );
		?>
	</main><!-- #main -->

<?php
get_footer();
