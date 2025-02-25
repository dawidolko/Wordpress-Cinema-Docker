<?php
/**
 * Cinema House functions and definitions
 *
 * @package Cinema House
 */

if ( ! function_exists( 'cinema_house_setup' ) ) :
function cinema_house_setup() {
	
	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

    load_theme_textdomain( 'cinema-house', get_template_directory() . '/languages' );

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	
	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );
			
	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	add_theme_support('woocommerce');

	// Enqueue editor styles.
	add_editor_style( array( 'assets/css/editor-style.css' ) );
	
}
endif; // cinema_house_setup
add_action( 'after_setup_theme', 'cinema_house_setup' );

function cinema_house_scripts() {
	wp_enqueue_style( 'cinema-house-basic-style', get_stylesheet_uri() );

    $cinema_house_enable_animations = get_option( 'cinema_house_enable_animations', true );

    if ( $cinema_house_enable_animations ) {
        //animation
		wp_enqueue_script( 'wow-js', get_theme_file_uri( '/assets/js/wow.js' ), array( 'jquery' ), true );

		wp_enqueue_style( 'animate-css', get_template_directory_uri().'/assets/css/animate.css' );
    }

	//font-awesome
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/all.css', array(), '6.7.1' );

	// script.js
	wp_enqueue_script('cinema-house-main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
	
}
add_action( 'wp_enqueue_scripts', 'cinema_house_scripts' );

// Get start function

function cinema_house_enqueue_admin_script($hook) {
    // Admin JS
    wp_enqueue_script('cinema-house-admin-js', get_theme_file_uri('/inc/dashboard/admin.js'), array('jquery'), true);
    wp_localize_script(
        'cinema-house-admin-js',
        'cinema_house',
        array(
            'admin_ajax'    =>  admin_url('admin-ajax.php'),
            'wpnonce'           =>  wp_create_nonce('cinema_house_dismissed_notice_nonce')
        )
    );
    wp_enqueue_script('cinema-house-admin-js');

    wp_localize_script( 'cinema-house-admin-js', 'cinema_house_scripts_localize',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action('admin_enqueue_scripts', 'cinema_house_enqueue_admin_script');

//dismiss function 
add_action( 'wp_ajax_cinema_house_dismissed_notice_handler', 'cinema_house_ajax_notice_dismiss_fuction' );

function cinema_house_ajax_notice_dismiss_fuction() {
    if (!wp_verify_nonce($_POST['wpnonce'], 'cinema_house_dismissed_notice_nonce')) {
        exit;
    }
    if ( isset( $_POST['type'] ) ) {
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        update_option( 'dismissed-' . $type, TRUE );
    }
}

//get start box
function cinema_house_custom_admin_notice() {
    // Check if the notice is dismissed
    if ( ! get_option('dismissed-get_started_notice', FALSE ) )  {
        // Check if not on the theme documentation page
        $cinema_house_current_screen = get_current_screen();
        if ($cinema_house_current_screen && $cinema_house_current_screen->id !== 'appearance_page_cinema-house-guide-page') {
            $cinema_house_theme = wp_get_theme();
            ?>
            <div class="notice notice-info is-dismissible" data-notice="get_started_notice">
                <div class="notice-div">
                    <div>
                        <p class="theme-name"><?php _e('Cinema House', 'cinema-house'); ?></p>
                        <p><?php _e('For information and detailed instructions, check out our theme documentation.', 'cinema-house'); ?></p>
                    </div>
                    <div class="notice-buttons-box">
                        <a class="button-primary livedemo" href="<?php echo esc_url( CINEMA_HOUSE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'cinema-house'); ?></a>
                        <a class="button-primary buynow" href="<?php echo esc_url( CINEMA_HOUSE_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'cinema-house'); ?></a>
                        <a class="button-primary theme-install" href="themes.php?page=cinema-house-guide-page"><?php _e('Begin Installation', 'cinema-house'); ?></a> 
                    </div>
                </div>
            </div>
        <?php
        }
    }
}
add_action('admin_notices', 'cinema_house_custom_admin_notice');

//after switch theme
add_action('after_switch_theme', 'cinema_house_after_switch_theme');
function cinema_house_after_switch_theme () {
    update_option('dismissed-get_started_notice', FALSE );
}

//get-start-function-end//

// Block Patterns.
require get_template_directory() . '/block-patterns.php';

require get_parent_theme_file_path( '/inc/dashboard/dashboard.php' );

require get_template_directory() .'/inc/TGM/tgm.php';

require get_template_directory() . '/custom-setting.php';

require get_parent_theme_file_path( '/inc/customizer/customizer.php' );