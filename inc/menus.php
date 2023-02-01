<?php 
function register_my_menus()
{
	register_nav_menu('header-menu', __('Header Menu'));
}
add_action('init', 'register_my_menus');

function add_additional_class_on_li($classes, $item, $args)
{
	if (isset($args->li_class)) {
		$classes[] = $args->li_class;
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
