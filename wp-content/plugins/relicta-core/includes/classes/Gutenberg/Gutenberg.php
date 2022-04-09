<?php
/**
 * Gutenberg related functionalities.
 *
 * @package RelictaCore
 */

namespace RelictaCore\Gutenberg;

use RelictaCore\Registrable;

defined( 'ABSPATH' ) || die();

/**
 * Class Gutenberg
 *
 * @package RelictaCore
 */
class Gutenberg implements Registrable {

	/**
	 * Register into WordPress
	 */
	public function register() {
		\add_option( 'color_option_brand_primary', '000000' );
		\add_option( 'color_option_brand_secondary', 'ffffff' );
		\add_filter( 'after_setup_theme', [ $this, 'register_gutenberg_theme_support' ] );
		\add_filter( 'after_setup_theme', [ $this, 'register_gutenberg_colour_palette' ] );
	}

	/**
	 * Add/remove theme support for Gutenberg features.
	 */
	public function register_gutenberg_theme_support() {

		// Add support for responsive embeds.
		\add_theme_support( 'responsive-embeds' );

		// Remove support for Core Block Patterns.
		\remove_theme_support( 'core-block-patterns' );

		// Remove support for gradients.
		\add_theme_support( 'editor-gradient-presets', [] );
		\add_theme_support( 'disable-custom-gradients' );
	}

	/**
	 * Register Gutenberg colour palette.
	 **/
	public function register_gutenberg_colour_palette() {
		\add_theme_support(
			'editor-color-palette',
			[
				[
					'name'  => 'Brand Primary',
					'slug'  => 'brand-primary',
					'color' => '#' . \get_option( 'color_option_brand_primary' ),
				],
				[
					'name'  => 'Brand Secondary',
					'slug'  => 'brand-secondary',
					'color' => '#' . \get_option( 'color_option_brand_secondary' ),
				],
			]
		);
	}

}
