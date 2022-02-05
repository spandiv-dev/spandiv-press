<?php

function get_data_setting() {
  global $wpdb;
  $charset_collate = $wpdb->get_charset_collate();
  $table_settings = $wpdb->prefix . 'spandiv';
  $result = $wpdb->get_results("SELECT * FROM $table_settings");

  return $result;
}

function address($atts) {
  $get = get_data_setting();
  foreach($get as $row) {

    echo "$row->address";
    
  }
}

function phone($atts) {
  $get = get_data_setting();
  foreach($get as $row) {

    echo "$row->telephone";
    
  }
}

function message($atts) {
  $get = get_data_setting();
  foreach($get as $row) {

    echo "$row->message";
    
  }
}

function email($atts) {
  $get = get_data_setting();
  foreach($get as $row) {

    echo "$row->email";
    
  }
}

function facebook($atts) {
  $get = get_data_setting();
  foreach($get as $row) {

    echo "$row->facebook";
    
  }
}

function twitter($atts) {
  $get = get_data_setting();
  foreach($get as $row) {

    echo "$row->twitter";
    
  }
}

function instagram($atts) {
  $get = get_data_setting();
  foreach($get as $row) {

    echo "$row->instagram";
    
  }
}

function youtube($atts) {
  $get = get_data_setting();
  foreach($get as $row) {

    echo "$row->youtube";
    
  }
}

function about($atts) {
  $get = get_data_setting();
  foreach($get as $row) {

    echo "$row->about";
    
  }
}

function maps($atts) {
  $get = get_data_setting();
  foreach($get as $row) {

    echo "$row->maps";
    
  }
}

add_shortcode('a_address', 'address');
add_shortcode('a_phone', 'phone');
add_shortcode('a_message', 'message');
add_shortcode('a_email', 'email');
add_shortcode('a_facebook', 'facebook');
add_shortcode('a_twitter', 'twitter');
add_shortcode('a_instagram', 'instagram');
add_shortcode('a_youtube', 'youtube');
add_shortcode('a_about', 'about');
add_shortcode('a_maps', 'maps');

?>