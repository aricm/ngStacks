<?php

if ( ! function_exists( 'ngstacksu_setup' ) ) :

    function ngstacks_setup() {
        /**
         * Enable theme support features
         *
         * @link https://developer.wordpress.org/reference/functions/add_theme_support/
         */
        add_theme_support( 'title-tag' );

        // add_theme_support( 'custom-header' );

        add_theme_support( 'post-thumbnails' );

        // add_theme_support( 'custom-background' );

        // add_theme_support( 'post-formats', array(
        //  'aside', 'image', 'video', 'quote', 'link', 'gallery',
        // ) );

        /**
         * Register navigation menus
         *
         * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
         */
        register_nav_menus( array( 'primary' => 'primary menu' ) );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

    } // end setup function
endif;
add_action( 'after_setup_theme', 'ngstacks_setup' );

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

/**
 * SHORTCODES
 */

//Remove empty paragraphs
function stripParagraphs($content){
    if ( '</p>' == substr( $content, 0, 4 ) && '<p>' == substr( $content, strlen( $content ) - 3 ) ){
        $content = substr( $content, 4, strlen( $content ) - 7 );
    }
    return $content;
}

// Container
function container($atts,$content){
    extract( shortcode_atts( array(
        'class'      => '',
        'innerclass' => ''
    ), $atts ) );

    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';
    $return .= '<div class="' .  $class . '">';
    $return .= '<div class="' .  $innerclass . '">';
    $return .= force_balance_tags($content);
    $return .= '</div></div>';
    return $return;
}
add_shortcode('container','container');
