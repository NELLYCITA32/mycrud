<?php
/**
* Plugin Name: MYCRUD
* Plugin URI: https://loginweb.dev/MYCRUD/
* Description: Funciones basicas acciones para interactuar en la base de datos.
* Version: 1.0
* Author: Ing. Nelly Vallejo Muiba
* Author URI: https://loginweb.dev/profile
**/


// menu TPV items --------------------------------------------------------------------
add_action('admin_menu','mc_add_menu');
function mc_add_menu() {
	
	//MENU TPV
	add_menu_page('READ', //page title
        'READ', //menu title
        'manage_options', //capabilitiesw
        'read', //menu slug
        'mc_read', //function
        'dashicons-align-full-width'
	);



}
// Cargando views php -----------------------------------------------------
define('ROOTDIR', plugin_dir_path(__FILE__));
require_once(ROOTDIR . 'views/read.php');
?>

