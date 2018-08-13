<?php
  if (!defined('ABSPATH')) {
      exit;
  }

$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://github.com/FlorianValois/boilerplate-plugin-wordpress/',
    BPW_PLUGIN_DIR . '/boilerplate-plugin-wordpress.php',
    'boilerplate-plugin-wordpress'
);
$myUpdateChecker->getVcsApi()->enableReleaseAssets();
$myUpdateChecker->setBranch('master');

?>