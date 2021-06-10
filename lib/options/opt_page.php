<?php
// Header Section
Redux::set_section( 'sparch', array(
    'title'            => esc_html__( 'Page', 'sparch' ),
    'id'               => 'sparch_page_sec',
    'customizer_width' => '400px',
    'icon'             => 'el el-adjust-alt',
));

// color 

Redux::set_section( 'sparch', array(
    'title'            => esc_html__( 'Layout', 'sparch' ),
    'id'               => 'sparch_page_opt',
    'subsection'       => true,
    'icon'             => 'el el-cogs',
    'fields'           => array(
      
        array(
            'id'       => 'sparch_page_setting',
            'type'     => 'image_select',
            'title'    => __('Page Layout', 'sparch'), 
            'subtitle' => __('Select your Page Layout', 'sparch'),
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