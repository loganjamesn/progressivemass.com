<?php

// Load Scripts
function scripts() 
{
	wp_register_style('style', get_template_directory_uri() . '/dist/app.css', [], 1, 'all');
	wp_enqueue_style('style');

	wp_enqueue_script('jquery');
	wp_register_script('app', get_template_directory_uri() . '/dist/app.js', ['jquery'], 1, true);
	wp_enqueue_script('app');
}
add_action('wp_enqueue_scripts', 'scripts');


// Theme Options 
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');


// Menus 
register_nav_menus(
 array(
 	'top-menu' => 'Top Menu Location',
 	'mobile-menu' => 'Mobile Menu Location',
 )
);

// Custom Image Sizes
add_image_size('blog-large', 800, 400, true);
add_image_size('blog-small', 300, 200, true);


// Register Sidebars
function my_sidebars()
{
	register_sidebar(
		array(
			'name' => 'Page Sidebar',
			'id' => 'page-sidebar',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>'

		)
	);
	register_sidebar(
		array(
			'name' => 'Blog Sidebar',
			'id' => 'blog-sidebar',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>'

		)
	);
}
add_action('widgets_init', 'my_sidebars');


// Custom Posts
function my_first_post_type()
{
	$args = array(
		'labels' => array(
			'name' => 'Cars',
			'singular_name' => 'Car',
		),
		'hierarchical' => true,
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-images-alt2',
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
	);

	register_post_type('cars', $args);
}
add_action('init', 'my_first_post_type');



// Taxonomies
function my_first_taxonomy()
{
	$args = array(
		'labels' => array(
			'name' => 'Brands',
			'singular_name' => 'Brand',
		),
		'public' => true,
		'hierarchical' => true, //behaves like a tag-false, category-true
	);

	register_taxonomy('brands', array('cars'), $args);
}
add_action('init', 'my_first_taxonomy');









