<?php
/**
 * Cinema House: Customizer
 *
 * @subpackage Cinema House
 * @since 1.0
 */

function cinema_house_customize_register( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_template_directory_uri() ). '/inc/customizer/customizer.css');

	// Pro Section
 	$wp_customize->add_section('cinema_house_pro', array(
        'title'    => __('CINEMA HOUSE PREMIUM', 'cinema-house'),
        'priority' => 1,
    ));
    $wp_customize->add_setting('cinema_house_pro', array(
        'default'           => null,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new Cinema_House_Pro_Control($wp_customize, 'cinema_house_pro', array(
        'label'    => __('CINEMA HOUSE PREMIUM', 'cinema-house'),
        'section'  => 'cinema_house_pro',
        'settings' => 'cinema_house_pro',
        'priority' => 1,
    )));
}
add_action( 'customize_register', 'cinema_house_customize_register' );


define('CINEMA_HOUSE_PRO_LINK',__('https://www.ovationthemes.com/products/cinema-wordpress-theme','cinema-house'));

define('CINEMA_HOUSE_BUNDLE_BTN',__('https://www.ovationthemes.com/products/wordpress-bundle','cinema-house'));

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Cinema_House_Pro_Control')):
    class Cinema_House_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
	        <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( CINEMA_HOUSE_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE CINEMA HOUSE PREMIUM','cinema-house');?> </a>
	        </div>
            <div class="col-md">
                <img class="cinema_house_img_responsive " src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png">
            </div>
	        <div class="col-md">
                <ul style="padding-top:10px">
                    <li class="upsell-cinema_house"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'cinema-house');?> </li>                 
                    <li class="upsell-cinema_house"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'cinema-house');?> </li>
                    <li class="upsell-cinema_house"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'cinema-house');?> </li>
                    <li class="upsell-cinema_house"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'cinema-house');?> </li>
                    <li class="upsell-cinema_house"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'cinema-house');?> </li>
                    <li class="upsell-cinema_house"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'cinema-house');?> </li>
                    <li class="upsell-cinema_house"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'cinema-house');?> </li>
                    <li class="upsell-cinema_house"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'cinema-house');?> </li>
                    <li class="upsell-cinema_house"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'cinema-house');?> </li>
                    <li class="upsell-cinema_house"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'cinema-house');?> </li>
                    <li class="upsell-cinema_house"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'cinema-house');?> </li>
                    <li class="upsell-cinema_house"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'cinema-house');?> </li>
                    <li class="upsell-cinema_house"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'cinema-house');?> </li>
                    <li class="upsell-cinema_house"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'cinema-house');?> </li>
                </ul>
        	</div>
            <div class="col-md upsell-btn upsell-btn-bottom">
                <a href="<?php echo esc_url( CINEMA_HOUSE_BUNDLE_BTN ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('Wordpress Theme Bundle (100+ Themes at Just $89)','cinema-house');?> </a>
            </div>
        </label>
    <?php } }
endif;