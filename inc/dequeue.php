<?php

/**
 * Dequeue and deregister scripts and styles.
 */

function remove_block_library_style()
{
    wp_dequeue_style('wp-block-library');
}
add_action('wp_enqueue_scripts', 'remove_block_library_style');

function remove_emoji_scripts()
{
    if (!is_admin()) {
        wp_deregister_script('wp-emoji');
        wp_dequeue_script('wp-emoji');
    }
}
add_action('wp_enqueue_scripts', 'remove_emoji_scripts');

function block_ssa_styles_frontend()
{
    if (!is_admin()) {
        wp_dequeue_style('ssa-styles');
        wp_deregister_style('ssa-styles');
    }
}
add_action('wp_enqueue_scripts', 'block_ssa_styles_frontend');

function remove_dashicons()
{
    wp_deregister_style('dashicons');
}
add_action('wp_enqueue_scripts', 'remove_dashicons');


add_filter('show_admin_bar', '__return_false');
