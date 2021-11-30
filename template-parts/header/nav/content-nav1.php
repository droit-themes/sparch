<?php 


$layout = sparch_options('sparch_header_format', 'yes');
$menu_layout_class = ($layout == 'no') ? 'container' : 'container-fulid';
?>

<div class="main_menu">
        <div class="<?php  echo esc_attr( $menu_layout_class ); ?>">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <?php sparch_logo(); ?>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                 </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php 
            
                    wp_nav_menu( array(
                            'menu_class' => 'nav navbar-nav ml-auto',
                            'container'  => '',
                            'theme_location' => 'main_menu',
                            'walker'         => new sparch_Navwalker(),
                            'fallback_cb'     => false,
                    ) ); 

                 ?>
                
                </div>
            </nav>
        </div>
    </div>
