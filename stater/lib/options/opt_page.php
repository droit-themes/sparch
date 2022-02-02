<?php
// Header Section
Redux::set_section( '_themename', array(
    'title'            => esc_html__( 'Page', '_themename' ),
    'id'               => '_themename_page_sec',
    'customizer_width' => '400px',
    'icon'             => 'el el-adjust-alt',
));

// color 

Redux::set_section( '_themename', array(
    'title'            => esc_html__( 'Layout', '_themename' ),
    'id'               => '_themename_page_opt',
    'subsection'       => true,
    'icon'             => 'el el-cogs',
    'fields'           => array(
      
        array(
            'id'       => '_themename_page_setting',
            'type'     => 'image_select',
            'title'    => __('Page Layout', '_themename'), 
            'subtitle' => __('Select your Page Layout', '_themename'),
            'options'  => array(
                'full'      => array(
                    'alt'   => '1 Column', 
                    'img'   => ReduxFramework::$_url.'assets/img/1col.png'
                ),
                'left'      => array(
                    'alt'   => '2 Column Left', 
                    'img'   => ReduxFramework::$_url.'assets/img/2cl.png'
                ),
                'right'      => array(
                    'alt'   => '2 Column Right', 
                    'img'  => ReduxFramework::$_url.'assets/img/2cr.png'
                ),
            ),
            'default' => 'right'
        ),
    )
) );