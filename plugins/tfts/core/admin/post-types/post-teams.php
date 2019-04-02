<?php



class TFTS_Teams {

	public function __construct() {

		add_action( 'init', array( $this, 'tfts_Teams_init' ) );

	}



	/**

	 * Register a custom post type called "tfts".

	 */

	public function tfts_Teams_init() {

	    $labels = array(

	        'name'                  => _x( 'Teams', 'Post type general name', 'tfts' ),

	        'singular_name'         => _x( 'Teams', 'Post type singular name', 'tfts' ),

	        'menu_name'             => _x( 'Teams', 'Admin Teams text', 'tfts' ),

	        'name_admin_bar'        => _x( 'Teams', 'Add New on Toolbar', 'tfts' ),

	        'add_new'               => __( 'Add New', 'tfts' ),

	        'add_new_item'          => __( 'Add New Teams', 'tfts' ),

	        'new_item'              => __( 'New Teams', 'tfts' ),

	        'edit_item'             => __( 'Edit Teams', 'tfts' ),

	        'view_item'             => __( 'View Teams', 'tfts' ),

	        'all_items'             => __( 'All Teams', 'tfts' ),

	        'search_items'          => __( 'Search Teams', 'tfts' ),

	        'parent_item_colon'     => __( 'Parent Teams:', 'tfts' ),

	        'not_found'             => __( 'No Teams found.', 'tfts' ),

	        'not_found_in_trash'    => __( 'No Teams found in Trash.', 'tfts' ),

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

	    register_post_type( 'tfts_teams', $args );

	}

}

new TFTS_Teams();