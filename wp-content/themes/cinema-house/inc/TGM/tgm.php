<?php
	
load_template( get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php' );

/**
 * Recommended plugins.
 */
function cinema_house_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Getwid – Gutenberg Blocks', 'cinema-house' ),
			'slug'             => 'getwid',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Ovation Elements', 'cinema-house' ),
			'slug'             => 'ovation-elements',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	cinema_house_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'cinema_house_register_recommended_plugins' );