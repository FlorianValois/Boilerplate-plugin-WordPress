<?php

if (!defined('ABSPATH')) {
	exit;
}

add_action('admin_menu','test_plugin_setup_menu');
function test_plugin_setup_menu(){ 
  /* Call of first page */
  add_menu_page(
    'Boilerplate plugin', 
    'Boilerplate plugin', 
    'manage_options', 
    'boilerplate-plugin-wordpress', 
    'options_page', 
    plugins_url('assets/images/favicon-min.png', __FILE__), 
    99 
  );
  
  /* Call of first page -subpage */
  add_submenu_page(
    'boilerplate-plugin-wordpress',
    'My Custom Page', 
    'My Custom Page', 
    'manage_options', 
    'boilerplate-plugin-wordpress'
  );
  
  /* Call of second page - subpage */
  add_submenu_page( 
    'boilerplate-plugin-wordpress', 
    'My Custom Page', 
    'My Custom Page', 
    'manage_options', 
    'tabs-bpw', 
    'tabs_page'
  );
  
}

?>