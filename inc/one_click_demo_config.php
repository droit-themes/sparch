<?php
// OneClick Demo Importer

add_filter( 'pt-ocdi/import_files', 'sparch_import_files' );
function sparch_import_files() {
    return array(

        array(
            'import_file_name'             => esc_html__('All Demos', 'sparch'),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demos/contents.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demos/widgets.wie',
            'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ).'inc/demos/screenshot.png',
            'import_notice'                => 'All Page Demos',
            'preview_url'                  => 'http://preview.droitthemes.net/wp/sparch/',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demos/settings.json',
                    'option_name' => 'sparch',
                ),
            ),
        ),

    );
}

function sparch_after_import_setup( $selected_import ) {
   
    if ( class_exists( 'RevSlider' ) ) {
        $slider = new RevSlider();
        $hosting_slider = get_template_directory()."/inc/demos/slider-one.zip";
        $slider->importSliderFromPost( true, true, $hosting_slider );
    }
   
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'main_menu' => $main_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home Light' );
    $blog_page_id  = get_page_by_title( 'Blog Page' );

    // Disable Elementor's Default Colors and Default Fonts
    update_option( 'elementor_disable_color_schemes', 'yes' );
    update_option( 'elementor_disable_typography_schemes', 'yes' );
    update_option( 'elementor_global_image_lightbox', 'yes' );

    // Set the home page and blog page
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'sparch_after_import_setup' );