<?php
/*
Plugin Name: Doubleda-Core
Description: Essential Features for doubleda.net
Version: 1.0.0
Author: vatheara
License: doubleda.net
*/



add_action( 'init',  'add_wpml_support' );

function add_wpml_support(){
    
    add_filter( 'wpml_elementor_widgets_to_translate',  'wpml_widgets_to_translate_filter');

}

function wpml_widgets_to_translate_filter( $widgets ) {
    $widgets[ 'hello-world' ] = [
        'conditions' => [ 'widgetType' => 'hello-world' ],
        'fields'     => [
            [
                'field'       => 'title',
                'type'        => __( 'text from', 'hello-world' ),
                'editor_type' => 'LINE'
            ],
            [
                'field'       => 'title2',
                'type'        => __( 'text from2', 'hello-world' ),
                'editor_type' => 'LINE'
            ],
        ],
    ];

    $widgets[ 'imroz-button' ] = [
        'conditions' => [ 'widgetType' => 'imroz-button' ],
        'fields'     => [
            [
                'field'       => 'rbt_rbt_button_text',
                'type'        => __( 'button text', 'imroz' ),
                'editor_type' => 'LINE'
            ],
        ],
    ];

    $widgets[ 'imroz-designer-banner' ] = [
        'conditions' => [ 'widgetType' => 'imroz-designer-banner' ],
        'fields'     => [
            [
                'field'       => 'rbt_imroz_designer_title_and_content_before_title',
                'type'        => __( 'before title', 'imroz' ),
                'editor_type' => 'LINE'
            ],
            [
                'field'       => 'rbt_imroz_designer_title_and_content_title',
                'type'        => __( 'content title', 'imroz' ),
                'editor_type' => 'LINE'
            ],
            [
                'field'       => 'rbt_imroz_designer_title_and_content_desctiption',
                'type'        => __( 'content desctiption', 'imroz' ),
                'editor_type' => 'LINE'
            ],
        ],
    ];

    $widgets[ 'imroz-contact' ] = [
        'conditions' => [ 'widgetType' => 'imroz-contact' ],
        'fields'     => [
            [
                'field'       => 'rbt_contact_before_title',
                'type'        => __( 'before title', 'imroz' ),
                'editor_type' => 'LINE'
            ],
            [
                'field'       => 'rbt_contact_title',
                'type'        => __( 'contact title', 'imroz' ),
                'editor_type' => 'LINE'
            ],
            [
                'field'       => 'rbt_contact_desctiption',
                'type'        => __( 'contact desctiption', 'imroz' ),
                'editor_type' => 'LINE'
            ],
        ],
    ];

    $widgets[ 'imroz-personal-banner' ] = [
        'conditions' => [ 'widgetType' => 'imroz-personal-banner' ],
        'fields'     => [
            [
                'field'       => 'rbt_title_and_content_before_title',
                'type'        => __( 'before title', 'imroz' ),
                'editor_type' => 'LINE'
            ],
            [
                'field'       => 'rbt_title_and_content_title',
                'type'        => __( 'contact title', 'imroz' ),
                'editor_type' => 'LINE'
            ],
            [
                'field'       => 'rbt_title_and_content_desctiption',
                'type'        => __( 'content desctiption', 'imroz' ),
                'editor_type' => 'LINE'
            ],
            [
                'field'       => 'rbt_button_text',
                'type'        => __( 'button text', 'imroz' ),
                'editor_type' => 'LINE'
            ],
        ],
    ];

    $widgets[ 'imroz-brand' ] = [
        'conditions' => [ 'widgetType' => 'imroz-brand' ],
        'fields'     => [
            [
                'field'       => 'rbt_brand_before_title',
                'type'        => __( 'brand before title', 'imroz' ),
                'editor_type' => 'LINE'
            ],
            [
                'field'       => 'rbt_brand_title',
                'type'        => __( 'brand title', 'imroz' ),
                'editor_type' => 'LINE'
            ],
            [
                'field'       => 'rbt_brand_desctiption',
                'type'        => __( 'brand description', 'imroz' ),
                'editor_type' => 'LINE'
            ],
        ],
    ];

    $widgets[ 'imroz-video-banner' ] = [
        'conditions' => [ 'widgetType' => 'imroz-video-banner' ],
        'fields'     => [
            [
                'field'       => 'rbt_title_and_content_before_title',
                'type'        => __( 'before title', 'imroz' ),
                'editor_type' => 'LINE'
            ],
            [
                'field'       => 'rbt_title_and_content_title',
                'type'        => __( 'content title', 'imroz' ),
                'editor_type' => 'LINE'
            ],
            [
                'field'       => 'rbt_title_and_content_desctiption',
                'type'        => __( 'description', 'imroz' ),
                'editor_type' => 'LINE'
            ],
        ],
    ];

    $widgets[ 'imroz-agency-banner' ] = [
        'conditions' => [ 'widgetType' => 'imroz-agency-banner' ],
        'fields'     => [
            [
                'field'       => 'rbt_title_and_content_before_title',
                'type'        => __( 'before title', 'imroz' ),
                'editor_type' => 'LINE'
            ],
            [
                'field'       => 'rbt_title_and_content_title',
                'type'        => __( 'content title', 'imroz' ),
                'editor_type' => 'LINE'
            ],
            [
                'field'       => 'rbt_title_and_content_desctiption',
                'type'        => __( 'description', 'imroz' ),
                'editor_type' => 'LINE'
            ],
            [
                'field'       => 'rbt_button_text',
                'type'        => __( 'button text', 'imroz' ),
                'editor_type' => 'LINE'
            ],
        ],
    ];

    $widgets[ 'imroz-section-title' ] = [
        'conditions' => [ 'widgetType' => 'imroz-section-title' ],
        'fields'     => [
            [
                'field'       => 'rbt_section_title_before_title',
                'type'        => __( 'section before title', 'imroz' ),
                'editor_type' => 'LINE'
            ],
            [
                'field'       => 'rbt_section_title_title',
                'type'        => __( 'section title', 'imroz' ),
                'editor_type' => 'LINE'
            ],
            [
                'field'       => 'rbt_section_title_desctiption',
                'type'        => __( 'section description', 'imroz' ),
                'editor_type' => 'VISUAL'
            ],
        ],
    ];

    $widgets[ 'imroz-about' ] = [
        'conditions' => [ 'widgetType' => 'imroz-about' ],
        'fields'     => [
            [
                'field'       => 'rbt_about_section_title_before_title',
                'type'        => __( 'about before title', 'imroz' ),
                'editor_type' => 'LINE'
            ],
            [
                'field'       => 'rbt_about_section_title_title',
                'type'        => __( 'about title', 'imroz' ),
                'editor_type' => 'LINE'
            ],
            [
                'field'       => 'rbt_about_section_title_desctiption',
                'type'        => __( 'about description', 'imroz' ),
                'editor_type' => 'VISUAL'
            ],
            [
                'field'       => 'rbt_about_button_text',
                'type'        => __( 'about btn text', 'imroz' ),
                'editor_type' => 'LINE'
            ],
        ],
    ];

    return $widgets;
}

?>