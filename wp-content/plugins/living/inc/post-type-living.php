<?php
/**
* register custom post types
*/
function my_custom_post_living() {
  $labels = array(
    'name'               => _x( 'Livings', 'post type general name' ),
    'singular_name'      => _x( 'Living', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Living' ),
    'add_new_item'       => __( 'Add New Living' ),
    'edit_item'          => __( 'Edit Living' ),
    'new_item'           => __( 'New Living' ),
    'all_items'          => __( 'All Livings' ),
    'view_item'          => __( 'View Living' ),
    'search_items'       => __( 'Search Livings' ),
    'not_found'          => __( 'No livings found' ),
    'not_found_in_trash' => __( 'No livings found in the Trash' ), 
    'parent_item_colon'  => ’,
    'menu_name'          => 'Livings'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our livings and living specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'living', $args ); 
}
add_action( 'init', 'my_custom_post_living' );