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
  
  /* Call of "Options" page -subpage */
  add_submenu_page(
    'boilerplate-plugin-wordpress',
    'Options', 
    'Options', 
    'manage_options', 
    'boilerplate-plugin-wordpress'
  );
  
  /* Call of "Tabs" page - subpage */
  add_submenu_page( 
    'boilerplate-plugin-wordpress', 
    'Tabs', 
    'Tabs', 
    'manage_options', 
    'tabs-bpw', 
    'tabs_page'
  );
  /* Call of "Styles" page - subpage */
  add_submenu_page( 
    'boilerplate-plugin-wordpress', 
    'Style', 
    'Style', 
    'manage_options', 
    'styles-bpw', 
    'styles_page'
  );
  
}

?>