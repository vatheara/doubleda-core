<?php 

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class Elementor_Gallery_Slider_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'gallery_slider_widget';
    }

    public function get_title() {
        return esc_html__('Gallery Slider', 'Doubleda-Core');
    }

    public function get_icon() {
        return ' eicon-instagram-nested-gallery';
    }

    public function get_categories() {
        return ['basic'];
    }

    public function get_keywords(){
        return ['gallery','slider'];
    }

    protected function register_controls() {
        //Content Tab Start 
        $this->start_controls_section(
            'section_gallery',
            [
                'label' => esc_html__('Gallery Slider'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );



        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'images',
            [   
                'label' => esc_html__('Add Thumbnail' ,'Doubleda-Core'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'dynamic' => [
                    'active' => true,
                ]
            ]
        );

        $repeater->add_control(
			'carousel',
			[
				'label' => esc_html__( 'Add Images', 'Doubleda-Core' ),
				'type' => \Elementor\Controls_Manager::GALLERY,
				'default' => [],
				'show_label' => false,
				'dynamic' => [
					'active' => true,
				],
			]
		);

        $repeater->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'Doubleda-Core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => esc_html__( 'Type gallery title', 'Doubleda-Core' ),
                'default' => esc_html__( 'Gallery Title', 'Doubleda-Core' ),
            ]
        );
        $repeater->add_control(
            'filter',
            [
                'label' => esc_html__( 'Filter Name (Category)', 'Doubleda-Core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => esc_html__( 'Type gallery filter name', 'Doubleda-Core' ),
                'description' => esc_html__( 'Filter name will be used in filter menu. Added more category by , separator.', 'Doubleda-Core' ),
                'default' => esc_html__( 'Filter Name', 'Doubleda-Core' ),
            ]
        );

        $this->add_control(
            'gallery',
            [
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'show_label' => false,
                'title_field' => sprintf( esc_html__( 'Filter Group: %1$s', 'Doubleda-Core' ), '{{filter}}' ),
                'default' => [
                    [
                        'images' => \Elementor\Utils::get_placeholder_image_src(),
                        'filter' => esc_html__( 'Web Design', 'Doubleda-Core' ),
                        'title' => esc_html__( 'T-shirt design is the part of design', 'Doubleda-Core' ),

                    ],
                    [
                        'images' => \Elementor\Utils::get_placeholder_image_src(),
                        'filter' => esc_html__( 'Logo Design', 'Doubleda-Core' ),
                        'title' => esc_html__( 'The service provide for designer', 'Doubleda-Core' ),

                    ],
                    [
                        'images' => \Elementor\Utils::get_placeholder_image_src(),
                        'filter' => esc_html__( 'Mobile App', 'Doubleda-Core' ),
                        'title' => esc_html__( 'Mobile App landing Design', 'Doubleda-Core' ),

                    ],
                    [
                        'images' => \Elementor\Utils::get_placeholder_image_src(),
                        'filter' => esc_html__( 'Mobile App', 'Doubleda-Core' ),
                        'title' => esc_html__( 'Logo Design creativity', 'Doubleda-Core' ),

                    ],
                    [
                        'images' => \Elementor\Utils::get_placeholder_image_src(),
                        'filter' => esc_html__( 'Web Design', 'Doubleda-Core' ),
                        'title' => esc_html__( 'Getting tickets to the big show', 'Doubleda-Core' ),

                    ],
                    [
                        'images' => \Elementor\Utils::get_placeholder_image_src(),
                        'filter' => esc_html__( 'Web Design', 'Doubleda-Core' ),
                        'title' => esc_html__( 'T-shirt design is the part of design', 'Doubleda-Core' ),

                    ]
                ]
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<pre>';
        var_dump($settings['gallery']);
        echo '</pre>';
        ?>
        <p class="">
            
        
        </p>

		<?php
    }

}


?>