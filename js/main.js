jQuery(document).ready(function($){
    console.log('wp-announcement-bar plugin js loaded');

    var bgcolor = wpab_settings.background_color;
    var text = wpab_settings.text;

    console.log('background color: ' + bgcolor);
    console.log('text: ' + text);

    $('<div class="wpab-topbar"></div><div id="wpab-topbar" style="background-color:#000; top: 0; left: 0; position: absolute; width: 100%; text-align: center; color: #fff;" >'+ text +'</div>').prependTo('body');


});