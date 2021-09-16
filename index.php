<?php
    get_header();
?>

    <!-- Category Post Section -->
    <section class="container mx-auto sm:pt-16 lg:pt-0 pb-8 gap-12 px-4 sm:px-0 mt-12">
        <!-- <h2 class="section-title text-2xl font-semibold pb-1">You searched for - Category</h2>
        <hr> -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-3 mb-6">
            <?php
                if(have_posts()) :
                    while(have_posts()) :
                        the_post();
            ?>

            <div class="border-b sm:border-none pb-4 sm:pb-0">
                <?php
                    if(has_post_thumbnail()) {
                        the_post_thumbnail('large', array('class'=>'rounded-lg'));
                    }
                ?>
                <div class="flex space-x-4 mt-6">
                    <div class="flex text-sm font-semibold space-x-2">
                        <h6 class="font-thin">Business, Travel</h6>
                        <span>—</span>
                        <p class="font-thin text-gray-500"><?php echo get_the_date(); ?></p>
                    </div>
                </div>

                <h2 class="py-1 text-xl font-bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                <p class="mb-6 mt-2 text-gray-700">
                    <?php
                        echo get_the_excerpt();
                    ?>
                </p>

                <div class="flex space-x-2">
                    <img src="<?php echo get_avatar_url( get_the_author_meta( "ID" ) ); ?>" alt="" class="rounded-full w-10 h-10">

                    <div>
                        <h4 class="font-semibold"><?php the_author(); ?></h4>
                        <p class="text-sm text-gray-500">CEO and Founder</p>
                    </div>
                </div>
            </div>

            <?php
                    endwhile;
                endif;
            ?>
        </div>

        <!-- Pagination -->
        <div class="flex mt-20 w-max mx-auto">
            <?php diveintowebworld_post_pagination(); ?>
        </div>
    </section>

    
    <?php
        get_footer();