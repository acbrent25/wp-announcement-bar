jQuery(document).ready(function($){
    console.log('wp-announcement-bar plugin js loaded');

    var bgColor = wpab_settings.background_color;
    var text = wpab_settings.text;
    var fontColor = wpab_settings.font_color;

    console.log('background color: ' + bgColor);
    console.log('text: ' + text);

    $('<div class="wpab-topbar"></div><div id="wpab-topbar" style="background-color:'+ bgColor +'; color:'+ fontColor +'; top: 0; left: 0; position: absolute; width: 100%; text-align: center; color: #fff;" >'+ text +'</div>').prependTo('body');


});