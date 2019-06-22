<?php
/**
 * Custom header implementation
 */

function expert_movers_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'expert_movers_custom_header_args', array(

		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 400,
		'wp-head-callback'       => 'expert_movers_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'expert_movers_custom_header_setup' );

if ( ! function_exists( 'expert_movers_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see expert_movers_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'expert_movers_header_style' );
function expert_movers_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$custom_css = "
        #header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'expert-movers-basic-style', $custom_css );
	endif;
}
endif; // expert_movers_header_style