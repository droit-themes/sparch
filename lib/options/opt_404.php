<?php

Redux::setSection('sparch', array(
    'title'     => esc_html__('404 Page Settings', 'sparch'),
    'id'        => '404_0pt',
    'icon'      => 'dashicons dashicons-admin-post',
    'fields'    => array(

        array(
            'title'     => esc_html__('Heading Text', 'sparch'),
            'id'        => 'error_heading',
            'type'      => 'text',
            'default'   => esc_html__("404", 'sparch'),
        ),

        array(
            'title'     => esc_html__('Title', 'sparch'),
            'id'        => 'error_title',
            'type'      => 'text',
            'default'   => esc_html__('Page not found', 'sparch'),
        ),

        array(
            'title'     => esc_html__('Subtitle', 'sparch'),
            'id'        => 'error_subtitle',
            'type'      => 'textarea',
            'default'   => esc_html__('We are sorry, the page you have looked for does not exist in our database! Maybe go to our home page or try to use a search?', 'sparch'),
        ),

        array(
            'title'     => esc_html__('Home button label', 'sparch'),
            'id'        => 'error_home_btn_label',
            'type'      => 'text',
            'default'   => esc_html__('Go Back to home Page', 'sparch'),
            
        ),

        array(
            'id'          => 'btn_font_color',
            'type'        => 'color',
            'title'       => esc_html__( 'Button Text Color', 'sparch' ),
            'output'      => array(
                'color' => '.error_btn',
            ),
        ),

        array(
            'id'          => 'btn_font_color_hover',
            'type'        => 'color',
            'title'       => esc_html__( 'Button Text Hover Color', 'sparch' ),
            'output'      => array(
                'color' => '.error_btn:hover',
            ),
        ),

        array(
            'id'          => 'btn_bg_color',
            'type'        => 'color',
            'title'       => esc_html__( 'Button Background Color', 'sparch' ),
            'output'      => array(
                'background' => '.error_btn',
            ),
        ),

        array(
            'id'          => 'btn_bg_color_hover',
            'type'        => 'color',
            'title'       => esc_html__( 'Button Background Hover Color', 'sparch' ),
            'output'      => array(
                'background' => '.error_btn:hover',
            ),
        ),
        array(
            'id'          => 'page_bg_color',
            'type'        => 'background-color',
            'title'       => esc_html__( 'Page Background Color', 'sparch' ),
            'output'    => array(
                'background' => '.error_section',
            ),
            'type'      => 'color',
        ),

    )
));
