<?php



class TFTS_Clients {

	public function __construct() {

		add_action( 'init', array( $this, 'tfts_Clients_init' ) );

	}



	/**

	 * Register a custom post type called "tfts".

	 */

	public function tfts_Clients_init() {

	    $labels = array(

	        'name'                  => _x( 'Clients', 'Post type general name', 'tfts' ),

	        'singular_name'         => _x( 'Clients', 'Post type singular name', 'tfts' ),

	        'menu_name'             => _x( 'Clients', 'Admin Clients text', 'tfts' ),

	        'name_admin_bar'        => _x( 'Clients', 'Add New on Toolbar', 'tfts' ),

	        'add_new'               => __( 'Add New', 'tfts' ),

	        'add_new_item'          => __( 'Add New Clients', 'tfts' ),

	        'new_item'              => __( 'New Clients', 'tfts' ),

	        'edit_item'             => __( 'Edit Clients', 'tfts' ),

	        'view_item'             => __( 'View Clients', 'tfts' ),

	        'all_items'             => __( 'All Clients', 'tfts' ),

	        'search_items'          => __( 'Search Clients', 'tfts' ),

	        'parent_item_colon'     => __( 'Parent Clients:', 'tfts' ),

	        'not_found'             => __( 'No Clients found.', 'tfts' ),

	        'not_found_in_trash'    => __( 'No Clients found in Trash.', 'tfts' ),

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

	    register_post_type( 'tfts_clients', $args );

	}

}

new TFTS_Clients();