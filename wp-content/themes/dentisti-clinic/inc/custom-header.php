<?php
/**
 * @package dentisti-clinic
 * @subpackage dentisti-clinic
 * @since dentisti-clinic 1.0
 * Setup the WordPress core custom header feature.
 *
 * @uses dentisti_clinic_header_style()
*/

function dentisti_clinic_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'dentisti_clinic_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1055,
		'height'                 => 105,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'dentisti_clinic_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'dentisti_clinic_custom_header_setup' );

if ( ! function_exists( 'dentisti_clinic_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see dentisti_clinic_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'dentisti_clinic_header_style' );
function dentisti_clinic_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$dentisti_clinic_custom_css = "
        #header-top,
		.page-template-custom-front-page #header-top{
			background-image:url('".esc_url(get_header_image())."') !important;
			background-position: center top !important;
		}";
	   	wp_add_inline_style( 'dentisti-clinic-basic-style', $dentisti_clinic_custom_css );
	endif;
}
endif; // dentisti_clinic_header_style