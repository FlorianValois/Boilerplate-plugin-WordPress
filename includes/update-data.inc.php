<?php

if (!defined('ABSPATH')) {
	exit;
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

?>