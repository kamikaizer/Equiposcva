<?php
get_header();
the_post();
global $post, $woocommerce;
if (post_password_required()) {
    ?>
    <div class="mep-events-wrapper">
    <?php echo get_the_password_form();?>
    </div>
    <?php
} else {
    $event_meta            = get_post_custom(get_the_id());
    $author_terms          = get_the_terms(get_the_id(), 'mep_org');
    $book_count            = get_post_meta(get_the_id(), 'total_booking', true);
    $user_api              = mep_get_option('google-map-api', 'general_setting_sec', '');
    $mep_full_name         = mage_array_strip($event_meta['mep_full_name'][0]);
    $mep_reg_email         = mage_array_strip($event_meta['mep_reg_email'][0]);
    $mep_reg_phone         = mage_array_strip($event_meta['mep_reg_phone'][0]);
    $mep_reg_address       = mage_array_strip($event_meta['mep_reg_address'][0]);
    $mep_reg_designation   = mage_array_strip($event_meta['mep_reg_designation'][0]);
    $mep_reg_website       = mage_array_strip($event_meta['mep_reg_website'][0]);
    $mep_reg_veg           = mage_array_strip($event_meta['mep_reg_veg'][0]);
    $mep_reg_company       = mage_array_strip($event_meta['mep_reg_company'][0]);
    $mep_reg_gender        = mage_array_strip($event_meta['mep_reg_gender'][0]);
    $mep_reg_tshirtsize    = mage_array_strip($event_meta['mep_reg_tshirtsize'][0]);
    $global_template       = mep_get_option('mep_global_single_template', 'single_event_setting_sec', 'default-theme.php');
    $current_template      = $event_meta['mep_event_template'][0];
    $_current_template     = $current_template ? $current_template : $global_template;
    $currency_pos           = get_option('woocommerce_currency_pos');
    do_action('mep_event_single_page_after_header');
?>
    <div class="mep-events-wrapper wrapper">
        <div class="mep-events-container">
            <?php
            if (!class_exists('WC_Bundles')) {
                do_action('woocommerce_before_single_product');
            }
            $theme_name = "/themes/$_current_template";
            require_once(mep_template_file_path($theme_name));
            if (comments_open() || get_comments_number()) {
                comments_template();
            }
            ?>
        </div>
        <div class="mep-related-events-sec">
            <?php do_action('after-single-events'); ?>
        </div>

    </div>
<?php
    do_action('mep_event_single_template_end', get_the_id());
    do_action('mep_event_single_page_before_footer');
}
get_footer();
