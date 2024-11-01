<?php
// Define Plugin Directory
define('TPFL_TOP_PAGE_FB_LIKEBOX_PLUGIN_URL', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );
function tpfl_load_scripts_with_register(){
	wp_register_style('tpfl-custom-css', TPFL_TOP_PAGE_FB_LIKEBOX_PLUGIN_URL . '../assets/css/plugin-custom-style.css');
    wp_enqueue_style( 'tpfl-custom-css' );
	wp_register_script('tpfl-custom-script', TPFL_TOP_PAGE_FB_LIKEBOX_PLUGIN_URL . '../assets/js/plugin-custom-script.js', array('jquery'), '1.0', true);
    wp_enqueue_script( 'tpfl-custom-script' );
}
add_action( 'wp_enqueue_scripts', 'tpfl_load_scripts_with_register' );

function tpfl_admin_load_scripts_with_register() {
	wp_register_style('tpfl-custom-admin-css', TPFL_TOP_PAGE_FB_LIKEBOX_PLUGIN_URL . '../assets/css/plugin-custom-admin-style.css');
    wp_enqueue_style( 'tpfl-custom-admin-css' );
}
add_action('admin_head', 'tpfl_admin_load_scripts_with_register');

function tpfl_default_jquery_wp_load_script(){
	wp_enqueue_script( 'jquery' );
}
add_action( 'init','tpfl_default_jquery_wp_load_script' );

function tpfl_color_picker($hook_suffix){
	wp_enqueue_style( 'wp-color-picker' );
	wp_enqueue_script( 'my-script-handle', plugins_url('../assets/js/jscolor.js',  __FILE__ ), array( 'wp-color-picker' ), false, true );
}
add_action( 'admin_enqueue_scripts', 'tpfl_color_picker' );
?>