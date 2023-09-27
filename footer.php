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


$footer_url = sparch_options('sparch_footer_background');
$is_defult_footer = sparch_options('is_defult_footer');


if($footer_url && !empty($footer_url['url'])) {
    $footer_background_url = $footer_url['url'];
}

if(!class_exists('Redux')){
  $footer_background_url = '';
}

$footer_style = new WP_Query(array(
	'post_type' => 'footer',
));




if ( $is_defult_footer !== 'yes' && $footer_style->have_posts()) {
	while ($footer_style->have_posts()) : $footer_style->the_post();
		the_content();
	endwhile;
}else{ ?>
	<footer id="colophon" class="site-footer" <?php if(!empty($footer_background_url)): ?> data-bg-img="<?php echo esc_url($footer_background_url); ?>" <?php endif; ?>>
		<?php 
			if (is_active_sidebar('footer_widgets')):
		?>
			<div class="container custom_container">
				<div class="row justify-content-between">
					<?php dynamic_sidebar( 'footer_widgets' ); ?> 
				</div>
			</div>
		<?php endif; ?>
	
		<div class="site-info container">
			<?php echo wp_kses_post($footer_text); ?>
		</div><!-- .site-info -->
	</footer>

	<?php } ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
