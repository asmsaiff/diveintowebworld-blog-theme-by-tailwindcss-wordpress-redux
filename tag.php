<?php
    get_header();
?>

    <!-- Category Post Section -->
    <section class="container mx-auto sm:pt-16 lg:pt-0 pb-8 gap-12 px-4 sm:px-0 mt-12">
        <h2 class="section-title text-2xl font-semibold pb-1">You searched for - <?php echo single_tag_title(); ?></h2>
        <hr>
        <?php if(have_posts()) : ?>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-3 mb-6">
            <?php
                while(have_posts()) :
                    the_post();
            ?>

            <div class="border-b sm:border-none pb-4 sm:pb-0">
                <?php
                    if(has_post_thumbnail()) {
                        the_post_thumbnail('large', array('class'=>'rounded-lg'));
                    }
                ?>
                <div class="flex space-x-4 mt-6">
                    <div class="flex text-sm font-semibold space-x-2">
                        <h6 class="font-thin">Business, Travel</h6>
                        <span>—</span>
                        <p class="font-thin text-gray-500"><?php echo get_the_date(); ?></p>
                    </div>
                </div>

                <h2 class="py-1 text-xl font-bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                <p class="mb-6 mt-2 text-gray-700">
                    <?php
                        echo get_the_excerpt();
                    ?>
                </p>

                <div class="flex space-x-2">
                    <img src="https://preview.colorlib.com/theme/magdesign/images/xperson_1.jpg.pagespeed.ic.Zebptmx_f8.webp" alt="" class="rounded-full w-10 h-10">

                    <div>
                        <h4 class="font-semibold">John Doe</h4>
                        <p class="text-sm text-gray-500">CEO and Founder</p>
                    </div>
                </div>
            </div>

            <?php
                    endwhile;
            ?>
        </div>

        <!-- Pagination -->
        <ul class="flex mt-20 w-max mx-auto">
            <li class="bg-gray-100 hover:bg-blue-600 hover:text-white transition-all duration-200 cursor-pointer w-8 h-8 rounded-full flex mr-3"><i class="fas fa-arrow-left self-center text-center w-full text-sm"></i></li>
            <li class="self-center px-2 cursor-pointer hover:text-white rounded-sm hover:bg-blue-600 transition-all duration-200">1</li>
            <li class="self-center px-2 cursor-pointer hover:text-white rounded-sm hover:bg-blue-600 transition-all duration-200">2</li>
            <li class="self-center px-2 cursor-pointer hover:text-white rounded-sm hover:bg-blue-600 transition-all duration-200">3</li>
            <li class="self-center px-2 cursor-pointer hover:text-white rounded-sm hover:bg-blue-600 transition-all duration-200">4</li>
            <li class="self-center px-2 cursor-pointer hover:text-white rounded-sm hover:bg-blue-600 transition-all duration-200">5</li>
            <li class="bg-gray-100 hover:bg-blue-600 hover:text-white transition-all duration-200 cursor-pointer w-8 h-8 rounded-full flex ml-3"><i class="fas fa-arrow-right self-center text-center w-full text-sm"></i></li>
        </ul>
        
        <?php endif; ?>
    </section>

    <?php
        get_footer();