<?php
/*
Plugin Name: Boilerplate plugin
Plugin URI: https://github.com/FlorianValois/boilerplate-plugin-wordpress/
Description:  A boilerplate plugin for WordPress with many options 
Version: 0.2.3
Author: Florian Valois
Author URI: https://florian-valois.com
Text Domain: boilerplate-plugin-wordpress
Domain Path: /languages
GitHub Plugin URI: https://github.com/FlorianValois/boilerplate-plugin-wordpress/
*/

if (!defined('ABSPATH')) {
	exit;
}

define( 'BPW_PLUGIN', __FILE__ );
define( 'BPW_PLUGIN_BASENAME', plugin_basename( BPW_PLUGIN ) );
define( 'BPW_PLUGIN_NAME', trim( dirname( BPW_PLUGIN_BASENAME ), '/' ) );
define( 'BPW_PLUGIN_DIR', untrailingslashit( dirname( BPW_PLUGIN ) ) );

/* Github update master */
require_once BPW_PLUGIN_DIR . '/plugin-update-checker/plugin-update-checker.php';
require_once BPW_PLUGIN_DIR . '/includes/github.inc.php';

/* Init plugin */
require_once BPW_PLUGIN_DIR . '/settings.php';

/* Appel des fichiers style et scripts */
require_once BPW_PLUGIN_DIR . '/includes/style-script.inc.php';

/* Update data in database */
require_once BPW_PLUGIN_DIR . '/includes/update-data.inc.php';

/* Pages */
require_once BPW_PLUGIN_DIR . '/pages/options.php';
require_once BPW_PLUGIN_DIR . '/pages/tabs.php';
require_once BPW_PLUGIN_DIR . '/pages/styles.php';
require_once BPW_PLUGIN_DIR . '/pages/scroll-to-top.php';



add_action('wp_footer', 'your_function_name');
function your_function_name(){
?>
<div id="scrollTop" style="font-family: Font Awesome 5 Free;"><i class="fas fa-caret-up"></i></div>
<?php
};


add_action( 'init', 'run_this_code');
function run_this_code() {
  ob_start();
    $data = get_option('boilerplate_plugin');
    include(BPW_PLUGIN_DIR.'/assets/style.php');
    $content = ob_get_contents();
  ob_end_clean();
  $f = fopen(BPW_PLUGIN_DIR.'/assets/style-php.css', 'w');
  fwrite($f, $content);
  fclose($f);
}