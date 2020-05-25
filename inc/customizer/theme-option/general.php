<?php 

/**
 * Theme Options.
 *
 * @package edunxt
 */

$default = edunxt_get_default_theme_options();
//For General Option
$wp_customize->add_section('section_general', array(    
'title'       => __('General Setting', 'edunxt'),
'panel'       => 'theme_option_panel'    
));

//Layout Options
$wp_customize->add_setting('theme_options[layout_options]', 
	array(
	'default' 			=> $default['layout_options'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'edunxt_sanitize_select'
	)
);

$wp_customize->add_control(new edunxt_Image_Radio_Control($wp_customize, 'theme_options[layout_options]', 
	array(		
	'label' 	=> __('Layout Options', 'edunxt'),
	'section' 	=> 'section_general',
	'settings'  => 'theme_options[layout_options]',
	'type' 		=> 'radio-image',
	'choices' 	=> array(		
		'left-sidebar' 	=> get_template_directory_uri() . '/assets/images/left-sidebar.png',						
		'right-sidebar' => get_template_directory_uri() . '/assets/images/right-sidebar.png',
		'no-sidebar' 	=> get_template_directory_uri() . '/assets/images/no-sidebar.png',
		),	
	))
);

// Setting Read More Text.
$wp_customize->add_setting( 'theme_options[readmore_text]',
	array(
	'default'           => $default['readmore_text'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'edunxt_sanitize_textarea_content',
	'transport'         => 'postMessage',
	)
);
$wp_customize->add_control( 'theme_options[readmore_text]',
	array(
	'label'    => __( 'Read More Text', 'edunxt' ),
	'section'  => 'section_general',
	'type'     => 'text',
	'priority' => 100,
	)
);

// Setting excerpt_length.
$wp_customize->add_setting( 'theme_options[excerpt_length]', array(
	'default'           => $default['excerpt_length'],
	'sanitize_callback' => 'edunxt_sanitize_positive_integer',
) );
$wp_customize->add_control( 'theme_options[excerpt_length]', array(
	'label'       => esc_html__( 'Excerpt Length', 'edunxt' ),
	'description' => esc_html__( 'in words', 'edunxt' ),
	'section'     => 'section_general',
	'type'        => 'number',
	'input_attrs' => array( 'min' => 1, 'max' => 200, 'style' => 'width: 55px;' ),
) );

 ?>