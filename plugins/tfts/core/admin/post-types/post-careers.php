<?php



class TFTS_Careers {

	public function __construct() {

		add_action( 'init', array( $this, 'tfts_Careers_init' ) );

	}



	/**

	 * Register a custom post type called "tfts".

	 */

	public function tfts_Careers_init() {

	    $labels = array(

	        'name'                  => _x( 'Careers', 'Post type general name', 'tfts' ),

	        'singular_name'         => _x( 'Careers', 'Post type singular name', 'tfts' ),

	        'menu_name'             => _x( 'Careers', 'Admin Careers text', 'tfts' ),

	        'name_admin_bar'        => _x( 'Careers', 'Add New on Toolbar', 'tfts' ),

	        'add_new'               => __( 'Add New', 'tfts' ),

	        'add_new_item'          => __( 'Add New Careers', 'tfts' ),

	        'new_item'              => __( 'New Careers', 'tfts' ),

	        'edit_item'             => __( 'Edit Careers', 'tfts' ),

	        'view_item'             => __( 'View Careers', 'tfts' ),

	        'all_items'             => __( 'All Careers', 'tfts' ),

	        'search_items'          => __( 'Search Careers', 'tfts' ),

	        'parent_item_colon'     => __( 'Parent Careers:', 'tfts' ),

	        'not_found'             => __( 'No Careers found.', 'tfts' ),

	        'not_found_in_trash'    => __( 'No Careers found in Trash.', 'tfts' ),

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

	    register_post_type( 'tfts_careers', $args );

	}

}

new TFTS_Careers();