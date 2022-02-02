<?php

Redux::set_section('_themename', array(
	'title'     => esc_html__( 'Footer', '_themename' ),
	'id'        => '_themename_page',
	'icon'      => 'dashicons dashicons-admin-post',
));

// page Title Bar
Redux::set_section('_themename', array(
	'title'     => esc_html__( 'Content', '_themename' ),
	'id'        => '_themename_footer',
	'icon'      => '',
    'subsection' => true,
	'fields'    => array(
        array(
            'title'     => esc_html__('Copyright Text', '_themename'),
            'id'        => '_themename_copyright_txt',
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

