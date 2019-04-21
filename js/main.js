jQuery(document).ready(function($){
    console.log('wp-announcement-bar plugin js loaded');
    
    // Get Options
    // Text Options
    var bg_color = wpab_settings.bg_color;
    var txt = wpab_settings.txt;
    var txt_color = wpab_settings.txt_color;
    // Button Options
    var btn = wpab_settings.btn;
    var btn_color = wpab_settings.btn_color;
    var btn_txt = wpab_settings.btn_txt ;
    var btn_txt_color = wpab_settings.btn_txt_color;
    var btn_link = wpab_settings.btn_link;

    $('<div class="wpab-topbar"></div><div id="wpab-topbar" style="background-color:'+ bgColor +'; color:'+ fontColor +'; top: 0; left: 0; position: absolute; width: 100%; text-align: center; color: #fff;" >'+ text +'</div>').prependTo('body');

   


});