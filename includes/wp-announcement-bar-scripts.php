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
        // Text Options
        $wpab_announcement_txt = $wpab_options['announcement_txt'];
        $wpab_bg_color  = $wpab_options['bg_color'];
        $wpab_txt_color  = $wpab_options['txt_color'];
        // Button Options
        $wpab_btn  = $wpab_options['btn'];
        $wpab_btn_color  = $wpab_options['btn_color'];
        $wpab_btn_txt  = $wpab_options['btn_txt'];
        $wpab_btn_txt_color  = $wpab_options['btn_txt_color'];
        $wpab_btn_link  = $wpab_options['btn_link'];

        $wpab_settings = array(
            // Text Options
            'txt'               => $wpab_announcement_txt,
            'bg_color'          => $wpab_bg_color,
            'txt_color'         => $wpab_txt_color,
            // Button Options
            'btn'               => $wpab_btn,
            'btn_color'         => $wpab_btn_color,
            'btn_txt'           => $wpab_btn_txt,
            'btn_txt_color'     => $wpab_btn_txt_color,
            'btn_link'          => $wpab_btn_link,
        );

        // sending the options to the js file
        wp_localize_script( 'wpab-main-script', 'wpab_settings', $wpab_settings );
    }   

}

add_action('wp_enqueue_scripts', 'wpab_add_scripts');