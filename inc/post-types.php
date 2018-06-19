<?php 
/* Custom Post Types */

add_action('init', 'js_custom_init');
function js_custom_init() 
{
	
	// Register the Homepage Practice Areas
  
     $labels = array(
	'name' => _x('Practice Areas', 'post type general name'),
    'singular_name' => _x('Practice Area', 'post type singular name'),
    'add_new' => _x('Add New', 'Practice Area'),
    'add_new_item' => __('Add New Practice Area'),
    'edit_item' => __('Edit Practice Areas'),
    'new_item' => __('New Practice Area'),
    'view_item' => __('View Practice Areas'),
    'search_items' => __('Search Practice Areas'),
    'not_found' =>  __('No Practice Areas found'),
    'not_found_in_trash' => __('No Practice Areas found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Practice Areas'
  );
  $args = array(
	'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false, // 'false' acts like posts 'true' acts like pages
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail'),
	
  ); 
  register_post_type('practice_area',$args); // name used in query
  
  // Add more between here
  
  // and here
  
  } // close custom post type