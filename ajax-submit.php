<?php
/*
Plugin Name: Ajax submit
Plugin URI: https://florian-valois.com/
Description: A save page plugin
Author: Florian Valois
Author URI: https://florian-valois.com/
Text Domain: ajax-submit
Domain Path: /languages/
Version: 0.1
*/

add_action('admin_menu','test_plugin_setup_menu');
function test_plugin_setup_menu(){
  $pluginDirectory = plugins_url() .'/'. basename(dirname(__FILE__));
  add_menu_page('Boilerplate plugin', 'Boilerplate plugin', 'manage_options', 'ajax-submit', 'init_AjaxSubmit', $pluginDirectory.'/favicon.png', 99 );
//  add_menu_page('Ajax Submit', 'Ajax Submit', 'manage_options', 'ajax-submit', 'init_AjaxSubmit', '', 99 );
}

add_action( 'admin_init', 'stop_heartbeat', 1 );
function stop_heartbeat() {
  wp_deregister_script('heartbeat');
}

add_action( 'admin_init', 'import_style_script' );
function import_style_script() {
  $pluginDirectory = plugins_url() .'/'. basename(dirname(__FILE__));
  //wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.1.1/css/all.css' );
  
  /* Sweet Alert 2 */
  wp_enqueue_script( 'sweetalert2-script', $pluginDirectory.'/bower_components/sweetalert2/dist/sweetalert2.min.js', false, '', true);
  wp_enqueue_style( 'sweetalert2-css', $pluginDirectory.'/bower_components/sweetalert2/dist/sweetalert2.min.css' );
  
  /* Color Picker WordPress*/
  wp_enqueue_style('wp-color-picker');
  
  wp_enqueue_media();
  
  /* Script en Ajax */
  wp_enqueue_script( 'ajax-script', $pluginDirectory.'/script.min.js', array('wp-color-picker'), false, '', true);
  wp_localize_script( 'ajax-script', 'youruniquejs_vars', 
      array(
          'ajaxurl' => admin_url( 'admin-ajax.php' ),
      ) 
  ); 
  
  wp_enqueue_style( 'ajax-submit-css', $pluginDirectory.'/style.min.css' );
}


function init_AjaxSubmit(){
  $pluginDirectory = plugin_dir_path( __FILE__ );
  include($pluginDirectory.'home.php');
}

add_action( 'wp_ajax_' . 'wpa_49691', 'your_ajax_callback_function_name' );
add_action( 'wp_ajax_nopriv_' . 'wpa_49691', 'your_ajax_callback_function_name' );
function your_ajax_callback_function_name(){
  
  // Récupération des données du form
  $params = array();
    
  // Mise en place des datas dans le tableau
  parse_str($_POST['data'], $params);
  
  // Sauvegarde des données
  $option_name = 'myhack_extraction_length' ;
  //$new_value = json_encode( $params );  
  
  echo json_encode(array(
    'update' => update_option( $option_name, $params )
  ));
  
  die(); 

}