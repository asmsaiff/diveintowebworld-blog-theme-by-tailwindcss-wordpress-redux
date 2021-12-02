<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'title' ); ?> - <?php bloginfo( 'description' ); ?></title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;400&family=Parisienne&family=Philosopher:ital@0;1&display=swap" rel="stylesheet">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-XW8PS97XNV"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-XW8PS97XNV');
	</script>

    <?php wp_head(); ?>
</head>
<body class="drawer drawer--right">
    <!-- Site Header -->
    <header class="border-t-4 border-blue-600 sticky top-0 z-50">
        <div class="shadow-lg z-20 bg-white">
            <div class="px-2 md:px-4 container mx-auto lg:px-0 pt-2 md:pb-2 border-b border-gray-300">
                <div class="flex flex-col md:flex-row justify-between text-sm">
                    <div class="flex justify-between md:justify-start text-left">
                        <div class="hidden md:block mr-2 md:border-r border-gray-300 pr-2">
                            <h6 class="w-20 md:w-auto text-right">
                                <span id="current_day"></span>,
                                <?php echo date(get_option('date_format')); ?>
                            </h6>
                        </div>
                        <div class="pl-0 md:pl-0 ml-0 md:ml-2 md:mt-0 mt-2">
                            <?php echo do_shortcode('[gtranslate]'); ?>
                        </div>
                    </div>
                    <div class="flex justify-center md:justify-start mt-3 md:mt-0 space-x-4">
                        <div class="hidden md:block">
                            <ul class="flex space-x-2 border-r pr-4">
                                <li><a href="#!" class="hover:underline">Login</a></li>
                                <li><a href="#!" class="hover:underline">Forum</a></li>
                            </ul>
                        </div>

                        <div class="hidden md:block">
                            <?php
                                wp_nav_menu(array(
                                    'theme_location'        =>  'tos_menu',
                                    'menu_class'            =>  'flex space-x-2 border-r pr-4',
                                    'menu_id'               =>  'tos-menu',
                                    'container'         =>  'ul'
                                ));
                            ?>
                        </div>
                        <ul class="flex space-x-3 -mt-8 md:-mt-0 absolute md:relative right-4 md:right-0">
                            <?php if(get_diveintowebworld_redux_data('facebook')) : ?>
                            <li>
                                <a href="<?php echo get_diveintowebworld_redux_data('facebook'); ?>">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <?php
                                endif;

                                if(get_diveintowebworld_redux_data('linked_in')) :
                            ?>
                            <li>
                                <a href="<?php echo get_diveintowebworld_redux_data('linked_in'); ?>">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                            <?php
                                endif;

                                if(get_diveintowebworld_redux_data('twitter')) :
                            ?>
                            <li>
                                <a href="<?php echo get_diveintowebworld_redux_data('twitter'); ?>">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="py-4 sticky top-0">
                <div class="px-2 md:px-4 lg:px-0 container mx-auto flex justify-between">
                    <a href="<?php echo home_url(); ?>" class="brand font-thin text-xl">
                        <?php bloginfo( 'title' ); ?>
                    </a>

                    <div class="flex">
                        <button class="inline-block lg:hidden w-8 h-8 text-gray-600 p-1 mr-4 md:mr-0">
                            <span id="open">
                                <svg role="img" class="ast-mobile-svg ast-menu-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M3 13h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1zM3 7h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1zM3 19h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1z"></path></svg>
                            </span>
                            <span id="close" style="display: none;">
                                <svg class="ast-mobile-svg ast-close-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5.293 6.707l5.293 5.293-5.293 5.293c-0.391 0.391-0.391 1.024 0 1.414s1.024 0.391 1.414 0l5.293-5.293 5.293 5.293c0.391 0.391 1.024 0.391 1.414 0s0.391-1.024 0-1.414l-5.293-5.293 5.293-5.293c0.391-0.391 0.391-1.024 0-1.414s-1.024-0.391-1.414 0l-5.293 5.293-5.293-5.293c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414z"></path></svg>
                            </span>
                        </button>

                        <?php
                            wp_nav_menu(array(
                                'theme-location'    =>  'primary_menu',
                                'menu_class'        =>  '',
                                'menu_id'           =>  'primary_menu',
                                'container'         =>  '',
                                'items_wrap'        =>  '<ul id="primary_menu" class="absolute lg:relative top-16 left-0 lg:top-0 z-20 md:flex flex-col lg:flex-row lg:space-x-4 font-thin w-full lg:w-auto bg-white shadow-md md:rounded-none md:shadow-none lg:bg-transparent pt-0 md:p-0 mr-4 px-2 md:px-4 lg:px-0 pb-3 lg:pb-0" style="visibility: hidden;">%3$s</ul>'
                            ));
                        ?>
                        <div class="flex border-l border-gray-300 pl-4">
                            <button><i class="far fa-user-circle self-center"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>