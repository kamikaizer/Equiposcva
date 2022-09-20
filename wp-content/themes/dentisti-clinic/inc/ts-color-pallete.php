<?php
	
/*---------------------------Theme color option-------------------*/
	$dentisti_clinic_theme_color_first = get_theme_mod('dentisti_clinic_theme_color_first');

	$dentisti_clinic_custom_css = '';

	$dentisti_clinic_custom_css .='#slider .inner_carousel .readbtn a, #we_provide h3:before, #we_provide .theme_button a:hover ,.read-more-btn a:hover, .copyright, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, #sidebar input[type="submit"]:hover, #menu-sidebar input[type="submit"]{';
		$dentisti_clinic_custom_css .='background-color: '.esc_attr($dentisti_clinic_theme_color_first).' !important;';
	$dentisti_clinic_custom_css .='}';

	$dentisti_clinic_custom_css .='#slider .carousel-control-next-icon i,#slider .carousel-control-prev-icon i{';
		$dentisti_clinic_custom_css .='color: '.esc_attr($dentisti_clinic_theme_color_first).' !important;';
	$dentisti_clinic_custom_css .='}';

	$dentisti_clinic_custom_css .='.primary-navigation ul ul a:hover{';
		$dentisti_clinic_custom_css .='color: '.esc_attr($dentisti_clinic_theme_color_first).'';
	$dentisti_clinic_custom_css .='}';

	$dentisti_clinic_custom_css .='#slider .inner_carousel .readbtn a{';
		$dentisti_clinic_custom_css .='border-color: '.esc_attr($dentisti_clinic_theme_color_first).';';
	$dentisti_clinic_custom_css .='}';

	$dentisti_clinic_custom_css .='.primary-navigation ul ul li:first-child{';
		$dentisti_clinic_custom_css .='border-color: '.esc_attr($dentisti_clinic_theme_color_first).';';
	$dentisti_clinic_custom_css .='}';
	
	/*------------------Theme color option-------------------*/
	$dentisti_clinic_theme_color_second = get_theme_mod('dentisti_clinic_theme_color_second');

	$dentisti_clinic_custom_css .='.read-moresec a:hover, .read-moresec a:hover, .talk-btn a:hover,  #footer input[type="submit"], #footer .tagcloud a:hover, .woocommerce span.onsale, #sidebar .tagcloud a:hover,.page-template-custom-front-page .main-menu .menu-color,input[type="submit"], .tags p a:hover, #comments a.comment-reply-link, #footer form.woocommerce-product-search button, #sidebar form.woocommerce-product-search button{';
		$dentisti_clinic_custom_css .='background-color: '.esc_attr($dentisti_clinic_theme_color_second).';';
	$dentisti_clinic_custom_css .='}';

	$dentisti_clinic_custom_css .='#comments input[type="submit"].submit, nav.woocommerce-MyAccount-navigation ul li, #sidebar ul li a:hover:before{';
		$dentisti_clinic_custom_css .='background-color: '.esc_attr($dentisti_clinic_theme_color_second).'!important;';
	$dentisti_clinic_custom_css .='}';

	$dentisti_clinic_custom_css .='a, h1, h2, h3, h4, h5, h6,.read-moresec a,.metabox i, section h4,#comments a time,.woocommerce-message::before,.woocommerce .quantity .qty, #sidebar caption, h1.entry-title,.new-text p a, h3.widget-title a,.new-text h2 a, article.page-box-single h3 a, div#comments a, a.added_to_cart.wc-forward, .meta-nav, .tags i, .entry-content li code, #sidebar ul li:hover,#sidebar ul li:active, #sidebar ul li:focus,.metabox span a:hover, a.showcoupon, .woocommerce-MyAccount-content a, nav.woocommerce-MyAccount-navigation a, tr.woocommerce-cart-form__cart-item.cart_item a, .entry-content a, .woocommerce-product-details__short-description p a, .comment-body p a, #sidebar .woocommerce ul.product_list_widget li:hover, #sidebar ul li:hover, #sidebar ul li:hover a, #sidebar ul li:active, #sidebar ul li:focus, #sidebar .woocommerce ul.product_list_widget li{';
		$dentisti_clinic_custom_css .='color: '.esc_attr($dentisti_clinic_theme_color_second).';';
	$dentisti_clinic_custom_css .='}';

	$dentisti_clinic_custom_css .='.main-menu{';
		$dentisti_clinic_custom_css .='border-bottom-color: '.esc_attr($dentisti_clinic_theme_color_second).';';
	$dentisti_clinic_custom_css .='}';

	$dentisti_clinic_custom_css .='.woocommerce-message{';
		$dentisti_clinic_custom_css .='border-top-color: '.esc_attr($dentisti_clinic_theme_color_second).';';
	$dentisti_clinic_custom_css .='}';

	$dentisti_clinic_custom_css .='.talk-btn a:hover, #footer input[type="search"], .woocommerce .quantity .qty, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .tags p a:hover, .tags p a{';
		$dentisti_clinic_custom_css .='border-color: '.esc_attr($dentisti_clinic_theme_color_second).';';
	$dentisti_clinic_custom_css .='}';

	$dentisti_clinic_custom_css .='#sidebar ul li a:hover,#sidebar ul li:active, #sidebar ul li:focus,#sidebar ul li:hover:before {';
		$dentisti_clinic_custom_css .='color: '.esc_attr($dentisti_clinic_theme_color_second).'!important;';
	$dentisti_clinic_custom_css .='}';

	if($dentisti_clinic_theme_color_second != false || $dentisti_clinic_theme_color_first != false){
		$dentisti_clinic_custom_css .='#we_provide h3:before{
		background: linear-gradient(130deg, '.esc_attr($dentisti_clinic_theme_color_second).' 40%, '.esc_attr($dentisti_clinic_theme_color_first).' 77%)!important;
		}';
	}
	if($dentisti_clinic_theme_color_second){
		$dentisti_clinic_custom_css .='.page-template-custom-front-page .main-menu .menu-color{
		background: linear-gradient(90deg, #fff 94%, '.esc_attr($dentisti_clinic_theme_color_second).' 19%);
		}';
	}
	if($dentisti_clinic_theme_color_second != false || $dentisti_clinic_theme_color_first != false){
		$dentisti_clinic_custom_css .='#we_provide .theme_button a:hover, .read-more-btn a:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, #sidebar input[type="submit"]:hover, .copyright, #slider .carousel-item{
		background-image: linear-gradient(130deg, '.esc_attr($dentisti_clinic_theme_color_second).' 40%, '.esc_attr($dentisti_clinic_theme_color_first).' 77%);
		}';
	}

	// media
	$dentisti_clinic_custom_css .='@media screen and (max-width:1000px) {';
	if($dentisti_clinic_theme_color_first != false || $dentisti_clinic_theme_color_second != false){
	$dentisti_clinic_custom_css .='#menu-sidebar, .primary-navigation ul ul a, .primary-navigation li a:hover, .primary-navigation li:hover a{
	background-image: linear-gradient(-90deg, '.esc_attr($dentisti_clinic_theme_color_first).' 0%, '.esc_attr($dentisti_clinic_theme_color_second).' 120%);
		}';
	}
	$dentisti_clinic_custom_css .='}';

	/*---------------------------Width Layout -------------------*/
	$dentisti_clinic_theme_lay = get_theme_mod( 'dentisti_clinic_theme_options','Default');
    if($dentisti_clinic_theme_lay == 'Default'){
		$dentisti_clinic_custom_css .='body{';
			$dentisti_clinic_custom_css .='max-width: 100%;';
		$dentisti_clinic_custom_css .='}';
		$dentisti_clinic_custom_css .='.page-template-custom-home-page .middle-header{';
			$dentisti_clinic_custom_css .='width: 97.3%';
		$dentisti_clinic_custom_css .='}';
	}else if($dentisti_clinic_theme_lay == 'Container'){
		$dentisti_clinic_custom_css .='body{';
			$dentisti_clinic_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$dentisti_clinic_custom_css .='}';
		$dentisti_clinic_custom_css .='.page-template-custom-front-page #header-top{';
			$dentisti_clinic_custom_css .='width: 97.7%';
		$dentisti_clinic_custom_css .='}';
		$dentisti_clinic_custom_css .='.serach_outer{';
			$dentisti_clinic_custom_css .='width: 97.7%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto';
		$dentisti_clinic_custom_css .='}';
	}else if($dentisti_clinic_theme_lay == 'Box Container'){
		$dentisti_clinic_custom_css .='body{';
			$dentisti_clinic_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$dentisti_clinic_custom_css .='}';
		$dentisti_clinic_custom_css .='.serach_outer{';
			$dentisti_clinic_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; right:0';
		$dentisti_clinic_custom_css .='}';
		$dentisti_clinic_custom_css .='.page-template-custom-front-page #header-top{';
			$dentisti_clinic_custom_css .='max-width: 1110px; ';
		$dentisti_clinic_custom_css .='}';
	}

	// css
	$dentisti_clinic_show_slider = get_theme_mod( 'dentisti_clinic_slider_hide', false);
	if($dentisti_clinic_show_slider == false){
		$dentisti_clinic_custom_css .='.page-template-custom-front-page #header-top{';
			$dentisti_clinic_custom_css .='position: static;background: rgba(0, 0, 0, 1);';
		$dentisti_clinic_custom_css .='}';
	}
	if($dentisti_clinic_show_slider == false){
		$dentisti_clinic_custom_css .='.page-template-custom-front-page .main-menu{';
			$dentisti_clinic_custom_css .='margin:0; border-bottom-color: #2e87ff;border-bottom: 1px solid #2e87ff;padding:0;';
		$dentisti_clinic_custom_css .='}';
	}

	$dentisti_clinic_fixed_header = get_theme_mod( 'dentisti_clinic_sticky_header', false);
	if($dentisti_clinic_fixed_header == false){
		$dentisti_clinic_custom_css .='@media screen and (min-width: 576px){
		.page-template-custom-front-page .fixed-header .main-menu{';
			$dentisti_clinic_custom_css .='z-index: 999;border: none; margin-top: -7em;position: relative;padding: 10px;margin-bottom: 3%; background:none;';
		$dentisti_clinic_custom_css .='} }';
	}

	/*-----------------------Slider Content Layout ------------------*/
	$dentisti_clinic_theme_lay = get_theme_mod( 'dentisti_clinic_slider_content_alignment','Center');
    if($dentisti_clinic_theme_lay == 'Left'){
		$dentisti_clinic_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$dentisti_clinic_custom_css .='text-align:left !important; left:15%; right:45%;';
		$dentisti_clinic_custom_css .='}';
	}else if($dentisti_clinic_theme_lay == 'Center'){
		$dentisti_clinic_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$dentisti_clinic_custom_css .='text-align:center !important; left:20%; right:20%;';
		$dentisti_clinic_custom_css .='}';
	}else if($dentisti_clinic_theme_lay == 'Right'){
		$dentisti_clinic_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$dentisti_clinic_custom_css .='text-align:right !important; left:45%; right:15%;';
		$dentisti_clinic_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$dentisti_clinic_theme_lay = get_theme_mod( 'dentisti_clinic_slider_image_opacity','0.4');
	if($dentisti_clinic_theme_lay == '0'){
		$dentisti_clinic_custom_css .='#slider img{';
			$dentisti_clinic_custom_css .='opacity:0';
		$dentisti_clinic_custom_css .='}';
		}else if($dentisti_clinic_theme_lay == '0.1'){
		$dentisti_clinic_custom_css .='#slider img{';
			$dentisti_clinic_custom_css .='opacity:0.1';
		$dentisti_clinic_custom_css .='}';
		}else if($dentisti_clinic_theme_lay == '0.2'){
		$dentisti_clinic_custom_css .='#slider img{';
			$dentisti_clinic_custom_css .='opacity:0.2';
		$dentisti_clinic_custom_css .='}';
		}else if($dentisti_clinic_theme_lay == '0.3'){
		$dentisti_clinic_custom_css .='#slider img{';
			$dentisti_clinic_custom_css .='opacity:0.3';
		$dentisti_clinic_custom_css .='}';
		}else if($dentisti_clinic_theme_lay == '0.4'){
		$dentisti_clinic_custom_css .='#slider img{';
			$dentisti_clinic_custom_css .='opacity:0.4';
		$dentisti_clinic_custom_css .='}';
		}else if($dentisti_clinic_theme_lay == '0.5'){
		$dentisti_clinic_custom_css .='#slider img{';
			$dentisti_clinic_custom_css .='opacity:0.5';
		$dentisti_clinic_custom_css .='}';
		}else if($dentisti_clinic_theme_lay == '0.6'){
		$dentisti_clinic_custom_css .='#slider img{';
			$dentisti_clinic_custom_css .='opacity:0.6';
		$dentisti_clinic_custom_css .='}';
		}else if($dentisti_clinic_theme_lay == '0.7'){
		$dentisti_clinic_custom_css .='#slider img{';
			$dentisti_clinic_custom_css .='opacity:0.7';
		$dentisti_clinic_custom_css .='}';
		}else if($dentisti_clinic_theme_lay == '0.8'){
		$dentisti_clinic_custom_css .='#slider img{';
			$dentisti_clinic_custom_css .='opacity:0.8';
		$dentisti_clinic_custom_css .='}';
		}else if($dentisti_clinic_theme_lay == '0.9'){
		$dentisti_clinic_custom_css .='#slider img{';
			$dentisti_clinic_custom_css .='opacity:0.9';
		$dentisti_clinic_custom_css .='}';
		}

	/*-------------------------- Button Settings option------------------*/
	$dentisti_clinic_button_padding_top_bottom = get_theme_mod('dentisti_clinic_button_padding_top_bottom');
	$dentisti_clinic_button_padding_left_right = get_theme_mod('dentisti_clinic_button_padding_left_right');
	$dentisti_clinic_custom_css .='.new-text .read-more-btn a, #slider .inner_carousel .readbtn a, #comments .form-submit input[type="submit"],#category .explore-btn a, #we_provide .theme_button a{';
		$dentisti_clinic_custom_css .='padding-top: '.esc_attr($dentisti_clinic_button_padding_top_bottom).'px !important; padding-bottom: '.esc_attr($dentisti_clinic_button_padding_top_bottom).'px !important; padding-left: '.esc_attr($dentisti_clinic_button_padding_left_right).'px !important; padding-right: '.esc_attr($dentisti_clinic_button_padding_left_right).'px !important; display:inline-block;';
	$dentisti_clinic_custom_css .='}';

	$dentisti_clinic_button_border_radius = get_theme_mod('dentisti_clinic_button_border_radius');
	$dentisti_clinic_custom_css .='.new-text .read-more-btn a, #slider .inner_carousel .readbtn a, #comments .form-submit input[type="submit"], #category .explore-btn a, #we_provide .theme_button a{';
		$dentisti_clinic_custom_css .='border-radius: '.esc_attr($dentisti_clinic_button_border_radius).'px;';
	$dentisti_clinic_custom_css .='}';

	/*-----------------------------Responsive Setting --------------------*/
	$dentisti_clinic_stickyheader = get_theme_mod( 'dentisti_clinic_responsive_sticky_header',false);
	if($dentisti_clinic_stickyheader == true && get_theme_mod( 'dentisti_clinic_sticky_header') == false){
    	$dentisti_clinic_custom_css .='.fixed-header{';
			$dentisti_clinic_custom_css .='position:static; box-shadow: none;';
		$dentisti_clinic_custom_css .='} ';
	}
    if($dentisti_clinic_stickyheader == true){
    	$dentisti_clinic_custom_css .='@media screen and (max-width:575px) {';
		$dentisti_clinic_custom_css .='.fixed-header{';
			$dentisti_clinic_custom_css .='position:fixed;';
		$dentisti_clinic_custom_css .='} }';
	}else if($dentisti_clinic_stickyheader == false){
		$dentisti_clinic_custom_css .='@media screen and (max-width:575px) {';
		$dentisti_clinic_custom_css .='.fixed-header{';
			$dentisti_clinic_custom_css .='position:static; box-shadow: none;';
		$dentisti_clinic_custom_css .='} }';
	}

	$dentisti_clinic_slider = get_theme_mod( 'dentisti_clinic_responsive_slider',false);
	if($dentisti_clinic_slider == true && get_theme_mod( 'dentisti_clinic_slider_hide', false) == false){
    	$dentisti_clinic_custom_css .='#slider{';
			$dentisti_clinic_custom_css .='display:none;';
		$dentisti_clinic_custom_css .='} ';
	}
    if($dentisti_clinic_slider == true){
    	$dentisti_clinic_custom_css .='@media screen and (max-width:575px) {';
		$dentisti_clinic_custom_css .='#slider{';
			$dentisti_clinic_custom_css .='display:block;';
		$dentisti_clinic_custom_css .='} }';
	}else if($dentisti_clinic_slider == false){
		$dentisti_clinic_custom_css .='@media screen and (max-width:575px) {';
		$dentisti_clinic_custom_css .='#slider{';
			$dentisti_clinic_custom_css .='display:none;';
		$dentisti_clinic_custom_css .='} }';
	}

	$dentisti_clinic_slider = get_theme_mod( 'dentisti_clinic_responsive_scroll',true);
	if($dentisti_clinic_slider == true && get_theme_mod( 'dentisti_clinic_enable_disable_scroll', true) == false){
    	$dentisti_clinic_custom_css .='#scroll-top{';
			$dentisti_clinic_custom_css .='display:none !important;';
		$dentisti_clinic_custom_css .='} ';
	}
    if($dentisti_clinic_slider == true){
    	$dentisti_clinic_custom_css .='@media screen and (max-width:575px) {';
		$dentisti_clinic_custom_css .='#scroll-top{';
			$dentisti_clinic_custom_css .='visibility: visible !important;';
		$dentisti_clinic_custom_css .='} }';
	}else if($dentisti_clinic_slider == false){
		$dentisti_clinic_custom_css .='@media screen and (max-width:575px) {';
		$dentisti_clinic_custom_css .='#scroll-top{';
			$dentisti_clinic_custom_css .='visibility: hidden !important;';
		$dentisti_clinic_custom_css .='} }';
	}

	$dentisti_clinic_sidebar = get_theme_mod( 'dentisti_clinic_responsive_sidebar',true);
    if($dentisti_clinic_sidebar == true){
    	$dentisti_clinic_custom_css .='@media screen and (max-width:575px) {';
		$dentisti_clinic_custom_css .='#sidebar{';
			$dentisti_clinic_custom_css .='display:block;';
		$dentisti_clinic_custom_css .='} }';
	}else if($dentisti_clinic_sidebar == false){
		$dentisti_clinic_custom_css .='@media screen and (max-width:575px) {';
		$dentisti_clinic_custom_css .='#sidebar{';
			$dentisti_clinic_custom_css .='display:none;';
		$dentisti_clinic_custom_css .='} }';
	}

	$dentisti_clinic_loader = get_theme_mod( 'dentisti_clinic_responsive_preloader', true);
	if($dentisti_clinic_loader == true && get_theme_mod( 'dentisti_clinic_preloader_option', true) == false){
    	$dentisti_clinic_custom_css .='#loader-wrapper{';
			$dentisti_clinic_custom_css .='display:none;';
		$dentisti_clinic_custom_css .='} ';
	}
    if($dentisti_clinic_loader == true){
    	$dentisti_clinic_custom_css .='@media screen and (max-width:575px) {';
		$dentisti_clinic_custom_css .='#loader-wrapper{';
			$dentisti_clinic_custom_css .='display:block;';
		$dentisti_clinic_custom_css .='} }';
	}else if($dentisti_clinic_loader == false){
		$dentisti_clinic_custom_css .='@media screen and (max-width:575px) {';
		$dentisti_clinic_custom_css .='#loader-wrapper{';
			$dentisti_clinic_custom_css .='display:none;';
		$dentisti_clinic_custom_css .='} }';
	}

	/*------------ Woocommerce Settings  --------------*/
	$dentisti_clinic_top_bottom_product_button_padding = get_theme_mod('dentisti_clinic_top_bottom_product_button_padding', 10);
	$dentisti_clinic_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$dentisti_clinic_custom_css .='padding-top: '.esc_attr($dentisti_clinic_top_bottom_product_button_padding).'px; padding-bottom: '.esc_attr($dentisti_clinic_top_bottom_product_button_padding).'px;';
	$dentisti_clinic_custom_css .='}';

	$dentisti_clinic_left_right_product_button_padding = get_theme_mod('dentisti_clinic_left_right_product_button_padding', 16);
	$dentisti_clinic_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$dentisti_clinic_custom_css .='padding-left: '.esc_attr($dentisti_clinic_left_right_product_button_padding).'px; padding-right: '.esc_attr($dentisti_clinic_left_right_product_button_padding).'px;';
	$dentisti_clinic_custom_css .='}';

	$dentisti_clinic_product_button_border_radius = get_theme_mod('dentisti_clinic_product_button_border_radius', 30);
	$dentisti_clinic_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$dentisti_clinic_custom_css .='border-radius: '.esc_attr($dentisti_clinic_product_button_border_radius).'px;';
	$dentisti_clinic_custom_css .='}';

	$dentisti_clinic_show_related_products = get_theme_mod('dentisti_clinic_show_related_products',true);
	if($dentisti_clinic_show_related_products == false){
		$dentisti_clinic_custom_css .='.related.products{';
			$dentisti_clinic_custom_css .='display: none;';
		$dentisti_clinic_custom_css .='}';
	}

	$dentisti_clinic_show_wooproducts_border = get_theme_mod('dentisti_clinic_show_wooproducts_border', true);
	if($dentisti_clinic_show_wooproducts_border == false){
		$dentisti_clinic_custom_css .='.woocommerce .products li{';
			$dentisti_clinic_custom_css .='border: none;';
		$dentisti_clinic_custom_css .='}';
	}

	$dentisti_clinic_top_bottom_wooproducts_padding = get_theme_mod('dentisti_clinic_top_bottom_wooproducts_padding',0);
	$dentisti_clinic_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$dentisti_clinic_custom_css .='padding-top: '.esc_attr($dentisti_clinic_top_bottom_wooproducts_padding).'px !important; padding-bottom: '.esc_attr($dentisti_clinic_top_bottom_wooproducts_padding).'px !important;';
	$dentisti_clinic_custom_css .='}';

	$dentisti_clinic_left_right_wooproducts_padding = get_theme_mod('dentisti_clinic_left_right_wooproducts_padding',0);
	$dentisti_clinic_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$dentisti_clinic_custom_css .='padding-left: '.esc_attr($dentisti_clinic_left_right_wooproducts_padding).'px !important; padding-right: '.esc_attr($dentisti_clinic_left_right_wooproducts_padding).'px !important;';
	$dentisti_clinic_custom_css .='}';

	$dentisti_clinic_wooproducts_border_radius = get_theme_mod('dentisti_clinic_wooproducts_border_radius',0);
	$dentisti_clinic_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$dentisti_clinic_custom_css .='border-radius: '.esc_attr($dentisti_clinic_wooproducts_border_radius).'px;';
	$dentisti_clinic_custom_css .='}';

	$dentisti_clinic_wooproducts_box_shadow = get_theme_mod('dentisti_clinic_wooproducts_box_shadow',0);
	$dentisti_clinic_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$dentisti_clinic_custom_css .='box-shadow: '.esc_attr($dentisti_clinic_wooproducts_box_shadow).'px '.esc_attr($dentisti_clinic_wooproducts_box_shadow).'px '.esc_attr($dentisti_clinic_wooproducts_box_shadow).'px #e4e4e4;';
	$dentisti_clinic_custom_css .='}';

	/*------------------ Skin Option  -------------------*/
	$dentisti_clinic_theme_lay = get_theme_mod( 'dentisti_clinic_background_skin_mode','Transparent Background');
    if($dentisti_clinic_theme_lay == 'With Background'){
		$dentisti_clinic_custom_css .='.page-box, #sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.front-page-content,.background-img-skin, .noresult-content{';
			$dentisti_clinic_custom_css .='background-color: #fff; padding:10px;';
		$dentisti_clinic_custom_css .='}';
	}else if($dentisti_clinic_theme_lay == 'Transparent Background'){
		$dentisti_clinic_custom_css .='.page-box-single,#we_provide, .cat-posts{';
			$dentisti_clinic_custom_css .='background-color: transparent;';
		$dentisti_clinic_custom_css .='}';
	}

	/*-------------- Footer Text -------------------*/
	$dentisti_clinic_copyright_content_align = get_theme_mod('dentisti_clinic_copyright_content_align');
	if($dentisti_clinic_copyright_content_align != false){
		$dentisti_clinic_custom_css .='.copyright{';
			$dentisti_clinic_custom_css .='text-align: '.esc_attr($dentisti_clinic_copyright_content_align).';';
		$dentisti_clinic_custom_css .='}';
	}

	$dentisti_clinic_footer_content_font_size = get_theme_mod('dentisti_clinic_footer_content_font_size', 16);
	$dentisti_clinic_custom_css .='.copyright p{';
		$dentisti_clinic_custom_css .='font-size: '.esc_attr($dentisti_clinic_footer_content_font_size).'px !important;';
	$dentisti_clinic_custom_css .='}';

	$dentisti_clinic_copyright_padding = get_theme_mod('dentisti_clinic_copyright_padding', 15);
	$dentisti_clinic_custom_css .='.copyright{';
		$dentisti_clinic_custom_css .='padding-top: '.esc_attr($dentisti_clinic_copyright_padding).'px; padding-bottom: '.esc_attr($dentisti_clinic_copyright_padding).'px;';
	$dentisti_clinic_custom_css .='}';

	$dentisti_clinic_footer_widget_bg_color = get_theme_mod('dentisti_clinic_footer_widget_bg_color');
	$dentisti_clinic_custom_css .='#footer{';
		$dentisti_clinic_custom_css .='background-color: '.esc_attr($dentisti_clinic_footer_widget_bg_color).';';
	$dentisti_clinic_custom_css .='}';

	$dentisti_clinic_footer_widget_bg_image = get_theme_mod('dentisti_clinic_footer_widget_bg_image');
	if($dentisti_clinic_footer_widget_bg_image != false){
		$dentisti_clinic_custom_css .='#footer{';
			$dentisti_clinic_custom_css .='background: url('.esc_attr($dentisti_clinic_footer_widget_bg_image).');';
		$dentisti_clinic_custom_css .='}';
	}

	// scroll to top
	$dentisti_clinic_scroll_font_size_icon = get_theme_mod('dentisti_clinic_scroll_font_size_icon', 22);
	$dentisti_clinic_custom_css .='#scroll-top .fas{';
		$dentisti_clinic_custom_css .='font-size: '.esc_attr($dentisti_clinic_scroll_font_size_icon).'px;';
	$dentisti_clinic_custom_css .='}';

	// Slider Height 
	$dentisti_clinic_slider_image_height = get_theme_mod('dentisti_clinic_slider_image_height');
	$dentisti_clinic_custom_css .='#slider img{';
		$dentisti_clinic_custom_css .='height: '.esc_attr($dentisti_clinic_slider_image_height).'px;';
	$dentisti_clinic_custom_css .='}';

	// primary menu 
	if((has_nav_menu('primary')) != true){
		$dentisti_clinic_custom_css .='@media screen and (max-width:1000px) {';
		$dentisti_clinic_custom_css .='.main-menu{';
			$dentisti_clinic_custom_css .='display:none;';
		$dentisti_clinic_custom_css .='} }';
	}

	// Display Blog Post 
	$dentisti_clinic_display_blog_page_post = get_theme_mod( 'dentisti_clinic_display_blog_page_post','Without Box');
    if($dentisti_clinic_display_blog_page_post == 'In Box'){
		$dentisti_clinic_custom_css .='.page-box{';
			$dentisti_clinic_custom_css .='border:solid 1px #2e87ff; margin:20px 0;';
		$dentisti_clinic_custom_css .='}';
	}

	// slider overlay
	$dentisti_clinic_slider_overlay = get_theme_mod('dentisti_clinic_slider_overlay', true);
	if($dentisti_clinic_slider_overlay == false){
		$dentisti_clinic_custom_css .='#slider img{';
			$dentisti_clinic_custom_css .='opacity:1;';
		$dentisti_clinic_custom_css .='}';
	} 
	$dentisti_clinic_slider_image_overlay_color_first = get_theme_mod('dentisti_clinic_slider_image_overlay_color_first', true);
	$dentisti_clinic_slider_image_overlay_color_second = get_theme_mod('dentisti_clinic_slider_image_overlay_color_second', true);
	if($dentisti_clinic_slider_overlay != false){
		$dentisti_clinic_custom_css .='#slider .carousel-item{';
			$dentisti_clinic_custom_css .='background: linear-gradient(130deg, '.esc_attr($dentisti_clinic_slider_image_overlay_color_first).' 40%, '.esc_attr($dentisti_clinic_slider_image_overlay_color_second).' 77%);';
		$dentisti_clinic_custom_css .='}';
	}

	// site title and tagline font size option
	$dentisti_clinic_site_title_size_option = get_theme_mod('dentisti_clinic_site_title_size_option', 35);{
	$dentisti_clinic_custom_css .='.logo h1 a, .logo p a{';
	$dentisti_clinic_custom_css .='font-size: '.esc_attr($dentisti_clinic_site_title_size_option).'px;';
		$dentisti_clinic_custom_css .='}';
	}

	$dentisti_clinic_site_tagline_size_option = get_theme_mod('dentisti_clinic_site_tagline_size_option', 12);{
	$dentisti_clinic_custom_css .='.logo p{';
	$dentisti_clinic_custom_css .='font-size: '.esc_attr($dentisti_clinic_site_tagline_size_option).'px !important;';
		$dentisti_clinic_custom_css .='}';
	}

	// woocommerce product sale settings
	$dentisti_clinic_border_radius_product_sale = get_theme_mod('dentisti_clinic_border_radius_product_sale',50);
	$dentisti_clinic_custom_css .='.woocommerce span.onsale {';
		$dentisti_clinic_custom_css .='border-radius: '.esc_attr($dentisti_clinic_border_radius_product_sale).'% !important;';
	$dentisti_clinic_custom_css .='}';

	$dentisti_clinic_align_product_sale = get_theme_mod('dentisti_clinic_align_product_sale', 'Right');
	if($dentisti_clinic_align_product_sale == 'Right' ){
		$dentisti_clinic_custom_css .='.woocommerce ul.products li.product .onsale{';
			$dentisti_clinic_custom_css .=' left:auto; right:0;';
		$dentisti_clinic_custom_css .='}';
	}elseif($dentisti_clinic_align_product_sale == 'Left' ){
		$dentisti_clinic_custom_css .='.woocommerce ul.products li.product .onsale{';
			$dentisti_clinic_custom_css .=' left:0; right:auto;';
		$dentisti_clinic_custom_css .='}';
	}

	$dentisti_clinic_product_sale_font_size = get_theme_mod('dentisti_clinic_product_sale_font_size',14);
	$dentisti_clinic_custom_css .='.woocommerce span.onsale{';
		$dentisti_clinic_custom_css .='font-size: '.esc_attr($dentisti_clinic_product_sale_font_size).'px;';
	$dentisti_clinic_custom_css .='}';

	// preloader background option
	$dentisti_clinic_loader_background_color_settings = get_theme_mod('dentisti_clinic_loader_background_color_settings');
	$dentisti_clinic_custom_css .='#loader-wrapper .loader-section{';
		$dentisti_clinic_custom_css .='background-color: '.esc_attr($dentisti_clinic_loader_background_color_settings).';';
	$dentisti_clinic_custom_css .='} ';

	// fixed header padding option
	$dentisti_clinic_sticky_header_padding_settings = get_theme_mod('dentisti_clinic_sticky_header_padding_settings', 0);
	if ($dentisti_clinic_sticky_header_padding_settings != '' && get_theme_mod('dentisti_clinic_sticky_header', false) == true) {
		$dentisti_clinic_custom_css .='.page-template-custom-front-page .fixed-header .main-menu{';
			$dentisti_clinic_custom_css .='padding: '.esc_attr($dentisti_clinic_sticky_header_padding_settings).'px;box-shadow: 2px 2px 10px 0px #2d2d2d;';
		$dentisti_clinic_custom_css .='}';
		$dentisti_clinic_custom_css .='.fixed-header{';
			$dentisti_clinic_custom_css .='padding: '.esc_attr($dentisti_clinic_sticky_header_padding_settings).'px;box-shadow: 2px 2px 10px 0px #2d2d2d;';
		$dentisti_clinic_custom_css .='}';
		$dentisti_clinic_custom_css .='.page-template-custom-front-page .fixed-header {';
			$dentisti_clinic_custom_css .='padding: 0 !important;';
		$dentisti_clinic_custom_css .='}';
	}

	// woocommerce Product Navigation
	$dentisti_clinic_products_navigation = get_theme_mod('dentisti_clinic_products_navigation', 'Yes');
	if($dentisti_clinic_products_navigation == 'No'){
		$dentisti_clinic_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$dentisti_clinic_custom_css .='display: none;';
		$dentisti_clinic_custom_css .='}';
	}

	// featured image setting
	$dentisti_clinic_featured_img_border_radius = get_theme_mod('dentisti_clinic_featured_img_border_radius', 0);
	$dentisti_clinic_custom_css .='.our-services img, .box-img img{';
		$dentisti_clinic_custom_css .='border-radius: '.esc_attr($dentisti_clinic_featured_img_border_radius).'px;';
	$dentisti_clinic_custom_css .='}';

	$dentisti_clinic_featured_img_box_shadow = get_theme_mod('dentisti_clinic_featured_img_box_shadow',0);
	$dentisti_clinic_custom_css .='.our-services img, .page-box-single img{';
		$dentisti_clinic_custom_css .='box-shadow: '.esc_attr($dentisti_clinic_featured_img_box_shadow).'px '.esc_attr($dentisti_clinic_featured_img_box_shadow).'px '.esc_attr($dentisti_clinic_featured_img_box_shadow).'px #ccc;';
	$dentisti_clinic_custom_css .='}';


	