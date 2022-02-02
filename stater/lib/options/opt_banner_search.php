<?php 

Redux::set_section('_themename', array(
    'title'            => esc_html__( 'Search Banner', '_themename' ),
    'id'               => '_themename_search_blog_banner',
    'icon'             => 'el el-cog',
    'subsection' => true,
    'fields'           => array(

        array(
            'id'       => '_themename_search_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', '_themename'),
            'default'  => array(
                'url'=> _THEMENAME_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
            'url'      => false

        ),
        array(
            'id'        => '_themenames_search_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two.archive-banner .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),                        
        ),
      )
));

