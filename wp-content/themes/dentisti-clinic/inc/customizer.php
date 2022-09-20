<?php
/**
 * Dentisti Clinic Theme Customizer
 *
 * @package dentisti-clinic
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function dentisti_clinic_customize_register($wp_customize) {

	//add home page setting pannel
	$wp_customize->add_panel('dentisti_clinic_panel_id', array(
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Theme Settings', 'dentisti-clinic'),
	));	

	// font array
	$dentisti_clinic_font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' => 'Acme',
        'Anton' => 'Anton',
        'Architects Daughter' => 'Architects Daughter',
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo',
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script',
        'Bitter' => 'Bitter',
        'Bree Serif' => 'Bree Serif',
        'BenchNine' => 'BenchNine', 
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo',
        'Courgette' => 'Courgette',
        'Cherry Swash' => 'Cherry Swash',
        'Cormorant Garamond' => 'Cormorant Garamond',
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One', 
        'Dosis' => 'Dosis',
        'Droid Sans' => 'Droid Sans',
        'Economica' => 'Economica',
        'Fredoka One' => 'Fredoka One',
        'Fjalla One' => 'Fjalla One',
        'Francois One' => 'Francois One',
        'Frank Ruhl Libre' => 'Frank Ruhl Libre',
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' => 'Great Vibes',
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One',
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One',
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster', 
        'Lato' => 'Lato',
        'Lora' => 'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather', 
        'Monda' => 'Monda',
        'Montserrat' => 'Montserrat',
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script',
        'Noto Serif' => 'Noto Serif',
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass',
        'Overpass Mono' => 'Overpass Mono',
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico',
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball',
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans',
        'Philosopher' => 'Philosopher',
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' =>'Shadows Into Light Two', 
        'Shadows Into Light' => 'Shadows Into Light', 
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' => 'Tangerine',
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
    );

	//Typography
	$wp_customize->add_section( 'dentisti_clinic_typography', array(
    	'title'      => __( 'Typography', 'dentisti-clinic' ),
		'priority'   => 30,
		'panel' => 'dentisti_clinic_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'dentisti_clinic_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dentisti_clinic_paragraph_color', array(
		'label' => __('Paragraph Color', 'dentisti-clinic'),
		'section' => 'dentisti_clinic_typography',
		'settings' => 'dentisti_clinic_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('dentisti_clinic_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'dentisti_clinic_sanitize_choices'
	));
	$wp_customize->add_control(
	    'dentisti_clinic_paragraph_font_family', array(
	    'section'  => 'dentisti_clinic_typography',
	    'label'    => __( 'Paragraph Fonts','dentisti-clinic'),
	    'type'     => 'select',
	    'choices'  => $dentisti_clinic_font_array,
	));

	$wp_customize->add_setting('dentisti_clinic_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('dentisti_clinic_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','dentisti-clinic'),
		'section'	=> 'dentisti_clinic_typography',
		'setting'	=> 'dentisti_clinic_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'dentisti_clinic_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dentisti_clinic_atag_color', array(
		'label' => __('"a" Tag Color', 'dentisti-clinic'),
		'section' => 'dentisti_clinic_typography',
		'settings' => 'dentisti_clinic_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('dentisti_clinic_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'dentisti_clinic_sanitize_choices'
	));
	$wp_customize->add_control(
	    'dentisti_clinic_atag_font_family', array(
	    'section'  => 'dentisti_clinic_typography',
	    'label'    => __( '"a" Tag Fonts','dentisti-clinic'),
	    'type'     => 'select',
	    'choices'  => $dentisti_clinic_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'dentisti_clinic_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dentisti_clinic_li_color', array(
		'label' => __('"li" Tag Color', 'dentisti-clinic'),
		'section' => 'dentisti_clinic_typography',
		'settings' => 'dentisti_clinic_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('dentisti_clinic_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'dentisti_clinic_sanitize_choices'
	));
	$wp_customize->add_control(
	    'dentisti_clinic_li_font_family', array(
	    'section'  => 'dentisti_clinic_typography',
	    'label'    => __( '"li" Tag Fonts','dentisti-clinic'),
	    'type'     => 'select',
	    'choices'  => $dentisti_clinic_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'dentisti_clinic_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dentisti_clinic_h1_color', array(
		'label' => __('H1 Color', 'dentisti-clinic'),
		'section' => 'dentisti_clinic_typography',
		'settings' => 'dentisti_clinic_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('dentisti_clinic_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'dentisti_clinic_sanitize_choices'
	));
	$wp_customize->add_control(
	    'dentisti_clinic_h1_font_family', array(
	    'section'  => 'dentisti_clinic_typography',
	    'label'    => __( 'H1 Fonts','dentisti-clinic'),
	    'type'     => 'select',
	    'choices'  => $dentisti_clinic_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('dentisti_clinic_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('dentisti_clinic_h1_font_size',array(
		'label'	=> __('H1 Font Size','dentisti-clinic'),
		'section'	=> 'dentisti_clinic_typography',
		'setting'	=> 'dentisti_clinic_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'dentisti_clinic_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dentisti_clinic_h2_color', array(
		'label' => __('h2 Color', 'dentisti-clinic'),
		'section' => 'dentisti_clinic_typography',
		'settings' => 'dentisti_clinic_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('dentisti_clinic_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'dentisti_clinic_sanitize_choices'
	));
	$wp_customize->add_control(
	    'dentisti_clinic_h2_font_family', array(
	    'section'  => 'dentisti_clinic_typography',
	    'label'    => __( 'h2 Fonts','dentisti-clinic'),
	    'type'     => 'select',
	    'choices'  => $dentisti_clinic_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('dentisti_clinic_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('dentisti_clinic_h2_font_size',array(
		'label'	=> __('h2 Font Size','dentisti-clinic'),
		'section'	=> 'dentisti_clinic_typography',
		'setting'	=> 'dentisti_clinic_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'dentisti_clinic_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dentisti_clinic_h3_color', array(
		'label' => __('h3 Color', 'dentisti-clinic'),
		'section' => 'dentisti_clinic_typography',
		'settings' => 'dentisti_clinic_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('dentisti_clinic_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'dentisti_clinic_sanitize_choices'
	));
	$wp_customize->add_control(
	    'dentisti_clinic_h3_font_family', array(
	    'section'  => 'dentisti_clinic_typography',
	    'label'    => __( 'h3 Fonts','dentisti-clinic'),
	    'type'     => 'select',
	    'choices'  => $dentisti_clinic_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('dentisti_clinic_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('dentisti_clinic_h3_font_size',array(
		'label'	=> __('h3 Font Size','dentisti-clinic'),
		'section'	=> 'dentisti_clinic_typography',
		'setting'	=> 'dentisti_clinic_h3_font_size',
		'type'	=> 'text',
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'dentisti_clinic_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dentisti_clinic_h4_color', array(
		'label' => __('h4 Color', 'dentisti-clinic'),
		'section' => 'dentisti_clinic_typography',
		'settings' => 'dentisti_clinic_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('dentisti_clinic_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'dentisti_clinic_sanitize_choices'
	));
	$wp_customize->add_control(
	    'dentisti_clinic_h4_font_family', array(
	    'section'  => 'dentisti_clinic_typography',
	    'label'    => __( 'h4 Fonts','dentisti-clinic'),
	    'type'     => 'select',
	    'choices'  => $dentisti_clinic_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('dentisti_clinic_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('dentisti_clinic_h4_font_size',array(
		'label'	=> __('h4 Font Size','dentisti-clinic'),
		'section'	=> 'dentisti_clinic_typography',
		'setting'	=> 'dentisti_clinic_h4_font_size',
		'type'	=> 'text',
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'dentisti_clinic_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dentisti_clinic_h5_color', array(
		'label' => __('h5 Color', 'dentisti-clinic'),
		'section' => 'dentisti_clinic_typography',
		'settings' => 'dentisti_clinic_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('dentisti_clinic_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'dentisti_clinic_sanitize_choices'
	));
	$wp_customize->add_control(
	    'dentisti_clinic_h5_font_family', array(
	    'section'  => 'dentisti_clinic_typography',
	    'label'    => __( 'h5 Fonts','dentisti-clinic'),
	    'type'     => 'select',
	    'choices'  => $dentisti_clinic_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('dentisti_clinic_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('dentisti_clinic_h5_font_size',array(
		'label'	=> __('h5 Font Size','dentisti-clinic'),
		'section'	=> 'dentisti_clinic_typography',
		'setting'	=> 'dentisti_clinic_h5_font_size',
		'type'	=> 'text',
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'dentisti_clinic_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dentisti_clinic_h6_color', array(
		'label' => __('h6 Color', 'dentisti-clinic'),
		'section' => 'dentisti_clinic_typography',
		'settings' => 'dentisti_clinic_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('dentisti_clinic_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'dentisti_clinic_sanitize_choices'
	));
	$wp_customize->add_control(
	    'dentisti_clinic_h6_font_family', array(
	    'section'  => 'dentisti_clinic_typography',
	    'label'    => __( 'h6 Fonts','dentisti-clinic'),
	    'type'     => 'select',
	    'choices'  => $dentisti_clinic_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('dentisti_clinic_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('dentisti_clinic_h6_font_size',array(
		'label'	=> __('h6 Font Size','dentisti-clinic'),
		'section'	=> 'dentisti_clinic_typography',
		'setting'	=> 'dentisti_clinic_h6_font_size',
		'type'	=> 'text',
	));

  	$wp_customize->add_setting('dentisti_clinic_background_skin_mode',array(
        'default' => 'Transparent Background',
        'sanitize_callback' => 'dentisti_clinic_sanitize_choices'
	));
	$wp_customize->add_control('dentisti_clinic_background_skin_mode',array(
        'type' => 'select',
        'label' => __('Background Type','dentisti-clinic'),
        'section' => 'background_image',
        'choices' => array(
            'With Background' => __('With Background','dentisti-clinic'),
            'Transparent Background' => __('Transparent Background','dentisti-clinic'),
        ),
	) );

	// woocommerce section
	$wp_customize->add_setting('dentisti_clinic_show_related_products',array(
       'default' => true,
       'sanitize_callback'	=> 'dentisti_clinic_sanitize_checkbox'
    ));
    $wp_customize->add_control('dentisti_clinic_show_related_products',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Related Product','dentisti-clinic'),
       'section' => 'woocommerce_product_catalog',
    ));

	$wp_customize->add_setting('dentisti_clinic_show_wooproducts_border',array(
       'default' => true,
       'sanitize_callback'	=> 'dentisti_clinic_sanitize_checkbox'
    ));
    $wp_customize->add_control('dentisti_clinic_show_wooproducts_border',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Product Border','dentisti-clinic'),
       'section' => 'woocommerce_product_catalog',
    ));

    $wp_customize->add_setting( 'dentisti_clinic_wooproducts_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'dentisti_clinic_sanitize_choices',
	) );
	$wp_customize->add_control( 'dentisti_clinic_wooproducts_per_columns', array(
		'label'    => __( 'Display Product Per Columns', 'dentisti-clinic' ),
		'section'  => 'woocommerce_product_catalog',
		'type'     => 'select',
		'choices'  => array(
						'2' => '2',
						'3' => '3',
						'4' => '4',
						'5' => '5',
		),
	)  );

	$wp_customize->add_setting('dentisti_clinic_wooproducts_per_page',array(
		'default'	=> 9,
		'sanitize_callback'    => 'dentisti_clinic_sanitize_float',
	));	
	$wp_customize->add_control('dentisti_clinic_wooproducts_per_page',array(
		'label'	=> __('Display Product Per Page','dentisti-clinic'),
		'section'	=> 'woocommerce_product_catalog',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'dentisti_clinic_top_bottom_wooproducts_padding',array(
		'default' => 0,
		'sanitize_callback'    => 'dentisti_clinic_sanitize_float',
	));
	$wp_customize->add_control( 'dentisti_clinic_top_bottom_wooproducts_padding',	array(
		'label' => esc_html__( 'Top Bottom Product Padding','dentisti-clinic' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'dentisti_clinic_left_right_wooproducts_padding',array(
		'default' => 0,
		'sanitize_callback'    => 'dentisti_clinic_sanitize_float',
	));
	$wp_customize->add_control( 'dentisti_clinic_left_right_wooproducts_padding',	array(
		'label' => esc_html__( 'Right Left Product Padding','dentisti-clinic' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',
	));

	$wp_customize->add_setting( 'dentisti_clinic_wooproducts_border_radius',array(
		'default' => 0,
		'sanitize_callback'    => 'dentisti_clinic_sanitize_number_range',
	));
	$wp_customize->add_control('dentisti_clinic_wooproducts_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','dentisti-clinic' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'range'
	));

	$wp_customize->add_setting( 'dentisti_clinic_wooproducts_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'dentisti_clinic_sanitize_number_range',
	));
	$wp_customize->add_control('dentisti_clinic_wooproducts_box_shadow',array(
		'label' => esc_html__( 'Product Box Shadow','dentisti-clinic' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'range'
	));

	$wp_customize->add_setting('dentisti_clinic_products_navigation',array(
       'default' => 'Yes',
       'sanitize_callback'	=> 'dentisti_clinic_sanitize_choices'
    ));
    $wp_customize->add_control('dentisti_clinic_products_navigation',array(
       'type' => 'radio',
       'label' => __('Woocommerce Products Navigation','dentisti-clinic'),
       'choices' => array(
            'Yes' => __('Yes','dentisti-clinic'),
            'No' => __('No','dentisti-clinic'),
        ),
       'section' => 'woocommerce_product_catalog',
    ));

	$wp_customize->add_section('dentisti_clinic_product_button_section', array(
		'title'    => __('Product Button Settings', 'dentisti-clinic'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	$wp_customize->add_setting( 'dentisti_clinic_top_bottom_product_button_padding',array(
		'default' => 10,
		'sanitize_callback'    => 'dentisti_clinic_sanitize_float',
	));
	$wp_customize->add_control('dentisti_clinic_top_bottom_product_button_padding',	array(
		'label' => esc_html__( 'Product Button Top Bottom Padding','dentisti-clinic' ),
		'section' => 'dentisti_clinic_product_button_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',

	));

	$wp_customize->add_setting( 'dentisti_clinic_left_right_product_button_padding',array(
		'default' => 16,
		'sanitize_callback'    => 'dentisti_clinic_sanitize_float',
	));
	$wp_customize->add_control('dentisti_clinic_left_right_product_button_padding',array(
		'label' => esc_html__( 'Product Button Right Left Padding','dentisti-clinic' ),
		'section' => 'dentisti_clinic_product_button_section',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'dentisti_clinic_product_button_border_radius',array(
		'default' => 30,
		'sanitize_callback'    => 'dentisti_clinic_sanitize_number_range',
	));
	$wp_customize->add_control('dentisti_clinic_product_button_border_radius',array(
		'label' => esc_html__( 'Product Button Border Radius','dentisti-clinic' ),
		'section' => 'dentisti_clinic_product_button_section',
		'type'		=> 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_section('dentisti_clinic_product_sale_section', array(
		'title'    => __('Product Sale Button Settings', 'dentisti-clinic'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	$wp_customize->add_setting('dentisti_clinic_align_product_sale',array(
        'default' => 'Right',
        'sanitize_callback' => 'dentisti_clinic_sanitize_choices'
	));
	$wp_customize->add_control('dentisti_clinic_align_product_sale',array(
        'type' => 'radio',
        'label' => __('Product Sale Button Alignment','dentisti-clinic'),
        'section' => 'dentisti_clinic_product_sale_section',
        'choices' => array(
            'Right' => __('Right','dentisti-clinic'),
            'Left' => __('Left','dentisti-clinic'),
        ),
	) );

	$wp_customize->add_setting( 'dentisti_clinic_border_radius_product_sale',array(
		'default' => 50,
		'sanitize_callback'	=> 'dentisti_clinic_sanitize_float',
	));
	$wp_customize->add_control('dentisti_clinic_border_radius_product_sale', array(
        'label'  => __('Product Sale Button Border Radius','dentisti-clinic'),
        'section'  => 'dentisti_clinic_product_sale_section',
        'type'        => 'number',
        'input_attrs' => array(
        	'step'=> 1,
            'min' => 0,
            'max' => 50,
        )
    ) );

	$wp_customize->add_setting('dentisti_clinic_product_sale_font_size',array(
		'default'=> 14,
		'sanitize_callback'	=> 'dentisti_clinic_sanitize_float'
	));
	$wp_customize->add_control('dentisti_clinic_product_sale_font_size',array(
		'label'	=> __('Product Sale Button Font Size','dentisti-clinic'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'dentisti_clinic_product_sale_section',
		'type'=> 'number'
	));

	// Add the Theme Color Option section.
	$wp_customize->add_section( 'dentisti_clinic_theme_color_option', array( 
		'panel' => 'dentisti_clinic_panel_id', 
		'title' => esc_html__( 'Theme Color Option', 'dentisti-clinic' ) )
	);

  	$wp_customize->add_setting( 'dentisti_clinic_theme_color_first', array(
	    'default' => '#9d5ae1',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dentisti_clinic_theme_color_first', array(
  		'label' => __('First Color Option', 'dentisti-clinic'),
  		'description' => __('One can change complete theme color on just one click.', 'dentisti-clinic'),
	    'section' => 'dentisti_clinic_theme_color_option',
	    'settings' => 'dentisti_clinic_theme_color_first',
  	)));

  	$wp_customize->add_setting( 'dentisti_clinic_theme_color_second', array(
	    'default' => '#2e87ff ',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dentisti_clinic_theme_color_second', array(
  		'label' => __('Second Color Option', 'dentisti-clinic'),
  		'description' => __('One can change complete theme color on just one click.', 'dentisti-clinic'),
	    'section' => 'dentisti_clinic_theme_color_option',
	    'settings' => 'dentisti_clinic_theme_color_second',
  	)));

	//Layouts
	$wp_customize->add_section('dentisti_clinic_left_right', array(
		'title'    => __('Layout Settings', 'dentisti-clinic'),
		'priority' => null,
		'panel'    => 'dentisti_clinic_panel_id',
	));

	$wp_customize->add_setting('dentisti_clinic_preloader_option',array(
       'default' => true,
       'sanitize_callback'	=> 'dentisti_clinic_sanitize_checkbox'
    ));
    $wp_customize->add_control('dentisti_clinic_preloader_option',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Preloader','dentisti-clinic'),
       'section' => 'dentisti_clinic_left_right'
    ));

    $wp_customize->add_setting( 'dentisti_clinic_loader_background_color_settings', array(
	    'default' => '#222',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dentisti_clinic_loader_background_color_settings', array(
  		'label' => __('Preloader Background Color', 'dentisti-clinic'),
	    'section' => 'dentisti_clinic_left_right',
	    'settings' => 'dentisti_clinic_loader_background_color_settings',
  	)));

    $wp_customize->add_setting( 'dentisti_clinic_shop_page_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'dentisti_clinic_sanitize_checkbox'
    ) );
    $wp_customize->add_control('dentisti_clinic_shop_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Woocommerce Page Sidebar','dentisti-clinic'),
		'section' => 'dentisti_clinic_left_right'
    ));

	$wp_customize->add_setting( 'dentisti_clinic_wocommerce_single_page_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'dentisti_clinic_sanitize_checkbox'
    ) );
    $wp_customize->add_control('dentisti_clinic_wocommerce_single_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Single Product Page Sidebar','dentisti-clinic'),
		'section' => 'dentisti_clinic_left_right'
    ));

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('dentisti_clinic_layout_options', array(
		'default'           => 'Right Sidebar', 
		'sanitize_callback' => 'dentisti_clinic_sanitize_choices',
	));
	$wp_customize->add_control('dentisti_clinic_layout_options',array(
		'type'           => 'radio',
		'label'          => __('Change Layouts', 'dentisti-clinic'),
		'section'        => 'dentisti_clinic_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'dentisti-clinic'),
			'Right Sidebar' => __('Right Sidebar', 'dentisti-clinic'),
			'One Column'    => __('One Column', 'dentisti-clinic'),
			'Grid Layout'   => __('Grid Layout', 'dentisti-clinic')
		),
	));

	$wp_customize->add_setting('dentisti_clinic_single_page_sidebar_layout', array(
		'default'           => 'One Column',
		'sanitize_callback' => 'dentisti_clinic_sanitize_choices',
	));
	$wp_customize->add_control('dentisti_clinic_single_page_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Page Layouts', 'dentisti-clinic'),
		'section'        => 'dentisti_clinic_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'dentisti-clinic'),
			'Right Sidebar' => __('Right Sidebar', 'dentisti-clinic'),
			'One Column'    => __('One Column', 'dentisti-clinic'),
		),
	));

	$wp_customize->add_setting('dentisti_clinic_single_post_sidebar_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'dentisti_clinic_sanitize_choices',
	));
	$wp_customize->add_control('dentisti_clinic_single_post_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Post Layouts', 'dentisti-clinic'),
		'section'        => 'dentisti_clinic_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'dentisti-clinic'),
			'Right Sidebar' => __('Right Sidebar', 'dentisti-clinic'),
			'One Column'    => __('One Column', 'dentisti-clinic'),
		),
	));
	
	$wp_customize->add_setting('dentisti_clinic_theme_options',array(
        'default' => 'Default',
        'sanitize_callback' => 'dentisti_clinic_sanitize_choices'
	));
	$wp_customize->add_control('dentisti_clinic_theme_options',array(
        'type' => 'radio',
        'label' => __('Container Box','dentisti-clinic'),
        'description' => __('Here you can change the Width layout. ','dentisti-clinic'),
        'section' => 'dentisti_clinic_left_right',
        'choices' => array(
            'Default' => __('Default','dentisti-clinic'),
            'Container' => __('Container','dentisti-clinic'),
            'Box Container' => __('Box Container','dentisti-clinic'),
        ),
	) );

	// Button
	$wp_customize->add_section( 'dentisti_clinic_theme_button', array(
		'title' => __('Button Option','dentisti-clinic'),
		'panel' => 'dentisti_clinic_panel_id',
	));

	$wp_customize->add_setting('dentisti_clinic_button_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'    => 'dentisti_clinic_sanitize_float',
	));
	$wp_customize->add_control('dentisti_clinic_button_padding_top_bottom',array(
		'label'	=> __('Top and Bottom Padding','dentisti-clinic'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'dentisti_clinic_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting('dentisti_clinic_button_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'    => 'dentisti_clinic_sanitize_float',
	));
	$wp_customize->add_control('dentisti_clinic_button_padding_left_right',array(
		'label'	=> __('Left and Right Padding','dentisti-clinic'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'dentisti_clinic_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'dentisti_clinic_button_border_radius', array(
		'default'=> '',
		'sanitize_callback'    => 'dentisti_clinic_sanitize_float',
	) );
	$wp_customize->add_control( 'dentisti_clinic_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','dentisti-clinic' ),
		'section'     => 'dentisti_clinic_theme_button',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Top Bar
	$wp_customize->add_section('dentisti_clinic_topbar',array(
		'title'	=> __('Topbar Section','dentisti-clinic'),
		'description'	=> __('Add topbar content','dentisti-clinic'),
		'priority'	=> null,
		'panel' => 'dentisti_clinic_panel_id',
	));

	//Show /Hide Topbar
	$wp_customize->add_setting( 'dentisti_clinic_display_topbar',array(
		'default' => false,
      	'sanitize_callback'	=> 'dentisti_clinic_sanitize_checkbox'
    ) );
    $wp_customize->add_control('dentisti_clinic_display_topbar',array(
    	'priority'       => 1,
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Topbar','dentisti-clinic' ),
        'section' => 'dentisti_clinic_topbar'
    ));

    //Sticky Header
	$wp_customize->add_setting( 'dentisti_clinic_sticky_header',array(
		'default' => false,
      	'sanitize_callback'	=> 'dentisti_clinic_sanitize_checkbox'
    ) );
    $wp_customize->add_control('dentisti_clinic_sticky_header',array(
    	'type' => 'checkbox',
        'label' => __( 'Sticky Header','dentisti-clinic' ),
        'section' => 'dentisti_clinic_topbar'
    ));

    $wp_customize->add_setting( 'dentisti_clinic_sticky_header_padding_settings', array(
		'default'=> '',
		'sanitize_callback'	=> 'dentisti_clinic_sanitize_float',
	) );
	$wp_customize->add_control( 'dentisti_clinic_sticky_header_padding_settings', array(
		'label'       => esc_html__( 'Sticky Header Padding','dentisti-clinic' ),
		'section'     => 'dentisti_clinic_topbar',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('dentisti_clinic_mail1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_email',
	));
	$wp_customize->add_control('dentisti_clinic_mail1',array(
		'label'	=> __('Mail Address','dentisti-clinic'),
		'section'	=> 'dentisti_clinic_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('dentisti_clinic_phone1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'dentisti_clinic_sanitize_phone_number',
	));
	$wp_customize->add_control('dentisti_clinic_phone1',array(
		'label'	=> __('Phone Number','dentisti-clinic'),
		'section'	=> 'dentisti_clinic_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('dentisti_clinic_time',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('dentisti_clinic_time',array(
		'label'	=> __('Timing Text','dentisti-clinic'),
		'section'	=> 'dentisti_clinic_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('dentisti_clinic_top_button_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('dentisti_clinic_top_button_text',array(
		'label'	=> __('Button text','dentisti-clinic'),
		'section'	=> 'dentisti_clinic_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('dentisti_clinic_top_button_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('dentisti_clinic_top_button_url',array(
		'label'	=> __('Add Link','dentisti-clinic'),
		'section'	=> 'dentisti_clinic_topbar',
		'setting'	=> 'dentisti_clinic_top_button_url',
		'type'	=> 'url'
	));

	// Social Icons
	$wp_customize->add_section('dentisti_clinic_social_icons',array(
		'title'	=> __('Social Icons','dentisti-clinic'),
		'description'	=> __('Add topbar content','dentisti-clinic'),
		'priority'	=> null,
		'panel' => 'dentisti_clinic_panel_id',
	));

	$wp_customize->add_setting('dentisti_clinic_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('dentisti_clinic_facebook_url',array(
		'label'	=> __('Add Facebook link','dentisti-clinic'),
		'section'	=> 'dentisti_clinic_social_icons',
		'setting'	=> 'dentisti_clinic_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('dentisti_clinic_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('dentisti_clinic_twitter_url',array(
		'label'	=> __('Add Twitter link','dentisti-clinic'),
		'section'	=> 'dentisti_clinic_social_icons',
		'setting'	=> 'dentisti_clinic_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('dentisti_clinic_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('dentisti_clinic_youtube_url',array(
		'label'	=> __('Add Youtube link','dentisti-clinic'),
		'section'	=> 'dentisti_clinic_social_icons',
		'setting'	=> 'dentisti_clinic_youtube_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('dentisti_clinic_linkedin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('dentisti_clinic_linkedin_url',array(
		'label'	=> __('Add Linkedin link','dentisti-clinic'),
		'section'	=> 'dentisti_clinic_social_icons',
		'setting'	=> 'dentisti_clinic_linkedin_url',
		'type'	=> 'url'
	));

	//Slider
	$wp_customize->add_section( 'dentisti_clinic_slider' , array(
    	'title'      => __( 'Slider Settings', 'dentisti-clinic' ),
		'priority'   => null,
		'panel' => 'dentisti_clinic_panel_id'
	) );

	$wp_customize->add_setting('dentisti_clinic_slider_hide',array(
       'default' => false,
       'sanitize_callback'	=> 'dentisti_clinic_sanitize_checkbox'
    ));
    $wp_customize->add_control('dentisti_clinic_slider_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','dentisti-clinic'),
       'section' => 'dentisti_clinic_slider'
    ));

    $wp_customize->add_setting('dentisti_clinic_slider_title_Show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'dentisti_clinic_sanitize_checkbox'
    ));
    $wp_customize->add_control('dentisti_clinic_slider_title_Show_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Title','dentisti-clinic'),
       'section' => 'dentisti_clinic_slider'
    ));

    $wp_customize->add_setting('dentisti_clinic_slider_content_Show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'dentisti_clinic_sanitize_checkbox'
    ));
    $wp_customize->add_control('dentisti_clinic_slider_content_Show_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Content','dentisti-clinic'),
       'section' => 'dentisti_clinic_slider'
    ));

	for ( $count = 1; $count <= 4; $count++ ) {

		$wp_customize->add_setting( 'dentisti_clinic_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'dentisti_clinic_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'dentisti_clinic_slider_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'dentisti-clinic' ),
			'description'	=> __('Size of image should be 1500 x 600','dentisti-clinic'),
			'section'  => 'dentisti_clinic_slider',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting('dentisti_clinic_slider_overlay',array(
       'default' => true,
       'sanitize_callback'	=> 'dentisti_clinic_sanitize_checkbox'
    ));
    $wp_customize->add_control('dentisti_clinic_slider_overlay',array(
       'type' => 'checkbox',
       'label' => __('Home Page Slider Overlay','dentisti-clinic'),
		'description'    => __('This option will add colors over the slider.','dentisti-clinic'),
       'section' => 'dentisti_clinic_slider'
    ));

    $wp_customize->add_setting('dentisti_clinic_slider_image_overlay_color_first', array(
		'default'           => '#2e87ff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'dentisti_clinic_slider_image_overlay_color_first', array(
		'label'    => __('Home Page Slider Overlay Color First', 'dentisti-clinic'),
		'section'  => 'dentisti_clinic_slider',
		'description'    => __('It will add the color overlay of the slider. To make it transparent, use the below option.','dentisti-clinic'),
		'settings' => 'dentisti_clinic_slider_image_overlay_color_first',
	)));

	$wp_customize->add_setting('dentisti_clinic_slider_image_overlay_color_second', array(
		'default'           => '#9d5ae1',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'dentisti_clinic_slider_image_overlay_color_second', array(
		'label'    => __('Home Page Slider Overlay Color Second', 'dentisti-clinic'),
		'section'  => 'dentisti_clinic_slider',
		'description'    => __('It will add the color overlay of the slider. To make it transparent, use the below option.','dentisti-clinic'),
		'settings' => 'dentisti_clinic_slider_image_overlay_color_second',
	)));

	//content layout
    $wp_customize->add_setting('dentisti_clinic_slider_content_alignment',array(
    	'default' => 'Center',
        'sanitize_callback' => 'dentisti_clinic_sanitize_choices'
	));
	$wp_customize->add_control('dentisti_clinic_slider_content_alignment',array(
        'type' => 'radio',
        'label' => __('Slider Content Alignment','dentisti-clinic'),
        'section' => 'dentisti_clinic_slider',
        'choices' => array(
            'Center' => __('Center','dentisti-clinic'),
            'Left' => __('Left','dentisti-clinic'),
            'Right' => __('Right','dentisti-clinic'),
        ),
	) );

    //Slider excerpt
	$wp_customize->add_setting( 'dentisti_clinic_slider_excerpt_length', array(
		'default'              => 20,
		'sanitize_callback'    => 'dentisti_clinic_sanitize_float',
	) );
	$wp_customize->add_control( 'dentisti_clinic_slider_excerpt_length', array(
		'label'       => esc_html__( 'Slider Excerpt length','dentisti-clinic' ),
		'section'     => 'dentisti_clinic_slider',
		'type'        => 'number',
		'settings'    => 'dentisti_clinic_slider_excerpt_length',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Opacity
	$wp_customize->add_setting('dentisti_clinic_slider_image_opacity',array(
      'default'              => 0.4,
      'sanitize_callback' => 'dentisti_clinic_sanitize_choices'
	));
	$wp_customize->add_control( 'dentisti_clinic_slider_image_opacity', array(
	'label'       => esc_html__( 'Slider Image Opacity','dentisti-clinic' ),
	'section'     => 'dentisti_clinic_slider',
	'type'        => 'select',
	'settings'    => 'dentisti_clinic_slider_image_opacity',
	'choices' => array(
		'0' =>  esc_attr('0','dentisti-clinic'),
		'0.1' =>  esc_attr('0.1','dentisti-clinic'),
		'0.2' =>  esc_attr('0.2','dentisti-clinic'),
		'0.3' =>  esc_attr('0.3','dentisti-clinic'),
		'0.4' =>  esc_attr('0.4','dentisti-clinic'),
		'0.5' =>  esc_attr('0.5','dentisti-clinic'),
		'0.6' =>  esc_attr('0.6','dentisti-clinic'),
		'0.7' =>  esc_attr('0.7','dentisti-clinic'),
		'0.8' =>  esc_attr('0.8','dentisti-clinic'),
		'0.9' =>  esc_attr('0.9','dentisti-clinic')
	),
	));

	$wp_customize->add_setting( 'dentisti_clinic_slider_speed_option',array(
		'default' => 3000,
		'sanitize_callback'    => 'dentisti_clinic_sanitize_number_range',
	));
	$wp_customize->add_control( 'dentisti_clinic_slider_speed_option',array(
		'label' => esc_html__( 'Slider Speed Option','dentisti-clinic' ),
		'section' => 'dentisti_clinic_slider',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 1000,
			'max' => 5000,
			'step' => 500,
		),
	));

	$wp_customize->add_setting('dentisti_clinic_slider_image_height',array(
		'default'=> __('550','dentisti-clinic'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('dentisti_clinic_slider_image_height',array(
		'label'	=> __('Slider Image Height','dentisti-clinic'),
		'section'=> 'dentisti_clinic_slider',
		'type'=> 'text'
	));

	$wp_customize->add_setting('dentisti_clinic_slider_button',array(
		'default'=> __('READ MORE','dentisti-clinic'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('dentisti_clinic_slider_button',array(
		'label'	=> __('Slider Button','dentisti-clinic'),
		'section'=> 'dentisti_clinic_slider',
		'type'=> 'text'
	));

	//We Provide
	$wp_customize->add_section('dentisti_clinic_category',array(
		'title'	=> __('What We Provide Section','dentisti-clinic'),
		'description'	=> __('Add  section below.','dentisti-clinic'),
		'panel' => 'dentisti_clinic_panel_id',
	));

	$wp_customize->add_setting('dentisti_clinic_title',array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_text_field',
   	));
   	$wp_customize->add_control('dentisti_clinic_title',array(
	    'label' => __('Section Title','dentisti-clinic'),
	    'section' => 'dentisti_clinic_category',
	    'type'  => 'text'
   	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('dentisti_clinic_we_provide_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'dentisti_clinic_sanitize_choices',
	));	
	$wp_customize->add_control('dentisti_clinic_we_provide_category',array(
		'type'    => 'select',
		'choices' => $cat_post,		
		'label' => __('Select Category to display post','dentisti-clinic'),
		'description'	=> __('Size of image should be 370 x 240','dentisti-clinic'),
		'section' => 'dentisti_clinic_category',
	));

	$wp_customize->add_setting( 'dentisti_clinic_category_button_text', array(
		'default'   => __('VIEW DETAILS','dentisti-clinic' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'dentisti_clinic_category_button_text', array(
		'label'    => __( 'Category Post Button text','dentisti-clinic' ),
		'section'  => 'dentisti_clinic_category',
		'type'     => 'text',
		'settings' => 'dentisti_clinic_category_button_text'
	) );

	//404 Page Setting
	$wp_customize->add_section('dentisti_clinic_404_page_setting',array(
		'title'	=> __('404 Page','dentisti-clinic'),
		'panel' => 'dentisti_clinic_panel_id',
	));	

	$wp_customize->add_setting('dentisti_clinic_title_404_page',array(
		'default'=> __('404 Not Found', 'dentisti-clinic'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('dentisti_clinic_title_404_page',array(
		'label'	=> __('404 Page Title','dentisti-clinic'),
		'section'=> 'dentisti_clinic_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('dentisti_clinic_content_404_page',array(
		'default'=> __('Looks like you have taken a wrong turn&hellip. Dont worry&hellip it happens to the best of us.', 'dentisti-clinic'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('dentisti_clinic_content_404_page',array(
		'label'	=> __('404 Page Content','dentisti-clinic'),
		'section'=> 'dentisti_clinic_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('dentisti_clinic_button_404_page',array(
		'default'=> __('Back to Home Page', 'dentisti-clinic'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('dentisti_clinic_button_404_page',array(
		'label'	=> __('404 Page Button','dentisti-clinic'),
		'section'=> 'dentisti_clinic_404_page_setting',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('dentisti_clinic_responsive_setting',array(
		'title'	=> __('Responsive Settings','dentisti-clinic'),
		'panel' => 'dentisti_clinic_panel_id',
	));

    $wp_customize->add_setting('dentisti_clinic_responsive_sticky_header',array(
       'default' => false,
       'sanitize_callback'	=> 'dentisti_clinic_sanitize_checkbox'
    ));
    $wp_customize->add_control('dentisti_clinic_responsive_sticky_header',array(
       'type' => 'checkbox',
       'label' => __('Sticky Header','dentisti-clinic'),
       'section' => 'dentisti_clinic_responsive_setting'
    ));

    $wp_customize->add_setting('dentisti_clinic_responsive_slider',array(
       'default' => false,
       'sanitize_callback'	=> 'dentisti_clinic_sanitize_checkbox'
    ));
    $wp_customize->add_control('dentisti_clinic_responsive_slider',array(
       'type' => 'checkbox',
       'label' => __('Slider','dentisti-clinic'),
       'section' => 'dentisti_clinic_responsive_setting'
    ));

    $wp_customize->add_setting('dentisti_clinic_responsive_scroll',array(
       'default' => true,
       'sanitize_callback'	=> 'dentisti_clinic_sanitize_checkbox'
    ));
    $wp_customize->add_control('dentisti_clinic_responsive_scroll',array(
       'type' => 'checkbox',
       'label' => __('Scroll To Top','dentisti-clinic'),
       'section' => 'dentisti_clinic_responsive_setting'
    ));

    $wp_customize->add_setting('dentisti_clinic_responsive_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'dentisti_clinic_sanitize_checkbox'
    ));
    $wp_customize->add_control('dentisti_clinic_responsive_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Sidebar','dentisti-clinic'),
       'section' => 'dentisti_clinic_responsive_setting'
    ));

    $wp_customize->add_setting('dentisti_clinic_responsive_preloader',array(
       'default' => true,
       'sanitize_callback'	=> 'dentisti_clinic_sanitize_checkbox'
    ));
    $wp_customize->add_control('dentisti_clinic_responsive_preloader',array(
       'type' => 'checkbox',
       'label' => __('Preloader','dentisti-clinic'),
       'section' => 'dentisti_clinic_responsive_setting'
    ));

	//Blog Post
	$wp_customize->add_section('dentisti_clinic_blog_post',array(
		'title'	=> __('Blog Page Settings','dentisti-clinic'),
		'panel' => 'dentisti_clinic_panel_id',
	));	

	$wp_customize->add_setting('dentisti_clinic_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'dentisti_clinic_sanitize_checkbox'
    ));
    $wp_customize->add_control('dentisti_clinic_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Date','dentisti-clinic'),
       'section' => 'dentisti_clinic_blog_post'
    ));

    $wp_customize->add_setting('dentisti_clinic_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'dentisti_clinic_sanitize_checkbox'
    ));
    $wp_customize->add_control('dentisti_clinic_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Comments','dentisti-clinic'),
       'section' => 'dentisti_clinic_blog_post'
    ));

    $wp_customize->add_setting('dentisti_clinic_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'dentisti_clinic_sanitize_checkbox'
    ));
    $wp_customize->add_control('dentisti_clinic_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Author','dentisti-clinic'),
       'section' => 'dentisti_clinic_blog_post'
    ));

    $wp_customize->add_setting('dentisti_clinic_time_hide',array(
       'default' => false,
       'sanitize_callback'	=> 'dentisti_clinic_sanitize_checkbox'
    ));
    $wp_customize->add_control('dentisti_clinic_time_hide',array(
       'type' => 'checkbox',
       'label' => __('Time','dentisti-clinic'),
       'section' => 'dentisti_clinic_blog_post'
    ));

    $wp_customize->add_setting('dentisti_clinic_show_featured_image_post',array(
       'default' => true,
       'sanitize_callback'	=> 'dentisti_clinic_sanitize_checkbox'
    ));
    $wp_customize->add_control('dentisti_clinic_show_featured_image_post',array(
       'type' => 'checkbox',
       'label' => __('Blog Post Image','dentisti-clinic'),
       'section' => 'dentisti_clinic_blog_post'
    ));

    $wp_customize->add_setting('dentisti_clinic_tags_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'dentisti_clinic_sanitize_checkbox'
    ));
    $wp_customize->add_control('dentisti_clinic_tags_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Tags','dentisti-clinic'),
       'section' => 'dentisti_clinic_blog_post'
    ));

    $wp_customize->add_setting('dentisti_clinic_show_featured_image_single_post',array(
       'default' => true,
       'sanitize_callback'	=> 'dentisti_clinic_sanitize_checkbox'
    ));
    $wp_customize->add_control('dentisti_clinic_show_featured_image_single_post',array(
       'type' => 'checkbox',
       'label' => __('Single Post Image','dentisti-clinic'),
       'section' => 'dentisti_clinic_blog_post'
    ));

    $wp_customize->add_setting( 'dentisti_clinic_featured_img_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'dentisti_clinic_sanitize_float',
	) );
	$wp_customize->add_control( 'dentisti_clinic_featured_img_border_radius', array(
		'label'       => esc_html__( 'Blog Post Image Border Radius','dentisti-clinic' ),
		'section'     => 'dentisti_clinic_blog_post',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'dentisti_clinic_featured_img_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'dentisti_clinic_sanitize_float',
	));
	$wp_customize->add_control('dentisti_clinic_featured_img_box_shadow',array(
		'label' => esc_html__( 'Blog Post Image Shadow','dentisti-clinic' ),
		'section' => 'dentisti_clinic_blog_post',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'number'
	));

    $wp_customize->add_setting('dentisti_clinic_blog_post_description_option',array(
    	'default'   => 'Excerpt Content', 
        'sanitize_callback' => 'dentisti_clinic_sanitize_choices'
	));
	$wp_customize->add_control('dentisti_clinic_blog_post_description_option',array(
        'type' => 'radio',
        'label' => __('Post Description Length','dentisti-clinic'),
        'section' => 'dentisti_clinic_blog_post',
        'choices' => array(
            'No Content' => __('No Content','dentisti-clinic'),
            'Excerpt Content' => __('Excerpt Content','dentisti-clinic'),
            'Full Content' => __('Full Content','dentisti-clinic'),
        ),
	) );

    $wp_customize->add_setting( 'dentisti_clinic_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'    => 'dentisti_clinic_sanitize_float',
	) );
	$wp_customize->add_control( 'dentisti_clinic_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','dentisti-clinic' ),
		'section'     => 'dentisti_clinic_blog_post',
		'type'        => 'number',
		'settings'    => 'dentisti_clinic_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'dentisti_clinic_post_suffix_option', array(
		'default'   => __('...','dentisti-clinic'), 
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'dentisti_clinic_post_suffix_option', array(
		'label'       => esc_html__( 'Post Excerpt Indicator Option','dentisti-clinic' ),
		'section'     => 'dentisti_clinic_blog_post',
		'type'        => 'text',
		'settings'    => 'dentisti_clinic_post_suffix_option',
	) );

	$wp_customize->add_setting('dentisti_clinic_button_text',array(
		'default'=> __('READ MORE','dentisti-clinic'), 
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('dentisti_clinic_button_text',array(
		'label'	=> __('Add Button Text','dentisti-clinic'),
		'section'=> 'dentisti_clinic_blog_post',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'dentisti_clinic_metabox_separator_blog_post', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'dentisti_clinic_metabox_separator_blog_post', array(
		'label'       => esc_html__( 'Meta Box Separator','dentisti-clinic' ),
		'input_attrs' => array(
            'placeholder' => __( 'Add Meta Separator. e.g.: "|", "/", etc.', 'dentisti-clinic' ),
        ),
		'section'     => 'dentisti_clinic_blog_post',
		'type'        => 'text',
		'settings'    => 'dentisti_clinic_metabox_separator_blog_post',
	) );

	$wp_customize->add_setting('dentisti_clinic_display_blog_page_post',array(
        'default' => 'Without Box',
        'sanitize_callback' => 'dentisti_clinic_sanitize_choices'
	));
	$wp_customize->add_control('dentisti_clinic_display_blog_page_post',array(
        'type' => 'radio',
        'label' => __('Display Blog Page Post :','dentisti-clinic'),
        'section' => 'dentisti_clinic_blog_post',
        'choices' => array(
            'In Box' => __('In Box','dentisti-clinic'),
            'Without Box' => __('Without Box','dentisti-clinic'),
        ),
	) );

	$wp_customize->add_setting('dentisti_clinic_blog_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'dentisti_clinic_sanitize_checkbox'
    ));
    $wp_customize->add_control('dentisti_clinic_blog_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Pagination in Blog Page','dentisti-clinic'),
       'section' => 'dentisti_clinic_blog_post'
    ));

    $wp_customize->add_setting('dentisti_clinic_show_single_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'dentisti_clinic_sanitize_checkbox'
    ));
    $wp_customize->add_control('dentisti_clinic_show_single_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Single Post Pagination','dentisti-clinic'),
       'section' => 'dentisti_clinic_blog_post'
    ));

    $wp_customize->add_setting( 'dentisti_clinic_show_related_post',array(
		'default' => true,
      	'sanitize_callback'	=> 'dentisti_clinic_sanitize_checkbox'
    ) );
    $wp_customize->add_control('dentisti_clinic_show_related_post',array(
    	'type' => 'checkbox',
        'label' => __( 'Related Post','dentisti-clinic' ),
        'section' => 'dentisti_clinic_blog_post'
    ));

    $wp_customize->add_setting('dentisti_clinic_related_posts_taxanomies_options',array(
        'default' => 'categories',
        'sanitize_callback' => 'dentisti_clinic_sanitize_choices'
	));
	$wp_customize->add_control('dentisti_clinic_related_posts_taxanomies_options',array(
        'type' => 'radio',
        'label' => __('Related Post Taxonomies','dentisti-clinic'),
        'section' => 'dentisti_clinic_blog_post',
        'choices' => array(
            'categories' => __('Categories','dentisti-clinic'),
            'tags' => __('Tags','dentisti-clinic'),
        ),
	) );

	$wp_customize->add_setting('dentisti_clinic_related_post_title',array(
		'default'=> __('Related Posts','dentisti-clinic'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('dentisti_clinic_related_post_title',array(
		'label'	=> __('Related Post Title','dentisti-clinic'),
		'section'=> 'dentisti_clinic_blog_post',
		'type'=> 'text'
	));

   	$wp_customize->add_setting('dentisti_clinic_related_posts_number',array(
		'default'=> 3,
		'sanitize_callback'	=> 'dentisti_clinic_sanitize_float',
	));
	$wp_customize->add_control('dentisti_clinic_related_posts_number',array(
		'label'	=> __('Related Post Number','dentisti-clinic'),
		'section'=> 'dentisti_clinic_blog_post',
		'type'=> 'number',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));

	//no Result Found
	$wp_customize->add_section('dentisti_clinic_noresult_found',array(
		'title'	=> __('No Result Found','dentisti-clinic'),
		'panel' => 'dentisti_clinic_panel_id',
	));	

	$wp_customize->add_setting('dentisti_clinic_nosearch_found_title',array(
		'default'=> __('Nothing Found','dentisti-clinic'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('dentisti_clinic_nosearch_found_title',array(
		'label'	=> __('No Result Found Title','dentisti-clinic'),
		'section'=> 'dentisti_clinic_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('dentisti_clinic_nosearch_found_content',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','dentisti-clinic'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('dentisti_clinic_nosearch_found_content',array(
		'label'	=> __('No Result Found Content','dentisti-clinic'),
		'section'=> 'dentisti_clinic_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('dentisti_clinic_show_noresult_search',array(
       'default' => true,
       'sanitize_callback'	=> 'dentisti_clinic_sanitize_checkbox'
    ));
    $wp_customize->add_control('dentisti_clinic_show_noresult_search',array(
       'type' => 'checkbox',
       'label' => __('No Result search','dentisti-clinic'),
       'section' => 'dentisti_clinic_noresult_found'
    ));

	//Footer
	$wp_customize->add_section('dentisti_clinic_footer_section', array(
		'title'       => __('Footer Text', 'dentisti-clinic'),
		'priority'    => null,
		'panel'       => 'dentisti_clinic_panel_id',
	));

	$wp_customize->add_setting('dentisti_clinic_footer_widget_areas',array(
        'default'           => 4,
        'sanitize_callback' => 'dentisti_clinic_sanitize_choices',
    ));
    $wp_customize->add_control('dentisti_clinic_footer_widget_areas',array(
        'type'        => 'select',
        'label'       => __('Footer widget area', 'dentisti-clinic'),
        'section'     => 'dentisti_clinic_footer_section',
        'description' => __('Select the number of widget areas you want in the footer. After that, go to Appearance > Widgets and add your widgets.', 'dentisti-clinic'),
        'choices' => array(
            '1'     => __('One', 'dentisti-clinic'),
            '2'     => __('Two', 'dentisti-clinic'),
            '3'     => __('Three', 'dentisti-clinic'),
            '4'     => __('Four', 'dentisti-clinic')
        ),
    ));

    $wp_customize->add_setting('dentisti_clinic_footer_widget_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'dentisti_clinic_footer_widget_bg_color', array(
		'label'    => __('Footer Widget Background Color', 'dentisti-clinic'),
		'section'  => 'dentisti_clinic_footer_section',
	)));

	$wp_customize->add_setting('dentisti_clinic_footer_widget_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'dentisti_clinic_footer_widget_bg_image',array(
        'label' => __('Footer Widget Background Image','dentisti-clinic'),
        'section' => 'dentisti_clinic_footer_section'
	)));

	$wp_customize->add_setting('dentisti_clinic_footer_copy', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('dentisti_clinic_footer_copy', array(
		'label'   => __('Copyright Text', 'dentisti-clinic'),
		'section' => 'dentisti_clinic_footer_section',
		'type'    => 'text',
	));

	$wp_customize->add_setting('dentisti_clinic_copyright_content_align',array(
        'default' => 'center',
        'sanitize_callback' => 'dentisti_clinic_sanitize_choices'
	));
	$wp_customize->add_control('dentisti_clinic_copyright_content_align',array(
        'type' => 'select',
        'label' => __('Copyright Text Alignment ','dentisti-clinic'),
        'section' => 'dentisti_clinic_footer_section',
        'choices' => array(
            'left' => __('Left','dentisti-clinic'),
            'right' => __('Right','dentisti-clinic'),
            'center' => __('Center','dentisti-clinic'),
        ),
	) );

	$wp_customize->add_setting('dentisti_clinic_footer_content_font_size',array(
		'default'=> 16,
		'sanitize_callback'    => 'dentisti_clinic_sanitize_float',
	));
	$wp_customize->add_control('dentisti_clinic_footer_content_font_size',array(
		'label' => esc_html__( 'Copyright Font Size','dentisti-clinic' ),
		'section'=> 'dentisti_clinic_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	));

	$wp_customize->add_setting('dentisti_clinic_copyright_padding',array(
		'default'=> 15,
		'sanitize_callback'    => 'dentisti_clinic_sanitize_float',
	));
	$wp_customize->add_control('dentisti_clinic_copyright_padding',array(
		'label'	=> __('Copyright Padding','dentisti-clinic'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'dentisti_clinic_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('dentisti_clinic_enable_disable_scroll',array(
        'default' => true,
        'sanitize_callback'	=> 'dentisti_clinic_sanitize_checkbox'
	));
	$wp_customize->add_control('dentisti_clinic_enable_disable_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Scroll Top Button','dentisti-clinic'),
      	'section' => 'dentisti_clinic_footer_section',
	));

	$wp_customize->add_setting('dentisti_clinic_scroll_setting',array(
        'default' => 'Right',
        'sanitize_callback' => 'dentisti_clinic_sanitize_choices'
	));
	$wp_customize->add_control('dentisti_clinic_scroll_setting',array(
        'type' => 'select',
        'label' => __('Scroll Back to Top Position','dentisti-clinic'),
        'section' => 'dentisti_clinic_footer_section',
        'choices' => array(
            'Left' => __('Left','dentisti-clinic'),
            'Right' => __('Right','dentisti-clinic'),
            'Center' => __('Center','dentisti-clinic'),
        ),
	) );

	$wp_customize->add_setting('dentisti_clinic_scroll_font_size_icon',array(
		'default'=> 20,
		'sanitize_callback'    => 'dentisti_clinic_sanitize_float',
	));
	$wp_customize->add_control('dentisti_clinic_scroll_font_size_icon',array(
		'label'	=> __('Scroll Icon Font Size','dentisti-clinic'),
		'section'=> 'dentisti_clinic_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	)	);
	
}
add_action('customize_register', 'dentisti_clinic_customize_register');

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

if ( ! defined( 'PRO_THEME_LINK' ) ) {
	define( 'PRO_THEME_LINK', 'https://netnus.com/product/dentisti-pro-wordpress-theme/' );
}
if ( ! defined( 'PRO_THEME_TEXT' ) ) {
	define( 'PRO_THEME_TEXT', __('Dentisti Pro Theme','dentisti-clinic') );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Dentisti_Clinic_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if (is_null($instance)) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action('customize_register', array($this, 'sections'));

		// Register scripts and styles for the condentisti_clinic_Customizetrols.
		add_action('customize_controls_enqueue_scripts', array($this, 'enqueue_control_scripts'), 0);
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections($manager) {

		// Load custom sections.
		load_template(trailingslashit(get_template_directory()).'/inc/section-pro.php');

		// Register custom section types.
		$manager->register_section_type('Dentisti_Clinic_Customize_Section_Pro');

		// Register sections.
		$manager->add_section(
			new Dentisti_Clinic_Customize_Section_Pro(
				$manager,
				'dentisti_clinic_example_1',
				array(
					'priority' => 9,
					'title'    => PRO_THEME_TEXT,
					'pro_text' => esc_html__('Go Pro', 'dentisti-clinic'),
					'pro_url'  => esc_url( PRO_THEME_LINK ),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script('dentisti-clinic-customize-controls', trailingslashit(esc_url(get_template_directory_uri())).'/js/customize-controls.js', array('customize-controls'));
		wp_enqueue_style('dentisti-clinic-customize-controls', trailingslashit(esc_url(get_template_directory_uri())).'/css/customize-controls.css');
	}
}

// Doing this customizer thang!
Dentisti_Clinic_Customize::get_instance();