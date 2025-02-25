<?php

add_action( 'admin_menu', 'cinema_house_gettingstarted' );
function cinema_house_gettingstarted() {
	add_theme_page( esc_html__('Begin Installation', 'cinema-house'), esc_html__('Begin Installation', 'cinema-house'), 'edit_theme_options', 'cinema-house-guide-page', 'cinema_house_guide');
}

function cinema_house_admin_theme_style() {
   wp_enqueue_style('cinema-house-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/dashboard.css');
}
add_action('admin_enqueue_scripts', 'cinema_house_admin_theme_style');

if ( ! defined( 'CINEMA_HOUSE_SUPPORT' ) ) {
define('CINEMA_HOUSE_SUPPORT',__('https://wordpress.org/support/theme/cinema-house/','cinema-house'));
}
if ( ! defined( 'CINEMA_HOUSE_REVIEW' ) ) {
define('CINEMA_HOUSE_REVIEW',__('https://wordpress.org/support/theme/cinema-house/reviews/','cinema-house'));
}
if ( ! defined( 'CINEMA_HOUSE_LIVE_DEMO' ) ) {
define('CINEMA_HOUSE_LIVE_DEMO',__('https://trial.ovationthemes.com/cinema-house/','cinema-house'));
}
if ( ! defined( 'CINEMA_HOUSE_BUY_PRO' ) ) {
define('CINEMA_HOUSE_BUY_PRO',__('https://www.ovationthemes.com/products/cinema-wordpress-theme','cinema-house'));
}
if ( ! defined( 'CINEMA_HOUSE_PRO_DOC' ) ) {
define('CINEMA_HOUSE_PRO_DOC',__('https://trial.ovationthemes.com/docs/cinema-house-doc/','cinema-house'));
}
if ( ! defined( 'CINEMA_HOUSE_FREE_DOC' ) ) {
define('CINEMA_HOUSE_FREE_DOC',__('https://trial.ovationthemes.com/docs/cinema-house-free-doc/','cinema-house'));
}
if ( ! defined( 'CINEMA_HOUSE_THEME_NAME' ) ) {
define('CINEMA_HOUSE_THEME_NAME',__('Premium Cinema House Theme','cinema-house'));
}
if ( ! defined( 'CINEMA_HOUSE_BUNDLE_LINK' ) ) {
define('CINEMA_HOUSE_BUNDLE_LINK',__('https://www.ovationthemes.com/products/wordpress-bundle','cinema-house'));
}
/**
 * Theme Info Page
 */
function cinema_house_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( '' ); ?>

	<div class="getting-started__header">
		<div class="header-box-left">
			<h2><?php echo esc_html( $theme ); ?></h2>
			<p><?php esc_html_e('Version: ', 'cinema-house'); ?><?php echo esc_html($theme['Version']);?></p>
		</div>
		<div class="header-box-right">
			<div class="btn_box">
				<a class="button-primary" href="<?php echo esc_url( CINEMA_HOUSE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'cinema-house'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( CINEMA_HOUSE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'cinema-house'); ?></a>
			</div>
		</div>
	</div>

	<div class="wrap getting-started">
		<div class="box-container">
			<div class="box-left-main">
				<div class="leftbox">
					<h3><?php esc_html_e('Documentation','cinema-house'); ?></h3>
					<p><?php $theme = wp_get_theme(); 
						echo wp_kses_post( apply_filters( 'description', esc_html( $theme->get( 'Description' ) ) ) );
					?></p>

					<h4><?php esc_html_e('Edit Your Site','cinema-house'); ?></h4>
					<p><?php esc_html_e('Now create your website with easy drag and drop powered by gutenburg.','cinema-house'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url() . 'site-editor.php' ); ?>" target="_blank"><?php esc_html_e('Edit Your Site','cinema-house'); ?></a>

					<h4><?php esc_html_e('Visit Your Site','cinema-house'); ?></h4>
					<p><?php esc_html_e('To check your website click here','cinema-house'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e('Visit Your Site','cinema-house'); ?></a>

					<h4><?php esc_html_e('Theme Documentation','cinema-house'); ?></h4>
					<p><?php esc_html_e('Check the theme documentation to easily set up your website.','cinema-house'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( CINEMA_HOUSE_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','cinema-house'); ?></a>
				</div>
       	</div>
			<div class="box-right-main">
				<h3><?php echo esc_html(CINEMA_HOUSE_THEME_NAME); ?></h3>
				<img class="cinema_house_img_responsive" style="width: 100%;" src="<?php echo esc_url( $theme->get_screenshot() ); ?>" />
				<div class="pro-links">
					<div class="pro-links-inner">
						<a class="button-primary livedemo" href="<?php echo esc_url( CINEMA_HOUSE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'cinema-house'); ?></a>
						<a class="button-primary buynow" href="<?php echo esc_url( CINEMA_HOUSE_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'cinema-house'); ?></a>
						<a class="button-primary docs" href="<?php echo esc_url( CINEMA_HOUSE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'cinema-house'); ?></a>
					</div>
						<a class="button-primary bundle-btn" href="<?php echo esc_url( CINEMA_HOUSE_BUNDLE_LINK ); ?>" target="_blank"><?php esc_html_e('Wordpress Theme Bundle (100+ Themes at Just $89)', 'cinema-house'); ?></a>
				</div>
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
		</div>
	</div>

<?php }?>