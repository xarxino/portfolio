<?php

/**
 * The template for displaying the contact page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portfolio
*/


get_header(); ?>

<main class="container max-w-7xl w-[90%] lg:w-[80%] 2xl:w-[70%] mx-auto flex flex-col justify-between">
    <div class="flex flex-col gap-8 md:gap-12 lg:gap-16 xl:gap-24">
        <div class="flex flex-col gap-4 md:gap-6 lg:gap-8 xl:gap-12">
            <h1>Let's bring your vision to life</h1>
            <p class="lg:text-3xl leading-normal ">Are you ready to collaborate and bring your ideas to life? Simply book a call and let's get the ball rolling.</p>
        </div>
        <?php the_content(); ?>
    </div>
</main>

<?php get_footer(); ?>