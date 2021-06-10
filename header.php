<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sparch
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<?php
$blog_sidebar = sparch_options('sparch_blog_setting');
$header_format = sparch_options('sparch_header_format');
$sparch_header_contact_no = sparch_options('sparch_header_contact_no');


?>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'sparch' ); ?></a>
	<?php  if ( class_exists( 'ReduxFramework' ) && $header_format =='yes'  ) { 
			$opt = get_option('sparch');
			$logo 				=  isset( $opt['sparch_logo']['url']) ? $opt['sparch_logo']['url'] : get_template_directory_uri().'/assets/images/default_logo/logo.png';
			$logo_sticky 		=  isset( $opt['sparch_sticky_logo']['url']) ? $opt['sparch_sticky_logo']['url'] : get_template_directory_uri().'/assets/images/default_logo/logo.png';
			$logo_ratina 		=  isset( $opt['sparch_retina_logo']['url']) ? $opt['sparch_retina_logo']['url'] : get_template_directory_uri().'/assets/images/default_logo/logo_2x.png';
			$logo_ratina_sticky =  isset( $opt['sparch_retina_sticky_logo']['url']) ? $opt['sparch_retina_sticky_logo']['url'] : get_template_directory_uri().'/assets/images/default_logo/logo_2x.png';
			$set_white_logo    = function_exists( 'get_field' ) ? get_field( 'set_white_logo' ) : '';
			
			$logo_srcset         = !empty($logo_ratina) ?  "srcset='$logo_ratina 2x'" : '';
			$logo_sticky_srcset  = !empty($logo_ratina_sticky) ?  "srcset='$logo_ratina_sticky 2x'" : '';
	?>
		<header class="header_area menu_dark fullwidth <?php if($set_white_logo =='white'){ echo 'dl_sp_navbar_white'; } ?>">
		<div class="main_menu">
			<a class="extra_logo" href="<?php echo esc_url(get_home_url()); ?>"><img src="<?php echo esc_url($logo); ?>" <?php echo sparch_extention_wp_kses($logo_srcset); ?> alt="<?php bloginfo('name'); ?>" /></a>
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="<?php echo esc_url(get_home_url()); ?>">
					<img src="<?php  echo esc_url($logo_sticky); ?>" <?php echo sparch_extention_wp_kses($logo_sticky_srcset); ?>  alt="<?php bloginfo('name'); ?>" /></a>

					<?php if(!empty( $sparch_header_contact_no )): ?>
					<a class="number" href="tel:<?php echo esc_html__($sparch_header_contact_no,'sparch'); ?>"><?php echo esc_html__($sparch_header_contact_no,'sparch'); ?></a>
					<?php endif; ?>
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">

					<?php 
						wp_nav_menu( array(
								'menu_class' => 'nav navbar-nav ml-auto',
								'container'  => '',
								'theme_location' => 'primary',
								'depth' 		 => 3,
								'walker'         => new sparch_Navwalker_Full(),
								'fallback_cb'    => false,
						) ); 

					?>
					</div>
				</nav>
			</div>
		</div>
	</header>
	<?php }else{ ?>
		<header id="masthead" class="site-header sticky_nav">
        	<?php  get_template_part( 'template-parts/header/nav/content',  'nav'); ?>
		</header><!-- #masthead -->
	<?php } ?>



