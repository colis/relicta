<?php
/**
 * Scripts and Styles related functions.
 *
 * @package Relicta
 * @since 1.0.0
 */

/**
 * Enqueue frontend styles.
 */
function relicta_styles() {
	wp_register_style(
		'relicta-theme-styles',
		get_stylesheet_directory_uri() . '/dist/style-frontend.css',
		[],
		RELICTA_THEME_VERSION,
		'all'
	);

	wp_enqueue_style( 'relicta-theme-styles' );
}
add_action( 'wp_enqueue_scripts', 'relicta_styles' );

/**
 * Enqueue frontend scripts.
 */
function relicta_scripts() {
	wp_register_script(
		'relicta-theme-scripts',
		get_stylesheet_directory_uri() . '/dist/frontend.js',
		[ 'jquery' ],
		RELICTA_THEME_VERSION,
		true
	);

	wp_enqueue_script( 'relicta-theme-scripts' );
}
add_action( 'wp_enqueue_scripts', 'relicta_scripts' );

/**
 * Enqueue backend admin styles.
 */
function relicta_admin_styles() {
	wp_register_style(
		'relicta-admin-styles',
		get_stylesheet_directory_uri() . '/dist/admin.css',
		[],
		RELICTA_THEME_VERSION,
		'all'
	);

	wp_enqueue_style( 'relicta-admin-styles' );
}
add_action( 'enqueue_block_editor_assets', 'relicta_admin_styles' );