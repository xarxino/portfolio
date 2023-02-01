<?php

function create_project_post_type()
{
    $args = array(
        'rewrite' => array(
            'slug' => 'work',
            'with_front' => false
        ),
        'labels' => array(
            'name' => __('Projects'),
            'singular_name' => __('Project'),
        ),
        'show_in_rest' => true,
        'taxonomies' => array('services'),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-portfolio',
    );

    register_post_type('project', $args);
}
add_action('init', 'create_project_post_type');

function register_services_taxonomy()
{
    $args = array(
        'hierarchical' => true,
        'label' => 'Services',
        'rewrite' => array('slug' => 'services'),
        'show_ui' => true,
        'show_admin_column' => true,
    );
    register_taxonomy('services', array('project'), $args);
}
add_action('init', 'register_services_taxonomy');

function use_project_templates($single)
{
    global $post;
    if ($post->post_type == 'project') {
        if (file_exists(get_template_directory() . '/single-templates/single-project.php')) {
            return get_template_directory() . '/single-templates/single-project.php';
        }
    }

    return $single;
}
add_filter('single_template', 'use_project_templates');
