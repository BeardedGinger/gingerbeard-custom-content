<?php
/**
* Plugin Name: Ginger Beard Custom Content
* Plugin URI: http://gingercult.com
* Description: Custom Post Types and Taxonomies for Cult of the Ginger Beard
* Author: Josh Mallard
* Version: 1.0.0
* Author URI: http://joshmallard.com
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Load CPT Helper
require_once( plugin_dir_path( __FILE__ ) . 'core-classes/CPT_Core/CPT_Core.php' );

// Load Taxonomy Helper
require_once( plugin_dir_path( __FILE__ ) . 'core-classes/Taxonomy_Core/Taxonomy_Core.php' );

// Register Plugins CPT
register_via_cpt_core(
	array(
		'GB Plugin',
		'GB Plugins',
		'gb-plugins'
	),
	array(
		'menu_icon' => 'dashicons-admin-plugins',
		'publicly_queryable' => true,
		'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' )
	)
);
