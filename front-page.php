<?php get_template_part('template-parts/header', 'header'); ?>

<main id="cases" class="container w-7xl w-[90%] lg:w-[80%] 2xl:w-[70%] mx-auto flex flex-col justify-between gap-8 md:gap-12 lg:gap-16 xl:gap-24">
    <div class="flex flex-col gap-10 md:gap-16 lg:gap-24 xl:gap-32">

        <?php
        $args = array(
            'post_type' => 'project',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) { ?>
            <?php while ($query->have_posts()) {
                $query->the_post(); ?>
                <div class="grid lg:grid-cols-2 lg:flex-row gap-4 md:gap-12 lg:gap-16">
                    <?php the_post_thumbnail('', array('class' => 'w-full h-full h-[21.875rem] md:h-[25rem] lg:h-[32.8125rem] xl:h-[37.5rem] object-cover')); ?>
                    <div class="flex flex-col gap-6 md:gap-8 lg:gap-12 xl:gap-16">
                        <div class="flex flex-col gap-4 md:gap-6 lg:gap-8">
                            <a href="<?php the_permalink(); ?>">
                                <h2><?php the_title(); ?></h2>
                            </a>
                            <?php if (have_rows('content')) : ?>

                                <?php while (have_rows('content')) : the_row(); ?>

                                    <?php if (get_row_layout() == 'heading_left_text_right') : ?>
                                        <p class="leading-relaxed"><?php the_sub_field('text'); ?></p>

                                    <?php endif; ?>

                                <?php endwhile; ?>

                            <?php endif; ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="flex items-center gap-4 font-display border-b border-primary pb-2 lg:pb-4 self-start">
                            Read this case
                            <i class="ph-arrow-elbow-right lg:text-2xl"></i>
                        </a>
                    </div>
                </div>
            <?php } ?>
        <?php wp_reset_postdata();
        } ?>
    </div>
    <a href="<?php echo esc_url(home_url('/work')); ?>" class="button md:self-center">See more work</a>
</main>


<?php get_template_part('template-parts/footer', 'footer'); ?>