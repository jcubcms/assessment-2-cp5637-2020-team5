<?php
/**
 * Testimonial options.
 *
 * @package edunxt
 */

$default = edunxt_get_default_theme_options();

// Featured Testimonial Section
$wp_customize->add_section( 'section_home_testimonial',
	array(
		'title'      => __( 'Testimonial Section', 'edunxt' ),
		'priority'   => 80,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);

$wp_customize->add_setting( 'theme_options[disable_testimonial_section]',
	array(

		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'edunxt_sanitize_switch_control',
	)
);
$wp_customize->add_control( new edunxt_Switch_Control( $wp_customize, 'theme_options[disable_testimonial_section]',
    array(
		'label' 			=> __('Enable/Disable Testimonial Section', 'edunxt'),
		'section'    		=> 'section_home_testimonial',
		'settings'  		=> 'theme_options[disable_testimonial_section]',
		'on_off_label' 		=> edunxt_switch_options(),
    )
) );


// Testimonial background image control and setting
$wp_customize->add_setting( 'theme_options[testimonial_image]', array(
	'sanitize_callback' => 'esc_url_raw',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_options[testimonial_image]', array(
	'label'             => esc_html__( 'Background Image', 'edunxt' ),
	'section'           => 'section_home_testimonial',
	'active_callback'   => 'edunxt_testimonial_active',
) ) );

for( $i=1; $i<=3; $i++ ){

	// Additional Information First Page
	$wp_customize->add_setting('theme_options[testimonial_page_'.$i.']', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'edunxt_dropdown_pages'
		)
	);

	$wp_customize->add_control('theme_options[testimonial_page_'.$i.']', 
		array(
		'label'       => sprintf( __('Select Page #%1$s', 'edunxt'), $i),
		'section'     => 'section_home_testimonial',   
		'settings'    => 'theme_options[testimonial_page_'.$i.']',		
		'type'        => 'dropdown-pages',
		'active_callback' => 'edunxt_testimonial_active',
		)
	);
}

