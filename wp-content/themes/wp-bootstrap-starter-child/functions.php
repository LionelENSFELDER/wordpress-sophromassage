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

/* === === */
// check script link about navbar js !!!
function navbar_scroll() {

wp_register_script ('navbar', get_stylesheet_directory_uri() . '/js/navbar.js');

wp_enqueue_script ('navbar');
}
 
add_action ('wp_enqueue_scripts', 'navbar_scroll');

/* === === */