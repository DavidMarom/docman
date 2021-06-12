<?php

function theme_files(){
	wp_enqueue_style('main_css', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','theme_files');


// This adds the post name to the html title
function theme_features(){
	add_theme_support('title-tag');
}

add_action('after_setup_theme', 'theme_features');