<?php



class TFTS_Gallery {

	public function __construct() {

		add_action( 'init', array( $this, 'tfts_Gallery_init' ) );

	}



	/**

	 * Register a custom post type called "tfts".

	 */

	public function tfts_Gallery_init() {

	    $labels = array(

	        'name'                  => _x( 'Gallery', 'Post type general name', 'tfts' ),

	        'singular_name'         => _x( 'Gallery', 'Post type singular name', 'tfts' ),

	        'menu_name'             => _x( 'Gallery', 'Admin Gallery text', 'tfts' ),

	        'name_admin_bar'        => _x( 'Gallery', 'Add New on Toolbar', 'tfts' ),

	        'add_new'               => __( 'Add New', 'tfts' ),

	        'add_new_item'          => __( 'Add New Gallery', 'tfts' ),

	        'new_item'              => __( 'New Gallery', 'tfts' ),

	        'edit_item'             => __( 'Edit Gallery', 'tfts' ),

	        'view_item'             => __( 'View Gallery', 'tfts' ),

	        'all_items'             => __( 'All Gallery', 'tfts' ),

	        'search_items'          => __( 'Search Gallery', 'tfts' ),

	        'parent_item_colon'     => __( 'Parent Gallery:', 'tfts' ),

	        'not_found'             => __( 'No Gallery found.', 'tfts' ),

	        'not_found_in_trash'    => __( 'No Gallery found in Trash.', 'tfts' ),

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

	    register_post_type( 'tfts_gallery', $args );

	}

}

new TFTS_Gallery();