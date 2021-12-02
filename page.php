<?php
    get_header();

	the_post();
?>

    <!-- Main Content Body -->
    <main>
        
        <div class="bg-gray-50">
            <div class="container md:mx-auto px-2 md:px-4 lg:px-0 py-8 md:py-16 lg:py-20">
                <h1 class="text-2xl md:text-4xl font-thin"><?php the_title(); ?></h1>

<!--                 <div class="flex mt-3 divide-x divide-gray-300">
                    <span class="flex pr-2 text-sm">
                        <i class="invisible sm:visible -ml-4 sm:-ml-0 far fa-user-circle self-center mr-1"></i>
                        <h6>Saifullah</h6>
                    </span>
                    <span class="px-2 text-sm">
                        <i class="invisible sm:visible -ml-4 sm:-ml-0 far fa-calendar-alt mr-1"></i>
                        <a href="">7th July, 2021</a>
                    </span>
                    <span class="px-2 text-sm">
                        <i class="invisible sm:visible -ml-4 sm:-ml-0 fas fa-link self-center mr-1"></i>
                        <a href="">Uncategorized</a>
                    </span>
                    <span class="px-2 text-sm">
                        <i class="invisible sm:visible -ml-4 sm:-ml-0 fab fa-cloudscale mr-1"></i>
                        <a href="">20 Views</a>
                    </span>
                </div> -->
            </div>
        </div>

        <div class="px-4 lg:px-0 container mx-auto grid sm:grid-cols-9 pb-12 mt-4 md:mt-12 gap-6 xl:gap-12">
            <div class="col-span-1 row-start-2 xl:row-start-1">
                <div class="flex xl:float-right xl:top-36 xl:sticky">
                    <i class="fas fa-share self-center pr-6 text-gray-400"></i>
					<div class="flex flex-row xl:flex-col xl:space-y-4 space-x-2 xl:space-x-0">
                        <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer" class="w-8 h-8 bg-gray-100 hover:bg-blue-600 text-center leading-relaxed text-gray-400 hover:text-white rounded-full p-1 transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" class="w-8 h-8 bg-gray-100 hover:bg-blue-400 text-center leading-relaxed text-gray-400 hover:text-white rounded-full p-1 transition duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" class="w-8 h-8 bg-gray-100 hover:bg-gray-600 text-center leading-relaxed text-gray-400 hover:text-white rounded-full p-1 transition duration-300">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row-start-1 sm:row-auto col-span-9 xl:col-span-5">
                <?php
                    if(has_post_thumbnail()) {
                        the_post_thumbnail('large', array('class'=>'mb-10 rounded'));
                    }

                    the_content();
                ?>
            </div>

            <div class="col-span-9 xl:col-span-3">
                <div class="top-36 sticky">
                    <h1 class="brand after-hr relative text-xl"><?php _e('Meet the Author', 'diveintowebworld'); ?></h1>

                    <figure class="sm:flex xl:flex-col bg-gray-100 rounded-xl p-8 xl:p-0 mt-6">
                        <img class="w-48 sm:w-48 sm:h-48 mx-auto rounded-full self-center mt-4 sm:mt-0 xl:mt-6" src="<?php global $diveintowebworld_options_data; echo $diveintowebworld_options_data['author_profile_picture']['url'];  ?>" alt="" width="384" height="512">
                        <div class="pt-6 sm:p-8 text-center sm:text-left space-y-4">
                            <blockquote>
                                <p class="text-lg">
                                	<?php echo get_diveintowebworld_redux_data('author_description'); ?>
                                </p>
                            </blockquote>
                            <figcaption class="font-medium">
                                <div class="text-cyan-600">
                                <?php echo get_diveintowebworld_redux_data('author_name'); ?>
                                </div>
                                <div class="text-gray-500">
                                <?php echo get_diveintowebworld_redux_data('author_designation'); ?>
                                </div>
                            </figcaption>

                            <ul class="flex space-x-3 my-4">
								<?php if(get_diveintowebworld_redux_data('author_facebook')) : ?>
                                <li><a href="<?php echo get_diveintowebworld_redux_data('author_facebook'); ?>" target="_blank"><i class="fab fab fa-facebook-f"></i></a></li>
								<?php 
									endif;
									if(get_diveintowebworld_redux_data('author_linked_in')) :
								?>
                                <li><a href="<?php echo get_diveintowebworld_redux_data('author_linked_in'); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
								<?php 
									endif;
									if(get_diveintowebworld_redux_data('author_twitter')) :
								?>
                                <li><a href="<?php echo get_diveintowebworld_redux_data('author_twitter'); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
								<?php 
									endif;
									if(get_diveintowebworld_redux_data('author_email')) :
								?>
                                <li><a href="mailto:<?php echo get_diveintowebworld_redux_data('author_email'); ?>"><i class="fab far fa-envelope"></i></a></li>
								<?php endif; ?>
                            </ul>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </main>

<?php
    get_footer();