<?php
/*
Plugin Name: Plugin_test
Plugin URI: http://localhost
Description: Un plugin qui s'execute au chargement d'une page
Version: 1.0
Author: Lionel Ensfelder
Author URI: http://localhost
License: MIT
*/


// add_action( 'init', 'add_modal' );
 
// // 
// function add_modal() {
//     echo '<script type="text/javascript">',
//     '$(\'#myModal\').modal(\'show\');',
//     '</script>';
// }

// add menu link in administration page
add_action( 'admin_menu', 'add_links_menu' );

function add_links_menu() {
    add_menu_page('Plugin_test', 'Plugin_test', 'administrator', 'plugin_test/admin_page.php', '', 'images/marker.png', 50);
}




?>