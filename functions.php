<?php
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
        wp_enqueue_style('tailwind-css', get_template_directory_uri().'/assets/css/style.css');
        wp_enqueue_style('custom-css', get_template_directory_uri().'/assets/css/custom.css');
        wp_enqueue_style('theme-style', get_stylesheet_uri());

        // JS Enqueue
        wp_enqueue_script('fontawesome-kit', '//kit.fontawesome.com/6305d37200.js');
        wp_enqueue_script('alpine-js', '//cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js', null, time(), true);
    }
    add_action('wp_enqueue_scripts', 'diveintowebworld_assets_enqueue');