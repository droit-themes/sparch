<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _themename
 */
$footer_text = _themename_options('_themename_copyright_txt', 'Copyright &copy; 2021 <a href="#">DroitThemes</a> | All rights reserved');

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info container">
			<?php echo _themename_kses($footer_text); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
