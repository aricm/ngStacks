<?php

//Remove p tags
function remove_p($content) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	if ( '</p>' == substr( $content, 0, 4 )and '<p>' == substr( $content, strlen( $content ) - 3 ) )
		$content = substr( $content, 4, strlen( $content ) - 7 );
	return $content;
}

// Flex Box
function flex_container($atts, $content = null) {
	    extract(shortcode_atts(array(
	        'class' => '',
	        'id' => '',
	    ), $atts));
	$content = remove_p($content);
	return '<div id="'. $id .'" class="flex-container '. $class .'">'.do_shortcode($content).'</div>';
}
add_shortcode ("flex_container", "flex_container");


// 1/12 COLUMN
function col_1($atts, $content = null) {
	extract(shortcode_atts(array(
			'class' => '',
			'id' => '',
	), $atts));
	$content = remove_p($content);
	return '<div id="'. $id .'" class="col-1 '. $class .'">'.do_shortcode($content).'</div>';
}
add_shortcode ("col_1", "col_1");

/// 2/12 COLUMN
function col_2($atts, $content = null) {
	extract(shortcode_atts(array(
			'class' => '',
			'id' => '',
	), $atts));
	$content = remove_p($content);
	return '<div id="'. $id .'" class="col-2 '. $class .'">'.do_shortcode($content).'</div>';
}
add_shortcode ("col_2", "col_2");

function col_3($atts, $content = null) {
	extract(shortcode_atts(array(
			'class' => '',
			'id' => '',
	), $atts));
	$content = remove_p($content);
	return '<div id="'. $id .'" class="col-3 '. $class .'">'.do_shortcode($content).'</div>';
}
add_shortcode ("col_3", "col_3");


function col_4($atts, $content = null) {
	extract(shortcode_atts(array(
			'class' => '',
			'id' => '',
	), $atts));
	$content = remove_p($content);
	return '<div id="'. $id .'" class="col-4 '. $class .'">'.do_shortcode($content).'</div>';
}
add_shortcode ("col_4", "col_4");


function col_5($atts, $content = null) {
	extract(shortcode_atts(array(
			'class' => '',
			'id' => '',
	), $atts));
	$content = remove_p($content);
	return '<div id="'. $id .'" class="col-5 '. $class .'">'.do_shortcode($content).'</div>';
}
add_shortcode ("col_5", "col_5");


function col_6($atts, $content = null) {
	extract(shortcode_atts(array(
			'class' => '',
			'id' => '',
	), $atts));
	$content = remove_p($content);
	return '<div id="'. $id .'" class="col-6 '. $class .'">'.do_shortcode($content).'</div>';
}
add_shortcode ("col_6", "col_6");


function col_7($atts, $content = null) {
	extract(shortcode_atts(array(
			'class' => '',
			'id' => '',
	), $atts));
	$content = remove_p($content);
	return '<div id="'. $id .'" class="col-7 '. $class .'">'.do_shortcode($content).'</div>';
}
add_shortcode ("col_7", "col_7");


function col_8($atts, $content = null) {
	extract(shortcode_atts(array(
			'class' => '',
			'id' => '',
	), $atts));
	$content = remove_p($content);
	return '<div id="'. $id .'" class="col-8 '. $class .'">'.do_shortcode($content).'</div>';
}
add_shortcode ("col_8", "col_8");


function col_9($atts, $content = null) {
	extract(shortcode_atts(array(
			'class' => '',
			'id' => '',
	), $atts));
	$content = remove_p($content);
	return '<div id="'. $id .'" class="col-9 '. $class .'">'.do_shortcode($content).'</div>';
}
add_shortcode ("col_9", "col_9");

function col_10($atts, $content = null) {
	extract(shortcode_atts(array(
			'class' => '',
			'id' => '',
	), $atts));
	$content = remove_p($content);
	return '<div id="'. $id .'" class="col-10 '. $class .'">'.do_shortcode($content).'</div>';
}
add_shortcode ("col_10", "col_10");

function col_11($atts, $content = null) {
	extract(shortcode_atts(array(
			'class' => '',
			'id' => '',
	), $atts));
	$content = remove_p($content);
	return '<div id="'. $id .'" class="col-11 '. $class .'">'.do_shortcode($content).'</div>';
}
add_shortcode ("col_11", "col_11");

function col_12($atts, $content = null) {
	extract(shortcode_atts(array(
			'class' => '',
			'id' => '',
	), $atts));
	$content = remove_p($content);
	return '<div id="'. $id .'" class="col-12 '. $class .'">'.do_shortcode($content).'</div>';
}
add_shortcode ("col_12", "col_12");
