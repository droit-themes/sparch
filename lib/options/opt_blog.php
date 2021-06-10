<?php

Redux::set_section('sparch', array(
	'title'     => esc_html__( 'Blog', 'sparch' ),
	'id'        => 'blog_page',
	'icon'      => 'dashicons dashicons-admin-post',
));

// Blog Title Bar
Redux::set_section('sparch', array(
	'title'     => esc_html__( 'Layout', 'sparch' ),
	'id'        => 'blog_titlebar_settings',
	'icon'      => '',
    'subsection' => true,
	'fields'    => array(
    array(
        'id'       => 'sparch_blog_setting',
        'type'     => 'image_select',
        'title'    => __('Blog Layout', 'sparch'), 
        'subtitle' => __('Select your blog Layout', 'sparch'),
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
    array( 
        'id' => 'sparch_read_more_text_button',
        'title'    => __('Read More Button Text', 'sparch'), 
        'type' => 'text',
        'default' => 'Read More'
    ),

    array(
    'id'       => 'sparch_display_blog_share',
    'type'     => 'button_set',
    'title'    => esc_html__('Display Social Share?', 'sparch'),
    'options' => array(
        'yes' => 'Yes', 
        'no' => 'No', 
     ), 
    'default' => 'no'
    ),

	)
));

