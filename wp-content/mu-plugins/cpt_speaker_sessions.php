<?php
/*
Plugin Name: Casper's Speaker Sessions
*/
// Add Custom Post Type for Speaker Sessions 
function cjp_speaker_session_post_type(){
	$labels = array(
    'name'                  => _x( 'Speaker Sessions', 'cjp_blogfolio' ),
    'singular_name'         => _x( 'Speaker Session', 'cjp_blogfolio' ),
	);
	
	$args = array(
    'labels'             => $labels,
    'public'             => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'speaker-sessions' ),
    'rest_base'          => 'speaker-sessions',
    'show_in_rest'	  	 => true,
    'has_archive'        => true,
    'menu_position'      => 5,
    'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
	);
	
	register_post_type( 'cjp_speaker_session', $args );
}
add_action('init', 'cjp_speaker_session_post_type');


// Add Advanced Custom Fields
function cjp_speaker_session_custom_fields() {  
  acf_add_local_field_group(array (
    'key'       => 'cjp_speaker_session_meta_1',
    'title'     => 'Meta Info',
    'position'  => 'side',
    'location'  => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'cjp_speaker_session',
        )
      )
    ),
    'fields' => array (
      array (
        // date of talk
        'key'     => 'cjp_talk_date',
        'label'   => 'Date of Talk',
        'name'    => 'talk_date',
        'type'    => 'date_picker',
        'display_format' => 'm/d/yy',
        'return_format' => 'm/d/yy',
        'first_day' => '0',
        'required' => 'true',
      ),
      array (
        // start time of talk
        'key' => 'cjp_talk_start',
        'label' => 'Start Time',
        'name' => 'talk_start',
        'type' => 'time_picker',
      ),
      array (
        // end time of talk
        'key' => 'cjp_talk_end',
        'label' => 'End Time',
        'name' => 'talk_end',
        'type' => 'time_picker',
      ),
      array (
        // where to register
        'key' => 'cjp_talk_registration',
        'label' => 'Registration URL',
        'name' => 'talk_registration',
        'type' => 'text',
      ),
      array (
        // does the talk HAVE a recording?
        'key' => 'cjp_talk_is_recorded',
        'label' => 'Is there a recording?',
        'name' => 'talk_is_recorded',
        'type' => 'true_false',
        'message' => 'Check here for true'
      ),
      array (
        // link to recording
        'key' => 'cjp_talk_recording',
        'label' => 'Recording URL',
        'name' => 'talk_recording',
        'type' => 'text',
      ),
      array (
        // other useful information
        'key' => 'cjp_talk_resources',
        'label' => 'Additional Resources',
        'name' => 'talk_resources',
        'type' => 'wysiwyg',
        'media_upload' => 0,
        'tabs' => 'visual',
        'toolbar' => 'basic',
      )
    )
  ));
}

add_action('acf/init', 'cjp_speaker_session_custom_fields');