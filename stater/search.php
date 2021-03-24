<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package _themename
 */

get_header();


$blog_sidebar = _themename_options('_themename_blog_setting');


?>

	<main id="primary" class="site-main">
		<?php
			get_template_part('template-parts/banner/banner', 'search');

			_themename_wrapper_start( $blog_sidebar );
	  
          if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/blog/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );

			endwhile;

			_themename_pagination();


		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;

		_themename_wrapper_end($blog_sidebar);
		
		?>
	
	</main><!-- #main -->

<?php
get_footer();
