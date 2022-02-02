<?php

Redux::set_section('_themename', array(
	'title'     => esc_html__( 'Blog', '_themename' ),
	'id'        => 'blog_page',
	'icon'      => 'dashicons dashicons-admin-post',
));

// Blog Title Bar
Redux::set_section('_themename', array(
	'title'     => esc_html__( 'Layout', '_themename' ),
	'id'        => 'blog_titlebar_settings',
	'icon'      => '',
    'subsection' => true,
	'fields'    => array(
    array(
        'id'       => '_themename_blog_setting',
        'type'     => 'image_select',
        'title'    => __('Blog Layout', '_themename'), 
        'subtitle' => __('Select your blog Layout', '_themename'),
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
        'id' => '_themename_read_more_text_button',
        'title'    => __('Read More Button Text', '_themename'), 
        'type' => 'text',
        'default' => 'Read More'
    ),

    array(
    'id'       => '_themename_display_blog_share',
    'type'     => 'button_set',
    'title'    => esc_html__('Display Social Share?', '_themename'),
    'options' => array(
        'yes' => 'Yes', 
        'no' => 'No', 
     ), 
    'default' => 'no'
    ),

	)
));

