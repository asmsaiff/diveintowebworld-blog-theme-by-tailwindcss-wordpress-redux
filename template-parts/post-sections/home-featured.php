<!-- Featured Posts -->
<div class="container mx-auto">
        <section class="pb-8 grid grid-cols-2 md:gap-4">
            <?php
                $diveintowebworld_latest_posts = new WP_Query(array(
                    'post_type'             =>  'post',
                    'posts_per_page'        =>  5
                ));

                if($diveintowebworld_latest_posts->have_posts()) {
                    $featured_post_data = array();
                    while($diveintowebworld_latest_posts->have_posts()) {
                        $diveintowebworld_latest_posts->the_post();

                        $categories = get_the_category();
                        $category = $categories[mt_rand(0,count($categories)-1)];

                        $featured_post_data[] = array(
                            'title'             =>  get_the_title(),
                            'date'              =>  get_the_date(),
                            'category'          =>  $category->name,
                            "thumbnail"         =>  get_the_post_thumbnail_url(get_the_ID(),"large"),
                            'permalink'         =>  get_permalink(),
                        );
                    }
                }

                wp_reset_query();
            ?>

            <a href="<?php echo esc_url($featured_post_data[0]['permalink']); ?>" class="col-span-2 md:col-span-1 h-72 sm:h-96 lg:h-0 featured-image bg-cover bg-no-repeat bg-gray-700 bg-blend-overlay p-6 flex flex-col min-h-full" style="background-image:url('<?php echo esc_url($featured_post_data[0]['thumbnail']); ?>');">
                <div class="flex-grow"></div>
                <div class="bottom-0 text-white">
                    <div class="flex space-x-4 mt-6">
                        <div class="flex text-sm font-semibold space-x-2">
                            <h6 class="font-thin">
                                <?php echo esc_html( $featured_post_data[0]['category'] ); ?>
                            </h6>
                            <span>—</span>
                            <p class="font-thin text-gray-50"><?php echo esc_html( $featured_post_data[0]['date'] ); ?></p>
                        </div>
                    </div>
    
                    <h2 class="py-1 text-xl font-bold hover:underline">
                        <?php echo esc_html( $featured_post_data[0]['title'] ); ?>
                    </h2>
                </div>
            </a>
            <div class="col-span-3 md:col-span-1 grid grid-cols-2 md:gap-4">
                <?php
                    for($i = 1; $i < 5; $i++) :
                ?>
                <a href="<?php echo esc_url($featured_post_data[$i]['permalink']); ?>" class="featured-image bg-cover bg-no-repeat bg-gray-700 bg-blend-overlay p-2 sm:p-6 md:h-56 flex flex-col" style="background-image:url('<?php echo esc_url($featured_post_data[$i]['thumbnail']); ?>');">
                    <div class="sm:flex-grow"></div>
                    <div class="bottom-0 text-white">
                        <div class="flex space-x-4 mt-6">
                            <div class="flex flex-col xl:flex-row text-sm font-semibold space-x-0 xl:space-x-2">
                                <h6 class="font-thin">
                                    <?php echo esc_html( $featured_post_data[$i]['category'] ); ?>
                                </h6>
                                <span>—</span>
                                <p class="font-thin text-gray-50">
                                    <?php echo esc_html( $featured_post_data[$i]['date'] ); ?>
                                </p>
                            </div>
                        </div>
        
                        <h2 class="py-1 text-sm lg:text-base font-bold hover:underline">
                            <?php echo esc_html( $featured_post_data[$i]['title'] ); ?>
                        </h2>
                    </div>
                </a>

                <?php
                    endfor;
                ?>
            </div>
        </section>
    </div>