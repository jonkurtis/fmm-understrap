<?php
/**
 * Register `ourservices` post type
 */
function ourservices_post_type() {
   
    // Labels
     $labels = array(
         'name' => _x("Our Services", "post type general name"),
         'singular_name' => _x("Service", "post type singular name"),
         'menu_name' => 'Our Services',
         'add_new' => _x("Add New", "Service"),
         'add_new_item' => __("Add New Service"),
         'edit_item' => __("Edit Service"),
         'new_item' => __("New Service"),
         'view_item' => __("View Service"),
         'search_items' => __("Search Service"),
         'not_found' =>  __("No Services Found"),
         'not_found_in_trash' => __("No Services Found in Trash"),
         'parent_item_colon' => ''
     );
     
     // Register post type
     register_post_type('ourservices' , array(
         'labels' => $labels,
         'public' => true,
         'has_archive' => false,
         'menu_icon' => get_stylesheet_directory_uri() . '/lib/OurServices/services-icon.png',
         'rewrite' => true,
         'supports' => array('title', 'editor', 'thumbnail')
     ) );
 }
 add_action( 'init', 'ourservices_post_type', 0 );
 