<?php
/**
 * Plugin Name: Fredrik Woll WP Libary
 * Plugin URI: http://fredrikwoll.no
 * Description: This plugin adds extra functions and mekanisms to enhance my themes.
 * Version: 1.0.3
 * Author: Fredrik Woll Design
 * Author URI: http://fredrikwoll.no
 * License: GPL2
 */

//Include our update file
include_once( plugin_dir_path( __FILE__ ) . 'updater.php');

$updater = new fwlib_updater( __FILE__ ); // instantiate our class
$updater->set_username( 'fredrikwoll' ); // Set user
$updater->set_repository( 'fwlib' ); // set repo
$updater->initialize(); // initialize the updater

/* 
	$updater->authorize( 'abcdefghijk1234567890' ); // Your auth code goes here for private repos
*/