<?php

/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portfolio
 */


get_header(); ?>

<main class="container max-w-7xl w-[90%] lg:w-[80%] 2xl:w-[70%] mx-auto flex flex-col justify-between">

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="flex flex-col gap-4 md:gap-8 lg:gap-10">
                <div class="flex flex-col gap-4">
                    <h1><?php the_title(); ?></h1>
                    <div class="font-display text-base lg:text-lg uppercase flex items-center gap-2"><?php reading_time(); ?></div>
                </div>
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('', array('class' => 'w-full h-[18.75rem] md:h-[25rem] lg:h-[31.25rem] xl:h-[37.5rem] object-cover transition-all hover:brightness-90'));
                } ?>
                <div class="flex flex-col lg:flex-row gap-6 md:gap-8 lg:gap-12 xl:gap-16">
                    <div class="relative w-full lg:min-w-[22rem]">
                        <?php get_template_part('template-parts/sidebar', 'sidebar') ?>
                    </div>
                    <div class="flex flex-col gap-6 md:gap-8">
                        <?php echo get_the_content('', array('class' => 'post-content flex flex-col')); ?>
                    </div>
                </div>

            </div>
        <?php endwhile; ?>
    <?php endif; ?>

</main>

<?php get_footer(); ?>