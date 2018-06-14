<?php
/**
 * Register `testimonials` post type
 */
function testimonials_post_type() {
   
    // Labels
     $labels = array(
         'name' => _x("Testimonials", "post type general name"),
         'singular_name' => _x("Testimonials", "post type singular name"),
         'menu_name' => 'Testimonials',
         'add_new' => _x("Add New", "testimonial item"),
         'add_new_item' => __("Add New Profile"),
         'edit_item' => __("Edit Profile"),
         'new_item' => __("New Profile"),
         'view_item' => __("View Profile"),
         'search_items' => __("Search Profiles"),
         'not_found' =>  __("No Profiles Found"),
         'not_found_in_trash' => __("No Profiles Found in Trash"),
         'parent_item_colon' => ''
     );
     
     // Register post type
     register_post_type('testimonials' , array(
         'labels' => $labels,
         'public' => true,
         'has_archive' => false,
         'menu_icon' => get_stylesheet_directory_uri() . '/lib/Testimonials/testimonials-icon.png',
         'rewrite' => true,
         'supports' => array('title', 'editor', 'thumbnail')
     ) );
 }
 add_action( 'init', 'testimonials_post_type', 0 );

 /**
 * Register `Client Type` taxonomy
 */
function testimonials_taxonomy() {
	
	// Labels
	$singular = 'Client Type';
	$plural = 'Client Types';
	$labels = array(
		'name' => _x( $plural, "taxonomy general name"),
		'singular_name' => _x( $singular, "taxonomy singular name"),
		'search_items' =>  __("Search $singular"),
		'all_items' => __("All $singular"),
		'parent_item' => __("Parent $singular"),
		'parent_item_colon' => __("Parent $singular:"),
		'edit_item' => __("Edit $singular"),
		'update_item' => __("Update $singular"),
		'add_new_item' => __("Add New $singular"),
		'new_item_name' => __("New $singular Name"),
	);

	// Register and attach to 'team' post type
	register_taxonomy( strtolower($singular), 'testimonials', array(
		'public' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'hierarchical' => true,
		'query_var' => true,
		'rewrite' => true,
		'labels' => $labels
	) );
}
add_action( 'init', 'testimonials_taxonomy', 0 );