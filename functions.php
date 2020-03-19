<?php

function css_style_sheet(){
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','css_style_sheet');

?>