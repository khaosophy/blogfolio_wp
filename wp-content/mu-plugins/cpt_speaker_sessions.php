<?php
/*
Plugin Name: Casper's Speaker Sessions
*/
// Add Custom Post Type for Speaker Sessions 
function cjp_speaker_session_post_type(){
	$labels = array(
        'name'                  => _x( 'Speaker Sessions', 'twentyseventeen-child' ),
        'singular_name'         => _x( 'Speaker Session', 'twentyseventeen-child' ),
	);
	
	$args = array(
		'labels'             => $labels,
        'public'             => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'speaker-sessions' ),
        'rest_base'          => 'speaker-sessions',
		'show_in_rest'		 => true,
        'has_archive'        => true,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
	);
	
	register_post_type( 'cjp_speaker_session', $args );
}
add_action('init', 'cjp_speaker_session_post_type');