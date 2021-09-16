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

    Redux::setSection( $opt_val, array(
        'title'  => esc_html__( 'Social Media', $diveintowebworld_textdomain ),
        'id'     => 'social_media',
        'icon'   => 'el el-th-large',
        'fields' => array(
            array(
                'id'       => 'facebook',
                'type'     => 'text',
                'title'    => esc_html__( 'Facebook', $diveintowebworld_textdomain ),
            ),

            array(
                'id'       => 'twitter',
                'type'     => 'text',
                'title'    => esc_html__( 'Twitter', $diveintowebworld_textdomain ),
            ),

            array(
                'id'       => 'linked_in',
                'type'     => 'text',
                'title'    => esc_html__( 'LinkedIn', $diveintowebworld_textdomain ),
            ),
        )
    ) );

    Redux::setSection( $opt_val, array(
        'title'  => esc_html__( 'Footer', $diveintowebworld_textdomain ),
        'id'     => 'footer_copyright',
        'icon'   => 'el el-th-large',
        'fields' => array(
            array(
                'id'        =>  'second_widget_area_title',
                'type'      =>  'text',
                'title'     =>  esc_html__( 'Second Widget Area Title', $diveintowebworld_textdomain ),
            ),
            array(
                'id'        =>  'third_widget_area_title',
                'type'      =>  'text',
                'title'     =>  esc_html__( 'Third Widget Area Title', $diveintowebworld_textdomain ),
            ),
            array(
                'id'        =>  'last_widget_area_title',
                'type'      =>  'text',
                'title'     =>  esc_html__( 'Last Widget Area Title', $diveintowebworld_textdomain ),
            ),
            array(
                'id'        =>  'last_widget_area_short_desc',
                'type'      =>  'textarea',
                'rows'      =>  3,
                'title'     =>  esc_html__( 'Last Widget Area Description', $diveintowebworld_textdomain ),
            ),
            array(
                'id'        => 'copyright',
                'type'      => 'editor',
                'title'     => esc_html__( 'Copyright', $diveintowebworld_textdomain ),
            ),
        )
    ) );