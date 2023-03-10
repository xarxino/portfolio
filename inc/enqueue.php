<?php

/**
 * Enqueue scripts and styles.
 */

function portfolio_scripts()
{
	wp_enqueue_script('portfolio-bundle', get_stylesheet_directory_uri() . '/assets/dist/bundle.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'portfolio_scripts');
