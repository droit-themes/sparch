<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sparch
 */
$footer_text = sparch_options('sparch_copyright_txt', 'Copyright &copy; 2021 <a href="#">DroitThemes</a> | All rights reserved');

$footer_style = new WP_Query(array(
	'post_type' => 'footer',
));
if ($footer_style->have_posts()) {
	while ($footer_style->have_posts()) : $footer_style->the_post();
		the_content();
	endwhile;
}else{ ?>
	<footer id="colophon" class="site-footer">
		<div class="site-info container">
			<?php echo sparch_kses($footer_text); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

	<?php } ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
