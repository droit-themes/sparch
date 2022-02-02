<?php 
Redux::set_section('_themename', array(
    'title'            => esc_html__( '404 Banner', '_themename' ),
    'id'               => '_themename_404_banner',
    'icon'             => 'el el-cog',
    'subsection' => true,
    'fields'           => array(
        array(
            'id'       => '_themename_404_banner_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show 404  Banner', '_themename'),
            'options' => array(
                'show' => esc_html__('Show Banner', '_themename'), 
                'hide' => esc_html__('Hide Banner', '_themename'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => '_themename_404_title',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Title', '_themename'),
            'options' => array(
                'show' => esc_html__('Show', '_themename'), 
                'hide' => esc_html__('Hide', '_themename'), 
            ), 
            'default' => 'show'
        ),
        array(
            'title'    => esc_html__('404 Banner Titile', '_themename'),
            'type' => 'text',
            'id'       => '_themename_404_banner_title',
            'placeholder' => esc_html__( '404 Banner Titile', '_themename'),
            'required'    => array('_themename_404_title', '=', 'show')
        ),
        array(
            'id'       => '_themename_404_banner_breadcrumb',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Breadcrumb', '_themename'),
            'options' => array(
                'show' => esc_html__('Show', '_themename'), 
                'hide' => esc_html__('Hide', '_themename'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => '_themename_404_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', '_themename'),
            'default'  => array(
                'url'=> _THEMENAME_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
            'url'      => false

        ),
        array(
            'id'        => '_themenames_404_banner_overly',
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