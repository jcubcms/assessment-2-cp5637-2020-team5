<?php
/**
 * Services options.
 *
 * @package edunxt
 */

$default = edunxt_get_default_theme_options();

// Featured Services Section
$wp_customize->add_section( 'section_home_service',
	array(
		'title'      => __( 'Services Section', 'edunxt' ),
		'priority'   => 20,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);

$wp_customize->add_setting( 'theme_options[disable_services_section]',
	array(

		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'edunxt_sanitize_switch_control',
	)
);
$wp_customize->add_control( new edunxt_Switch_Control( $wp_customize, 'theme_options[disable_services_section]',
    array(
		'label' 			=> __('Enable/Disable Service Section', 'edunxt'),
		'section'    		=> 'section_home_service',
		 'settings'  		=> 'theme_options[disable_services_section]',
		'on_off_label' 		=> edunxt_switch_options(),
    )
) );

//Services Section title
$wp_customize->add_setting('theme_options[service_title]', 
	array(
	'default'           => $default['service_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[service_title]', 
	array(
	'label'       => __('Section Title', 'edunxt'),
	'section'     => 'section_home_service',   
	'settings'    => 'theme_options[service_title]',
	'active_callback' => 'edunxt_services_active',		
	'type'        => 'text'
	)
);

for( $i=1; $i<=6; $i++ ){

	// Additional Information First Page
	$wp_customize->add_setting('theme_options[services_page_'.$i.']', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'edunxt_dropdown_pages'
		)
	);

	$wp_customize->add_control('theme_options[services_page_'.$i.']', 
		array(
		'label'       => sprintf( __('Select Page #%1$s', 'edunxt'), $i),
		'section'     => 'section_home_service',   
		'settings'    => 'theme_options[services_page_'.$i.']',		
		'type'        => 'dropdown-pages',
		'active_callback' => 'edunxt_services_active',
		)
	);
}
