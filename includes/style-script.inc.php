<?php

if (!defined('ABSPATH')) {
	exit;
}

add_action( 'admin_init', 'import_style_script' );
function import_style_script() {
  
  /* Google Font */
  wp_enqueue_style(
    'opensans-css',
    'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i' 
  );
  
//  wp_enqueue_style( 'jqueri-ui-css', plugins_url('/bower_components/jquery-ui/themes/base/jquery-ui.min.css', dirname(__FILE__)) );
  wp_enqueue_script(
    'jqueri-ui-script',
    plugins_url('bower_components/jquery-ui/jquery-ui.min.js', dirname(__FILE__)), false, '', true
  );
  
  /* Sweet Alert 2 */
  wp_enqueue_script(
    'sweetalert2-script', 
    plugins_url('bower_components/sweetalert2/dist/sweetalert2.min.js', dirname(__FILE__)), false, '', true
  );
  wp_enqueue_style( 
    'sweetalert2-css', 
    plugins_url('bower_components/sweetalert2/dist/sweetalert2.min.css', dirname(__FILE__)) 
  );
  
  /* FontAwesome */
  wp_enqueue_style(
    'fontawesome-css',
    plugins_url('/bower_components/font-awesome/web-fonts-with-css/css/fontawesome-all.min.css', dirname(__FILE__))
  );
  wp_enqueue_script(
    'fontawesome-script',
    plugins_url('bower_components/font-awesome/svg-with-js/js/fontawesome-all.js', dirname(__FILE__)), false, '', true
  );
  
  /* Color Picker WordPress*/
  wp_enqueue_style('wp-color-picker');
  wp_enqueue_script(
    'wp-color-picker-alpha',
    plugins_url('assets/js/library/wp-color-picker-alpha.js', dirname(__FILE__)), array( 'wp-color-picker' ), '1.2.2', $in_footer
  );
  
  /* Fonction uplaod image WordPress */
  wp_enqueue_media();
  
  /* Script en Ajax */
  wp_enqueue_script(
    'ajax-script', 
    plugins_url('script.min.js', dirname(__FILE__)), array('wp-color-picker'), false, '', true
  );
  wp_localize_script(
    'ajax-script',
    'youruniquejs_vars', 
      array(
          'ajaxurl' => admin_url( 'admin-ajax.php' ),
      ) 
  ); 
  
  /* CSS plugin */
  wp_enqueue_style( 
    'boilerplate-plugin-css', 
    plugins_url('style.min.css', dirname(__FILE__))
  );
}

?>