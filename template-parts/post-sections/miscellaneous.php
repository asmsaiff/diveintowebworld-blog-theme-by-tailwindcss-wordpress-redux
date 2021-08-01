<?php
    $diveintowebworld_cat_wp = new WP_Query(array(
        'category_name'         => 'Miscellaneous',
        'posts_per_page'        =>  6
    ));

    $cat_wp_post_data = array();

    if($diveintowebworld_cat_wp->have_posts()) {
        while($diveintowebworld_cat_wp->have_posts()) {
            $diveintowebworld_cat_wp->the_post();

            $categories = get_the_category();
            $category = $categories[mt_rand(0,count($categories)-1)];

            $cat_wp_post_data[] = array(
                'title'             =>  get_the_title(),
                'date'              =>  get_the_date(),
                'category'          =>  $category->name,
                "thumbnail"         =>  get_the_post_thumbnail_url(get_the_ID(),"large"),
                'permalink'         =>  get_permalink(),
                'excerpt'           =>  get_the_excerpt(),
            );
        };
    };

    if($diveintowebworld_cat_wp->post_count > 1) :
?>

<section class="container mx-auto sm:pt-16 lg:pt-0 pb-8 gap-12 px-4 sm:px-0">
    <h2 class="section-title text-2xl font-semibold pb-1">
        <?php _e('Miscellaneous', 'diveintowebworld'); ?>
    </h2>
    <hr>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-3 mb-6">
    <?php for($i = 0; $i < 3; $i++) : ?>
        <div class="border-b sm:border-none pb-4 sm:pb-0">
            <a href="<?php echo esc_url($cat_wp_post_data[$i]['permalink']); ?>">
                <img src="<?php echo esc_url($cat_wp_post_data[$i]['thumbnail']); ?>" alt="" class="rounded-lg">
            </a>
            
            <div class="flex space-x-4 mt-6">
                <div class="flex text-sm font-semibold space-x-2">
                    <h6 class="font-thin"><?php echo esc_html($cat_wp_post_data[$i]['category']); ?></h6>
                    <span>—</span>
                    <p class="font-thin text-gray-500"><?php echo esc_html($cat_wp_post_data[$i]['date']); ?></p>
                </div>
            </div>

            <a href="<?php echo esc_url($cat_wp_post_data[$i]['permalink']); ?>" class="py-1 text-xl font-bold">
            <?php echo esc_html($cat_wp_post_data[$i]['title']); ?>
            </a>

            <p class="mb-6 mt-2 text-gray-700">
                <?php echo esc_html($cat_wp_post_data[$i]['excerpt']); ?>
            </p>

            <div class="flex space-x-2">
                <img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" alt="" class="rounded-full w-10 h-10">

                <div>
                    <h4 class="font-semibold"><?php the_author(); ?></h4>
                    <p class="text-sm text-gray-500"><?php the_field('designation', 'user_'.get_the_author_meta('ID')); ?></p>
                </div>
            </div>
        </div>
        <?php endfor; ?>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 border-b sm:border-none pb-4 sm:pb-0">
        <?php for($i = 3; $i < 6; $i++) : ?>
        <div class="border-b sm:border-none pb-4 sm:pb-0">
            <div class="flex space-x-4 md:mt-6">
                <div class="flex text-sm font-semibold space-x-2">
                    <h6 class="font-thin"><?php echo esc_html($cat_wp_post_data[$i]['category']); ?></h6>
                    <span>—</span>
                    <p class="font-thin text-gray-500"><?php echo esc_html($cat_wp_post_data[$i]['date']); ?></p>
                </div>
            </div>

            <a href="<?php echo esc_url($cat_wp_post_data[$i]['permalink']); ?>" class="py-1 text-xl font-bold"><?php echo esc_html($cat_wp_post_data[$i]['title']); ?></a>

            <p class="md:mb-6 mt-2 text-gray-700">
                <?php echo esc_html($cat_wp_post_data[$i]['excerpt']); ?>
            </p>
        </div>
        <?php endfor; ?>
    </div>
</section>

<?php
    endif;
    wp_reset_query();