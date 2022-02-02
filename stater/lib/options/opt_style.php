<?php
// Header Section
Redux::set_section( '_themename', array(
    'title'            => esc_html__( 'Style', '_themename' ),
    'id'               => '_themename_style_sec',
    'customizer_width' => '400px',
    'icon'             => 'el el-brush',
));

// color 

Redux::set_section( '_themename', array(
    'title'            => esc_html__( 'Color', '_themename' ),
    'id'               => '_themename_color_opt',
    'subsection'       => true,
    'icon'             => 'el el-cogs',
    'fields'           => array(
      
        array(
            'id'       => '_themename_primary_color',
            'type'     => 'color',
            'title'    => __('Primary Color', '_themename'), 
            'validate' => 'color',
            'mode'     => 'color',
            'output'   => array('h1, h2, h3, h4, h5, h6, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a, .blog_title a, .widget-title,.menu > .nav-item > .nav-link')
        ),
        array(
            'id'       => '_themename_link_color',
            'type'     => 'color',
            'title'    => __('Link Color', '_themename'), 
            'validate' => 'color',
            'mode'     => 'color',
            'output'   => array('a, .media_blog_content .post_bottom .learn_btn_two, .widget ul > li a, .widget a, .post-meta a')
        ),
        array(
            'id'       => '_themename_secondary_color',
            'type'     => 'color',
            'title'    => __('Secondary Color', '_themename'), 
            'validate' => 'color',
            'output'   => array(
               'color'              => 'a:hover, a:hover, a:focus, a:active, h2 a:hover, .widget_categories ul li a:hover,.menu > .nav-item:hover .nav-link, .media_blog_content .post_bottom .learn_btn_two:hover, .widget ul > li:hover > a, .widget a:hover, .post-meta a:hover', 
               'background-color'   => '.site-footer, .pagination .page-numbers.current, .pagination .page-numbers:hover,.pagination .page-numbers.prev:hover, .pagination .page-numbers.next:hover,.menu > .nav-item > .nav-link:before, .featured_post',
               'border-color'   => '.site-footer, .pagination .page-numbers.current, .pagination .page-numbers:hover,
               .pagination .page-numbers.prev:hover, .pagination .page-numbers.next:hover'
            )
        ), 
        
        array(
            'id'       => '_themename_body_color',
            'type'     => 'color',
            'title'    => __('Body Color', '_themename'), 
            'validate' => 'color',
            'mode'     => 'color',
            'output'   => array('body, .post-meta, .widget_rss ul li .rssSummary, .media_blog_content .post_bottom')
        ),

        
    )
) );

// _Themename Logo
Redux::set_section( '_themename', array(
    'title'            => esc_html__( 'Typography', '_themename' ),
    'id'               => '_themename_style_opt',
    'subsection'       => true,
    'icon'             => 'el el-cogs',
    'fields'           => array(
        array(
            'id'        => 'body_typoraphy',
            'type'      => 'typography',
            'title'     => esc_html__( 'Body Typography', '_themename'),
            'subtitle'  => esc_html__( 'These settings control the typography for all H1 Headers.', '_themename'),
            'output'    => 'body, .media_blog_content'
        ),
        array(
            'id'        => 'h1_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'H1 Headers Typography', '_themename'),
            'subtitle'  => esc_html__( 'These settings control the typography for all H1 Headers.', '_themename'),
            'output'    => 'h1'
        ),
        array(
            'id'        => 'h2_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'H2 Headers Typography', '_themename'),
            'subtitle'  => esc_html__( 'These settings control the typography for all H1 Headers.', '_themename'),
            'output'    => 'h2'
        ),
        array(
            'id'        => 'h3_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'H3 Headers Typography', '_themename'),
            'subtitle'  => esc_html__( 'These settings control the typography for all H1 Headers.', '_themename'),
            'output'    => 'h3'
        ),
        array(
            'id'        => 'h4_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'H4 Headers Typography', '_themename'),
            'subtitle'  => esc_html__( 'These settings control the typography for all H1 Headers.', '_themename'),
            'output'    => 'h4'
        ),
        array(
            'id'        => 'h5_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'H5 Headers Typography', '_themename'),
            'subtitle'  => esc_html__( 'These settings control the typography for all H1 Headers.', '_themename'),
            'output'    => 'h5'
        ),
        array(
            'id'        => 'h6_typo',
            'type'      => 'typography',
            'title'     => esc_html__( 'H6 Headers Typography', '_themename'),
            'subtitle'  => esc_html__( 'These settings control the typography for all H1 Headers.', '_themename'),
            'output'    => 'h6'
        ),

    )
) );
