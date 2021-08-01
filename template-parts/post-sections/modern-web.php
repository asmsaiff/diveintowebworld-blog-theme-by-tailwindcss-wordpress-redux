<?php
    $wordpress_error_fix  = new WP_Query(array(
        'posts_per_page'    =>  3,
        'tax_query'         => array(
            array(
                'taxonomy'      => 'category',
                'field'         => 'id',
                'terms'         => array( 2, 13 ),
                'operator'      => 'AND'
            )
        )
    ));
?>

<section class="pt-6 sm:pt-16 pb-8 grid xl:grid-cols-2 gap-12 px-4 sm:px-0">
    <div>
        <h2 class="section-title text-2xl font-semibold pb-1"><?php _e('WordPress Error Fix', 'diveintowebworld'); ?></h2>
        <hr>
        <?php if($wordpress_error_fix->post_count >= 1) : ?>
        <div class="grid grid-cols-1 gap-6 mt-3">
            <?php
                while($wordpress_error_fix->have_posts()) :
                    $wordpress_error_fix->the_post();
            ?>
            <div class="flex flex-col sm:flex-row sm:space-x-6 border-b sm:border-none pb-4 sm:pb-0">
                <?php
                    if(has_post_thumbnail()) {
                        the_post_thumbnail( 'large', array('class'=>'rounded-lg w-full pb-3 sm:pb-0 sm:w-36 md:w-56 h-auto self-center'));
                    }
                ?>
                
                <div>
                    <div class="flex space-x-4">
                        <div class="flex text-sm font-semibold space-x-2">
                            <h6 class="font-thin"><?php the_category(); ?></h6>
                            <span>—</span>
                            <p class="font-thin text-gray-500"><?php echo get_the_date(); ?></p>
                        </div>
                    </div>
    
                    <a href="<?php the_permalink(); ?>" class="py-1 text-xl font-bold">
                        <?php the_title(); ?>
                    </a>
    
                    <p class="text-gray-700 text-sm">
                        <?php echo get_the_excerpt(); ?>
                    </p>
                </div>
            </div>

            <?php
                endwhile;
            ?>
        </div>
        <?php
                else: echo '<h4 class="text-lg mt-6">No Posts in this Category</h4>';
            endif;
        ?>
    </div>

    <div>
        <h2 class="section-title text-2xl font-semibold pb-1">Development Roadmap</h2>
        <hr>
        <div class="mt-4 mb-8">
            <div class="flex flex-col sm:flex-row sm:space-x-6 border-b sm:border-none pb-4 sm:pb-0">
                <img src="https://preview.colorlib.com/theme/magdesign/images/ximg_4.jpg.pagespeed.ic.2DwdgZu3vw.webp" alt="" class="rounded-lg sm:w-56 h-auto self-center mb-4 sm:mb-0">
                
                <div>
                    <div class="flex space-x-4">
                        <div class="flex text-sm font-semibold space-x-2">
                            <h6 class="font-thin">Business, Travel</h6>
                            <span>—</span>
                            <p class="font-thin text-gray-500">7th July, 2021</p>
                        </div>
                    </div>
    
                    <h2 class="py-1 text-xl font-bold">Your most unhappy customers are your greatest source of learning.</h2>
    
                    <p class="text-gray-700 text-sm">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam eum quisquam aspernatur iusto ratione ad inventore deserunt velit....
                    </p>
                </div>
            </div>
        </div>
        <div class="grid sm:grid-cols-2 gap-10">
            <div class="border-b sm:border-none pb-4 sm:pb-0">
                <div class="flex space-x-4">
                    <div class="flex text-sm font-semibold space-x-2">
                        <h6 class="font-thin">Business, Travel</h6>
                        <span>—</span>
                        <p class="font-thin text-gray-500">7th July, 2021</p>
                    </div>
                </div>

                <h2 class="py-1 text-lg font-bold">Your most unhappy customers are your greatest source of learning.</h2>

                <p class="text-gray-700 text-sm">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam eum quisquam aspernatur iusto ratione ad inventore....
                </p>
            </div>

            <div class="border-b sm:border-none pb-4 sm:pb-0">
                <div class="flex space-x-4">
                    <div class="flex text-sm font-semibold space-x-2">
                        <h6 class="font-thin">Business, Travel</h6>
                        <span>—</span>
                        <p class="font-thin text-gray-500">7th July, 2021</p>
                    </div>
                </div>

                <h2 class="py-1 text-lg font-bold">Your most unhappy customers are your greatest source of learning.</h2>

                <p class="text-gray-700 text-sm">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam eum quisquam aspernatur iusto ratione ad inventore....
                </p>
            </div>

            <div class="border-b sm:border-none pb-4 sm:pb-0">
                <div class="flex space-x-4">
                    <div class="flex text-sm font-semibold space-x-2">
                        <h6 class="font-thin">Business, Travel</h6>
                        <span>—</span>
                        <p class="font-thin text-gray-500">7th July, 2021</p>
                    </div>
                </div>

                <h2 class="py-1 text-lg font-bold">Your most unhappy customers are your greatest source of learning.</h2>

                <p class="text-gray-700 text-sm">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam eum quisquam aspernatur iusto ratione ad inventore....
                </p>
            </div>

            <div class="border-b sm:border-none pb-4 sm:pb-0">
                <div class="flex space-x-4">
                    <div class="flex text-sm font-semibold space-x-2">
                        <h6 class="font-thin">Business, Travel</h6>
                        <span>—</span>
                        <p class="font-thin text-gray-500">7th July, 2021</p>
                    </div>
                </div>

                <h2 class="py-1 text-lg font-bold">Your most unhappy customers are your greatest source of learning.</h2>

                <p class="text-gray-700 text-sm">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam eum quisquam aspernatur iusto ratione ad inventore....
                </p>
            </div>
        </div>
    </div>
</section>