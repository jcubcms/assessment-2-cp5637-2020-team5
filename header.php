<?php
/**
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

do_action( 'edunxt_action_doctype' );
?>
<head>
<?php
/**
* Hook - edunxt_action_head.
*
* @hooked edunxt_head -  10
*/
do_action( 'edunxt_action_head' );
?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php

/**
* Hook - edunxt_action_before.
*
* @hooked edunxt_page_start - 10
*/
do_action( 'edunxt_action_before' );

/**
*
* @hooked edunxt_header_start - 10
*/
do_action( 'edunxt_action_before_header' );

/**
*
*@hooked edunxt_site_branding - 10
*@hooked edunxt_header_end - 15 
*/
do_action('edunxt_action_header');

/**
*
* @hooked edunxt_content_start - 10
*/
do_action( 'edunxt_action_before_content' );

/**
 * Banner start
 * 
 * @hooked edunxt_banner_header - 10
*/
do_action( 'edunxt_banner_header' );  
