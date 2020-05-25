<?php
/**
 * About options.
 *
 * @package edunxt
 */

$default = edunxt_get_default_theme_options();

// Featured About Section
$wp_customize->add_section( 'section_home_about',
	array(
		'title'      => __( ' About Section', 'edunxt' ),
		'priority'   => 30,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);

$wp_customize->add_setting( 'theme_options[disable_about_section]',
	array(

		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'edunxt_sanitize_switch_control',
	)
);
$wp_customize->add_control( new edunxt_Switch_Control( $wp_customize, 'theme_options[disable_about_section]',
    array(
		'label' 			=> __('Enable/Disable About Section', 'edunxt'),
		'section'    		=> 'section_home_about',
		 'settings'  		=> 'theme_options[disable_about_section]',
		'on_off_label' 		=> edunxt_switch_options(),
    )
) );


// about title setting and control
$wp_customize->add_setting( 'theme_options[about_custom_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'theme_options[about_custom_title]', array(
	'label'           	=>  __( 'Title ', 'edunxt' ), 
	'section'        	=> 'section_home_about',	
	'active_callback' 	=> 'edunxt_about_active',
	'type'				=> 'text',
) );

// about title setting and control
$wp_customize->add_setting( 'theme_options[about_custom_img]', array(
	'type'              => 'theme_mod',
	'sanitize_callback' => 'esc_url_raw',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_options[about_custom_img]', array(
	 'label'           	=> esc_html__( 'Select Image ', 'edunxt' ), 
	'section'        	=> 'section_home_about',
	'settings'    		=> 'theme_options[about_custom_img]',	
	'active_callback' 	=> 'edunxt_about_active',
) ) );

// about title setting and control
$wp_customize->add_setting( 'theme_options[about_custom_content]', array(
	'type'              => 'theme_mod',
	'sanitize_callback' => 'sanitize_textarea_field',
) );

$wp_customize->add_control( 'theme_options[about_custom_content]', array(
	'label'           	=>  __( 'Content ', 'edunxt' ), 
	'section'        	=> 'section_home_about',
	'settings'    		=> 'theme_options[about_custom_content]',	
	'active_callback' 	=> 'edunxt_about_active',
	'type'				=> 'textarea',
) );

// About Button Text
$wp_customize->add_setting('theme_options[about_btn_text]', 
	array(

	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[about_btn_text]', 
	array(
	'label'       => __('Button Label', 'edunxt'),
	'section'     => 'section_home_about',   
	'settings'    => 'theme_options[about_btn_text]',	
	'active_callback' => 'edunxt_about_active',	
	'type'        => 'text'
	)
);

	// About Button Url
$wp_customize->add_setting('theme_options[about_btn_url]', 
	array(

	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'esc_url_raw'
	)
);

$wp_customize->add_control('theme_options[about_btn_url]', 
	array(
	'label'       => __('Button Url', 'edunxt'),
	'section'     => 'section_home_about',   
	'settings'    => 'theme_options[about_btn_url]',	
	'active_callback' => 'edunxt_about_active',	
	'type'        => 'url'
	)
);