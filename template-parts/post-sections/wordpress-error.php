<?php
    $wordpress_error_fix  = new WP_Query(array(
        'posts_per_page'    =>  4,
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
                    // $category = $categories[mt_rand(0,count($categories)-1)];
            ?>
            <div class="flex flex-col sm:flex-row sm:space-x-6 border-b sm:border-none pb-4 sm:pb-0">
                <?php
                    if(has_post_thumbnail()) {
                        the_post_thumbnail( 'large', array('class'=>'rounded-lg w-full pb-3 sm:pb-0 sm:w-36 md:w-48 h-auto self-center'));
                    }
                ?>
                
                <div>
                    <div class="flex space-x-4">
                        <div class="flex text-sm font-semibold space-x-2">
                            <h6 class="font-thin"><?php //echo $category->name; ?></h6>
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
    $wordpress_error_fix  = new WP_Query(array(
        'posts_per_page'    =>  4,
        'category_name'     =>  'programming'
    ));
?>

    <div>
        <h2 class="section-title text-2xl font-semibold pb-1"><?php _e('Programming', 'diveintowebworld'); ?></h2>
        <hr>
        <?php if($wordpress_error_fix->post_count >= 1) : ?>
        <div class="grid grid-cols-1 gap-6 mt-3">
            <?php
                while($wordpress_error_fix->have_posts()) :
                    $wordpress_error_fix->the_post();

                    $categories = get_the_category();
                    // $category = $categories[mt_rand(0,count($categories)-1)];
            ?>
            <div class="flex flex-col sm:flex-row sm:space-x-6 border-b sm:border-none pb-4 sm:pb-0">
                <?php
                    if(has_post_thumbnail()) {
                        the_post_thumbnail( 'large', array('class'=>'rounded-lg w-full pb-3 sm:pb-0 sm:w-36 md:w-48 h-auto self-center'));
                    }
                ?>
                
                <div>
                    <div class="flex space-x-4">
                        <div class="flex text-sm font-semibold space-x-2">
                            <h6 class="font-thin"><?php //echo $category->name; ?></h6>
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
</section>