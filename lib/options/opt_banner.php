<?php

Redux::set_section('sparch', array(
    'title'            => esc_html__( 'Banner Setting', 'sparch' ),
    'id'               => 'headers_banner_opt',
    'customizer_width' => '400px',
    'icon'             => 'el el-picture',
));

// Page Banner 
Redux::set_section('sparch', array(
    'title'            => esc_html__( 'Page Banner', 'sparch' ),
    'id'               => 'page_banner',
    'icon'             => '',
    'subsection'        => true,
    'fields'           => array(
        array(
            'id'       => 'sparch_page_banner_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Page Banner', 'sparch'),
            'subtitle' => esc_html__('Show Hide Page Banner Globally ', 'sparch'),
            'options' => array(
                'show' => esc_html__('Show Banner', 'sparch'), 
                'hide' => esc_html__('Hide Banner', 'sparch'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'sparch_page_banner_breadcrumb',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Page Breadcrumb', 'sparch'),
            'options' => array(
                'show' => esc_html__('Show', 'sparch'), 
                'hide' => esc_html__('Hide', 'sparch'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'sparch_page_banner_title',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Page Title', 'sparch'),
            'options' => array(
                'show' => esc_html__('Show', 'sparch'), 
                'hide' => esc_html__('Hide', 'sparch'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'sparch_page_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', 'sparch'),
            'default'  => array(
                'url'=> SPARCH_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
            'url'      => false

        ),
        array(
            'id'        => 'sparch_page_banner_overly',
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

Redux::set_section('sparch', array(
    'title'            => esc_html__( 'Blog Banner', 'sparch' ),
    'id'               => 'blog_banner',
    'icon'             => '',
    'subsection' => true,
    'fields'           => array(
        array(
            'id'       => 'sparch_blog_banner_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Blog Banner', 'sparch'),
            'subtitle' => esc_html__('Show Hide Blog Banner Globally ', 'sparch'),
            'options' => array(
                'show' => esc_html__('Show Banner', 'sparch'), 
                'hide' => esc_html__('Hide Banner', 'sparch'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'sparch_blog_banner_breadcrumb',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Blog Breadcrumb', 'sparch'),
            'options' => array(
                'show' => esc_html__('Show', 'sparch'), 
                'hide' => esc_html__('Hide', 'sparch'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'sparch_blog_banner_title',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Blog Title', 'sparch'),
            'options' => array(
                'show' => esc_html__('Show', 'sparch'), 
                'hide' => esc_html__('Hide', 'sparch'), 
            ), 
            'default' => 'show'
        ),
        array( 
        'title'    => esc_html__('Blog title', 'sparch'),
        'id' => 'sparch_blog_title',
        'type' => 'text',
         'required' => array('sparch_blog_banner_title', '=' , 'show')
        ),
        array(
            'id'       => 'sparch_blog_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', 'sparch'),
            'default'  => array(
                'url'=> SPARCH_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
            'url'      => false

        ),
        array(
            'id'        => 'sparch_blog_banner_overly',
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


Redux::set_section('sparch', array(
    'title'            => esc_html__( 'Single Blog Banner', 'sparch' ),
    'id'               => 'single_blog_banner',
    'icon'             => '',
    'subsection' => true,
    'fields'           => array(
        array(
            'id'       => 'sparch_single_blog_banner_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Single Blog Banner', 'sparch'),
            'subtitle' => esc_html__('Show Hide Banner Globally ', 'sparch'),
            'options' => array(
                'show' => esc_html__('Show Banner', 'sparch'), 
                'hide' => esc_html__('Hide Banner', 'sparch'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'sparch_single_blog_banner_breadcrumb',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Breadcrumb', 'sparch'),
            'options' => array(
                'show' => esc_html__('Show', 'sparch'), 
                'hide' => esc_html__('Hide', 'sparch'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'sparch_single_blog_banner_title',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Title', 'sparch'),
            'options' => array(
                'show' => esc_html__('Show', 'sparch'), 
                'hide' => esc_html__('Hide', 'sparch'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'sparch_single_blog_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', 'sparch'),
            'default'  => array(
                'url'=> SPARCH_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
            'url'      => false

        ),
        array(
            'id'        => 'sparchs_single_blog_banner_overly',
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

Redux::set_section('sparch', array(
    'title'            => esc_html__( 'Archive Banner', 'sparch' ),
    'id'               => 'archive_blog_banner',
    'icon'             => '',
    'subsection' => true,
    'fields'           => array(
        array(
            'id'       => 'sparch_arcive_banner_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Archive  Banner', 'sparch'),
            'options' => array(
                'show' => esc_html__('Show Banner', 'sparch'), 
                'hide' => esc_html__('Hide Banner', 'sparch'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'sparch_archive_banner_breadcrumb',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Breadcrumb', 'sparch'),
            'options' => array(
                'show' => esc_html__('Show', 'sparch'), 
                'hide' => esc_html__('Hide', 'sparch'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'sparch_arcive_title',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Archive Title', 'sparch'),
            'options' => array(
                'show' => esc_html__('Show', 'sparch'), 
                'hide' => esc_html__('Hide', 'sparch'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'sparch_arcive_description',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Archive Description', 'sparch'),
            'options' => array(
                'show' => esc_html__('Show', 'sparch'), 
                'hide' => esc_html__('Hide', 'sparch'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'sparch_archive_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', 'sparch'),
            'default'  => array(
                'url'=> SPARCH_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
            'url'      => false

        ),
        array(
            'id'        => 'sparchs_archive_banner_overly',
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

