<?php



class TFTS_Testimonials {

	public function __construct() {

		add_action( 'init', array( $this, 'tfts_Testimonials_init' ) );

	}



	/**

	 * Register a custom post type called "tfts".

	 */

	public function tfts_Testimonials_init() {

	    $labels = array(

	        'name'                  => _x( 'Testimonials', 'Post type general name', 'tfts' ),

	        'singular_name'         => _x( 'Testimonials', 'Post type singular name', 'tfts' ),

	        'menu_name'             => _x( 'Testimonials', 'Admin Testimonials text', 'tfts' ),

	        'name_admin_bar'        => _x( 'Testimonials', 'Add New on Toolbar', 'tfts' ),

	        'add_new'               => __( 'Add New', 'tfts' ),

	        'add_new_item'          => __( 'Add New Testimonials', 'tfts' ),

	        'new_item'              => __( 'New Testimonials', 'tfts' ),

	        'edit_item'             => __( 'Edit Testimonials', 'tfts' ),

	        'view_item'             => __( 'View Testimonials', 'tfts' ),

	        'all_items'             => __( 'All Testimonials', 'tfts' ),

	        'search_items'          => __( 'Search Testimonials', 'tfts' ),

	        'parent_item_colon'     => __( 'Parent Testimonials:', 'tfts' ),

	        'not_found'             => __( 'No Testimonials found.', 'tfts' ),

	        'not_found_in_trash'    => __( 'No Testimonials found in Trash.', 'tfts' ),

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

	    register_post_type( 'tfts_testimonials', $args );

	}

}

new TFTS_Testimonials();