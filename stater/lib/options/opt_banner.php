<?php

Redux::set_section('_themename', array(
    'title'            => esc_html__( 'Banner Setting', '_themename' ),
    'id'               => 'headers_typo_opt',
    'icon'             => 'el el-picture',
));

// Page Banner 
Redux::set_section('_themename', array(
    'title'            => esc_html__( 'Page Banner', '_themename' ),
    'id'               => 'Banner',
    'icon'             => 'el el-cog',
    'subsection' => true,
    'fields'           => array(
        array(
            'id'       => '_themename_page_banner_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Page Banner', '_themename'),
            'subtitle' => esc_html__('Show Hide Page Banner Globally ', '_themename'),
            'options' => array(
                'show' => esc_html__('Show Banner', '_themename'), 
                'hide' => esc_html__('Hide Banner', '_themename'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => '_themename_page_banner_breadcrumb',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Page Breadcrumb', '_themename'),
            'options' => array(
                'show' => esc_html__('Show', '_themename'), 
                'hide' => esc_html__('Hide', '_themename'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => '_themename_page_banner_title',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Page Title', '_themename'),
            'options' => array(
                'show' => esc_html__('Show', '_themename'), 
                'hide' => esc_html__('Hide', '_themename'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => '_themename_page_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', '_themename'),
            'default'  => array(
                'url'=> _THEMENAME_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
            'url'      => false

        ),
        array(
            'id'        => '_themename_page_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two.page-banner .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),                        
        ),
      )
));

// Blog Banner 

Redux::set_section('_themename', array(
    'title'            => esc_html__( 'Blog Banner', '_themename' ),
    'id'               => 'blog_banner',
    'icon'             => 'el el-cog',
    'subsection' => true,
    'fields'           => array(
        array(
            'id'       => '_themename_blog_banner_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Blog Banner', '_themename'),
            'subtitle' => esc_html__('Show Hide Blog Banner Globally ', '_themename'),
            'options' => array(
                'show' => esc_html__('Show Banner', '_themename'), 
                'hide' => esc_html__('Hide Banner', '_themename'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => '_themename_blog_banner_breadcrumb',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Blog Breadcrumb', '_themename'),
            'options' => array(
                'show' => esc_html__('Show', '_themename'), 
                'hide' => esc_html__('Hide', '_themename'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => '_themename_blog_banner_title',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Blog Title', '_themename'),
            'options' => array(
                'show' => esc_html__('Show', '_themename'), 
                'hide' => esc_html__('Hide', '_themename'), 
            ), 
            'default' => 'show'
        ),
        array( 
        'title'    => esc_html__('Blog title', '_themename'),
        'id' => '_themename_blog_title',
        'type' => 'text',
         'required' => array('_themename_blog_banner_title', '=' , 'show')
        ),
        array(
            'id'       => '_themename_blog_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', '_themename'),
            'default'  => array(
                'url'=> _THEMENAME_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
            'url'      => false

        ),
        array(
            'id'        => '_themename_blog_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),                        
        ),
      )
));

// Single page blog 


Redux::set_section('_themename', array(
    'title'            => esc_html__( 'Single Blog Banner', '_themename' ),
    'id'               => 'single_blog_banner',
    'icon'             => 'el el-cog',
    'subsection' => true,
    'fields'           => array(
        array(
            'id'       => '_themename_single_blog_banner_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Single Blog Banner', '_themename'),
            'subtitle' => esc_html__('Show Hide Banner Globally ', '_themename'),
            'options' => array(
                'show' => esc_html__('Show Banner', '_themename'), 
                'hide' => esc_html__('Hide Banner', '_themename'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => '_themename_single_blog_banner_breadcrumb',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Breadcrumb', '_themename'),
            'options' => array(
                'show' => esc_html__('Show', '_themename'), 
                'hide' => esc_html__('Hide', '_themename'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => '_themename_single_blog_banner_title',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Title', '_themename'),
            'options' => array(
                'show' => esc_html__('Show', '_themename'), 
                'hide' => esc_html__('Hide', '_themename'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => '_themename_single_blog_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', '_themename'),
            'default'  => array(
                'url'=> _THEMENAME_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
            'url'      => false

        ),
        array(
            'id'        => '_themenames_single_blog_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two.blog-single-page .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),                        
        ),
      )
));

//  Archive page 

Redux::set_section('_themename', array(
    'title'            => esc_html__( 'Archive Banner', '_themename' ),
    'id'               => 'archive_blog_banner',
    'icon'             => 'el el-cog',
    'subsection' => true,
    'fields'           => array(
        array(
            'id'       => '_themename_arcive_banner_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Archive  Banner', '_themename'),
            'options' => array(
                'show' => esc_html__('Show Banner', '_themename'), 
                'hide' => esc_html__('Hide Banner', '_themename'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => '_themename_archive_banner_breadcrumb',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Breadcrumb', '_themename'),
            'options' => array(
                'show' => esc_html__('Show', '_themename'), 
                'hide' => esc_html__('Hide', '_themename'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => '_themename_arcive_title',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Archive Title', '_themename'),
            'options' => array(
                'show' => esc_html__('Show', '_themename'), 
                'hide' => esc_html__('Hide', '_themename'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => '_themename_arcive_description',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Archive Description', '_themename'),
            'options' => array(
                'show' => esc_html__('Show', '_themename'), 
                'hide' => esc_html__('Hide', '_themename'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => '_themename_archive_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', '_themename'),
            'default'  => array(
                'url'=> _THEMENAME_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
            'url'      => false

        ),
        array(
            'id'        => '_themenames_archive_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two.search-banner .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),                        
        ),
      )
));

//  search page 

