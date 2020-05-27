<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

do_action( 'edunxt_action_before_footer' );

/**
 * Hooked - edunxt_footer_top_section -10
 * Hooked - edunxt_footer_section -20
 */
do_action( 'edunxt_action_footer' );

/**
 * Hooked - edunxt_footer_end. 
 */
do_action( 'edunxt_action_after_footer' );

wp_footer(); ?>

</body>  
</html>