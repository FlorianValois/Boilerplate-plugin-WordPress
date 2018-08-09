<?php
/*
Plugin Name: Boilerplate plugin
Plugin URI: https://github.com/FlorianValois/boilerplate-plugin-wordpress/
Description:  A boilerplate plugin for WordPress with many options 
Version: 0.2.1
Author: Florian Valois
Author URI: https://florian-valois.com
Text Domain: boilerplate-plugin-wordpress
Domain Path: /languages
GitHub Plugin URI: https://github.com/FlorianValois/boilerplate-plugin-wordpress/
*/

require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/FlorianValois/boilerplate-plugin-wordpress/',
	__FILE__,
	'boilerplate-plugin-wordpress'
);
$myUpdateChecker->getVcsApi()->enableReleaseAssets();
$myUpdateChecker->setBranch('master');

add_action('admin_menu','test_plugin_setup_menu');
function test_plugin_setup_menu(){
  $pluginDirectory = plugins_url() .'/'. basename(dirname(__FILE__));
  add_menu_page('Boilerplate plugin', 'Boilerplate plugin', 'manage_options', 'boilerplate-plugin-wordpress', 'init_AjaxSubmit', $pluginDirectory.'/favicon.png', 99 );
  add_submenu_page( 'boilerplate-plugin-wordpress', 'My Custom Page', 'My Custom Page', 'manage_options', 'boilerplate-plugin-wordpress');
  add_submenu_page( 'boilerplate-plugin-wordpress', 'My Custom Page', 'My Custom Page', 'manage_options', 'boilerplate-plugin-wordpress-2', 'init_page2');
}

add_action( 'admin_init', 'import_style_script' );
function import_style_script() {
  $pluginDirectory = plugins_url() .'/'. basename(dirname(__FILE__));
  
  /* Sweet Alert 2 */
  wp_enqueue_script( 'sweetalert2-script', $pluginDirectory.'/bower_components/sweetalert2/dist/sweetalert2.min.js', false, '', true);
  wp_enqueue_style( 'sweetalert2-css', $pluginDirectory.'/bower_components/sweetalert2/dist/sweetalert2.min.css' );
  
  /* Color Picker WordPress*/
  wp_enqueue_style('wp-color-picker');
  wp_enqueue_script( 'wp-color-picker-alpha', $pluginDirectory.'/js/wp-color-picker-alpha.js', array( 'wp-color-picker' ), '1.2.2', $in_footer );
  
  wp_enqueue_media();
  
  /* Script en Ajax */
  wp_enqueue_script( 'ajax-script', $pluginDirectory.'/script.min.js', array('wp-color-picker'), false, '', true);
  wp_localize_script( 'ajax-script', 'youruniquejs_vars', 
      array(
          'ajaxurl' => admin_url( 'admin-ajax.php' ),
      ) 
  ); 
  
  wp_enqueue_style( 'boilerplate-plugin-css', $pluginDirectory.'/style.min.css' );
}


function init_AjaxSubmit(){
  $pluginDirectory = plugin_dir_path( __FILE__ );
  include($pluginDirectory.'home.php');
}

function init_page2(){
  $pluginDirectory = plugin_dir_path( __FILE__ );
  include($pluginDirectory.'page2.php');
}

add_action( 'wp_ajax_' . 'wpa_49691', 'ajax_form_update_options' );
add_action( 'wp_ajax_nopriv_' . 'wpa_49691', 'ajax_form_update_options' );
function ajax_form_update_options(){
  
  // Récupération des données du form
  $params = array();
    
  // Mise en place des datas dans le tableau
  parse_str($_POST['data'], $params);
  
  // Sauvegarde des données
  $option_name = 'boilerplate_plugin' ;
      
  if($_POST['data']){
    echo json_encode(array(
      'update' => update_option( $option_name, $params )
    ));
  }
  else{
    echo json_encode(array(
      'delete' => delete_option( $option_name )
    ));
  }
  
  die(); 

}