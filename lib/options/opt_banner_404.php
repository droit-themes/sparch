<?php 
Redux::set_section('sparch', array(
    'title'            => esc_html__( '404 Banner', 'sparch' ),
    'id'               => 'sparch_404_banner',
    'icon'             => 'el el-cog',
    'subsection' => true,
    'fields'           => array(
        array(
            'id'       => 'sparch_404_banner_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show 404  Banner', 'sparch'),
            'options' => array(
                'show' => esc_html__('Show Banner', 'sparch'), 
                'hide' => esc_html__('Hide Banner', 'sparch'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'sparch_404_title',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Title', 'sparch'),
            'options' => array(
                'show' => esc_html__('Show', 'sparch'), 
                'hide' => esc_html__('Hide', 'sparch'), 
            ), 
            'default' => 'show'
        ),
        array(
            'title'    => esc_html__('404 Banner Titile', 'sparch'),
            'type' => 'text',
            'id'       => 'sparch_404_banner_title',
            'placeholder' => esc_html__( '404 Banner Titile', 'sparch'),
            'required'    => array('sparch_404_title', '=', 'show')
        ),
        array(
            'id'       => 'sparch_404_banner_breadcrumb',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Breadcrumb', 'sparch'),
            'options' => array(
                'show' => esc_html__('Show', 'sparch'), 
                'hide' => esc_html__('Hide', 'sparch'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'sparch_404_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', 'sparch'),
            'default'  => array(
                'url'=> SPARCH_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
            'url'      => false

        ),
        array(
            'id'        => 'sparchs_404_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two.banner-404 .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),                        
        ),
      )
));