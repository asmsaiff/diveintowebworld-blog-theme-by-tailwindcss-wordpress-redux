<?php
    require_once( get_theme_file_path( '/inc/diveintowebworld-plugins.php' ) );
    
    if ( site_url() == "http://localhost/diww/" ) {
        define( "VERSION", time() );
    } else {
        define( "VERSION", wp_get_theme()->get( "Version" ) );
    }

    function diveintowebworld_theme_setup() {
        // Load Theme Textdomain
        load_theme_textdomain('diveintowebworld');

        // Theme Supports
        add_theme_support('title');
        add_theme_support('description');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-header');
        add_theme_support('custom-background');
        add_theme_support('menus');
        add_theme_support('widgets');
    }
    add_action('after_setup_theme', 'diveintowebworld_theme_setup');

    function diveintowebworld_assets_enqueue() {
        // Style Enqueue
        wp_enqueue_style('tailwind-css', get_template_directory_uri().'/assets/css/style.css', null, VERSION);
        wp_enqueue_style('custom-css', get_template_directory_uri().'/assets/css/custom.css', null, VERSION);
        wp_enqueue_style('theme-style', get_stylesheet_uri(), null, VERSION);

        // JS Enqueue
        wp_enqueue_script('fontawesome-kit', '//kit.fontawesome.com/6305d37200.js', null, VERSION, true);
        wp_enqueue_script('alpine-js', '//cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js', null, VERSION, true);
    }
    add_action('wp_enqueue_scripts', 'diveintowebworld_assets_enqueue');


    // Show Post Counter Function

    function diveintowebworld_get_post_view() {
        $count = get_post_meta( get_the_ID(), 'post_views_count', true );
        return "$count Views";
    }
    function diveintowebworld_set_post_view() {
        $key = 'post_views_count';
        $post_id = get_the_ID();
        $count = (int) get_post_meta( $post_id, $key, true );
        $count++;
        update_post_meta( $post_id, $key, $count );
    }
    function diveintowebworld_posts_column_views( $columns ) {
        $columns['post_views'] = 'Views';
        return $columns;
    }
    function diveintowebworld_posts_custom_column_views( $column ) {
        if ( $column === 'post_views') {
            echo diveintowebworld_get_post_view();
        }
    }
    add_filter( 'manage_posts_columns', 'diveintowebworld_posts_column_views' );
    add_action( 'manage_posts_custom_column', 'diveintowebworld_posts_custom_column_views' );

    /** The Excerpt Character Limit Function
     *  Limit except length to 125 characters.
     *  tn limited excerpt length by number of characters
    **/ 
    function excerpt_char_limit($e){
        return substr($e,0,200);
    }
    add_filter('get_the_excerpt','excerpt_char_limit');