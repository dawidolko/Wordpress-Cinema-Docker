<?php 

function cinema_house_add_admin_menu() {
    add_menu_page(
        'Theme Settings', // Page title
        'Theme Settings', // Menu title
        'manage_options', // Capability
        'cinema-house-theme-settings', // Menu slug
        'cinema_house_settings_page' // Function to display the page
    );
}
add_action( 'admin_menu', 'cinema_house_add_admin_menu' );

function cinema_house_settings_page() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'Theme Settings', 'cinema-house' ); ?></h1>
        <form action="options.php" method="post">
            <?php
            settings_fields( 'cinema_house_settings_group' );
            do_settings_sections( 'cinema-house-theme-settings' );
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function cinema_house_register_settings() {
    register_setting( 'cinema_house_settings_group', 'cinema_house_enable_animations' );

    add_settings_section(
        'cinema_house_settings_section',
        __( 'Animation Settings', 'cinema-house' ),
        null,
        'cinema-house-theme-settings'
    );

    add_settings_field(
        'cinema_house_enable_animations',
        __( 'Enable Animations', 'cinema-house' ),
        'cinema_house_enable_animations_callback',
        'cinema-house-theme-settings',
        'cinema_house_settings_section'
    );
}
add_action( 'admin_init', 'cinema_house_register_settings' );

function cinema_house_enable_animations_callback() {
    $checked = get_option( 'cinema_house_enable_animations', true );
    ?>
    <input type="checkbox" name="cinema_house_enable_animations" value="1" <?php checked( 1, $checked ); ?> />
    <?php
}

