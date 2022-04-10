<?php
/**
 * Relicta menus.
 *
 * @package Relicta
 * @since 1.0.0
 */

/**
 * Register menus.
 */
function relicta_register_menus() {
	register_nav_menus(
		[
			'primary'   => __( 'Primary Navigation', 'relicta' ),
			'secondary' => __( 'Secondary Navigation', 'relicta' ),
			'footer'    => __( 'Footer Navigation', 'relicta' ),
			'social'    => __( 'Social Links Navigation', 'relicta' ),
		]
	);
}
add_action( 'init', 'relicta_register_menus' );
