<?php

// Add Scripts

function wpab_add_scripts(){
    global $wpab_options;

    wp_enqueue_style('wpab-main-style', plugins_url() . '/wp-announcement-bar/css/style.css');

    // if announcemnt bar is enabled
    if(isset($wpab_options['enable'])){
        // Enqueue Script
        wp_enqueue_script('wpab-main-script', plugins_url() . '/wp-announcement-bar/js/main.js');

        // Get options for JS
        $wpab_announcement_text = $wpab_options['announcement_text'];
        $wpab_background_color  = $wpab_options['background_color'];
        $wpab_font_color  = $wpab_options['font_color'];

        $wpab_settings = array(
            'text'              => $wpab_announcement_text,
            'background_color'  => $wpab_background_color,
            'font_color'  => $wpab_font_color,
        );

        // sending the options to the js file
        wp_localize_script( 'wpab-main-script', 'wpab_settings', $wpab_settings );
    }   

}

add_action('wp_enqueue_scripts', 'wpab_add_scripts');