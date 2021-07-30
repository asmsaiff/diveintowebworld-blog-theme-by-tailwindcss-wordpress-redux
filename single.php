<?php
    get_header();

    the_post();
?>

    <!-- Main Content Body -->
    <main>
        
        <div class="bg-gray-50">
            <div class="container md:mx-auto px-2 md:px-4 lg:px-0 py-8 md:py-16 lg:py-20">
                <h1 class="text-2xl md:text-4xl font-thin">
                    <?php the_title(); ?>
                </h1>

                <div class="flex mt-3 divide-x divide-gray-300">
                    <span class="flex pr-2 text-sm">
                        <i class="invisible sm:visible -ml-4 sm:-ml-0 far fa-user-circle self-center mr-1"></i>
                        <h6><?php the_author(); ?></h6>
                    </span>
                    <span class="px-2 text-sm">
                        <i class="invisible sm:visible -ml-4 sm:-ml-0 far fa-calendar-alt mr-1"></i>
                        <a href=""><?php echo get_the_date(); ?></a>
                    </span>
                    <span class="px-2 text-sm">
                        <i class="invisible sm:visible -ml-4 sm:-ml-0 fas fa-link self-center mr-1"></i>
                        <a href=""><?php single_cat_title(); ?></a>
                    </span>
                    <span class="px-2 text-sm">
                        <i class="invisible sm:visible -ml-4 sm:-ml-0 fab fa-cloudscale mr-1"></i>
                        <a href="">20 Views</a>
                    </span>
                </div>
            </div>
        </div>

        <div class="px-4 lg:px-0 container mx-auto grid sm:grid-cols-9 pb-12 mt-4 md:mt-12 gap-6 xl:gap-12">
            <div class="col-span-1 row-start-2 sm:row-auto">
                <div class="flex md:float-right top-36 sm:sticky">
                    <div class="flex">
                        <i class="fas fa-share self-center pr-1 sm:pr-4 text-gray-400"></i>
                        <span class="ml-1 block sm:hidden w-max sm:w-auto self-center text-sm mr-2">Share Posts — </span>
                    </div>
                    <div class="flex flex-row sm:flex-col sm:space-y-4 space-x-2 sm:space-x-0">
                        <a href="" class="w-8 h-8 bg-gray-100 hover:bg-blue-600 text-center leading-relaxed text-gray-400 hover:text-white rounded-full p-1 transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <a href="" class="w-8 h-8 bg-gray-100 hover:bg-blue-400 text-center leading-relaxed text-gray-400 hover:text-white rounded-full p-1 transition duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        
                        <a href="" class="w-8 h-8 bg-gray-100 hover:bg-gray-600 text-center leading-relaxed text-gray-400 hover:text-white rounded-full p-1 transition duration-300">
                            <i class="far fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row-start-1 sm:row-auto col-span-5 sm:col-span-9 xl:col-span-5">
                <?php
                    if(has_post_thumbnail()) {
                        the_post_thumbnail('large', array('class'=>'mb-10 rounded'));
                    }

                    the_content(); ?>

                <div class="mt-8 border-t py-8 rounded-sm">
                    <div class="grid grid-cols-1 md:grid-cols-2 md:divide-x divide-y sm:divide-y-0">
                        <a href="#!" class="pb-6 sm:pb-0">
                            <div class="flex uppercase prev_next_post_label text-gray-700">
                                <i class="fas fa-caret-left self-center mr-1 leading-3"></i>
                                <span>previous post</span>
                            </div>
                            <h4>Lorem ipsum dolor sit amet.</h4>
                        </a>
        
                        <a href="#!" class="text-right pt-6 sm:pt-0">
                            <div class="inline-block">
                                <div class="flex uppercase prev_next_post_label text-gray-700">
                                    <span>next post</span>
                                    <i class="fas fa-caret-right self-center ml-1 leading-3"></i>
                                </div>
                            </div>
                            <h4>Lorem ipsum dolor sit amet.</h4>
                        </a>
                    </div>
                </div>
        
                <div class="border-t py-8 rounded-sm">
                    <h1 class="text-gray-600">You can't comment right now in this post.</h1>
                </div>
            </div>

            <div class="col-span-5 sm:col-span-9 xl:col-span-3">
                <div class="top-32 sticky">
                    <h2 class="section-title text-2xl font-semibold pb-1">Related Posts</h2>
                    <hr>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-1 gap-4 mt-2">
                        <div class="flex flex-col xl:flex-row border-b sm:border-none pb-4 sm:pb-0 w-full">
                            <img src="https://preview.colorlib.com/theme/magdesign/images/ximg_4.jpg.pagespeed.ic.2DwdgZu3vw.webp" alt="" class="rounded-lg w-40 lg:w-24 h-auto self-center hidden xl:block xl:mr-3">
                            
                            <div>
                                <div class="flex space-x-4">
                                    <div class="flex text-sm font-semibold space-x-2">
                                        <h6 class="font-thin">Business, Travel</h6>
                                        <span>—</span>
                                        <p class="font-thin text-gray-500">7th July, 2021</p>
                                    </div>
                                </div>

                                <h2 class="py-1 leading-5">Your most unhappy customers are your greatest source of learning.</h2>

                                <p class="text-sm block xl:hidden">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi molestias debitis nam facere modi doloremque nostrum recusandae excepturi saepe eaque. Nobis accusantium quasi hic voluptatem!
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex flex-col xl:flex-row border-b sm:border-none pb-4 sm:pb-0">
                            <img src="https://preview.colorlib.com/theme/magdesign/images/ximg_4.jpg.pagespeed.ic.2DwdgZu3vw.webp" alt="" class="rounded-lg w-40 lg:w-24 h-auto self-center hidden xl:block xl:mr-3">
                            
                            <div>
                                <div class="flex space-x-4">
                                    <div class="flex text-sm font-semibold space-x-2">
                                        <h6 class="font-thin">Business, Travel</h6>
                                        <span>—</span>
                                        <p class="font-thin text-gray-500">7th July, 2021</p>
                                    </div>
                                </div>

                                <h2 class="py-1 leading-5">Your most unhappy customers are your greatest source of learning.</h2>

                                <p class="text-sm block xl:hidden">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi molestias debitis nam facere modi doloremque nostrum recusandae excepturi saepe eaque. Nobis accusantium quasi hic voluptatem!
                                </p>
                            </div>
                        </div>

                        <div class="flex flex-col xl:flex-row border-b sm:border-none pb-4 sm:pb-0">
                            <img src="https://preview.colorlib.com/theme/magdesign/images/ximg_4.jpg.pagespeed.ic.2DwdgZu3vw.webp" alt="" class="rounded-lg w-40 lg:w-24 h-auto self-center hidden xl:block xl:mr-3">
                            
                            <div>
                                <div class="flex space-x-4">
                                    <div class="flex text-sm font-semibold space-x-2">
                                        <h6 class="font-thin">Business, Travel</h6>
                                        <span>—</span>
                                        <p class="font-thin text-gray-500">7th July, 2021</p>
                                    </div>
                                </div>

                                <h2 class="py-1 leading-5">Your most unhappy customers are your greatest source of learning.</h2>

                                <p class="text-sm block xl:hidden">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi molestias debitis nam facere modi doloremque nostrum recusandae excepturi saepe eaque. Nobis accusantium quasi hic voluptatem!
                                </p>
                            </div>
                        </div>

                        <div class="flex flex-col xl:flex-row border-b sm:border-none pb-4 sm:pb-0">
                            <img src="https://preview.colorlib.com/theme/magdesign/images/ximg_4.jpg.pagespeed.ic.2DwdgZu3vw.webp" alt="" class="rounded-lg w-40 lg:w-24 h-auto self-center hidden xl:block xl:mr-3">
                            
                            <div>
                                <div class="flex space-x-4">
                                    <div class="flex text-sm font-semibold space-x-2">
                                        <h6 class="font-thin">Business, Travel</h6>
                                        <span>—</span>
                                        <p class="font-thin text-gray-500">7th July, 2021</p>
                                    </div>
                                </div>

                                <h2 class="py-1 leading-5">Your most unhappy customers are your greatest source of learning.</h2>

                                <p class="text-sm block xl:hidden">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi molestias debitis nam facere modi doloremque nostrum recusandae excepturi saepe eaque. Nobis accusantium quasi hic voluptatem!
                                </p>
                            </div>
                        </div>

                        <div class="flex flex-col xl:flex-row border-b sm:border-none pb-4 sm:pb-0">
                            <img src="https://preview.colorlib.com/theme/magdesign/images/ximg_4.jpg.pagespeed.ic.2DwdgZu3vw.webp" alt="" class="rounded-lg w-40 lg:w-24 h-auto self-center hidden xl:block xl:mr-3">
                            
                            <div>
                                <div class="flex space-x-4">
                                    <div class="flex text-sm font-semibold space-x-2">
                                        <h6 class="font-thin">Business, Travel</h6>
                                        <span>—</span>
                                        <p class="font-thin text-gray-500">7th July, 2021</p>
                                    </div>
                                </div>

                                <h2 class="py-1 leading-5">Your most unhappy customers are your greatest source of learning.</h2>

                                <p class="text-sm block xl:hidden">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi molestias debitis nam facere modi doloremque nostrum recusandae excepturi saepe eaque. Nobis accusantium quasi hic voluptatem!
                                </p>
                            </div>
                        </div>

                        <div class="flex flex-col xl:flex-row border-b sm:border-none pb-4 sm:pb-0">
                            <img src="https://preview.colorlib.com/theme/magdesign/images/ximg_4.jpg.pagespeed.ic.2DwdgZu3vw.webp" alt="" class="rounded-lg w-40 lg:w-24 h-auto self-center hidden xl:block xl:mr-3">
                            
                            <div>
                                <div class="flex space-x-4">
                                    <div class="flex text-sm font-semibold space-x-2">
                                        <h6 class="font-thin">Business, Travel</h6>
                                        <span>—</span>
                                        <p class="font-thin text-gray-500">7th July, 2021</p>
                                    </div>
                                </div>

                                <h2 class="py-1 leading-5">Your most unhappy customers are your greatest source of learning.</h2>

                                <p class="text-sm block xl:hidden">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi molestias debitis nam facere modi doloremque nostrum recusandae excepturi saepe eaque. Nobis accusantium quasi hic voluptatem!
                                </p>
                            </div>
                        </div>
                    </div>

                    <h2 class="section-title text-2xl font-semibold pb-1 mt-6">Popular Categories</h2>
                    <hr class="mb-6">

                    Popular Categories Widget
                </div>
            </div>
        </div>
    </main>

    <?php
        get_footer();