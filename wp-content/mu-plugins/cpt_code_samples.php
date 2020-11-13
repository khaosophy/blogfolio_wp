<?php
/**
 * Plugin Name: Casper's Code Samples
 * Description: This mu-plugin handles the creation of a custom post type by the same name.
 */

// Add Custom Post Type for Code Samples
function cjp_code_sample_post_type(){
	$labels = array(
    'name'                  => _x( 'Code Samples', 'cjp_blogfolio' ),
    'singular_name'         => _x( 'Code Sample', 'cjp_blogfolio' ),
	);
	
	$args = array(
		'labels'             => $labels,
    'public'             => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'code-samples' ),
		'show_in_rest'	  	 => true,
    'rest_base'          => 'code-samples',
    'has_archive'        => true,
    'menu_position'      => 5,
    'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
	);
	
	register_post_type( 'cjp_code_sample', $args );
}
add_action('init', 'cjp_code_sample_post_type');