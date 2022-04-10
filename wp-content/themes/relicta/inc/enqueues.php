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

if ( ! function_exists( 'relicta_admin_styles' ) ) {
	/**
	 * Enqueue backend admin styles.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function relicta_admin_styles() {

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		$editor_stylesheet_path = get_stylesheet_directory_uri() . '/dist/admin.css';

		// Enqueue editor styles.
		add_editor_style(
			[
				$editor_stylesheet_path,
			]
		);
	}
}
add_action( 'after_setup_theme', 'relicta_admin_styles' );
