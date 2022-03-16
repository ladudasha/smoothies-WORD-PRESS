<?php

define('THEME_ROOT', get_template_directory_uri());
define('CSS_DIR', THEME_ROOT . '/assets/css');
define('JS_DIR', THEME_ROOT . '/assets/js');
define('IMG_DIR', THEME_ROOT . '/assets/images');


add_action( 'wp_enqueue_scripts', 'smoothies_styles' );
add_action( 'wp_enqueue_scripts', 'smoothies_scripts' );
add_action( 'after_setup_theme', 'smoothies_register_nav_menu' );

function smoothies_styles() {
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}

function smoothies_scripts() {
    wp_enqueue_script( 'main-script', JS_DIR . '/script.js', array('jquery'), 'null', true);
}



function smoothies_register_nav_menu() {
	register_nav_menu( 'top_menu', 'меню в шапке' );
}