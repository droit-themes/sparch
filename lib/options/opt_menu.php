<?php

// Navbar styling
Redux::setSection('sparch', array(
    'title'            => esc_html__( 'Menu Settings', 'sparch' ),
    'id'               => 'menu_opt',
    'icon'             => 'el el-lines',
    'fields'           => array(

        array(
            'id'       => 'sparch_menu_layout',
            'type'     => 'image_select',
            'title'    => __('Menu Layout', 'muffle'), 
            'subtitle' => __('Select your menu layout', 'muffle'),
            'options'  => array(
                'start'      => array(
                    'alt'   => 'Start', 
                    'img'   => ReduxFramework::$_url.'assets/img/2cr.png'
                ),
                'center'      => array(
                    'alt'   => 'Center', 
                    'img'   => ReduxFramework::$_url.'assets/img/3cm.png'
                ),
                'end'      => array(
                    'alt'   => 'End', 
                    'img'   => ReduxFramework::$_url.'assets/img/2cr.png'
                ),
            ),
            'default' => 'center'
        ),

        array(
            'title'     => esc_html__('Menu Bar Backgound Color', 'sparch'),
            'subtitle'  => esc_html__('Menu item font color', 'sparch'),
            'id'        => 'menu_bar_bg_color',
            'output'    => array(
                'background' => '.header_area , .navbar',
            ),
            'type'      => 'color',
        ),

        array(
            'id'          => 'menu_typo',
            'type'        => 'typography',
            'title'       => __('Typography', 'sparch'),
            'google'      => true,
            'font-backup' => true,
            'color'       => false,
            'output'      => array('.menu > .nav-item > .nav-link'),
            'units'       => 'px',
        ),

        array(
            'id'          => 'menu_submenu_typo',
            'type'        => 'typography',
            'title'       => __('Submenu Typography', 'sparch'),
            'google'      => true,
            'font-backup' => true,
            'color'       => false,
            'output'      => array('.menu > .nav-item.submenu .dropdown-menu .nav-item'),
            'units'       => 'px',
        ),

        array(
            'title'     => esc_html__('Menu Item Color', 'sparch'),
            'subtitle'  => esc_html__('Menu item font color', 'sparch'),
            'id'        => 'menu_font_color',
            'output'    => array(
                'color' => '.menu > .nav-item > .nav-link',
            ),
            'type'      => 'color',
        ),

        array(
            'title'     => esc_html__('Menu Hover Color', 'sparch'),
            'subtitle'  => esc_html__('Menu item Hover font color on header sticky mode', 'sparch'),
            'id'        => 'menu_hover_active_font_color',
            'output'    => array(
                'color'     => '.menu > .nav-item.active .nav-link, .menu > .nav-item:hover .nav-link',
            ),
            'type'      => 'color',
        ),


        array(
            'title'     => esc_html__('Menu Active/Hover Bar Color', 'sparch'),
            'subtitle'  => esc_html__('Menu item Active/Hover Bar Color mode', 'sparch'),
            'id'        => 'menu_hover_active_bar_color',
            'output'    => array(
                'background'     => '.menu > .nav-item > .nav-link:before',
            ),
            'type'      => 'color',
        ),
        
        // Sticky menu settings section
        array(
            'id' => 'sticky_menu_start',
            'type' => 'section',
            'title' => esc_html__('Sticky menu settings', 'sparch'),
            'subtitle' => esc_html__('The following settings will only apply on the sticky header mode..', 'sparch'),
            'indent' => false
        ),
        array(
            'title'     => esc_html__('Menu Bar Backgound Color', 'sparch'),
            'subtitle'  => esc_html__('Menu item font color', 'sparch'),
            'id'        => 'stick_menu_bar_bg_color',
            'output'    => array(
                'background' => '.site-header.sticky_nav.navbar_fixed .navbar',
            ),
            'type'      => 'color',
        ),
        array(
            'title'     => esc_html__('Menu Color', 'sparch'),
            'subtitle'  => esc_html__('Menu item font color on sticky menu mode.', 'sparch'),
            'id'        => 'sticky_menu_font_color',
            'output'    => array(
                'color' => '.navbar_fixed .menu > .nav-item > .nav-link',
            ),
            'type'      => 'color',
        ),
        
        array(
            'title'     => esc_html__('Menu Hover Color', 'sparch'),
            'subtitle'  => esc_html__('Menu item Hover font color on header sticky mode', 'sparch'),
            'id'        => 'menu_sticky_active_font_color',
            'output'    => array(
                'color'     => '.navbar_fixed .menu > .nav-item.active .nav-link, .navbar_fixed .menu > .nav-item:hover .nav-link',
            ),
            'type'      => 'color',
        ),
        array(
            'id'     => 'submenu_end',
            'type'   => 'section',
            'indent' => false,
        ),

        array(
            'title'     => esc_html__('Menu item margin', 'sparch'),
            'subtitle'  => esc_html__('Margin around menu item.', 'sparch'),
            'id'        => 'menu_item_margin',
            'type'      => 'spacing',
            'output'    => array( '.menu > .nav-item' ),
            'mode'      => 'margin',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),


        // Sub menu settings section
        array(
            'id' => 'sub_menu_start',
            'type' => 'section',
            'title' => esc_html__('Sub menu settings', 'sparch'),
            'subtitle' => esc_html__('The following settings will only apply on the Sub Menu header mode..', 'sparch'),
            'indent' => false
        ),
        array(
            'title'     => esc_html__('Menu Backgound Color', 'sparch'),
            'subtitle'  => esc_html__('Sub Menu item font color', 'sparch'),
            'id'        => 'sub_menu_bar_bg_color',
            'output'    => array(
                'background' => '.menu > .nav-item.submenu .dropdown-menu',
            ),
            'type'      => 'color',
        ),
        array(
            'title'     => esc_html__('Menu Color', 'sparch'),
            'subtitle'  => esc_html__('Menu item font color on sticky menu mode.', 'sparch'),
            'id'        => 'sub_menu_font_color',
            'output'    => array(
                'color' => '.menu > .nav-item.submenu .dropdown-menu .nav-item .nav-link',
            ),
            'type'      => 'color',
        ),

        array(
            'title'     => esc_html__('Active Menu Color', 'sparch'),
            'subtitle'  => esc_html__('Menu item font color on sticky Active menu mode.', 'sparch'),
            'id'        => 'sub_menu_active_font_color',
            'output'    => array(
                'color' => '.menu > .nav-item.submenu .dropdown-menu .nav-item.active > .nav-link',
            ),
            'type'      => 'color',
        ),

        array(
            'title'     => esc_html__('Hover Menu Color', 'sparch'),
            'subtitle'  => esc_html__('Menu item font color on sticky Active menu mode.', 'sparch'),
            'id'        => 'sub_menu_hover_font_color',
            'output'    => array(
                'color' => '.menu > .nav-item.submenu .dropdown-menu .nav-item:hover > .nav-link',
            ),
            'type'      => 'color',
        ),

    
    )
));


/*** Headers Typography ***/
Redux::set_section( 'sparch', array(
    'title'            => esc_html__( 'Mobile Menu Setting', 'sparch' ),
    'id'               => 'mobile_menu_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(
        
        array(
            'id'            => 'mobile_menu_dropdown_bg',
            'type'          => 'color',
            'title'         => esc_html__( 'Background Color', 'sparch' ),
            'subtitle'      => esc_html__( 'Controls the background color of the mobile menu dropdown and classic mobile menu box.', 'sparch' ),
            'mode'          => 'background',
        ),
        array(
            'title'         => esc_html__( 'Menu Item Color', 'sparch' ),
            'id'            => 'mobile_menu_font_color',
            'type'          => 'color',
        ),
        array(
            'title'         => esc_html__( 'Menu Item Active/Hover Color', 'sparch' ),
            'id'            => 'mobile_menu_hover_color',
            'type'          => 'color',
        ),
        array(
            'title'         => esc_html__( 'Dropdown Icon Color', 'sparch' ),
            'id'            => 'mobile_menu_dropdown_color',
            'type'          => 'color',
        ),

        array (
            'title'     => esc_html__( 'Hamburger Menu Icon Color', 'sparch' ),
            'id'        => 'hamburger_menu_icon_color',
            'type'      => 'color',
        ),

        array (
            'title'     => esc_html__( 'Hamburger Menu Icon Color Sticky', 'sparch' ),
            'id'        => 'hamburger_menu_icon_color_sticky',
            'type'      => 'color',
        ),
    

      
    )
));