<?php
/**
 * Call to action options.
 *
 * @package edunxt
 */

$default = edunxt_get_default_theme_options();

// Call to action section
$wp_customize->add_section( 'section_cta',
	array(
		'title'      => __( 'Call To Action Section', 'edunxt' ),
		'priority'   => 60,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);


$wp_customize->add_setting( 'theme_options[disable_cta_section]',
	array(

		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'edunxt_sanitize_switch_control',
	)
);
$wp_customize->add_control( new edunxt_Switch_Control( $wp_customize, 'theme_options[disable_cta_section]',
    array(
		'label' 			=> __('Disable Call to action section', 'edunxt'),
		'section'    		=> 'section_cta',
		'on_off_label' 		=> edunxt_switch_options(),
    )
) );


// Cta Background Image
$wp_customize->add_setting('theme_options[background_cta_section]', 
	array(
	'type'              => 'theme_mod',
	'default' 			=> $default['background_cta_section'],
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'edunxt_sanitize_image'
	)
);

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,
	'theme_options[background_cta_section]', 
	array(
	'label'       => __('Background Image', 'edunxt'),
	'section'     => 'section_cta',   
	'settings'    => 'theme_options[background_cta_section]',		
	'active_callback' => 'edunxt_cta_active',
	'type'        => 'image',
	)
	)
);

// Cta Small Font Description
$wp_customize->add_setting('theme_options[cta_small_description]', 
	array(
	'default' 			=> $default['cta_small_description'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_textarea_field'
	)
);

$wp_customize->add_control('theme_options[cta_small_description]', 
	array(
	'label'       => __('CTA Small Font Description', 'edunxt'),
	'section'     => 'section_cta',   
	'settings'    => 'theme_options[cta_small_description]',
	'active_callback' => 'edunxt_cta_active',		
	'type'        => 'textarea'
	)
);

// Cta Big Font Description
$wp_customize->add_setting('theme_options[cta_description]', 
	array(
	'default' 			=> $default['cta_description'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_textarea_field'
	)
);

$wp_customize->add_control('theme_options[cta_description]', 
	array(
	'label'       => __('CTA Big Font Description', 'edunxt'),
	'section'     => 'section_cta',   
	'settings'    => 'theme_options[cta_description]',
	'active_callback' => 'edunxt_cta_active',		
	'type'        => 'textarea'
	)
);
// Cta Button Text
$wp_customize->add_setting('theme_options[cta_button_label]', 
	array(
	'default' 			=> $default['cta_button_label'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[cta_button_label]', 
	array(
	'label'       => __('Button Label', 'edunxt'),
	'section'     => 'section_cta',   
	'settings'    => 'theme_options[cta_button_label]',	
	'active_callback' => 'edunxt_cta_active',	
	'type'        => 'text'
	)
);
// Cta Button Url
$wp_customize->add_setting('theme_options[cta_button_url]', 
	array(
	'default' 			=> $default['cta_button_url'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'esc_url_raw'
	)
);

$wp_customize->add_control('theme_options[cta_button_url]', 
	array(
	'label'       => __('Button Url', 'edunxt'),
	'section'     => 'section_cta',   
	'settings'    => 'theme_options[cta_button_url]',	
	'active_callback' => 'edunxt_cta_active',	
	'type'        => 'url'
	)
);