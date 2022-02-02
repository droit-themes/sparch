<?php
// Header Section
Redux::set_section( '_themename', array(
    'title'            => esc_html__( 'Header', '_themename' ),
    'id'               => '_themename_header_sec',
    'customizer_width' => '400px',
    'icon'             => 'el el-arrow-up',
));


// Logo
Redux::set_section( '_themename', array(
    'title'            => esc_html__( 'Logo', '_themename' ),
    'id'               => '_themename_logo_opt',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(
        array(
            'title'     => esc_html__( 'Upload logo', '_themename' ),
            'subtitle'  => esc_html__( 'Upload here a image file for your logo', '_themename' ),
            'id'        => '_themename_logo',
            'type'      => 'media',
            'default'   => array(
                'url'   => _THEMENAME_IMAGES.'/default_logo/logo.png'
            )
        ),

        array(
            'title'     => esc_html__( 'Sticky header logo', '_themename' ),
            'id'        => '_themename_sticky_logo',
            'type'      => 'media',
            'default'   => array(
                'url'   => _THEMENAME_IMAGES.'/default_logo/logo_sticky.png'
            )
        ),

        array(
            'title'     => esc_html__( 'Retina Logo', '_themename' ),
            'subtitle'  => esc_html__( 'The retina logo should be double (2x) of your original logo', '_themename' ),
            'id'        => '_themename_retina_logo',
            'type'      => 'media',
        ),

        array(
            'title'     => esc_html__( 'Retina Sticky Logo', '_themename' ),
            'subtitle'  => esc_html__( 'The retina logo should be double (2x) of your original logo', '_themename' ),
            'id'        => '_themename_retina_sticky_logo',
            'type'      => 'media',
        ),

        array(
            'title'     => esc_html__( 'Logo dimensions', '_themename' ),
            'subtitle'  => esc_html__( 'Set a custom height width for your upload logo.', '_themename' ),
            'id'        => 'logo_dimensions',
            'type'      => 'dimensions',
            'units'     => array( 'em','px','%' ),
            'output'    => '.logo_info .navbar-brand img'
        ),

        array(
            'title'     => esc_html__( 'Padding', '_themename' ),
            'subtitle'  => esc_html__( 'Padding around the logo. Input the padding as clockwise (Top Right Bottom Left)', '_themename' ),
            'id'        => 'logo_padding',
            'type'      => 'spacing',
            'output'    => array( '.logo_info .navbar-brand img' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),
    )
) );

Redux::set_section( '_themename', array(
    'title'            => esc_html__( 'Menu Setting', '_themename' ),
    'id'               => '_themename_menu_setting',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(
         array(
            'id'       => '_themename_searchicon_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Search Icon', '_themename'),
            'options' => array(
                'yes' => esc_html__('Yes', '_themename'), 
                'no' => esc_html__('No', '_themename'), 
             ), 
            'default' => 'yes'
        )

    )
));