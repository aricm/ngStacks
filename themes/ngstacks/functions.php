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
	wp_enqueue_style( 'opensans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i"' );
    wp_enqueue_style( 'bootstrap', get_bloginfo('template_url') . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'fontawsome', get_bloginfo('template_url') . '/css/font-awesome.min.css' );
    wp_enqueue_style( 'ngstack-style', get_stylesheet_uri() );

    wp_enqueue_script( 'tether', get_template_directory_uri() . '/js/tether.min.js', array(), false, true );
    wp_enqueue_script( 'boostrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true );

}
add_action( 'wp_enqueue_scripts', 'ngstacks_scripts' );


/********/

// remove <br> tags from text widget content, from 4.8 version WP adds these tags
remove_filter('widget_text_content', 'wpautop');

// Enable the use of shortcodes within widgets.
add_filter( 'widget_text', 'do_shortcode' );



/**
 * Register widgetized areas.
 *
 */
function ngstacks_widget_init() {

    register_sidebar( array(
        'name'          => 'Page Sidebar',
        'id'            => 'page_sidebar_1',
        'before_widget' => '<div class="sb-widget-area">',
        'after_widget'  => '</div>'
    ) );

}
add_action( 'widgets_init', 'ngstacks_widget_init' );



/**
 * SHORTCODES
 *
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

// Bootstrap's responsive video
function responsive_video_shortcode($atts){
    extract( shortcode_atts( array(
        'ratio'   => '16by9',
        'url'   => '',
        'class' => ''
    ), $atts ) );

    $url = str_ireplace(array('http://','https://'), '', $url);

    $return = '';
    $return .= '<div class="embed-responsive embed-responsive-' . $ratio . ' ' . $class .'">';
    $return .= '<iframe class="embed-responsive-item" src="//' . $url . '" allowfullscreen="allowfullscreen"></iframe>';
    $return .= '</div>';
    return $return;
}
add_shortcode('responsive_video','responsive_video_shortcode');


// Card item/links on the front page
function homeCard($atts,$content){
    extract( shortcode_atts( array(
        'text' => 'na',
        'link' => '#',
        'icon' => ''
    ), $atts ) );

    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $r  = '';

    $r  .= '<a href="' . $link . '" class="card-item-container">';
        $r .= '<span class="card-item-icon">';
            $r .= '<img src="' . get_bloginfo('template_url') . '/img/' . $icon . '.png">';
        $r .= '</span>';
        $r .= '<span class="card-item-label">' . $content . '</span>';
    $r .= '</a>';

    return $r;
}
add_shortcode('carditem','homeCard');

// Needed for use in text widget
function ngstacks_template_directory_uri() {
    return get_template_directory_uri();
}
add_shortcode( 'template_directory', 'ngstacks_template_directory_uri' );

function ngstacks_blog_url() {
    return get_bloginfo('url');
}
add_shortcode( 'site_url', 'ngstacks_blog_url' );

