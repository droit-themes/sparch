<?php

Redux::set_section( 'sparch', array(
    'title'            => esc_html__( 'Typography', 'sparch' ),
    'id'               => 'sparch_typo_opt',
    'icon'             => 'dashicons dashicons-editor-textcolor',
    'fields'           => array(

        array(
            'id'        => 'typo_note',
            'type'      => 'info',
            'style'     => 'success',
            'title'     => esc_html__( 'Important Note', 'sparch' ),
            'icon'      => 'dashicons dashicons-info',
            'desc'      => esc_html__( 'This tab contains general typography options. Additional typography options for specific areas can be found within other tabs. Example: For menu typography options go to the Menu Settings tab.', 'sparch' )
        ),

        array(
            'title'     => esc_html__( 'Default Font Load', 'sparch' ),
            'subtitle'  => esc_html__( 'You can off default google font loading.', 'sparch' ),
            'id'        => 'is_default_font',
            'type'      => 'switch',
            'on'        => esc_html__( 'Load', 'sparch' ),
            'off'       => esc_html__( 'Off', 'sparch' ),
            'default'   => true
        ),

        array(
            'id'        => 'body_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'Body Typography', 'sparch' ),
            'subtitle'  => esc_html__( 'These settings control the typography for the body text globally.', 'sparch' ),
            'description' => sprintf (
                '%1$s <a href="%2$s" target="_blank">%3$s</a> %4$s',
                esc_html__( 'You can add your own custom font', 'sparch' ),
                get_admin_url(null, 'edit-tags.php?taxonomy=dt_custom_fonts' ),
                esc_html__( 'here.', 'sparch' ),
                esc_html__( 'You will get the custom fonts in the Typography\'s Font Family list.', 'sparch' )
            ),
            'output'    => array(
                'body, .f_p, .p_service_item p, .blog_list_item_two .blog_content p'
            )
        ),
    )
));


/*** Headers Typography ***/
Redux::set_section( 'sparch', array(
    'title'            => esc_html__( 'Headers Typography', 'sparch' ),
    'id'               => 'headers_typo_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(
        array(
            'id'        => 'typo_note_headers',
            'type'      => 'info',
            'style'     => 'success',
            'title'     => esc_html__( 'Important Note:', 'sparch' ),
            'icon'      => 'dashicons dashicons-info',
            'desc'      => esc_html__( 'This tab contains general typography options. Additional typography options for specific areas can be found within other tabs. Example: For menu typography options go to the Menu Settings tab.', 'sparch' )
        ),

        array(
            'id'        => 'h1_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'H1 Headers Typography', 'sparch' ),
            'subtitle'  => esc_html__( 'These settings control the typography for all H1 Headers.', 'sparch' ),
            'output'    => array( 'h1, h1.f_p, .breadcrumb_content h1' )
        ),

        array(
            'id'        => 'h2_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'H2 Headers Typography', 'sparch' ),
            'subtitle'  => esc_html__( 'These settings control the typography for all H2 Headers. The h2 title tag used in the most section title.', 'sparch' ),
            'output'    => array( 'h2, h2.f_p' )
        ),
        array(
            'id'        => 'h3_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'H3 Headers Typography', 'sparch' ),
            'subtitle'  => esc_html__( 'These settings control the typography for all H3 Headers.', 'sparch' ),
            'output'    => array( 'h3, h3.f_p, .job_details_area h3' )
        ),

        array(
            'id'        => 'h4_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'H4 Headers Typography', 'sparch' ),
            'subtitle'  => esc_html__( 'These settings control the typography for all H4 Headers.', 'sparch' ),
            'output'    => array( 'h4, h4.f_p' )
        ),

        array(
            'id'        => 'h5_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'H5 Headers Typography', 'sparch' ),
            'subtitle'  => esc_html__( 'These settings control the typography for all H5 Headers.', 'sparch' ),
            'output'    => array( 'h5, h5.f_p' )
        ),

        array(
            'id'        => 'h6_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'H6 Headers Typography', 'sparch' ),
            'subtitle'  => esc_html__( 'These settings control the typography for all H6 Headers.', 'sparch' ),
            'output'    => array( 'h6, h6.f_p, .job_info .info_item h6' )
        ),
    )
));