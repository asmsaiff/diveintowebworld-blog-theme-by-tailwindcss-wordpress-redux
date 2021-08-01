<?php
    $diveintowebworld_popular_posts = new WP_Query(array(
        'posts_per_page'            =>  5,
        'orderby'                   =>  'comment_count'
    ));
?>

<div class="top-32 sticky">
    <h2 class="section-title text-2xl font-semibold pb-1">Most Popular</h2>
    <hr>
    <div class="grid gap-4 mt-2">
        <div class="flex space-x-3 border-b sm:border-none pb-4 sm:pb-0">
            <img src="https://preview.colorlib.com/theme/magdesign/images/ximg_4.jpg.pagespeed.ic.2DwdgZu3vw.webp" alt="" class="rounded-lg w-40 lg:w-24 h-auto self-center hidden sm:block lg:hidden xl:block">
            
            <div>
                <div class="flex space-x-4">
                    <div class="flex text-sm font-semibold space-x-2">
                        <h6 class="font-thin">Business, Travel</h6>
                        <span>—</span>
                        <p class="font-thin text-gray-500">7th July, 2021</p>
                    </div>
                </div>

                <h2 class="py-1 font-semibold text-sm">Your most unhappy customers are your greatest source of learning.</h2>

                <p class="text-sm block lg:hidden">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi molestias debitis nam facere modi doloremque nostrum recusandae excepturi saepe eaque. Nobis accusantium quasi hic voluptatem!
                </p>
            </div>
        </div>
        
        <div class="flex space-x-3 border-b sm:border-none pb-4 sm:pb-0">
            <img src="https://preview.colorlib.com/theme/magdesign/images/ximg_4.jpg.pagespeed.ic.2DwdgZu3vw.webp" alt="" class="rounded-lg w-40 lg:w-24 h-auto self-center hidden sm:block lg:hidden xl:block">
            
            <div>
                <div class="flex space-x-4">
                    <div class="flex text-sm font-semibold space-x-2">
                        <h6 class="font-thin">Business, Travel</h6>
                        <span>—</span>
                        <p class="font-thin text-gray-500">7th July, 2021</p>
                    </div>
                </div>

                <h2 class="py-1 font-semibold text-sm">Your most unhappy customers are your greatest source of learning.</h2>

                <p class="text-sm block lg:hidden">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi molestias debitis nam facere modi doloremque nostrum recusandae excepturi saepe eaque. Nobis accusantium quasi hic voluptatem!
                </p>
            </div>
        </div>

        <div class="flex space-x-3 border-b sm:border-none pb-4 sm:pb-0">
            <img src="https://preview.colorlib.com/theme/magdesign/images/ximg_4.jpg.pagespeed.ic.2DwdgZu3vw.webp" alt="" class="rounded-lg w-40 lg:w-24 h-auto self-center hidden sm:block lg:hidden xl:block">
            
            <div>
                <div class="flex space-x-4">
                    <div class="flex text-sm font-semibold space-x-2">
                        <h6 class="font-thin">Business, Travel</h6>
                        <span>—</span>
                        <p class="font-thin text-gray-500">7th July, 2021</p>
                    </div>
                </div>

                <h2 class="py-1 font-semibold text-sm">Your most unhappy customers are your greatest source of learning.</h2>

                <p class="text-sm block lg:hidden">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi molestias debitis nam facere modi doloremque nostrum recusandae excepturi saepe eaque. Nobis accusantium quasi hic voluptatem!
                </p>
            </div>
        </div>

        <div class="flex space-x-3 border-b sm:border-none pb-4 sm:pb-0">
            <img src="https://preview.colorlib.com/theme/magdesign/images/ximg_4.jpg.pagespeed.ic.2DwdgZu3vw.webp" alt="" class="rounded-lg w-40 lg:w-24 h-auto self-center hidden sm:block lg:hidden xl:block">
            
            <div>
                <div class="flex space-x-4">
                    <div class="flex text-sm font-semibold space-x-2">
                        <h6 class="font-thin">Business, Travel</h6>
                        <span>—</span>
                        <p class="font-thin text-gray-500">7th July, 2021</p>
                    </div>
                </div>

                <h2 class="py-1 font-semibold text-sm">Your most unhappy customers are your greatest source of learning.</h2>

                <p class="text-sm block lg:hidden">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi molestias debitis nam facere modi doloremque nostrum recusandae excepturi saepe eaque. Nobis accusantium quasi hic voluptatem!
                </p>
            </div>
        </div>

        <div class="flex space-x-3 border-b sm:border-none pb-4 sm:pb-0">
            <img src="https://preview.colorlib.com/theme/magdesign/images/ximg_4.jpg.pagespeed.ic.2DwdgZu3vw.webp" alt="" class="rounded-lg w-40 lg:w-24 h-auto self-center hidden sm:block lg:hidden xl:block">
            
            <div>
                <div class="flex space-x-4">
                    <div class="flex text-sm font-semibold space-x-2">
                        <h6 class="font-thin">Business, Travel</h6>
                        <span>—</span>
                        <p class="font-thin text-gray-500">7th July, 2021</p>
                    </div>
                </div>

                <h2 class="py-1 font-semibold text-sm">Your most unhappy customers are your greatest source of learning.</h2>

                <p class="text-sm block lg:hidden">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi molestias debitis nam facere modi doloremque nostrum recusandae excepturi saepe eaque. Nobis accusantium quasi hic voluptatem!
                </p>
            </div>
        </div>
    </div>

    <h2 class="section-title text-2xl font-semibold pb-1 mt-6">Popular Categories</h2>
    <hr class="mb-6">

    <?php
        if(is_active_sidebar('diveintowebworld_popular_category_sidebar')) {
            dynamic_sidebar( 'diveintowebworld_popular_category_sidebar' );
        } 
    ?>
</div>