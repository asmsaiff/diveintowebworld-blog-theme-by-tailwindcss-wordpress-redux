<?php
    get_header();

    the_post();
?>

    <!-- Main Content Body -->
    <main>
        
        <div class="bg-gray-50">
            <div class="container md:mx-auto px-2 md:px-4 lg:px-0 py-8 md:py-16 lg:py-20">
                <h1 class="text-2xl md:text-4xl font-thin">
                    <?php the_title(); ?>
                </h1>

                <div class="flex mt-3 divide-x divide-gray-300">
                    <span class="flex pr-2 text-sm">
                        <i class="invisible sm:visible -ml-4 sm:-ml-0 far fa-user-circle self-center mr-1"></i>
                        <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ); ?>"><?php the_author(); ?></a>
                    </span>
                    <span class="px-2 text-sm">
                        <i class="invisible sm:visible -ml-4 sm:-ml-0 far fa-calendar-alt mr-1"></i>
                        <a href=""><?php echo get_the_date(); ?></a>
                    </span>
                    <span class="px-2 text-sm">
                        <i class="invisible sm:visible -ml-4 sm:-ml-0 fas fa-link self-center mr-1"></i>
                        <a href=""><?php get_the_category(); ?></a>
                    </span>
                    <span class="px-2 text-sm">
                        <?php diveintowebworld_set_post_view(); ?>
                        <i class="invisible sm:visible -ml-4 sm:-ml-0 fab fa-cloudscale mr-1"></i>
                        <a href=""><?= diveintowebworld_get_post_view(); ?></a>
                    </span>
                </div>
            </div>
        </div>

        <div class="px-4 lg:px-0 container mx-auto grid sm:grid-cols-9 pb-12 mt-4 md:mt-12 gap-6 xl:gap-12">
            <div class="col-span-1 row-start-2 sm:row-auto">
                <div class="flex md:float-right top-36 sm:sticky">
                    <div class="flex">
                        <i class="fas fa-share self-center pr-1 sm:pr-4 text-gray-400"></i>
                        <span class="ml-1 block sm:hidden w-max sm:w-auto self-center text-sm mr-2">Share Posts — </span>
                    </div>
                    <div class="flex flex-row sm:flex-col sm:space-y-4 space-x-2 sm:space-x-0">
                        <a href="" class="w-8 h-8 bg-gray-100 hover:bg-blue-600 text-center leading-relaxed text-gray-400 hover:text-white rounded-full p-1 transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <a href="" class="w-8 h-8 bg-gray-100 hover:bg-blue-400 text-center leading-relaxed text-gray-400 hover:text-white rounded-full p-1 transition duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        
                        <a href="" class="w-8 h-8 bg-gray-100 hover:bg-gray-600 text-center leading-relaxed text-gray-400 hover:text-white rounded-full p-1 transition duration-300">
                            <i class="far fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row-start-1 sm:row-auto col-span-5 sm:col-span-9 xl:col-span-5">
                <?php
                    if(has_post_thumbnail()) {
                        the_post_thumbnail('large', array('class'=>'mb-10 rounded'));
                    }

                    the_content();
                ?>

                <div class="mt-8 border-t py-8 rounded-sm">
                    <div class="grid grid-cols-1 md:grid-cols-2 md:divide-x divide-y sm:divide-y-0">
                        <?php $diveintowebworld_prev_post = get_previous_post(); ?>
                        <a href="<?php echo get_the_permalink( $diveintowebworld_prev_post ); ?>" class="pb-6 sm:pb-0">
                            <div class="flex uppercase prev_next_post_label text-gray-700">
                                <i class="fas fa-caret-left self-center mr-1 leading-3"></i>
                                <span><?php _e('previous post', 'diveintowebworld') ?></span>
                            </div>
                            <h4><?php echo get_the_title( $diveintowebworld_prev_post ); ?></h4>
                        </a>
        
                        <?php $diveintowebworld_next_post = get_next_post(); ?>
                        <a href="<?php echo get_the_permalink( $diveintowebworld_next_post ); ?>" class="text-right pt-6 sm:pt-0">
                            <div class="inline-block">
                                <div class="flex uppercase prev_next_post_label text-gray-700">
                                    <span><?php _e('next post', 'diveintowebworld') ?></span>
                                    <i class="fas fa-caret-right self-center ml-1 leading-3"></i>
                                </div>
                            </div>
                            <h4><?php echo get_the_title( $diveintowebworld_next_post ); ?></h4>
                        </a>
                    </div>
                </div>
				
				<figure class="sm:flex bg-gray-100 rounded-xl p-8 md:p-0">
                    <img class="w-48 sm:w-48 sm:h-auto mx-auto rounded-xl" src="assets/images/author.jpg" alt="" width="384" height="512">
                    <div class="pt-6 sm:p-8 text-center sm:text-left space-y-4">
                        <blockquote>
                            <p class="text-lg font-semibold">
                                “Tailwind CSS is the only framework that I've seen scale
                                on large teams. It’s easy to customize, adapts to any design,
                                and the build size is tiny.”
                            </p>
                        </blockquote>
                        <figcaption class="font-medium">
                            <div class="text-cyan-600">
                                Sarah Dayan
                            </div>
                            <div class="text-gray-500">
                                Staff Engineer, Algolia
                            </div>
                        </figcaption>
                    </div>
                </figure>
        
                <div class="border-t py-8 rounded-sm">
                    <h1 class="text-gray-600"><?php _e("You can't comment right now in this post.", "diveintowebworld"); ?></h1>
                </div>
            </div>

            <div class="col-span-5 sm:col-span-9 xl:col-span-3">
                <div class="top-32 sticky">
                    <?php get_template_part('template-parts/post-sections/single-page-related-post'); ?>

                    <h2 class="section-title text-2xl font-semibold pb-1 mt-6">Popular Categories</h2>
                    <hr class="mb-6">

                    <?php
                        if(is_active_sidebar('diveintowebworld_popular_category_sidebar')) {
                            dynamic_sidebar( 'diveintowebworld_popular_category_sidebar' );
                        } 
                    ?>
                </div>
            </div>
        </div>
    </main>

    <?php
        get_footer();