<?php
/**
 * TFTS
 *
 * @package TFTS
 * 
 * @since TFTS 1.0
 *
 */

$get_theme = wp_get_theme();

define('TFTS_THEME_NAME', $get_theme);
define('TFTS_THEME_VERSION', '1.0.0');
define('TFTS_THEME_SLUG', 'ali');
define('TFTS_PREFIX', 'tfts_');

define('TFTS_BASE_URL', get_template_directory_uri() );
define('TFTS_BASE', wp_normalize_path ( get_template_directory() ) );

define('TFTS_CORE', TFTS_BASE . '/core');
define('TFTS_FUNCTION', TFTS_BASE . '/core/functions');
define('TFTS_ADMIN_DIR', TFTS_CORE. '/admin' );

define('TFTS_THEME_ADMIN_URL', TFTS_BASE_URL . '/core/admin');
define('TFTS_THEME_LIBS_URL' , TFTS_BASE . '/core/lib' );

define('TFTS_ASSEST_URI', TFTS_BASE_URL . '/assets');
define('TFTS_JS', TFTS_BASE_URL . '/assets/js');
define('TFTS_CSS', TFTS_BASE_URL . '/assets/css');
define('TFTS_DIST_CSS', TFTS_BASE_URL . '/assets/dist/css');
define('TFTS_IMG', TFTS_BASE_URL . '/assets/images');