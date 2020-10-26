<?php

function load_style() {

    wp_register_style('icon', get_template_directory_uri() . '/assets/img/favicon.ico', array() , 1, 'all');
    wp_enqueue_style('icon');

    wp_register_style('styles', get_template_directory_uri() . '/css/styles.css', array() , 1, 'all' );
    wp_enqueue_style('styles');
}
add_action('wp_enqueue_scripts', 'load_style');

function load_script() {


    wp_register_script('custom', get_template_directory_uri(). '/js/scripts.js', array(), 1, 1, 1);
    wp_enqueue_script('custom');

    wp_register_script('custom', get_template_directory_uri(). '/js/scripts.js', array(), 1, 1, 1);
    wp_enqueue_script('custom');


}
add_action('wp_enqueue_scripts', 'load_script');

if ( ! function_exists( 'wp_body_open' )) {
    function wp_body_open() {
        do_action( 'wp_body_open');
    }
}


/// blog not display
