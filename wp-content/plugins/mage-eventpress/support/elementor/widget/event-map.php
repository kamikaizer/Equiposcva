<?php
namespace MEPPlugin\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Core\Schemes\Typography;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * @since 1.1.0
 */
class MEPEventMaptWidget extends Widget_Base {

	public function get_name() {
		return 'mep-event-map-widget';
	}

	public function get_title() {
		return __( 'Event Google Map', 'mage-eventpress' );
	}

	public function get_icon() {
		return 'eicon-google-maps';
	}

	public function get_categories() {
		return [ 'mep-elementor-support' ];
	}

	protected function _register_controls() {

		$this->start_controls_section(
			'mep_event_city_list_settings',
			[
				'label' => __( 'Event Map Settings', 'mage-eventpress' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'mep_event_list',
			[
				'label' => __( 'Select Event', 'mage-eventpress' ),
				'type' => Controls_Manager::SELECT,
				'default' => '0',
				'options' => mep_elementor_get_events('None'),
			]
		);


        $this->end_controls_section();


		// $this->start_controls_section(
		// 	'mep_event_city_style_settings',
		// 	[
		// 		'label' => __( 'Style Settings', 'mage-eventpress' ),
		// 		'tab' => Controls_Manager::TAB_CONTENT,
		// 	]
		// );
		// $this->add_group_control(
		// 	Group_Control_Typography::get_type(),
		// 	[
		// 		'name' => 'mep_title_typo',
		// 		'scheme' => Typography::TYPOGRAPHY_3,
		// 		'selector' => '{{WRAPPER}} .mep-elementor-widget-title h2',
		// 	]
        // ); 
		// $this->add_control(
		// 		'mep_event_title_color',
		// 		[
		// 			'label' => __( 'Title Color', 'mage-eventpress' ),
		// 			'type' => Controls_Manager::COLOR,
		// 			'selectors' => [
		// 				'{{WRAPPER}} .mep-elementor-widget-title h2' => 'color: {{VALUE}};',
		// 			],
		// 		]
	    // );



        // $this->end_controls_section();
	
	}

	protected function render() {
        global $post;
        $settings           = $this->get_settings_for_display();
        $user_select_event  = $settings['mep_event_list'];    
		$event_id           = $user_select_event > 0 ? $user_select_event : $post->ID;
		if (get_post_type($event_id) == 'mep_events') {
	?>	
        <div class="mep-default-map mep-elementor-widget-map">
			
             <?php do_action('mep_event_map',$event_id); ?>
        </div>
	<?php
}
	}
}
