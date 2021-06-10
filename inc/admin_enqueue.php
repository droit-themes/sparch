<?php 
/**
 * Sparch admin Enqueue 
 */

add_action( 'admin_enqueue_scripts', 'sparch_admin_enqueues');

function sparch_admin_enqueues() {
  
    if(function_exists('get_current_screen')){
    
        $screen = get_current_screen(); 
        
        if($screen->base == 'toplevel_page_sparch_options') {
            wp_enqueue_style( 'sparch-redux-style', SPARCH_CSS.'/redux-style.css' );
            wp_enqueue_style( 'sparch-sofiapro', SPARCH_CSS.'/sofiapro.css' );
        }
    }
    
}
