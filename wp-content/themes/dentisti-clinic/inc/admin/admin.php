<?php
//about theme info
add_action( 'admin_menu', 'dentisti_clinic_abouttheme' );
function dentisti_clinic_abouttheme() {    	
	add_theme_page( esc_html__('About Dentisti Theme', 'dentisti-clinic'), esc_html__('About Dentisti Theme', 'dentisti-clinic'), 'edit_theme_options', 'dentisti_clinic_guide', 'dentisti_clinic_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function dentisti_clinic_admin_theme_style() {
   wp_enqueue_style('dentisti-clinic-custom-admin-style', esc_url(get_template_directory_uri()) .'/inc/admin/admin.css');
}
add_action('admin_enqueue_scripts', 'dentisti_clinic_admin_theme_style');

//guidline for about theme
function dentisti_clinic_mostrar_guide() {
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
 <div class="wrapper-info">
	 <div class="header">
	 	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/logo.png" alt="" />
	 	<h2><?php esc_html_e('Welcome to Dentisti Clinic Theme', 'dentisti-clinic'); ?></h2>
 		<p><?php esc_html_e('Most of our outstanding theme is elegant, responsive, multifunctional, SEO friendly has amazing features and functionalities that make them highly demanding for designers and bloggers, who ought to excel in web development domain. Our Netnus has got everything that an individual and group need to be successful in their venture.', 'dentisti-clinic'); ?></p>
		<div class="main-button">
			<a href="<?php echo esc_url( DENTISTI_CLINIC_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'dentisti-clinic'); ?></a>
			<a href="<?php echo esc_url( DENTISTI_CLINIC_LIVE_DEMO ); ?>"><?php esc_html_e('Live Demo', 'dentisti-clinic'); ?></a>
			<a href="<?php echo esc_url( DENTISTI_CLINIC_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'dentisti-clinic'); ?></a>
		</div>
	</div>
	<div class="button-bg">
	<button role="tab" class="tablink" onclick="openPage('Home', this, '')"><?php esc_html_e('Lite Theme Setup', 'dentisti-clinic'); ?></button>
	<button role="tab" class="tablink" onclick="openPage('Contact', this, '')"><?php esc_html_e('Premium Theme info', 'dentisti-clinic'); ?></button>
	</div>
	<div id="Home" class="tabcontent tab1">
	  	<h3><?php esc_html_e('How to set up homepage', 'dentisti-clinic'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( DENTISTI_CLINIC_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'dentisti-clinic'); ?></a>
			<a href="<?php echo esc_url( DENTISTI_CLINIC_CONTACT ); ?>"><?php esc_html_e('Support', 'dentisti-clinic'); ?></a>
			<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Start Customizing', 'dentisti-clinic'); ?></a>
		</div>
	  	<div class="documentation">
		  	<div class="image-docs">
				<ul>
					<li> <b><?php esc_html_e('Step 1.', 'dentisti-clinic'); ?></b> <?php esc_html_e('Follow these instructions to setup Home page.', 'dentisti-clinic'); ?></li>
					<li> <b><?php esc_html_e('Step 2.', 'dentisti-clinic'); ?></b> <?php esc_html_e(' Create Page to set template: Go to Dashboard >> Pages >> Add New Page.Label it "home" or anything as you wish. Then select template "home-page" from template dropdown.', 'dentisti-clinic'); ?></li>
				</ul>
		  	</div>
		  	<div class="doc-image">
		  		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/home-page-template.png" alt="" />	
		  	</div>
		  	<div class="clearfixed">
				<div class="doc-image1">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/set-front-page.png" alt="" />	
			    </div>
			    <div class="image-docs1">
				    <ul>
						<li> <b><?php esc_html_e('Step 3.', 'dentisti-clinic'); ?></b> <?php esc_html_e('Set the front page: Go to Setting -> Reading --> Set the front page display static page to home page', 'dentisti-clinic'); ?></li>
					</ul>
			  	</div>
			</div>
		</div>
	</div>

	<div id="Contact" class="tabcontent">
	 	<h3><?php esc_html_e('Premium Theme Info', 'dentisti-clinic'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( DENTISTI_CLINIC_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'dentisti-clinic'); ?></a>
			<a href="<?php echo esc_url( DENTISTI_CLINIC_LIVE_DEMO ); ?>"><?php esc_html_e('Live Demo', 'dentisti-clinic'); ?></a>
			<a href="<?php echo esc_url( DENTISTI_CLINIC_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'dentisti-clinic'); ?></a>
		</div>
	  	<div class="features-section">
	  		<div class="col-4">
	  			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/screenshot.png" alt="" />
	  			<p><?php esc_html_e( 'Dentisti Clinic is an exclusively multipurpose theme, easy to use.  It comes bundled with Elementor, and it is compatible with WooCommerce. Build any stunning business related website the smooth way with this amazing theme. It is cross-browser compatible and implemented on bootstrap framework that makes it really handy to use. It comes with powerful admin interface. The theme is mobile-friendly that easily fits in any device screen size. ', 'dentisti-clinic' ); ?></p>
	  		</div>
	  		<div class="col-4">
	  			<h4><?php esc_html_e( 'Theme Features', 'dentisti-clinic' ); ?></h4>
				<ul>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Theme options using customizer API', 'dentisti-clinic' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Responsive Design', 'dentisti-clinic' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Favicon, Logo, Title and Tagline Customization', 'dentisti-clinic' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advanced Color Options and Color Pallets', 'dentisti-clinic' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( '100+ Font Family Options', 'dentisti-clinic' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advance Slider with a Number of Slider Images Upload Option Available.', 'dentisti-clinic' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Support to Add Custom CSS/JS', 'dentisti-clinic' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'SEO Friendly', 'dentisti-clinic' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Pagination Option', 'dentisti-clinic' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Compatible With Different WordPress Famous Plugins Like Contact Form 7 and Woocommerce', 'dentisti-clinic' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Enable-Disable Options on All Sections', 'dentisti-clinic' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Footer Customization Options', 'dentisti-clinic' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Fully Integrated with Font Awesome Icon', 'dentisti-clinic' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Short Codes', 'dentisti-clinic' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Background Image Option', 'dentisti-clinic' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Page Templates', 'dentisti-clinic' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Featured Product Images, HD Images and Video display', 'dentisti-clinic' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Allow To Set Site Title, Tagline, Logo', 'dentisti-clinic' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Make Post About Firms News, Events, Achievements and So On.', 'dentisti-clinic' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Left and Right Sidebar', 'dentisti-clinic' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Sticky Post & Comment Threads', 'dentisti-clinic' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Parallax Image-Background Section', 'dentisti-clinic' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Backgrounds, Colors, Headers, Logo & Menu', 'dentisti-clinic' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Customizable Home Page', 'dentisti-clinic' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Full-Width Template', 'dentisti-clinic' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Gallery, Banner & Post Type Plugin Functionality', 'dentisti-clinic' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advance Social Media Feature', 'dentisti-clinic' ); ?></li>
				</ul>
			</div>
		</div>
	</div>

<script>
	function openPage(pageName,elmnt,color) {
	    var i, tabcontent, tablinks;
	    tabcontent = document.getElementsByClassName("tabcontent");
	    for (i = 0; i < tabcontent.length; i++) {
	        tabcontent[i].style.display = "none";
	    }
	    tablinks = document.getElementsByClassName("tablink");
	    for (i = 0; i < tablinks.length; i++) {
	        tablinks[i].style.backgroundColor = "";
	    }
	    document.getElementById(pageName).style.display = "block";
	    elmnt.style.backgroundColor = color;

	}
</script>
<?php } ?>