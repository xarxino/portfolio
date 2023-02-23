<?php

/**
 * The template for displaying 404 errors.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portfolio
 */

get_header(); ?>

<main class="container max-w-7xl w-[90%] lg:w-[80%] 2xl:w-[70%] mx-auto flex flex-col justify-between">
    <div class="flex flex-col gap-4 md:gap-8 lg:gap-10">
        <div class="flex flex-col items-center gap-4">
            <h1 class="text-5xl md:text-6xl xl:text-7xl">404</h1>
            <p>It seems this page doesn't exist :(</p>
        </div>
    </div>
</main>

<?php get_footer(); ?>