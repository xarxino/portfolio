<?php

/**
 * Enqueue scripts and styles.
 */

function portfolio_scripts()
{
	wp_enqueue_style('portfolio-style', get_stylesheet_directory_uri(), array(), _S_VERSION, 'all');
	wp_enqueue_script('portfolio-bundle', get_stylesheet_directory_uri() . '/dist/bundle.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'portfolio_scripts');
