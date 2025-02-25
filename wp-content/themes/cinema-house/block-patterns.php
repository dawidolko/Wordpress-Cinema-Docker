<?php
/**
 * Cinema House: Block Patterns
 *
 * @since Cinema House 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Cinema House 1.0
 *
 * @return void
 */
function cinema_house_register_block_patterns() {
	$block_pattern_categories = array(
		'cinema-house'    => array( 'label' => __( 'Cinema House', 'cinema-house' ) ),
	);

	$block_pattern_categories = apply_filters( 'cinema_house_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'cinema_house_register_block_patterns', 9 );
