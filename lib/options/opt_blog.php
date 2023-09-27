<?php
// Blog Title Bar
Redux::set_section('sparch', array(
	'title'     => esc_html__( 'Blog Layout', 'sparch' ),
	'id'        => 'blog_titlebar_settings',
	'icon'      => 'dashicons dashicons-admin-post',
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
        'title'     => esc_html__( 'Blog Format', 'sparch' ),
        'id'        => 'defult_blog_format',
        'type'      => 'switch',
        'on'        => esc_html__( 'Grid Style', 'sparch' ),
        'off'       => esc_html__( 'List Style', 'sparch' ),
        'default'   => 'off',
    ),
    
    array( 
        'id' => 'read_more_btn',
        'title'    => __('Read More Button Text', 'sparch'), 
        'type' => 'text',
        'default' => 'Read More'
    ),

    ///
    array(
        'title'     => esc_html__( 'Post title length', 'sparch' ),
        'subtitle'  => esc_html__( 'Blog post title length in Description', 'sparch' ),
        'id'        => 'post_title_length',
        'type'      => 'slider',
        'default'   => 10,
        "min"       => 10,
        "step"      => 1,
        "max"       => 500,
        'display_value' => 'text',
    ),

    array(
        'title'     => esc_html__( 'Post word excerpt', 'sparch' ),
        'subtitle'  => esc_html__( 'If post excerpt is empty, the excerpt content will take from the post content. Define here how much word you want to show along with the each posts in the blog page.', 'sparch' ),
        'id'        => 'blog_excerpt',
        'type'      => 'slider',
        'default'   => 40,
        "min"       => 1,
        "step"      => 1,
        "max"       => 500,
        'display_value' => 'text'
    ),

    array(
        'title'     => esc_html__( 'Post author', 'sparch' ),
        'id'        => 'is_post_author',
        'type'      => 'switch',
        'on'        => esc_html__( 'Show', 'sparch' ),
        'off'       => esc_html__( 'Hide', 'sparch' ),
        'default'   => 'Show',
    ),

    array(
        'title'     => esc_html__( 'Post date', 'sparch' ),
        'id'        => 'is_post_date',
        'type'      => 'switch',
        'on'        => esc_html__( 'Show', 'sparch' ),
        'off'       => esc_html__( 'Hide', 'sparch' ),
        'default'   => 'Show',
    ),

    ///

	)
));



/*** Headers Typography ***/
Redux::set_section( 'sparch', array(
    'title'            => esc_html__( 'Blog Single', 'sparch' ),
    'id'               => 'blog_single_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(
        array(
            'id'       => 'sparch_display_blog_single_tags',
            'type'     => 'button_set',
            'title'    => esc_html__('Display Post Tags', 'sparch'),
            'options' => array(
                'yes' => 'Yes', 
                'no' => 'No', 
             ), 
            'default' => 'no'
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

        array( 
            'id' => 'sparch_social_title_text',
            'title'    => __('Shared Title', 'sparch'), 
            'type' => 'text',
            'default' => 'Shared'
        ),

        array(
            'id'       => 'is_social_share_links',
            'type'     => 'checkbox',
            'title'    => __('Checked Share Links', 'sparch'),
            'options'  => array(
                'facebook' => __('Facebook', 'sparch'),
                'twitter'  => __('Twitter', 'sparch'),
                'pinterest'=> __('Pinterest', 'sparch'),
                'linkedin' => __('Linkedin', 'sparch')
            ),
            'default' => array(
                'facebook'  => '1', 
                'twitter'   => '1', 
                'pinterest' => '0',
                'linkedin' => '1'
            ),
        ),

        array(
            'id'       => 'sparch_display_blog_author',
            'type'     => 'button_set',
            'title'    => esc_html__('Display Author Section', 'sparch'),
            'options' => array(
                'yes' => 'Yes', 
                'no' => 'No', 
             ), 
            'default' => 'yes'
        ),

        array(
            'id'       => 'sparch_display_blog_comments',
            'type'     => 'button_set',
            'title'    => esc_html__('Display Comments Section', 'sparch'),
            'options' => array(
                'yes' => 'Yes', 
                'no' => 'No', 
             ), 
            'default' => 'yes'
        ),

    )
));





