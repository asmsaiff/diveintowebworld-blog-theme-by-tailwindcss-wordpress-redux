<?php
    $wordpress_error_fix  = new WP_Query(array(
        'posts_per_page'    =>  3,
        'tax_query' => array(
            'relation' => 'AND',
            array(
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => array( 'wordpress' ),
            ),
            array(
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => array( 'fix-error' ),
            ),
        ),
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

                    $categories = get_the_category();
                    $category = $categories[mt_rand(0,count($categories)-1)];
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
                            <h6 class="font-thin"><?php echo $category->name; ?></h6>
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
            wp_reset_query();
        ?>
    </div>

    <?php
        $diveintowebworld_dev_roadmap = new WP_Query(array(
            'category_name'         => 'Guidelines & Roadmaps',
            'posts_per_page'        =>  5
        ));

        $roadmap_post_data = array();

        if($diveintowebworld_dev_roadmap->have_posts()) {
            while($diveintowebworld_dev_roadmap->have_posts()) {
                $diveintowebworld_dev_roadmap->the_post();

                $categories = get_the_category();
                $category = $categories[mt_rand(0,count($categories)-1)];

                $roadmap_post_data[] = array(
                    'title'             =>  get_the_title(),
                    'date'              =>  get_the_date(),
                    'category'          =>  $category->name,
                    "thumbnail"         =>  get_the_post_thumbnail_url(get_the_ID(),"large"),
                    'permalink'         =>  get_permalink(),
                    'excerpt'           =>  get_the_excerpt(),
                );
            };
        };

        if($diveintowebworld_dev_roadmap->post_count > 1) :
    ?>
    <div>
        <h2 class="section-title text-2xl font-semibold pb-1">
            <?php _e('Development Roadmap', 'diveintowebworld'); ?>
        </h2>
        <hr>
        <div class="mt-4 mb-8">
            <div class="flex flex-col sm:flex-row sm:space-x-6 border-b sm:border-none pb-4 sm:pb-0">
                <a href="<?php echo esc_url($roadmap_post_data[0]['permalink']); ?>">
                    <img src="<?php echo esc_url($roadmap_post_data[0]['thumbnail']); ?>" alt="" class="rounded-lg w-96 h-auto self-center mb-4 sm:mb-0">
                </a>
                <div>
                    <div class="flex space-x-4">
                        <div class="flex text-sm font-semibold space-x-2">
                            <h6 class="font-thin"><?php echo esc_html($roadmap_post_data[0]['category']); ?></h6>
                            <span>—</span>
                            <p class="font-thin text-gray-500">
                                <?php echo esc_html($roadmap_post_data[0]['date']); ?>
                            </p>
                        </div>
                    </div>
    
                    <a href="<?php echo esc_url($roadmap_post_data[0]['permalink']); ?>" class="py-1 text-xl font-bold">
                        <?php echo esc_html($roadmap_post_data[0]['title']); ?>
                    </a>
    
                    <p class="text-gray-700 text-sm">
                        <?php echo esc_html($roadmap_post_data[0]['excerpt']); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="grid sm:grid-cols-2 gap-10">
            <?php
                for($i = 1; $i < 5; $i++) :
            ?>
            <div class="border-b sm:border-none pb-4 sm:pb-0">
                <div class="flex space-x-4">
                    <div class="flex text-sm font-semibold space-x-2">
                        <h6 class="font-thin"><?php echo esc_html($roadmap_post_data[$i]['category']); ?></h6>
                        <span>—</span>
                        <p class="font-thin text-gray-500">
                            <?php echo esc_html($roadmap_post_data[$i]['date']); ?>
                        </p>
                    </div>
                </div>

                <a href="<?php echo esc_url($roadmap_post_data[$i]['permalink']); ?>" class="py-1 text-lg font-bold">
                    <?php echo esc_html($roadmap_post_data[$i]['title']); ?>
                </a>

                <p class="text-gray-700 text-sm">
                    <?php echo esc_html($roadmap_post_data[$i]['excerpt']); ?>
                </p>
            </div>
            <?php endfor; ?>
        </div>
    </div>
    <?php endif; wp_reset_query(); ?>
</section>