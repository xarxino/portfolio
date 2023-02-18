<?php get_template_part('template-parts/header', 'header'); ?>

<main class="container max-w-7xl w-[90%] lg:w-[80%] 2xl:w-[70%] mx-auto flex flex-col justify-between">
    <div class="flex flex-col gap-8 md:gap-12 lg:gap-16 xl:gap-24">
        <div class="flex flex-col gap-4 md:gap-6 lg:gap-8 lg:flex-row lg:justify-between">
            <h1><?php the_title(); ?></h1>
            <a href="#case" class="hidden lg:flex items-center gap-4 opacity-50">
                <div class="font-display uppercase text-xl">Read case</div>
                <i data-feather="arrow-down" class="animate-bounce"></i>
            </a>
        </div>
        <?php if (has_post_thumbnail()) {
            $thumbnail_id = get_post_thumbnail_id();
            $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'full')[0];
            $thumbnail_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
            echo '<img src="' . esc_url($thumbnail_url) . '" alt="' . esc_attr($thumbnail_alt) . '" class="w-full h-[18.75rem] md:h-[25rem] lg:h-[31.25rem] xl:h-[37.5rem] object-cover">';
        } ?>
        <div id="case" class="flex flex-col gap-8 md:flex-row justify-between">
            <div class="flex flex-col gap-4 md:gap-6 lg:gap-8">
                <div class="font-display font-normal uppercase">Services</div>
                <div class="flex flex-col gap-2 md:gap-4 lg:gap-6">
                    <?php $services = get_field('services');
                    if ($services) :
                        foreach ($services as $service) : ?>
                            <div class="font-display"><?php echo esc_html($service->name); ?></div>
                    <?php endforeach;
                    endif; ?>

                </div>
            </div>
            <div class="flex flex-col gap-4 md:gap-6 lg:gap-8">
                <div class="font-display font-normal uppercase">Client</div>
                <div class="flex flex-col gap-2 md:gap-4 lg:gap-6">
                    <div class="font-display"><?php the_title(); ?></div>
                </div>
            </div>
            <div class="flex flex-col gap-4 md:gap-6 lg:gap-8">
                <div class="font-display font-normal uppercase">Year</div>
                <div class="flex flex-col gap-2 md:gap-4 lg:gap-6">
                    <div class="font-display"><?php the_field('handoff_date'); ?>
                    </div>
                </div>
            </div>
        </div>

        <?php if (have_rows('content')) : ?>

            <?php while (have_rows('content')) : the_row(); ?>

                <?php if (get_row_layout() == 'image_left_text_right') : ?>
                    <div class="flex flex-col-reverse lg:grid lg:grid-cols-2 gap-6 md:gap-8 lg:gap-12 xl:gap-24">
                        <?php
                        $image = get_sub_field('image');
                        $headingAndText = get_sub_field('heading_and_text');
                        if ($image) : ?>
                            <img class="w-full h-[18.75rem] md:h-[25rem] lg:h-[31.25rem] xl:h-[37.5rem] object-cover" src="<?php echo $image; ?>" />
                        <?php endif; ?>
                        <?php if ($headingAndText) : ?>
                            <div class="flex flex-col gap-6">
                                <h2 class="leading-tight"><?php echo $headingAndText['heading']; ?></h2>
                                <p class="leading-relaxed"><?php echo $headingAndText['text']; ?></p>
                            </div>
                        <?php endif; ?>
                    </div>

                <?php elseif (get_row_layout() == 'text_left_image_right') : ?>
                    <div class="flex flex-col lg:grid lg:grid-cols-2 gap-6 md:gap-8 lg:gap-12 xl:gap-24">
                        <?php
                        $image = get_sub_field('image');
                        $headingAndText = get_sub_field('heading_and_text');
                        if ($headingAndText) : ?>
                            <div class="flex flex-col gap-4 md:gap-6">
                                <h2 class="leading-tight"><?php echo $headingAndText['heading']; ?></h2>
                                <p class="leading-relaxed"><?php echo $headingAndText['text']; ?></p>
                            </div>
                        <?php endif; ?>
                        <?php if ($image) : ?>
                            <img class="w-full h-[18.75rem] md:h-[25rem] lg:h-[31.25rem] xl:h-[37.5rem] object-cover" src="<?php echo $image; ?>" />
                        <?php endif; ?>
                    </div>

                <?php elseif (get_row_layout() == 'heading_left_text_right') : ?>
                    <div class="flex flex-col lg:grid lg:grid-cols-2 gap-6 md:gap-8 lg:gap-12 xl:gap-24">
                        <h2 class="leading-tight"><?php the_sub_field('heading'); ?></h2>
                        <p class="leading-relaxed"><?php the_sub_field('text'); ?></p>
                    </div>

                <?php elseif (get_row_layout() == 'full_width_image') : ?>
                    <?php $image = get_sub_field('image');
                    if ($image) : ?>
                        <img class="w-full h-[18.75rem] md:h-[25rem] lg:h-[31.25rem] xl:h-[37.5rem] object-cover" src="<?php echo $image; ?>" />
                    <?php endif; ?>

                <?php endif; ?>

            <?php endwhile; ?>

        <?php endif; ?>

    </div>
</main>

<?php get_template_part('template-parts/footer', 'footer'); ?>