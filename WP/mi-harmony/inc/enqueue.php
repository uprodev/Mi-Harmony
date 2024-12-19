<?php

add_action( 'wp_enqueue_scripts', 'add_styles' );
add_action( 'wp_enqueue_scripts', 'add_scripts' );

function add_styles() {
    wp_enqueue_style('normalize', get_template_directory_uri().'/css/normalize.css', array(), rand(1111, 9999));
    wp_enqueue_style('styles', get_template_directory_uri().'/css/styles.css', array(), rand(1111, 9999));
    wp_enqueue_style('responsive', get_template_directory_uri().'/css/responsive.css', array(), rand(1111, 9999));
    wp_enqueue_style( 'theme', get_stylesheet_uri() );
}


function add_scripts() {
//    wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.js', array('jquery'), false, true);
//    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), false, true);

}