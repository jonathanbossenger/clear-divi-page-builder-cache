<?php
/**
 * @package Clear_Local_Storage
 * @version 1.0
 */
/*
Plugin Name: Clear Local Storage
Plugin URI: http://jonathanbossenger.com/divi-page-builder-cache/
Description: Clear the LocalStorage properties to clear Divi Page Builder Cache
Author: Jonathan Bossenger
Version: 1.0
Author URI: http://jonathanbossenger.com
*/
define( 'JB_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
function jb_clear_local_storage () {
	wp_enqueue_script( 'jb_clear_local_storage', JB_PLUGIN_URL . 'clear_local_storage.js' );
}
add_action( 'admin_enqueue_scripts', 'jb_clear_local_storage', 9999 );
