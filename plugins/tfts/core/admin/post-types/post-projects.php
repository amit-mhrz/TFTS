<?php



class TFTS_Projects {

	public function __construct() {

		add_action( 'init', array( $this, 'tfts_Projects_init' ) );

	}



	/**

	 * Register a custom post type called "gallery".

	 */

	public function tfts_Projects_init() {

	    $labels = array(

	        'name'                  => _x( 'Projects', 'Post type general name', 'tfts' ),

	        'singular_name'         => _x( 'Projects', 'Post type singular name', 'tfts' ),

	        'menu_name'             => _x( 'Projects', 'Admin Projects text', 'tfts' ),

	        'name_admin_bar'        => _x( 'Projects', 'Add New on Toolbar', 'tfts' ),

	        'add_new'               => __( 'Add New', 'tfts' ),

	        'add_new_item'          => __( 'Add New Projects', 'tfts' ),

	        'new_item'              => __( 'New Projects', 'tfts' ),

	        'edit_item'             => __( 'Edit Projects', 'tfts' ),

	        'view_item'             => __( 'View Projects', 'tfts' ),

	        'all_items'             => __( 'All Projects', 'tfts' ),

	        'search_items'          => __( 'Search Projects', 'tfts' ),

	        'parent_item_colon'     => __( 'Parent Projects:', 'tfts' ),

	        'not_found'             => __( 'No Projects found.', 'tfts' ),

	        'not_found_in_trash'    => __( 'No Projects found in Trash.', 'tfts' ),

	    );



	    $args = array(

	        'labels'             => $labels,

	        'public'             => true,

	        'publicly_queryable' => true,

	        'show_ui'            => true,

	        'show_in_menu'       => true,

	        'query_var'          => true,

	        'capability_type'    => 'post',

	        'exclude_from_search'=> true,

	        'has_archive'        => true,

	        'hierarchical'       => false,

	        'menu_position'      => null,

	        'supports'           => array( 'title', 'thumbnail', 'editor' ),

	        'menu_icon'          => 'dashicons-screenoptions'	       

	    );

	    register_post_type( 'tfts_projects', $args );

	}

}

new TFTS_Projects();