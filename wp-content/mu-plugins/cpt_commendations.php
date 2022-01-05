<?php
/**
 * Plugin Name: Casper's Commendations
 * Description: This mu-plugin handles the creation of a custom post type by the same name.
 */

// Add Custom Post Type for Commendations 
function cjp_commendation_post_type(){
	$labels = array(
    'name'                  => _x( 'Commendations', 'cjp_blogfolio' ),
    'singular_name'         => _x( 'Commendation', 'cjp_blogfolio' ),
	);
	
	$args = array(
    'labels'             => $labels,
    'public'             => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'commendations' ),
    'rest_base'          => 'commendations',
    'show_in_rest'	  	 => true,
    'show_in_graphql'    => true,
    'graphql_single_name' => 'commendation',
    'graphql_plural_name' => 'commendations',
    'has_archive'        => true,
    'menu_position'      => 5,
    'supports'           => array( 'title', 'editor' ),
	);
	
	register_post_type( 'cjp_commendation', $args );
}
add_action('init', 'cjp_commendation_post_type');