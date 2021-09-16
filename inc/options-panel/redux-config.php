<?php
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    Redux::disable_demo();
	unset(Redux_Core::$server['REMOTE_ADDR']);

    $opt_val  = 'diveintowebworld_options_data';
    $diveintowebworld_textdomain = 'diveintowebworld';
    $theme = wp_get_theme();

    $args = Array(
        'display_name'         	=>	$theme->get( 'Name' ),
		'display_version'      	=>	$theme->get( 'Version' ),
		'menu_title'           	=>	esc_html__( 'DIWW Options', $diveintowebworld_textdomain ),
		'customizer'           	=>	true,
		'dev_mode'				=>	false
    );

    Redux::set_args( $opt_val, $args );

    Redux::setSection( $opt_val, array(
        'title'  => esc_html__( 'General', $diveintowebworld_textdomain ),
        'id'     => 'general',
        'icon'   => 'el el-home',
        'fields' => array(
            array(
                'id'       => 'short_description',
                'type'     => 'textarea',
                'rows'     =>   3,
                'title'    => esc_html__( 'Short Description', $diveintowebworld_textdomain ),
                'desc'     => esc_html__( 'Short Description about DiveIntoWebWorld', $diveintowebworld_textdomain ),
            ),
        )
    ) );