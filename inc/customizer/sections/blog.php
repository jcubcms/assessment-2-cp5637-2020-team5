<?php
/**
 * Home Page Options.
 *
 * @package edunxt
 */

$default = edunxt_get_default_theme_options();

// Latest Blog Section
$wp_customize->add_section( 'section_home_blog',
	array(
		'title'      => __( 'Blog Section', 'edunxt' ),
		'priority'   => 100,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);


$wp_customize->add_setting( 'theme_options[disable_blog_section]',
	array(

		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'edunxt_sanitize_switch_control',
	)
);
$wp_customize->add_control( new edunxt_Switch_Control( $wp_customize, 'theme_options[disable_blog_section]',
    array(
		'label' 	=> __('Disable Blog Section', 'edunxt'),
		'section'    			=> 'section_home_blog',
		
		'on_off_label' 		=> edunxt_switch_options(),
    )
) );


// Blog title
$wp_customize->add_setting('theme_options[blog_title]', 
	array(
	'default'           => $default['blog_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[blog_title]', 
	array(
	'label'       => __('Section Title', 'edunxt'),
	'section'     => 'section_home_blog',   
	'settings'    => 'theme_options[blog_title]',	
	'active_callback' => 'edunxt_blog_active',		
	'type'        => 'text'
	)
);

// Setting  Blog Category.
$wp_customize->add_setting( 'theme_options[blog_category]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	new edunxt_Dropdown_Taxonomies_Control( $wp_customize, 'theme_options[blog_category]',
		array(
		'label'    => __( 'Select Category', 'edunxt' ),
		'section'  => 'section_home_blog',
		'settings' => 'theme_options[blog_category]',	
		'active_callback' => 'edunxt_blog_active',		
		'priority' => 100,
		)
	)
);

