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

    // Init Announcement Bar
    add_announcemnt_bar();
    function add_announcemnt_bar(){
        
        // Announcemnt bar div
        var wpab_bar = $("<div />", {
            'id' : 'wpab-topbar',
            'css' : {
                'background-color': bg_color,
                'color': txt_color,
            },
            'text': txt,
        }).prependTo('body');

        var wpab_btn = $("<a />", {
            'text': btn_txt,
            'css' : {
                'background-color': btn_color,
                'color': btn_txt_color,
            },
            'href': btn_link,
        }).appendTo(wpab_bar);



    }

    
   


});