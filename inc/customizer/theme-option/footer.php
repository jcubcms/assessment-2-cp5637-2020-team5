<?php 
/**
 * Theme Options.
 *
 * @package edunxt
 */

$default = edunxt_get_default_theme_options();

// Footer Setting Section starts
$wp_customize->add_section('section_footer', 
	array(    
	'title'       => __('Footer Option', 'edunxt'),
	'panel'       => 'theme_option_panel'    
	)
);

// Setting copyright_text.
$wp_customize->add_setting( 'theme_options[copyright_text]',
	array(
	'default'           => $default['copyright_text'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'edunxt_sanitize_textarea_content',
	'transport'         => 'postMessage',
	)
);
$wp_customize->add_control( 'theme_options[copyright_text]',
	array(
	'label'    => __( 'Copyright Text', 'edunxt' ),
	'section'  => 'section_footer',
	'type'     => 'text',
	'priority' => 10,
	)
);

 ?>