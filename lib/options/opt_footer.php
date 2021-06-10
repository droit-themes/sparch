<?php

Redux::set_section('sparch', array(
	'title'     => esc_html__( 'Footer', 'sparch' ),
	'id'        => 'sparch_page',
	'icon'      => 'dashicons dashicons-admin-post',
));

// page Title Bar
Redux::set_section('sparch', array(
	'title'     => esc_html__( 'Content', 'sparch' ),
	'id'        => 'sparch_footer',
	'icon'      => '',
    'subsection' => true,
	'fields'    => array(
        array(
            'title'     => esc_html__('Copyright Text', 'sparch'),
            'id'        => 'sparch_copyright_txt',
            'type'      => 'editor',
            'default'   => 'Copyright &copy; 2021 <a href="#">DroitThemes</a> | All rights reserved',
            'args'    => array(
                'wpautop'       => true,
                'media_buttons' => false,
                'textarea_rows' => 10,
                'teeny'         => false,
            )
        ),
	)
));

