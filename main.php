<?php
/*
Plugin Name: Spandiv
Plugin URI: https://spandiv.xyz/
Description: Custom Wordpress Features.
Version: 1.4.5
Author: Spandiv
Author URI: https://spandiv.xyz/
License: GPL2
*/
register_activation_hook( __FILE__, 'crudOperationsTable');
function crudOperationsTable() {
  global $wpdb;
  $charset_collate = $wpdb->get_charset_collate();
  $table_settings = $wpdb->prefix . 'spandiv';

  $sql_1 = "CREATE TABLE `$table_settings` (
  `settings_id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(220) DEFAULT NULL,
  `telephone` varchar(220) DEFAULT NULL,
  `message` varchar(220) DEFAULT NULL,
  `email` varchar(220) DEFAULT NULL,
  `facebook` varchar(220) DEFAULT NULL,
  `twitter` varchar(220) DEFAULT NULL,
  `instagram` varchar(220) DEFAULT NULL,
  `youtube` varchar(220) DEFAULT NULL,
  `about` varchar(320) DEFAULT NULL,
  `maps` varchar(220) DEFAULT NULL,
  PRIMARY KEY(settings_id)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_settings'") != $table_settings) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql_1);
  }
}

add_action('admin_menu', 'addAdminPageContent');

function addAdminPageContent() {
  add_menu_page('Spandiv', 'Spandiv', 'manage_options' ,__FILE__, 'crudAdminPage', plugins_url( 'spandiv/assets/icon.png' ) );
}

function spandiv_enqueue_scripts() {
	wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
	wp_enqueue_style('spandiv_css', plugin_dir_url(__FILE__).'/assets/app.css');
	wp_enqueue_script('spandiv_js', 'https://web.spandiv.xyz/wp-content/themes/spandiv/assets/js/control.js');
}
add_action('admin_enqueue_scripts', 'spandiv_enqueue_scripts');

include('functions/crud.php');

include('functions/shortcode.php');

require 'plugin-update/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
  'https://github.com/praseetyaa/spandiv-press',
  __FILE__, //Full path to the main plugin file or functions.php.
  'spandiv'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');

?>
