<?php

/*

 * Plugin Name: TFTS Content

 * Plugin URI: 

 * Description: TFTS Theme Extra Functionalities.

 * Author: Codeilo Solutions

 * Author URI: http://codeilo.com/

 * Text Domain: TFTS

 * Version: 1.0

 * License: GPL

 */



if ( ! defined( 'ABSPATH' ) ) { 

 	exit; // disable direct access 

 }



/**

 * Singleton class for handling the theme's extra functionality integration.

 *

 * @since  1.0.0

 * @access public

 */



final class Plugin_TFTSContent {



  /**

   * Returns the instance.

   *

   * @since  1.0.0

   * @access public

   * @return object

   */

  public static function get_instance() {



    static $instance = null;



    if ( is_null( $instance ) ) {

      $instance = new self;

      $instance->setup_actions();

    }



    return $instance;

  }



  /**

   * Constructor method.

   *

   * @since  1.0.0

   * @access private

   * @return void

   */

 	public function __construct() {}



  /**

   * Sets up initial actions.

   *

   * @since  1.0.0

   * @access private

   * @return void

   */

  private function setup_actions() {



    define( 'TFTS_CONTENT_VERSION', '1.0' );

    define( 'TFTS_PLUGIN_DIR_URL', trailingslashit( plugins_url( 'tfts-content' )));

    define( 'TFTS_PLUGIN_DIR_PATH', plugin_dir_path( __FILE__ ));



    add_action('init', array($this, 'init'), 1);



  }



 	function init() {



    /**

     * Load custom post type

     */

    $postTypeArgs = array( 'careers', 'clients', 'gallery', 'projects', 'services', 'teams', 'testimonials' );

    if ( is_array( $postTypeArgs ) && !empty( $postTypeArgs ) ):

       foreach ( $postTypeArgs as $postType ):



        $postType = sanitize_key( $postType );

        $filePath = TFTS_PLUGIN_DIR_PATH . '/core/admin/post-types/post-' . $postType . '.php';



        if ( file_exists( $filePath ) ):

           include_once $filePath;



       endif;



       endforeach;

    endif;



}}



/**

 * Get the instance.

 */

function tfts_content()

{

  // 

  return Plugin_TFTSContent::get_instance();

}



tfts_content();