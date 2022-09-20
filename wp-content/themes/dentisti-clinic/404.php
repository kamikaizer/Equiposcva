<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package dentisti-clinic
 */

get_header(); ?>

<main role="main" id="maincontent" class="content-ts">
	<div class="container">
        <div class="middle-align">
			<h1><?php echo esc_html(get_theme_mod('dentisti_clinic_title_404_page',__('404 Not Found','dentisti-clinic')));?></h1>
			<p class="text-404"><?php echo esc_html(get_theme_mod('dentisti_clinic_content_404_page',__('Looks like you have taken a wrong turn&hellip. Dont worry&hellip it happens to the best of us.','dentisti-clinic')));?></p>
			<?php if( get_theme_mod('dentisti_clinic_button_404_page','Back to Home Page') != ''){ ?>
				<div class="read-moresec my-4">
	        		<a href="<?php echo esc_url(home_url()); ?>" class="button p-2"><?php echo esc_html(get_theme_mod('dentisti_clinic_button_404_page',__('Back to Home Page','dentisti-clinic')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('dentisti_clinic_button_404_page',__('Back to Home Page','dentisti-clinic')));?></span></a>
	        	</div>
        	<?php } ?>
			<div class="clearfix"></div>
        </div>
	</div>
</main>

<?php get_footer(); ?>