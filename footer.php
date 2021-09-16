<!-- Footer -->
<footer class="bg-gray-100">
        <div class="container mx-auto px-4 sm:px-0">
            <div class="py-12 md:py-24">
                <div class="grid grid-cols-1 xl:grid-cols-6 gap-8 sm:gap-16">
                    <div class="col-span-2">
                        <h1 class="footer-brand text-2xl">
                            <?php bloginfo( 'name' ); ?>
                        </h1>
                        <hr class="w-16 my-3 border-gray-300">

                        <p class="text-sm">
                            <?php echo get_diveintowebworld_redux_data('short_description'); ?>
                        </p>

                        <ul class="flex space-x-3 my-4">
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

                    <div>
                        <h5 class="text-gray-900 text-lg"><?php _e('Useful Links', 'diveintowebworld'); ?></h5>
                        <hr class="w-16 my-3 border-gray-300">
                        <?php
                            wp_nav_menu(array(
                                'theme_location'        =>  'useful_links',
                                'menu_class'            =>  'mt-3 space-y-1 text-gray-700',
                                'menu_id'               =>  'useful_links_menu',
                                'container'             =>  'ul',
                            ));
                        ?>
                    </div>

                    <div>
                        <h5 class="text-gray-900 text-lg"><?php _e('Reference', 'diveintowebworld') ?></h5>
                        <hr class="w-16 my-3 border-gray-300">
                        <ul class="mt-3 space-y-1 text-gray-700">
                        <?php
                            wp_nav_menu(array(
                                'theme_location'            =>  'reference_menu',
                                'menu_id'                   =>  'reference_menu',
                                'menu_class'                =>  'mt-3 space-y-1 text-gray-700',
                                'container'                 =>  'ul'
                            ));
                        ?>
                    </div>

                    <div class="col-span-2 md:col-span-2">
                        <h5 class="text-gray-900 text-lg"><i class="far mr-2 fa-envelope"></i><?php _e('Sign Up For a Newsletter', 'diveintowebworld'); ?></h5>
                        <hr class="w-16 my-3 border-gray-300">
                        <p class="pb-3 text-gray-700">
                            <?php echo get_diveintowebworld_redux_data('last_widget_area_short_desc'); ?>
                        </p>

                        <form action="">
                            <div class="flex flex-row">
                                <input class="w-full outline-none py-3 pl-3 rounded bg-white text-gray-800 focus:shadow-2xl transition duration-300" type="email" placeholder="Enter your email address">
                                <button class="bg-blue-700 shadow-2xl hover:bg-blue-800 ml-1 rounded px-5 text-white transition" type="submit"><i class="fas fa-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-12 py-6 sticky top-0 z-50 border-t border-gray-300">
            <div class="container mx-auto text-center text-gray-700">
                <?php echo get_diveintowebworld_redux_data('copyright'); ?>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>