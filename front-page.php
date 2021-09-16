<?php
    get_header();
?>

    <?php get_template_part('template-parts/post-sections/home-featured'); ?>

    <!-- Main Content Body -->
    <main class="container mx-auto">
        <section class="md:mt-6 pb-8 grid grid-cols-3 gap-12 px-4 sm:px-0">
            <!-- Guidelines & Roadmaps -->
            <?php get_template_part('template-parts/post-sections/guideline-roadmaps'); ?>
            
            <div class="col-span-3 lg:col-span-1">
                <?php get_template_part('template-parts/post-sections/most-popular-post'); ?>
            </div>
        </section>

        <!-- WordPress Section -->
        <?php get_template_part('template-parts/post-sections/cat-wordpress'); ?>

        <!-- Modern Web Technologies Section -->
        <?php get_template_part('template-parts/post-sections/wordpress-error'); ?>
    </main>

    <!-- Miscellaneous Section -->
    <?php get_template_part('template-parts/post-sections/miscellaneous'); ?>

<?php
    get_footer();