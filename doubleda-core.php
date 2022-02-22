<?php
/*
Plugin Name: Doubleda-Core
Description: Essential Features for doubleda.net
Version: 1.0.0
Author: vatheara
License: doubleda.net
*/

/*
    Elementor Widget registoration
*/
function register_gallery_slider_widget($widgets_manager){
    require_once(__DIR__  . '/widgets/gallery-slider-widget.php');

    $widgets_manager->register(new \Elementor_Gallery_Slider_Widget());
}



/*
    doubleda assets
*/
function doubleda_stylesheets() {
    wp_register_style('doubleda-frontend',plugins_url('assets/css/doubleda-frontend.css', __FILE__));

    wp_enqueue_style('doubleda-frontend');
}

function doubleda_scripts() {
    wp_enqueue_script('doubleda-script',plugins_url('assets/js/doubleda-script.js',__FILE__), array('jquery'),'', true);
}

add_action('elementor/widgets/register','register_gallery_slider_widget');
add_action('elementor/frontend/before_enqueue_styles','doubleda_stylesheets');
add_action('wp_enqueue_scripts','doubleda_scripts');
?>