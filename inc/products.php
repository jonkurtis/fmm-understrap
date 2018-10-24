<?php
/**
 * Register `products` post type
 */
function products_post_type() {
   
    // Labels
     $labels = array(
         'name' => _x("Products", "post type general name"),
         'singular_name' => _x("Product", "post type singular name"),
         'menu_name' => 'Product Profiles',
         'add_new' => _x("Add New", "product item"),
         'add_new_item' => __("Add New Profile"),
         'edit_item' => __("Edit Profile"),
         'new_item' => __("New Profile"),
         'view_item' => __("View Profile"),
         'search_items' => __("Search Profiles"),
         'not_found' =>  __("No Profiles Found"),
         'not_found_in_trash' => __("No Profiles Found in Trash"),
         'parent_item_colon' => '',
     );
     
     // Register post type
     register_post_type('products' , array(
         'labels' => $labels,
         'public' => true,
         'has_archive' => false,
         'menu_icon' => get_stylesheet_directory_uri() . '/lib/Products/products-icon.png',
         'rewrite' => true,
         'supports' => array('title', 'editor', 'thumbnail')
     ) );
 }
 add_action( 'init', 'products_post_type', 0 );

/**
 * Register `Geotarget` taxonomy
 */
function geotarget_taxonomy() {
	
	// Labels
	$singular = 'Geotarget';
	$plural = 'Geotargets';
	$labels = array(
		'name' => _x( $plural, "geotarget general name"),
		'singular_name' => _x( $singular, "geotarget singular name"),
		'search_items' =>  __("Search $singular"),
		'all_items' => __("All $singular"),
		'parent_item' => __("Parent $singular"),
		'parent_item_colon' => __("Parent $singular:"),
		'edit_item' => __("Edit $singular"),
		'update_item' => __("Update $singular"),
		'add_new_item' => __("Add New $singular"),
        'new_item_name' => __("New $singular Name"),
	);

	// Register and attach to 'products' post type
	register_taxonomy( strtolower($singular), 'products', array(
		'public' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'hierarchical' => true,
		'query_var' => true,
		'rewrite' => true,
		'labels' => $labels
	) );
}
add_action( 'init', 'geotarget_taxonomy', 0 );