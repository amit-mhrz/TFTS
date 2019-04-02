<?php



class TFTS_Services {

	public function __construct() {

		add_action( 'init', array( $this, 'tfts_Services_init' ) );

	}



	/**

	 * Register a custom post type called "tfts".

	 */

	public function tfts_Services_init() {

	    $labels = array(

	        'name'                  => _x( 'Services', 'Post type general name', 'tfts' ),

	        'singular_name'         => _x( 'Services', 'Post type singular name', 'tfts' ),

	        'menu_name'             => _x( 'Services', 'Admin Services text', 'tfts' ),

	        'name_admin_bar'        => _x( 'Services', 'Add New on Toolbar', 'tfts' ),

	        'add_new'               => __( 'Add New', 'tfts' ),

	        'add_new_item'          => __( 'Add New Services', 'tfts' ),

	        'new_item'              => __( 'New Services', 'tfts' ),

	        'edit_item'             => __( 'Edit Services', 'tfts' ),

	        'view_item'             => __( 'View Services', 'tfts' ),

	        'all_items'             => __( 'All Services', 'tfts' ),

	        'search_items'          => __( 'Search Services', 'tfts' ),

	        'parent_item_colon'     => __( 'Parent Services:', 'tfts' ),

	        'not_found'             => __( 'No Services found.', 'tfts' ),

	        'not_found_in_trash'    => __( 'No Services found in Trash.', 'tfts' ),

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

	    register_post_type( 'tfts_services', $args );

	}

}

new TFTS_Services();