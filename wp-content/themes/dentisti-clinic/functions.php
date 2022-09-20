<?php
/**
 * Dentisti Clinic functions and definitions
 *
 * @package dentisti-clinic
 */
/**
 * Set the content width based on the theme's design and stylesheet.
 */

/* Theme Setup */
if (!function_exists('dentisti_clinic_setup')):

function dentisti_clinic_setup() {
	$GLOBALS['content_width'] = apply_filters('dentisti_clinic_content_width', 640);
 	
 	load_theme_textdomain( 'dentisti-clinic', get_template_directory() . '/languages' );
	add_theme_support('automatic-feed-links');
	add_theme_support('post-thumbnails');
	add_theme_support('woocommerce');
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support('title-tag');
	add_theme_support('custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	));
	add_image_size('dentisti-clinic-homepage-thumb', 250, 145, true);
	register_nav_menus(array(
		'primary' => __('Primary Menu', 'dentisti-clinic'),
	));

	add_theme_support('custom-background', array(
		'default-color' => 'f1f1f1',
	));
	/*
	* Enable support for Post Formats.
	*
	* See: https://codex.wordpress.org/Post_Formats
	*/
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support('responsive-embeds');
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style(array('css/editor-style.css', dentisti_clinic_font_url()));
}

// Theme Activation Notice
	global $pagenow;
	
	if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated']) ) {
		add_action( 'admin_notices', 'dentisti_clinic_activation_notice' );
	}

endif;
add_action('after_setup_theme', 'dentisti_clinic_setup');

// Notice after Theme Activation
function dentisti_clinic_activation_notice() {
	echo '<div class="notice notice-success is-dismissible get-started">';
		echo '<p>'. esc_html__( 'Thank you for choosing Netnus. We are sincerely obliged to offer our best services to you. Please proceed towards welcome page and give us the privilege to serve you.', 'dentisti-clinic' ) .'</p>';
		echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=dentisti_clinic_guide' ) ) .'" class="button button-primary">'. esc_html__( 'Click here...', 'dentisti-clinic' ) .'</a></p>';
	echo '</div>';
}

// Theme Widgets Setup
function dentisti_clinic_widgets_init() {
	register_sidebar(array(
		'name'          => __('Blog Sidebar', 'dentisti-clinic'),
		'description'   => __('Appears on blog page sidebar', 'dentisti-clinic'),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	register_sidebar(array(
		'name'          => __('Page Sidebar', 'dentisti-clinic'),
		'description'   => __('Appears on page sidebar', 'dentisti-clinic'),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	register_sidebar(array(
		'name'          => __('Third Column Sidebar', 'dentisti-clinic'),
		'description'   => __('Appears on page sidebar', 'dentisti-clinic'),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	//Footer widget areas
	$dentisti_clinic_widget_areas = get_theme_mod('dentisti_clinic_footer_widget_areas', '4');
	for ($i=1; $i<=$dentisti_clinic_widget_areas; $i++) {
		register_sidebar( array(
			'name'          => __( 'Footer Nav ', 'dentisti-clinic' ) . $i,
			'id'            => 'footer-' . $i,
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}

	register_sidebar( array(
		'name'          => __( 'Shop Page Sidebar', 'dentisti-clinic' ),
		'description'   => __( 'Appears on shop page', 'dentisti-clinic' ),
		'id'            => 'woocommerce_sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Single Product Page Sidebar', 'dentisti-clinic' ),
		'description'   => __( 'Appears on shop page', 'dentisti-clinic' ),
		'id'            => 'woocommerce-single-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}

add_action('widgets_init', 'dentisti_clinic_widgets_init');

/* Theme Font URL */
function dentisti_clinic_font_url(){
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Roboto:400,700';
	$font_family[] = 'Roboto Condensed:400,700';
	$font_family[] = 'Open Sans';
	$font_family[] = 'Overpass';
	$font_family[] = 'Montserrat:300,400,600,700,800,900';
	$font_family[] = 'Playball:300,400,600,700,800,900';
	$font_family[] = 'Alegreya:300,400,600,700,800,900';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Arsenal';
	$font_family[] = 'Slabo';
	$font_family[] = 'Lato';
	$font_family[] = 'Overpass Mono';
	$font_family[] = 'Source Sans Pro';
	$font_family[] = 'Raleway';
	$font_family[] = 'Merriweather';
	$font_family[] = 'Droid Sans';
	$font_family[] = 'Rubik';
	$font_family[] = 'Lora';
	$font_family[] = 'Ubuntu';
	$font_family[] = 'Cabin';
	$font_family[] = 'Arimo';
	$font_family[] = 'Playfair Display';
	$font_family[] = 'Quicksand';
	$font_family[] = 'Padauk';
	$font_family[] = 'Muli';
	$font_family[] = 'Inconsolata';
	$font_family[] = 'Bitter';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'VT323';
	$font_family[] = 'Dosis';
	$font_family[] = 'Frank Ruhl Libre';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Oxygen';
	$font_family[] = 'Arvo';
	$font_family[] = 'Noto Serif';
	$font_family[] = 'Lobster';
	$font_family[] = 'Crimson Text';
	$font_family[] = 'Yanone Kaffeesatz';
	$font_family[] = 'Anton';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Josefin Sans';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Cuprum';
	$font_family[] = 'Rokkitt';
	$font_family[] = 'Vollkorn';
	$font_family[] = 'Francois One';
	$font_family[] = 'Orbitron';
	$font_family[] = 'Patua One';
	$font_family[] = 'Acme';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Josefin Slab';
	$font_family[] = 'Quattrocento Sans';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Russo One';
	$font_family[] = 'Monda';
	$font_family[] = 'Righteous';
	$font_family[] = 'Lobster Two';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Courgette';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Cherry Swash';
	$font_family[] = 'Cormorant Garamond';
	$font_family[] = 'Poiret One';
	$font_family[] = 'BenchNine';
	$font_family[] = 'Economica';
	$font_family[] = 'Handlee';
	$font_family[] = 'Cardo';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre';
	$font_family[] = 'Cookie';
	$font_family[] = 'Chewy';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Philosopher';
	$font_family[] = 'Days One';
	$font_family[] = 'Kanit';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Tangerine';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bangers';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Volkhov';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Unica One';
	$font_family[] = 'Noto Sans:400,400i,700,700i';

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

//Display the related posts
if ( ! function_exists( 'dentisti_clinic_related_posts' ) ) {
	function dentisti_clinic_related_posts() {
		wp_reset_postdata();
		global $post;
		$args = array(
			'no_found_rows'          => true,
			'update_post_meta_cache' => false,
			'update_post_term_cache' => false,
			'ignore_sticky_posts'    => 1,
			'orderby'                => 'rand',
			'post__not_in'           => array( $post->ID ),
			'posts_per_page'    => absint( get_theme_mod( 'dentisti_clinic_related_posts_number', '3' ) ),
		);
		// Categories
		if ( get_theme_mod( 'dentisti_clinic_related_posts_taxanomies_options', 'categories' ) == 'categories' ) {

			$cats = get_post_meta( $post->ID, 'related-posts', true );

			if ( ! $cats ) {
				$cats                 = wp_get_post_categories( $post->ID, array( 'fields' => 'ids' ) );
				$args['category__in'] = $cats;
			} else {
				$args['cat'] = $cats;
			}
		}
		// Tags
		if ( get_theme_mod( 'dentisti_clinic_related_posts_taxanomies_options', 'categories' ) == 'tags' ) {

			$tags = get_post_meta( $post->ID, 'related-posts', true );

			if ( ! $tags ) {
				$tags            = wp_get_post_tags( $post->ID, array( 'fields' => 'ids' ) );
				$args['tag__in'] = $tags;
			} else {
				$args['tag_slug__in'] = explode( ',', $tags );
			}
			if ( ! $tags ) {
				$break = true;
			}
		}
		$query = ! isset( $break ) ? new WP_Query( $args ) : new WP_Query();
		return $query;
	}
}

function dentisti_clinic_sanitize_dropdown_pages($page_id, $setting) {
	// Ensure $input is an absolute integer.
	$page_id = absint($page_id);
	// If $page_id is an ID of a published page, return it; otherwise, return the default.
	return ('publish' == get_post_status($page_id)?$page_id:$setting->default);
}

// radio button sanitization
function dentisti_clinic_sanitize_choices($input, $setting) {
	global $wp_customize;
	$control = $wp_customize->get_control($setting->id);
	if (array_key_exists($input, $control->choices)) {
		return $input;
	} else {
		return $setting->default;
	}
}

function dentisti_clinic_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function dentisti_clinic_sanitize_checkbox( $input ) {
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function dentisti_clinic_sanitize_float( $input ) {
	return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

function dentisti_clinic_sanitize_number_range( $number, $setting ) {
	$number = absint( $number );
	$atts = $setting->manager->get_control( $setting->id )->input_attrs;
	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );
	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );
	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );
	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}

// Excerpt Limit Begin
function dentisti_clinic_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

define('DENTISTI_CLINIC_CREDIT',__('https://netnus.com/product/dentisti-pro-wordpress-theme/', 'dentisti-clinic'));

if (!function_exists('dentisti_clinic_credit')) {
	function dentisti_clinic_credit() {
		echo "<a href=".esc_url(DENTISTI_CLINIC_CREDIT).">".esc_html__('Dentisti WordPress Theme', 'dentisti-clinic')."</a>";
	}
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'dentisti_clinic_loop_columns');
if (!function_exists('dentisti_clinic_loop_columns')) {
	function dentisti_clinic_loop_columns() {
		$columns = get_theme_mod( 'dentisti_clinic_wooproducts_per_columns', 3 );
		return $columns; // 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'dentisti_clinic_shop_per_page', 20 );
function dentisti_clinic_shop_per_page( $cols ) {
  	$cols = get_theme_mod( 'dentisti_clinic_wooproducts_per_page', 9 );
	return $cols;
}

// Theme enqueue scripts
function dentisti_clinic_scripts() {
	wp_enqueue_style('bootstrap-style', esc_url(get_template_directory_uri()).'/css/bootstrap.css');
	wp_enqueue_style('dentisti-clinic-font', dentisti_clinic_font_url(), array());
	// blocks-css
	wp_enqueue_style( 'dentisti-clinic-block-style', get_theme_file_uri('/css/blocks.css') );	
	wp_enqueue_style('dentisti-clinic-basic-style', get_stylesheet_uri());
	wp_enqueue_style('dentisti-clinic-customcss', esc_url(get_template_directory_uri()).'/css/custom.css');
	wp_enqueue_style('font-awesome-style', esc_url(get_template_directory_uri()).'/css/fontawesome-all.css');
	// Paragraph
	    $dentisti_clinic_paragraph_color = get_theme_mod('dentisti_clinic_paragraph_color', '');
	    $dentisti_clinic_paragraph_font_family = get_theme_mod('dentisti_clinic_paragraph_font_family', '');
	    $dentisti_clinic_paragraph_font_size = get_theme_mod('dentisti_clinic_paragraph_font_size', '');
	// "a" tag
		$dentisti_clinic_atag_color = get_theme_mod('dentisti_clinic_atag_color', '');
	    $dentisti_clinic_atag_font_family = get_theme_mod('dentisti_clinic_atag_font_family', '');
	// "li" tag
		$dentisti_clinic_li_color = get_theme_mod('dentisti_clinic_li_color', '');
	    $dentisti_clinic_li_font_family = get_theme_mod('dentisti_clinic_li_font_family', '');
	// H1
		$dentisti_clinic_h1_color = get_theme_mod('dentisti_clinic_h1_color', '');
	    $dentisti_clinic_h1_font_family = get_theme_mod('dentisti_clinic_h1_font_family', '');
	    $dentisti_clinic_h1_font_size = get_theme_mod('dentisti_clinic_h1_font_size', '');
	// H2
		$dentisti_clinic_h2_color = get_theme_mod('dentisti_clinic_h2_color', '');
	    $dentisti_clinic_h2_font_family = get_theme_mod('dentisti_clinic_h2_font_family', '');
	    $dentisti_clinic_h2_font_size = get_theme_mod('dentisti_clinic_h2_font_size', '');
	// H3
		$dentisti_clinic_h3_color = get_theme_mod('dentisti_clinic_h3_color', '');
	    $dentisti_clinic_h3_font_family = get_theme_mod('dentisti_clinic_h3_font_family', '');
	    $dentisti_clinic_h3_font_size = get_theme_mod('dentisti_clinic_h3_font_size', '');
	// H4
		$dentisti_clinic_h4_color = get_theme_mod('dentisti_clinic_h4_color', '');
	    $dentisti_clinic_h4_font_family = get_theme_mod('dentisti_clinic_h4_font_family', '');
	    $dentisti_clinic_h4_font_size = get_theme_mod('dentisti_clinic_h4_font_size', '');
	// H5
		$dentisti_clinic_h5_color = get_theme_mod('dentisti_clinic_h5_color', '');
	    $dentisti_clinic_h5_font_family = get_theme_mod('dentisti_clinic_h5_font_family', '');
	    $dentisti_clinic_h5_font_size = get_theme_mod('dentisti_clinic_h5_font_size', '');
	// H6
		$dentisti_clinic_h6_color = get_theme_mod('dentisti_clinic_h6_color', '');
	    $dentisti_clinic_h6_font_family = get_theme_mod('dentisti_clinic_h6_font_family', '');
	    $dentisti_clinic_h6_font_size = get_theme_mod('dentisti_clinic_h6_font_size', '');

		$dentisti_clinic_custom_css ='
			p,span{
			    color:'.esc_html($dentisti_clinic_paragraph_color).'!important;
			    font-family: '.esc_html($dentisti_clinic_paragraph_font_family).';
			    font-size: '.esc_html($dentisti_clinic_paragraph_font_size).';
			}
			a{
			    color:'.esc_html($dentisti_clinic_atag_color).'!important;
			    font-family: '.esc_html($dentisti_clinic_atag_font_family).';
			}
			li{
			    color:'.esc_html($dentisti_clinic_li_color).'!important;
			    font-family: '.esc_html($dentisti_clinic_li_font_family).';
			}
			h1{
			    color:'.esc_html($dentisti_clinic_h1_color).'!important;
			    font-family: '.esc_html($dentisti_clinic_h1_font_family).'!important;
			    font-size: '.esc_html($dentisti_clinic_h1_font_size).'!important;
			}
			h2{
			    color:'.esc_html($dentisti_clinic_h2_color).'!important;
			    font-family: '.esc_html($dentisti_clinic_h2_font_family).'!important;
			    font-size: '.esc_html($dentisti_clinic_h2_font_size).'!important;
			}
			h3{
			    color:'.esc_html($dentisti_clinic_h3_color).'!important;
			    font-family: '.esc_html($dentisti_clinic_h3_font_family).'!important;
			    font-size: '.esc_html($dentisti_clinic_h3_font_size).'!important;
			}
			h4{
			    color:'.esc_html($dentisti_clinic_h4_color).'!important;
			    font-family: '.esc_html($dentisti_clinic_h4_font_family).'!important;
			    font-size: '.esc_html($dentisti_clinic_h4_font_size).'!important;
			}
			h5{
			    color:'.esc_html($dentisti_clinic_h5_color).'!important;
			    font-family: '.esc_html($dentisti_clinic_h5_font_family).'!important;
			    font-size: '.esc_html($dentisti_clinic_h5_font_size).'!important;
			}
			h6{
			    color:'.esc_html($dentisti_clinic_h6_color).'!important;
			    font-family: '.esc_html($dentisti_clinic_h6_font_family).'!important;
			    font-size: '.esc_html($dentisti_clinic_h6_font_size).'!important;
			}

			';
	wp_add_inline_style( 'dentisti-clinic-basic-style',$dentisti_clinic_custom_css );
	wp_enqueue_script('dentisti-clinic-customscripts-jquery', esc_url(get_template_directory_uri()).'/js/custom.js', array('jquery'));
	wp_enqueue_script('bootstrap-jquery', esc_url(get_template_directory_uri()).'/js/bootstrap.js', array('jquery'));
	wp_enqueue_script( 'jquery-superfish', esc_url(get_template_directory_uri()) . '/js/jquery.superfish.js', array('jquery') ,'',true);
	require get_parent_theme_file_path( '/inc/ts-color-pallete.php' );
	wp_add_inline_style( 'dentisti-clinic-basic-style',$dentisti_clinic_custom_css );

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'dentisti_clinic_scripts');

define('DENTISTI_CLINIC_BUY_NOW',__('https://netnus.com/product/dentisti-pro-wordpress-theme/','dentisti-clinic'));
define('DENTISTI_CLINIC_LIVE_DEMO',__('https://netnus.net/dentisti/','dentisti-clinic'));
define('DENTISTI_CLINIC_PRO_DOC',__('https://netnus.com/Documentation/','dentisti-clinic'));
define('DENTISTI_CLINIC_FREE_DOC',__('https://netnus.com/Documentation/','dentisti-clinic'));
define('DENTISTI_CLINIC_CONTACT',__('https://netnus.com/contact/','dentisti-clinic'));

/* Custom header additions. */
require get_template_directory().'/inc/custom-header.php';

/* Custom template tags for this theme. */
require get_template_directory().'/inc/template-tags.php';

/* Customizer additions. */
require get_template_directory().'/inc/customizer.php';

/* Admin about theme */
require get_template_directory() .'/inc/admin/admin.php';

/* TGM Plugin Activation */
require get_template_directory() .'/inc/tgm.php';