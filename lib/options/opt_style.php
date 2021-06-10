<?php
// Header Section
Redux::set_section( 'sparch', array(
    'title'            => esc_html__( 'Style', 'sparch' ),
    'id'               => 'sparch_style_sec',
    'customizer_width' => '400px',
    'icon'             => 'el el-brush',
));

// color 

Redux::set_section( 'sparch', array(
    'title'            => esc_html__( 'Color', 'sparch' ),
    'id'               => 'sparch_color_opt',
    'subsection'       => true,
    'icon'             => 'el el-cogs',
    'fields'           => array(
      
        array(
            'id'       => 'sparch_primary_color',
            'type'     => 'color',
            'title'    => __('Primary Color', 'sparch'), 
            'validate' => 'color',
            'mode'     => 'color',
            'output'   => array('h1, h2, h3, h4, h5, h6, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a, .blog_title a, .widget-title,.menu > .nav-item > .nav-link')
        ),
        array(
            'id'       => 'sparch_link_color',
            'type'     => 'color',
            'title'    => __('Link Color', 'sparch'), 
            'validate' => 'color',
            'mode'     => 'color',
            'output'   => array('a, .media_blog_content .post_bottom .learn_btn_two, .widget ul > li a, .widget a, .post-meta a')
        ),
        array(
            'id'       => 'sparch_secondary_color',
            'type'     => 'color',
            'title'    => __('Secondary Color', 'sparch'), 
            'validate' => 'color',
            'output'   => array(
               'color'              => 'a:hover, a:hover, a:focus, a:active, h2 a:hover, .widget_categories ul li a:hover,.menu > .nav-item:hover .nav-link, .media_blog_content .post_bottom .learn_btn_two:hover, .widget ul > li:hover > a, .widget a:hover, .post-meta a:hover', 
               'background-color'   => '.site-footer, .pagination .page-numbers.current, .pagination .page-numbers:hover,.pagination .page-numbers.prev:hover, .pagination .page-numbers.next:hover,.menu > .nav-item > .nav-link:before, .featured_post',
               'border-color'   => '.site-footer, .pagination .page-numbers.current, .pagination .page-numbers:hover,
               .pagination .page-numbers.prev:hover, .pagination .page-numbers.next:hover'
            )
        ), 
        
        array(
            'id'       => 'sparch_body_color',
            'type'     => 'color',
            'title'    => __('Body Color', 'sparch'), 
            'validate' => 'color',
            'mode'     => 'color',
            'output'   => array('body, .post-meta, .widget_rss ul li .rssSummary, .media_blog_content .post_bottom')
        ),

        
    )
) );