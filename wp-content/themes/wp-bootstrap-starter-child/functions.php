<?php
/**
** activation theme
**/

/* ===CHILD CSS STYLE=== */

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

/* ===FONT AWESOME (MIN.CSS)=== */

function wpb_load_fa() {
    wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/fonts/css/font-awesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'fontawesome' );

/* === CHANGE NAVBAR STYLE WHEN SCROLL=== */
add_action ('wp_enqueue_scripts', 'navbar_scroll');
function navbar_scroll() {
    wp_register_script ('navbar', get_stylesheet_directory_uri() . '/js/navbar.js');
    wp_enqueue_script ('navbar');
}

/* === === */
function testimonial(){
    wp_register_script('testimonial_active', get_stylesheet_directory_uri() . '/js/testimonial.js');
    wp_enqueue_script ('testimonial_active');
}
add_action ('wp_enqueue_scripts', 'testimonial');