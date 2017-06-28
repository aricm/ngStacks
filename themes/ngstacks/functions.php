<?php

/**
 * Enqueue scripts and styles.
 */
function ngstacks_scripts() {
    // wp_enqueue_style( 'font-awesome', get_bloginfo('template_url') . '/css/font-awesome.min.css' );
    // wp_enqueue_style( 'google-roboto', 'https://fonts.googleapis.com/css?family=Roboto' );
    // wp_enqueue_style( 'google-marck_script', 'https://fonts.googleapis.com/css?family=Marck+Script' );
    wp_enqueue_style( 'bootstrap', get_bloginfo('template_url') . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'ngstack-style', get_stylesheet_uri() );

    wp_enqueue_script( 'tether', get_template_directory_uri() . '/js/tether.min.js', array(), false, true );
    wp_enqueue_script( 'boostrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true );
    // wp_enqueue_script( 'ngstack-menu', get_template_directory_uri() . '/js/responseamenu.js', array(), false, true );

    // wp_enqueue_script( 'ngstack-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    // if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    //  wp_enqueue_script( 'comment-reply' );
    // }
}
add_action( 'wp_enqueue_scripts', 'ngstacks_scripts' );
