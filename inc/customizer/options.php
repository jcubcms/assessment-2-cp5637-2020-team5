<?php 
/**
 * List of posts for post choices.
 * @return Array Array of post ids and name.
 */

if ( ! function_exists( 'edunxt_switch_options' ) ) :
    /**
     * List of custom Switch Control options
     * @return array List of switch control options.
     */
    function edunxt_switch_options() {
        $arr = array(
            'on'        => esc_html__( 'Enable', 'edunxt' ),
            'off'       => esc_html__( 'Disable', 'edunxt' )
        );
        return apply_filters( 'edunxt_switch_options', $arr );
    }
endif;


 

 ?>