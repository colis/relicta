<?php
/**
 * Theme setup functionality.
 *
 * @package Relicta
 * @since 1.0.0
 */

if ( ! function_exists( 'relicta_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function relicta_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on relicta, use a find and replace
		 * to change 'relicta' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'relicta', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			[
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			]
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			[
				'height'      => 240,
				'width'       => 240,
				'flex-width'  => false,
				'flex-height' => false,
			]
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for responsive embeds.
		\add_theme_support( 'responsive-embeds' );

		// Remove support for custom colors and font sizes.
		add_theme_support( 'disable-custom-colors' );
		add_theme_support( 'editor-button-styles' );

		// Remove support for gradients.
		\add_theme_support( 'editor-gradient-presets', [] );
		\add_theme_support( 'disable-custom-gradients' );

		// Remove support for Core Block Patterns.
		\remove_theme_support( 'core-block-patterns' );

		/**
		 * Add color palette for the gutenberg editor.
		 * Get the values from a JSON file.
		 */
		$theme_json_file = file_get_contents( get_theme_file_path( 'config/variables.json' ) );
		$theme_json      = json_decode( $theme_json_file, true );

		$gutenberg_palette = array_map(
			function( $name, $hex_color ) {
					$slug = sanitize_title( $name );
					$name = str_replace( '-', ' ', ucwords( $slug ) );

					return [
						'name'  => $name,
						'slug'  => $slug,
						'color' => sanitize_hex_color( $hex_color ),
					];
			},
			array_keys( $theme_json['colors'] ),
			array_values( $theme_json['colors'] )
		);
		add_theme_support( 'editor-color-palette', $gutenberg_palette );
	}
endif;
add_action( 'after_setup_theme', 'relicta_setup' );
