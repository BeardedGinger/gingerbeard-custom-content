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
		'Plugin',
		'GB Plugins',
		'gb-plugins'
	),
	array(
		'menu_icon' 			=> 'dashicons-admin-plugins',
		'publicly_queryable' 	=> true,
		'rewrite' 			=> array( 'slug' => 'plugins' ),
		'hierarchical' 			=> true,
		'supports' 				=> array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes' )
	)
);

// Register Testimonials CPT
register_via_cpt_core(
	array(
		'Testimonial',
		'Testimonials',
		'testimonials'
	),
	array(
		'menu_icon' => 'dashicons-format-quote',
		'publicly_queryable' => false,
		'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' )
	)
);

// Register Features CPT
register_via_cpt_core(
	array(
		'Feature',
		'Features',
		'gb-features'
	),
	array(
		'menu_icon' 			=> 'dashicons-editor-ul',
		'publicly_queryable' 	=> true,
		'rewrite' 				=> array( 'slug' => 'features' ),
		'hierarchical' 			=> true,
		'supports' 				=> array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes' )
	)
);

// Register Documentation CPT
register_via_cpt_core(
	array(
		'Documentation',
		'Documentation',
		'gb-documentation'
	),
	array(
		'menu_icon' 			=> 'dashicons-media-text',
		'publicly_queryable' 	=> true,
		'rewrite' 				=> array( 'slug' => 'documentation' ),
		'supports' 				=> array( 'title', 'editor', 'thumbnail', 'revisions' )
	)
);

// Plugins Taxonomy
register_via_taxonomy_core(
	array(
		'Plugin',
		'Plugins',
		'gb_plugin'
	),
	array(),
	array(
		'gb-plugins',
		'gb-features',
		'gb-documentation'
	)
);