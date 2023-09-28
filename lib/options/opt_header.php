<?php
// Header Section
Redux::set_section( 'sparch', array(
    'title'            => esc_html__( 'Header', 'sparch' ),
    'id'               => 'sparch_header_sec',
    'customizer_width' => '400px',
    'icon'             => 'el el-arrow-up',
));


// Logo
Redux::set_section( 'sparch', array(
    'title'            => esc_html__( 'Header Settings', 'sparch' ),
    'id'               => 'sparch_logo_opt',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(
        array(
            'id'       => 'sparch_header_style',
            'type'     => 'select',
            'title'    => esc_html__('Header Style ', 'sparch'),
            'options' => array(
                '1' => esc_html__('Style 1', 'sparch'), 
                'no' => esc_html__('Default', 'sparch'), 
             ), 
            'default' => 'no'
        ),
        array(
            'id'       => 'sparch_header_format',
            'type'     => 'button_set',
            'title'    => esc_html__('Header Format ', 'sparch'),
            'options' => array(
                'yes' => esc_html__('Full Width', 'sparch'), 
                'no' => esc_html__('Default', 'sparch'), 
             ), 
            'default' => 'no'
        ),
        
        array(
            'title'     => esc_html__( 'Upload logo', 'sparch' ),
            'subtitle'  => esc_html__( 'Upload here a image file for your logo', 'sparch' ),
            'id'        => 'sparch_logo',
            'type'      => 'media',
            'default'   => array(
                'url'   => SPARCH_IMAGES.'/default_logo/logo.png'
            )
        ),

        array(
            'title'     => esc_html__( 'Sticky header logo', 'sparch' ),
            'id'        => 'sparch_sticky_logo',
            'type'      => 'media',
            'default'   => array(
                'url'   => SPARCH_IMAGES.'/default_logo/logo_sticky.png'
            )
        ),

        array(
            'title'     => esc_html__( 'Retina Logo', 'sparch' ),
            'subtitle'  => esc_html__( 'The retina logo should be double (2x) of your original logo', 'sparch' ),
            'id'        => 'sparch_retina_logo',
            'type'      => 'media',
        ),

        array(
            'title'     => esc_html__( 'Retina Sticky Logo', 'sparch' ),
            'subtitle'  => esc_html__( 'The retina logo should be double (2x) of your original logo', 'sparch' ),
            'id'        => 'sparch_retina_sticky_logo',
            'type'      => 'media',
        ),

        array(
            'title'     => esc_html__( 'Logo dimensions', 'sparch' ),
            'subtitle'  => esc_html__( 'Set a custom height width for your upload logo.', 'sparch' ),
            'id'        => 'logo_dimensions',
            'type'      => 'dimensions',
            'units'     => array( 'em','px','%' ),
            'output'    => '.logo_info .navbar-brand img'
        ),

        array(
            'title'     => esc_html__( 'Padding', 'sparch' ),
            'subtitle'  => esc_html__( 'Padding around the logo. Input the padding as clockwise (Top Right Bottom Left)', 'sparch' ),
            'id'        => 'logo_padding',
            'type'      => 'spacing',
            'output'    => array( '.logo_info .navbar-brand img' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),
        
    )
) );

Redux::set_section( 'sparch', array(
    'title'            => esc_html__( 'Search Setting', 'sparch' ),
    'id'               => 'sparch_menu_setting',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(
         array(
            'id'       => 'sparch_searchicon_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Search Icon', 'sparch'),
            'options' => array(
                'yes' => esc_html__('Yes', 'sparch'), 
                'no' => esc_html__('No', 'sparch'), 
             ), 
            'default' => 'yes'
        )

    )
));