<?php
/**
 	* register custom taxonomies
	*/
	add_action( 'init', 'create_taxonomy_living', 0 );
	
	//create taxonomies, genres and writers for the post type "living"
	function create_taxonomy_living() {
		
		/**
		 * 'recipe types' taxonomy
		 * used with the 'living' post type
		 * @andy
		 */
		$labels = array(
			'name' => _x( 'Recipe Types', 'taxonomy general name' ),
			'singular_name' => _x( 'Recipe Type', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search Recipe Types' ),
			'all_items' => __( 'All Recipe Types' ),
			'parent_item' => __( 'Parent Recipe Type' ),
			'parent_item_colon' => __( 'Parent Recipe Type' ),
			'edit_item' => __( 'Edit Recipe Type' ), 
			'update_item' => __( 'Update Recipe Type' ),
			'add_new_item' => __( 'Add New Recipe Type' ),
			'new_item_name' => __( 'New Recipe Type' ),
			'menu_name' => __( 'Recipe Types' ),
		); 	
		
		// always use a singular post type name (ie 'example' not 'examples'
		register_taxonomy( 'recipe-type',
			// assign the custom taxonomy to an array of post types
			array( 'living' ), 
				array(
					'hierarchical' 	=> true,
					'labels' 		=> $labels,
					'show_ui' 		=> true,
					'query_var' 	=> true,
					'rewrite' => array( 'with_front' => false, 'slug' => 'action/action-recipes/type' ), // 'with_front' => false - removes the 'blog' prefix
        ));
    }
