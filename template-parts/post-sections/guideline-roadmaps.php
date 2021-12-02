<?php
    $diveintowebworld_guideline_roadmap_cat_posts = new WP_Query(array(
        'category_name'     => 'guidelines-roadmaps',
        'posts_per_page'    =>  4
    ));

    if($diveintowebworld_guideline_roadmap_cat_posts->have_posts()) :
?>

<div class="col-span-3 lg:col-span-2">
    <h2 class="section-title text-2xl font-semibold pb-1">
        <?php _e('Guidelines & Roadmaps', 'diveintowebworld'); ?>
    </h2>
    <hr>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 mt-3">
        <?php
            while($diveintowebworld_guideline_roadmap_cat_posts->have_posts()) :
                $diveintowebworld_guideline_roadmap_cat_posts->the_post();
		
				$categories = get_the_category();
				// $category = $categories[mt_rand(0,count($categories)-1)];
        ?>
        <div class="border-b sm:border-none pb-4 sm:pb-0">
            <a href="<?php the_permalink(); ?>">
                <?php
                    if(has_post_thumbnail()) {
                        the_post_thumbnail( 'large', array('class'=>'rounded-lg'));
                    }
                ?>
            </a>
            <div class="flex space-x-4 mt-6">
                <div class="flex text-sm font-semibold space-x-2">
                    <h6 class="font-thin"><?php //echo $category->name; ?></h6>
                    <span>—</span>
                    <p class="font-thin text-gray-500"><?php echo get_the_date(); ?></p>
                </div>
            </div>

            <h2 class="py-1 text-xl font-bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <p class="mb-6 mt-2 text-gray-700">
                <?php echo get_the_excerpt(); ?>
            </p>

            <div class="flex space-x-2">
                <img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" alt="" class="rounded-full w-10 h-10">

                <div>
                    <h4 class="font-semibold"><?php the_author(); ?></h4>
                    <p class="text-sm text-gray-500"><?php the_field('designation', 'user_'.get_the_author_meta('ID')); ?></p>
                </div>
            </div>
        </div>
        <?php
            endwhile;
            wp_reset_query();
        ?>
    </div>
</div>

<?php 
    endif;
    wp_reset_query();