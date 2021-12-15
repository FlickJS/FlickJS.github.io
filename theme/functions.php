<?php
function adding_styles_scripts(){
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'slider', get_template_directory_uri() . '/splide.min.css',false,'1.1','all');
    wp_enqueue_script( 'script', get_template_directory_uri() . '/script.js');
    wp_enqueue_script( 'slide', get_template_directory_uri() . '/splide.min.js');
}
add_action('wp_enqueue_scripts', 'adding_styles_scripts');

// Custom post type
function gt_custom_post_type(){
	register_post_type('project',
						array(
                          'rewrite' => array('slug' => 'projects'),
                          'labels' => array(
                          'name' => 'Custom post type',
                          'singular_name' => 'Custom post type',
                          'add_new_item' => 'Add new Custom post type',
                          'edit_item' => 'Edit'
                          ),
                          'menu-icon' => 'dashicons-clipboard',
                          'public' => true,
                          'has_archive' => true,
                          'supports' => array(
                          'title', 'thumbnail', 'editor', 'excerpt', 'comments'
                          )
                      )
     );
}

add_action('init', 'gt_custom_post_type');







?>


