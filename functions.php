<?php

require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/dequeue.php';
require_once get_template_directory() . '/inc/menus.php';
require_once get_template_directory() . '/inc/post-types.php';
require_once get_template_directory() . '/inc/reading-time.php';

if (!defined('_S_VERSION')) {
	define('_S_VERSION', '1.0.0');
}

function portfolio_setup()
{
	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
}
add_action('after_setup_theme', 'portfolio_setup');
