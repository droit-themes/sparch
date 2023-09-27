<?php

Redux::setSection('sparch', array(
    'title'     => esc_html__('Shop Settings', 'sparch'),
    'id'        => 'shop_0pt',
    'icon'      => 'el el-lines',
    'fields'    => array(

        array(
            'title'     => esc_html__('Shop Page Title Text', 'sparch'),
            'id'        => 'shop_page_title',
            'type'      => 'text',
            'default'   => 'Shop Page',
        ),

        array(
            'id'        => 'shop_title_color',
            'type'      => 'color',
            'title'     => 'Shop Title Color',
            'mode'      => 'color',
            'output'    => array( 'h1.shop_page-title.shop_page_title' ),
        ),

        array(
            'id'        => 'shop_banner_toggle',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Shop Banner', 'sparch'),
            'options'   => array(
                'show'  => esc_html__('Show Banner', 'sparch'),
                'hide'  => esc_html__('Hide Banner', 'sparch'),
            ), 
            'default'   => 'show'
        ),

        array(
            'id'        => 'shop_banner_breadcrumb',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Breadcrumb', 'sparch'),
            'options'   => array(
                'show'  => esc_html__('Show', 'sparch'),
                'hide'  => esc_html__('Hide', 'sparch'),
            ), 
            'default'   => 'show',
        ),

        array(
            'id'        => 'shop_brea_color',
            'type'      => 'color',
            'title'     => 'Shop Breadcrumb Color',
            'mode'      => 'color',
            'output'    => array( '.breadcrumbs span' ),
        ),

        array(
            'id'        => 'shop_banner_img_upload',
            'type'      => 'media',
            'title'     => __('Upload Banner', 'sparch'),
            'default'   => array(
                'url'=> SPARCH_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
        ),

        array(
            'id'        => 'shop_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Shop Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two.woo_banner .overlay_bg' ),
        ),

        array(
            'title'     => esc_html__( 'Padding', 'sparch' ),
            'subtitle'  => esc_html__( 'Padding around the Shop Page Banner. Input the padding as clockwise (Top Right Bottom Left)', 'sparch' ),
            'id'        => 'shop_banner_padding',
            'type'      => 'spacing',
            'output'    => array( '.blog_breadcrumbs_area_two.woo_banner' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),
    )
));
