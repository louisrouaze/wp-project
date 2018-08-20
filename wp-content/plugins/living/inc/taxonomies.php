<?php

function my_taxonomies_recipe_type() {
	$labels = array(
	  'name'              => _x( 'Recipe Types', 'taxonomy general name' ),
	  'singular_name'     => _x( 'Recipe Type', 'taxonomy singular name' ),
	  'search_items'      => __( 'Search Recipe Types' ),
	  'all_items'         => __( 'All Recipe Types' ),
	  'parent_item'       => __( 'Parent Recipe Type' ),
	  'parent_item_colon' => __( 'Parent Recipe Type:' ),
	  'edit_item'         => __( 'Edit Recipe Type' ), 
	  'update_item'       => __( 'Update Recipe Type' ),
	  'add_new_item'      => __( 'Add New Recipe Type' ),
	  'new_item_name'     => __( 'New Recipe Type' ),
	  'menu_name'         => __( 'Recipe Types' ),
	);
	$args = array(
	  'labels' => $labels,
	  'hierarchical' => true,
	);
	register_taxonomy( 'recipe_type', 'recipe', $args );
  }
  add_action( 'init', 'my_taxonomies_recipe_type', 0 );