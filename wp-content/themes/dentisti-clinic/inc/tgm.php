<?php

	require get_template_directory() . '/inc/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function dentisti_clinic_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Contact Form 7', 'dentisti-clinic' ),
			'slug'             => 'contact-form-7',
			'required'         => false,
			'force_activation' => false,
		),

		array(
			'name'             => __( 'Elementor Page Builder', 'dentisti-clinic' ),
			'slug'             => 'elementor',
			'required'         => false,
			'force_activation' => false,
		),

		array(
			'name'             => __( 'Font Awesome', 'dentisti-clinic' ),
			'slug'             => 'font-awesome',
			'required'         => false,
			'force_activation' => false,
		),
		
	);
	$config = array();
	tgmpa( $plugins, $config );

}
add_action( 'tgmpa_register', 'dentisti_clinic_register_recommended_plugins' );