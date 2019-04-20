<?php 
/*
Plugin Name: WP Announcement Bar 
Description: Simple customizable announcement bar for top of site
Version: 1.0
Author: Adam Champagne
Auther URI: https://adamchampagne.com/
*/

// Exit if Accessed Directly
if(!defined('ABSPATH')){
    exit;
}

// Global Options Variable
$wpab_options = get_option('wpab_settings');

// Load Scripts
require_once(plugin_dir_path(__FILE__) . '/includes/wp-announcement-bar-scripts.php');

 // Load Content
 require_once(plugin_dir_path(__FILE__) . '/includes/wp-announcement-bar-content.php');


// Load Settings
if(is_admin()){
    require_once(plugin_dir_path(__FILE__) . '/includes/wp-announcement-bar-settings.php');
}

