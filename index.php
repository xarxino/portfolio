<?php

/**
 * The main template file.
 *
 * @package Portfolio
 */

get_header(); ?>

<main class="container max-w-7xl w-[90%] lg:w-[80%] 2xl:w-[70%] mx-auto flex flex-col justify-between">
    <div class="flex flex-col gap-8 md:gap-12 lg:gap-16 xl:gap-24">
        <h1 class="max-w-4xl">My blog</h1>
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 9,
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) { ?>
            <div class="grid lg:grid-cols-2 gap-12">
                <?php while ($query->have_posts()) {
                    $query->the_post(); ?>
                    <div class="flex flex-col gap-6 group">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('', array('class' => 'w-full h-[18.75rem] md:h-[25rem] lg:h-[31.25rem] xl:h-[37.5rem] object-cover transition-all group-hover:brightness-90')); ?>
                        </a>
                        <a href="<?php the_permalink(); ?>" class="flex justify-between gap-4 md:gap-6 lg:gap-8 xl:gap-12">
                            <h2 class="lg:text-3xl"><?php the_title(); ?></h2>
                        </a>
                    </div>
                <?php } ?>
            </div>
        <?php wp_reset_postdata();
        } ?>
    </div>
</main>

<?php get_template_part('template-parts/footer', 'footer'); ?>