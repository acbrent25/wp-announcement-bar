<?php


// Create Options Page Content
function wpab_options_content(){

    // Init Options Global
    global $wpab_options;

    ob_start(); ?>
        <div class="wrap">
            <h2><?php _e('WP Announcement Bar Settings', 'wpab_domain'); ?></h2>
            <p><?php _e('Settings for the WP Announcement Bar Plugin', 'wpab_domain'); ?></p>
            
            <form method="post" action="options.php">
                <?php settings_fields('wpab_settings_group'); ?>
                <table class="form-table">
                    <tbody>
                        <!-- Enable -->
                        <tr>
                            <th scope="row">
                                <label for="wpab_settings[enable]"><?php _e('Enable', 'wpab_domain'); ?></label>
                            </th>
                            <td>
                                <input type="checkbox" name="wpab_settings[enable]" id="wpab_settings[enable]" value="1" <?php checked(isset($wpab_options['enable'])); ?>>
                            </td>
                        </tr>
                        <!-- Input -->
                        <tr>
                            <th scope="row">
                                <label for="wpab_settings[announcement_txt]"><?php _e('Announcement Bar Text', 'wpab_domain'); ?></label>
                            </th>
                            <td>
                                <input type="text" name="wpab_settings[announcement_txt]" id="wpab_settings[announcement_txt]" value="<?php echo $wpab_options['announcement_txt']; ?>" class="regular-text" placeholder="">
                                <p class="description"> <?php _e('Enter the Text for Announcement Bar', 'wpab_domain'); ?> </p>
                            </td>
                        </tr>
                        <!-- Background Color -->
                        <tr>
                            <th scope="row">
                                <label for="wpab_settings[bg_color]"><?php _e('Background Color', 'wpab_domain'); ?></label>
                            </th>
                            <td>
                                <input type="text" name="wpab_settings[bg_color]" id="wpab_settings[bg_color]" value="<?php echo $wpab_options['bg_color']; ?>" class="regular-text" placeholder="">
                                <p class="description"> <?php _e('Enter a Color or Hex Value #', 'wpab_domain'); ?> </p>
                            </td>
                        </tr>
                        <!-- Text Color -->
                        <tr>
                            <th scope="row">
                                <label for="wpab_settings[txt_color]"><?php _e('Text Color', 'wpab_domain'); ?></label>
                            </th>
                            <td>
                                <input type="text" name="wpab_settings[txt_color]" id="wpab_settings[txt_color]" value="<?php echo $wpab_options['txt_color']; ?>" class="regular-text" placeholder="">
                                <p class="description"> <?php _e('Enter a Color or Hex Value #', 'wpab_domain'); ?> </p>
                            </td>
                        </tr>

                        <!-- Button ? -->
                        <tr>
                            <th scope="row">
                                <label for="wpab_settings[btn]"><?php _e('Button', 'wpab_domain'); ?></label>
                            </th>
                            <td>
                                <input type="checkbox" name="wpab_settings[btn]" id="wpab_settings[btn]" value="1" <?php checked(isset($wpab_options['btn'])); ?>>
                                <p class="description"> <?php _e('Check box to include button', 'wpab_domain'); ?> </p>
                            </td>
                        </tr>

                        <!-- Button Color -->
                        <tr>
                            <th scope="row">
                                <label for="wpab_settings[btn_color]"><?php _e('Button Color', 'wpab_domain'); ?></label>
                            </th>
                            <td>
                                <input type="text" name="wpab_settings[btn_color]" id="wpab_settings[btn_color]" value="<?php echo isset($wpab_options['btn_color']) ? $wpab_options['btn_color'] : ''; ?>" class="regular-text" placeholder="">
                                <p class="description"> <?php _e('Enter a Color or Hex Value #', 'wpab_domain'); ?> </p>
                            </td>
                        </tr>

                        <!-- Button Text -->
                        <tr>
                            <th scope="row">
                                <label for="wpab_settings[btn_txt]"><?php _e('Button Text', 'wpab_domain'); ?></label>
                            </th>
                            <td>
                                <input type="text" name="wpab_settings[btn_txt]" id="wpab_settings[btn_txt]" value="<?php echo isset($wpab_options['btn_txt']) ? $wpab_options['btn_txt'] : ''; ?>" class="regular-text" placeholder="">
                                <p class="description"> <?php _e('Enter button text', 'wpab_domain'); ?> </p>
                            </td>
                        </tr>

                        <!-- Button Text Color -->
                        <tr>
                            <th scope="row">
                                <label for="wpab_settings[btn_txt_color]"><?php _e('Button Text Color', 'wpab_domain'); ?></label>
                            </th>
                            <td>
                            <input type="text" name="wpab_settings[btn_txt_color]" id="wpab_settings[btn_txt_color]" value="<?php echo isset($wpab_options['btn_txt_color']) ? $wpab_options['btn_txt_color'] : ''; ?>" class="regular-text" placeholder="">
                                <p class="description"> <?php _e('Enter a Color or Hex Value #', 'wpab_domain'); ?> </p>
                            </td>
                        </tr>

                        <!-- Button Link -->
                        <tr>
                            <th scope="row">
                                <label for="wpab_settings[btn_link]"><?php _e('Button Link', 'wpab_domain'); ?></label>
                            </th>
                            <td>
                            <input type="text" name="wpab_settings[btn_link]" id="wpab_settings[btn_link]" value="<?php echo isset($wpab_options['btn_link']) ? $wpab_options['btn_link'] : ''; ?>" class="regular-text" placeholder="https//mysite.com">
                                <p class="description"> <?php _e('Enter full link including http(s)', 'wpab_domain'); ?> </p>
                            </td>
                        </tr>

                        

                    </tbody>
                </table>
                <p class="submit"><input type="submit" names="submit" id="submit" class="button button-primary" value="<?php _e('Save Changes', 'wpab_domain'); ?>"></p>
            </form>

        </div>
    <?php
    echo ob_get_clean();
}



// create custom plugin settings menu
add_action('admin_menu', 'wpab_create_menu');

// Create menu Link in admin
function wpab_create_menu(){
    add_menu_page(
        'WP Announcement Bar Options',
        'Champagne Bar',
        'manage_options',
        'wpab-options',
        'wpab_options_content',
        'dashicons-palmtree'
    );
}


// Register Settings
function wpab_register_settings(){
    register_setting('wpab_settings_group', 'wpab_settings');
}

add_action('admin_init', 'wpab_register_settings');