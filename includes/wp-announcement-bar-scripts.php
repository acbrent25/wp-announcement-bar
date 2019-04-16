<?php

// Add Scripts

function wpab_add_scripts(){
    wp_enqueue_style('wpab-main-style', plugins_url() . '/wp-announcement-bar/css/style.css');
    wp_enqueue_script('wpab-main-script', plugins_url() . '/wp-announcement-bar/js/main.js');
}

add_action('wp_enqueue_scripts', 'wpab_add_scripts');