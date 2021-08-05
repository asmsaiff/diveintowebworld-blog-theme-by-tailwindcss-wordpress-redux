<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'title' ); ?></title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;400&family=Parisienne&family=Philosopher:ital@0;1&display=swap" rel="stylesheet"> 

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
                            <h4 class="w-20 md:w-auto text-right">
                                <span id="current_day"></span>,
                                <?php echo date(get_option('date_format')); ?>
                            </h4>
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
                            <ul class="flex space-x-2 border-r pr-4">
                                <li><a href="#!" class="hover:underline">Terms & Conditions</a></li>
                                <li><a href="#!" class="hover:underline">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <ul class="flex space-x-3 -mt-8 md:-mt-0 absolute md:relative right-4 md:right-0">
                            <li><a href="#!"><i class="fab fab fa-facebook-f"></i></a></li>
                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#!"><i class="fab far fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="py-4 sticky top-0">
                <div class="px-2 md:px-4 lg:px-0 container mx-auto flex justify-between">
                    <a href="<?php echo home_url(); ?>" class="brand font-thin text-xl">
                        <?php bloginfo( 'title' ); ?>
                    </a>

                    <div class="flex" x-data="{ mobileMenuOpen : false }">
                        <button @click="mobileMenuOpen = !mobileMenuOpen" class="inline-block md:hidden w-8 h-8 bg-gray-200 text-gray-600 p-1">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                        </button>

                        <?php
                            $diww_pri_menu = wp_nav_menu(array(
                                'theme-location'    =>  'primary_menu',
                                'menu_class'        =>  'absolute md:relative top-16 left-0 md:top-0 z-20 md:flex flex-col md:flex-row md:space-x-4 font-thin w-full md:w-auto bg-white shadow-md md:rounded-none md:shadow-none md:bg-transparent pt-0 md:p-0 mr-4 px-2 md:px-0',
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