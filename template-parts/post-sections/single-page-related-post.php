<?php
    $categories = get_the_category( $post->ID );
    $diveintowebworld_related_posts = new WP_Query(array(
        'post_type'         => 'post',
        'category__in'      => wp_get_post_categories(get_the_ID()),
        'post__not_in'      => array(get_the_ID()),
        'posts_per_page'    => 6,
        'orderby'           => 'date',
    ));

    if($diveintowebworld_related_posts->have_posts()) :
?>

<h2 class="section-title text-2xl font-semibold pb-1"><?php _e('Related Posts', 'diveintowebworld'); ?></h2>
<hr>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-1 gap-4 mt-2">
    <?php
        while($diveintowebworld_related_posts->have_posts()) :
            $diveintowebworld_related_posts->the_post();

            $categories = get_the_category();
            // $category = $categories[mt_rand(0,count($categories)-1)];
    ?>
    <a href="<?php the_permalink(); ?>" class="flex flex-col xl:flex-row border-b sm:border-none pb-4 sm:pb-0 w-full">
        <?php
            if(has_post_thumbnail()) {
                the_post_thumbnail( 'large', array('class'=>'rounded-lg w-40 lg:w-24 h-auto self-center hidden xl:block xl:mr-3') );
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

            <h2 class="py-1 leading-5"><?php the_title(); ?></h2>

            <p class="text-sm block xl:hidden">
                <?php echo get_the_excerpt(); ?>
            </p>
        </div>
    </a>

    <?php endwhile; ?>
</div>

<?php endif; wp_reset_query(); ?>