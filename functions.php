<?php
    require_once( get_theme_file_path( '/inc/diveintowebworld-plugins.php' ) );

    // Option Panel
    require_once( get_theme_file_path( '/inc/options-panel/redux-config.php' ) );
    
    if ( site_url() == "http://localhost/diww/" ) {
        define( "VERSION", time() );
    } else {
        define( "VERSION", wp_get_theme()->get( "Version" ) );
    }

    function diveintowebworld_theme_setup() {
        // Load Theme Textdomain
        load_theme_textdomain('diveintowebworld');

        // Theme Supports
        add_theme_support('title-tag');
        add_theme_support('description');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-header');
        add_theme_support('custom-background');
        add_theme_support('menus');
        add_theme_support('widgets');

        register_nav_menus( array(
            'primary_menu'      =>  __('Primary Menu', 'diveintowebworld'),
            'tos_menu'          =>  __('TOS Menu', 'diveintowebworld'),
            'useful_links'      =>  __('Footer Useful Links Menu', 'diveintowebworld'),
            'reference_menu'      =>  __('Reference Links', 'diveintowebworld'),
        ));
    }
    add_action('after_setup_theme', 'diveintowebworld_theme_setup');

    function diveintowebworld_assets_enqueue() {
        // Style Enqueue
        wp_enqueue_style('tailwind-css', get_template_directory_uri().'/assets/css/style.css', null, VERSION);
        wp_enqueue_style('custom-css', get_template_directory_uri().'/assets/css/custom.css', null, VERSION);
        wp_enqueue_style('theme-style', get_stylesheet_uri(), null, VERSION);

        // JS Enqueue
        wp_enqueue_script('fontawesome-kit', '//kit.fontawesome.com/6305d37200.js', null, VERSION, true);
        wp_enqueue_script('app-js', get_template_directory_uri().'/assets/js/app.js', null, VERSION, true);
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

    function diveintowebworld_widgets_register() {
        register_sidebar(array(
            'id'            =>  'diveintowebworld_popular_category_sidebar',
            'name'          =>  __('Popular Category', 'diveintowebworld'),
            'description'   =>  __('Popular Categories with post count', 'diveintowebworld'),
            'before_widget' =>  '',
            'after_widget'  =>  '',
            'before_title'  =>  '',
            'after_title'   =>  '',
        ));
    }
    add_action('widgets_init', 'diveintowebworld_widgets_register');


    // Post Pagination
    function diveintowebworld_post_pagination() {
        global $wp_query;
        $pagination = paginate_links(array(
            'current'   => max(1, get_query_var('paged')),
            'total'     =>  $wp_query->max_num_pages,
            'prev_text' =>  '<i class="fas fa-arrow-left self-center text-center w-full text-sm"></i>',
            'next_text' =>  '<i class="fas fa-arrow-right self-center text-center w-full text-sm"></i>',
        ));

        $pagination = str_replace('<a class="page-numbers', '<a class="mx-1 page-numbers self-center px-2 cursor-pointer hover:text-white rounded-sm hover:bg-blue-600 transition-all duration-200', $pagination);
        $pagination = str_replace('<span aria-current="page" class="page-numbers current', '<p class="self-center px-2 cursor-pointer text-white rounded-sm bg-blue-600 transition-all duration-200', $pagination);
        $pagination = str_replace('</span>', '</p>', $pagination);
        $pagination = str_replace('prev page-numbers', 'bg-gray-100 hover:bg-blue-600 hover:text-white transition-all duration-200 cursor-pointer w-8 h-8 rounded-full flex mr-3', $pagination);
        $pagination = str_replace('next page-numbers', 'bg-gray-100 hover:bg-blue-600 hover:text-white transition-all duration-200 cursor-pointer w-8 h-8 rounded-full flex ml-3', $pagination);

        echo $pagination;
    }

    function diveintowebworld_menu_classes($classes, $item, $args) {
        $classes[] = 'w-max';
        return $classes;
    }
    add_filter('nav_menu_css_class', 'diveintowebworld_menu_classes', 1, 3);

    function get_diveintowebworld_redux_data($key, $default = '') {
        if(class_exists('Redux')) {
            return Redux::get_option('diveintowebworld_options_data', $key, $default);
        } else {
            return $default;
        }
    }