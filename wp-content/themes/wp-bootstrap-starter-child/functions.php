<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

/* Add fontawesome css */
function wpb_load_fa() {
 
    wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/fonts/css/font-awesome.min.css' );
     
}
     
add_action( 'wp_enqueue_scripts', 'fontawesome' );
