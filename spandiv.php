<?php

/*
Plugin Name: Spandiv
Plugin URI: https://spandiv.xyz/
Description: Custom WordPress Features.
Version: 1.4.7
Author: Spandiv
Author URI: https://spandiv.xyz/
License: GPL2
*/


// Require class Spandiv_Plugin
require_once('includes/Spandiv_Plugin.php');

// Create table on register activation hook
register_activation_hook(__FILE__, array('Spandiv_Plugin', 'create_table'));

// Add action
add_action('admin_menu', array('Spandiv_Plugin', 'add_admin_page'));

// Add shortcode
add_shortcode('s_get', array('Spandiv_Plugin', 'get_value_for_shortcode'));

// Functions
require_once('functions/notice.php');
require_once('functions/enqueue.php');

// Plugin update checker
require 'plugin-update/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
  'https://github.com/praseetyaa/spandiv-press', // GitHub repo
  __FILE__, // Full path to the main plugin file or functions.php
  'spandiv' // Plugin slug
);

// Set the branch that contains the stable release
$myUpdateChecker->setBranch('main');

?>
