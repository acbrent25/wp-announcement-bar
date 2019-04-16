<?php
// Create menu Link in admin
function wpab_options_menu_link(){
    add_options_page(
        'WP Announcement Bar Options',
        'WP Announcement Bar',
        'manage_options',
        'wpab-options',
        'wpab_options_content'
    );
}

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
                                <input type="checkbox" name="wpab_settings[enable]" id="wpab_settings[enable]" value="1" <?php checked('1', $wpab_options['enable']); ?> >
                            </td>
                        </tr>
                        <!-- Input -->
                        <tr>
                            <th scope="row">
                                <label for="wpab_settings[announcement_text]"><?php _e('Announcement Bar Text', 'wpab_domain'); ?></label>
                            </th>
                            <td>
                                <input type="text" name="wpab_settings[announcement_text]" id="wpab_settings[announcement_text]" value="<?php echo $wpab_options['announcement_text']; ?>" class="regular-text">
                                <p class="description"> <?php _e('Enter the Text for Announcement Bar', 'wpab_domain'); ?> </p>
                            </td>
                        </tr>
                        <!-- Background Color -->
                        <tr>
                            <th scope="row">
                                <label for="wpab_settings[background_color]"><?php _e('Background Color', 'wpab_domain'); ?></label>
                            </th>
                            <td>
                                <input type="text" name="wpab_settings[background_color]" id="wpab_settings[background_color]" value="<?php echo $wpab_options['background_color']; ?>" class="regular-text">
                                <p class="description"> <?php _e('Enter a Color or Hex Value #', 'wpab_domain'); ?> </p>
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

add_action('admin_menu', 'wpab_options_menu_link');

// Register Settings
function wpab_register_settings(){
    register_setting('wpab_settings_group', 'wpab_settings');
}

add_action('admin_init', 'wpab_register_settings');