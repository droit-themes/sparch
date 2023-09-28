<?php 
$layout = sparch_options('sparch_header_format', 'yes');
$menu_layout_class = ($layout == 'no') ? 'container' : 'container-fulid';
$sparch_menu_layout = sparch_options('sparch_menu_layout', 'center'); 
?>

<nav class="navbar navbar-expand-lg menu_one">
    <div class="<?php  echo esc_attr( $menu_layout_class ); ?>">
        <?php sparch_logo(); ?>
        <div class="collapse navbar-collapse <?php if($sparch_menu_layout == 'center'){echo "justify-content-center";}elseif($sparch_menu_layout == 'start'){echo "justify-content-start";}else{echo "justify-content-end";} ?>" id="navbarSupportedContent">

            <?php 
                wp_nav_menu( array(
                        'menu_class' => 'navbar-nav menu ms-lg-auto',
                        'container'  => '',
                        'theme_location' => 'main_menu',
                        'walker'         => new sparch_Navwalker(),
                        'fallback_cb'     => false,
                ) );
            ?>
        </div>
        <?php get_template_part( 'template-parts/header/nav/content-nav', 'serch'); ?>
    </div>
</nav>