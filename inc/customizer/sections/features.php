<?php
/**
 * Features options.
 *
 * @package edunxt
 */

$default = edunxt_get_default_theme_options();

// Features Section
$wp_customize->add_section( 'section_home_features',
	array(
		'title'      => __( 'Features Section', 'edunxt' ),
		'priority'   => 50,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);

$wp_customize->add_setting( 'theme_options[disable_features_section]',
	array(

		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'edunxt_sanitize_switch_control',
	)
);
$wp_customize->add_control( new edunxt_Switch_Control( $wp_customize, 'theme_options[disable_features_section]',
    array(
		'label' 			=> __('Enable/Disable Features Section', 'edunxt'),
		'section'    		=> 'section_home_features',
		 'settings'  		=> 'theme_options[disable_features_section]',
		'on_off_label' 		=> edunxt_switch_options(),
    )
) );

//Features Section title
$wp_customize->add_setting('theme_options[features_title]', 
	array(
	'default'           => $default['features_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[features_title]', 
	array(
	'label'       => __('Section Title', 'edunxt'),
	'section'     => 'section_home_features',   
	'settings'    => 'theme_options[features_title]',
	'active_callback' => 'edunxt_features_active',		
	'type'        => 'text'
	)
);


// features title setting and control
$wp_customize->add_setting( 'theme_options[features_custom_img]', array(
	'type'              => 'theme_mod',
	'sanitize_callback' => 'esc_url_raw',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_options[features_custom_img]', array(
	'label'				=>  esc_html__( 'Select Image', 'edunxt' ),
	'section'        	=> 'section_home_features',
	'settings'    		=> 'theme_options[features_custom_img]',	
	'active_callback' 	=> 'edunxt_features_active',
) ) );



for( $i=1; $i<=4; $i++ ){

	// Additional Information First Page
	$wp_customize->add_setting('theme_options[features_page_'.$i.']', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'edunxt_dropdown_pages'
		)
	);

	$wp_customize->add_control('theme_options[features_page_'.$i.']', 
		array(
		'label'       => sprintf( __('Select Page #%1$s', 'edunxt'), $i),
		'section'     => 'section_home_features',   
		'settings'    => 'theme_options[features_page_'.$i.']',		
		'type'        => 'dropdown-pages',
		'active_callback' => 'edunxt_features_active',
		)
	);
	
}
