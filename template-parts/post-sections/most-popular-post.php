<?php
    $diveintowebworld_popular_posts = new WP_Query(array(
        'posts_per_page'            =>  5,
        'orderby'                   =>  'comment_count'
    ));

    if($diveintowebworld_popular_posts->have_posts()) :
?>

<div class="top-32 sticky">
    <h2 class="section-title text-2xl font-semibold pb-1"><?php _e('Most Popular', 'diveintowebworld'); ?></h2>
    <hr>
    <div class="grid gap-4 mt-2">
        <?php
            while($diveintowebworld_popular_posts->have_posts()) :
                $diveintowebworld_popular_posts->the_post();

                $categories = get_the_category();
                $category = $categories[mt_rand(0,count($categories)-1)];
        ?>
        <a href="<?php the_permalink(); ?>" class="flex space-x-3 border-b sm:border-none pb-4 sm:pb-0">
            <?php
                if(has_post_thumbnail()) :
                    the_post_thumbnail( 'large', array('class'=>'rounded-lg w-40 lg:w-24 h-auto self-center hidden sm:block lg:hidden xl:block') );
                endif;
            ?>
            
            <div>
                <div class="flex space-x-4">
                    <div class="flex text-sm font-semibold space-x-2">
                        <h6 class="font-thin"><?php echo $category->name; ?></h6>
                        <span>—</span>
                        <p class="font-thin text-gray-500"><?php echo get_the_date(); ?></p>
                    </div>
                </div>

                <h2 class="py-1 font-semibold text-sm"><?php the_title(); ?></h2>

                <p class="text-sm block lg:hidden">
                    <?php echo get_the_excerpt(); ?>
                </p>
            </div>
        </a>
        <?php endwhile; ?>
    </div>

    <?php endif; ?>

    <h2 class="section-title text-2xl font-semibold pb-1 mt-6">
        <?php _e('Popular Categories', 'diveintowebworld'); ?>
    </h2>

    <hr class="mb-6">

    <?php
        if(is_active_sidebar('diveintowebworld_popular_category_sidebar')) {
            dynamic_sidebar( 'diveintowebworld_popular_category_sidebar' );
        } 
    ?>
</div>