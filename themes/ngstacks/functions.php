<?php

/**
 * Enqueue scripts and styles.
 */
function ngstacks_scripts() {
    wp_enqueue_style( 'bootstrap', get_bloginfo('template_url') . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'fontawsome', get_bloginfo('template_url') . '/css/font-awesome.min.css' );
    wp_enqueue_style( 'ngstack-style', get_stylesheet_uri() );

    wp_enqueue_script( 'tether', get_template_directory_uri() . '/js/tether.min.js', array(), false, true );
    wp_enqueue_script( 'boostrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true );

}
add_action( 'wp_enqueue_scripts', 'ngstacks_scripts' );
