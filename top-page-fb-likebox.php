<?php
/**
* Plugin Name: Top Page & Facebook Likebox
* Plugin URI:  http://websolutionfahim.com/wp-plugins/top-page-facebook-likebox
* Description: This plugin will enable top page button & facebook likebox in your wordpress site. You can change color & other important settings from <a href="options-general.php?page=tpfl-tb-options">Option Panel</a>
* Version:     1.0
* Author:      MD Tanvirul Haque Fahim
* Author URI:  http://www.websolutionfahim.com
* License:     GPL2
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
* Domain Path: /languages
* Text Domain: tpfl_domain
*/

/**
* Copyright (c) 2015 MD Fahim Haque (email: mdfahim2005@gmail.com). All rights reserved.
*
* Released under the GPL license
* http://www.opensource.org/license/gpl-license.php
*
* This is an add-on for wordpress
* http://wordpress.org/
*
* **************************************************************************************
* This program is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 2 of the License, or
* (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License 
* along with this program; if not, write to the Free Software
* Foundation, Inc, 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
* **************************************************************************************
*/
/***************************************-)>✪ ✿ ✪<(-************************************/

/**********************************
* Don't call the file directly
**********************************/
if ( !defined( 'ABSPATH' ) ) exit;

/**********
* Includes
**********/
define('TPFL_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
include( TPFL_PLUGIN_PATH . 'inc/scripts.php'); // This file controls all CSS & JS
include( TPFL_PLUGIN_PATH . 'inc/functions.php'); // Display all content functions
if( is_admin() ){
include( TPFL_PLUGIN_PATH . 'inc/admin-page.php'); // Plugin options page
}
?>