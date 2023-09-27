<?php
// page Title Bar
Redux::set_section('sparch', array(
	'title'     => esc_html__( 'Footer', 'sparch' ),
	'id'        => 'sparch_footer',
	'icon'      => 'dashicons dashicons-admin-post',
	'fields'    => array(

        array(
            'id'       => 'is_defult_footer',
            'type'     => 'button_set',
            'title'    => esc_html__('Use Defult footer', 'sparch'),
            'options' => array(
                'yes' => esc_html__('Yes', 'sparch'), 
                'no' => esc_html__('No', 'sparch'), 
             ), 
            'default' => 'yes'
        ),

        array(
            'title'     => esc_html__('Copyright Text', 'sparch'),
            'id'        => 'sparch_copyright_txt',
            'type'      => 'editor',
            'default'   => 'Copyright &copy; 2023 <a href="#">DroitThemes</a> | All rights reserved',
            'args'    => array(
                'wpautop'       => true,
                'media_buttons' => false,
                'textarea_rows' => 10,
                'teeny'         => false,
            ),
            'required'  => array( 'is_defult_footer', '=', 'yes' )
        ),
        array(
            'title'     => esc_html__( 'Background Color', 'sparch' ),
            'id'        => 'footer_bg_color',
            'type'      => 'color',
            'mode'      => 'background',
            'output'    => array( '.site-footer' ),
            'required'  => array( 'is_defult_footer', '=', 'yes' )
        ),
        array(
            'title'     => esc_html__( 'Footer Background', 'sparch' ),
            'id'        => 'sparch_footer_background',
            'type'      => 'media',
            'default'   => array(
                'url'=> SPARCH_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
            'required'  => array( 'is_defult_footer', '=', 'yes' )
        ),
        array(
            'id'          => 'footer_typo',
            'type'        => 'typography',
            'title'       => __('Typography', 'sparch'),
            'google'      => true,
            'font-backup' => true,
            'color'       => false,
            'output'      => array('.site-footer .site-info'),
            'units'       => 'px',
            'required'  => array( 'is_defult_footer', '=', 'yes' )
        ),
        array(
            'title'     => esc_html__( 'Font color', 'sparch' ),
            'id'        => 'footer_font_color',
            'type'      => 'color',
            'output'    => array( '.site-footer .site-info' ),
            'required'  => array( 'is_defult_footer', '=', 'yes' )
        ),
        array(
            'title'     => esc_html__( 'Font Link color', 'sparch' ),
            'id'        => 'footer_link_font_color',
            'type'      => 'color',
            'output'    => array( '.site-footer .site-info a' ),
            'required'  => array( 'is_defult_footer', '=', 'yes' )
        ),
        array(
            'title'     => esc_html__( 'Footer padding', 'sparch' ),
            'subtitle'  => esc_html__( 'Padding around the menu action button.', 'sparch' ),
            'id'        => 'footer_padding',
            'type'      => 'spacing',
            'output'    => array( '.site-footer' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
            'required'  => array( 'is_menu_btn', '=', 'yes' ),
            'required'  => array( 'is_defult_footer', '=', 'yes' )
        ),
	)
));

