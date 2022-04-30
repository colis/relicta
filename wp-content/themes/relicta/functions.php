<?php
/**
 * Relicta Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Relicta
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'RELICTA_THEME_VERSION', '1.0.0' );
define( 'RELICTA_DIR', trailingslashit( get_stylesheet_directory() ) );
define( 'RELICTA_URL', trailingslashit( get_stylesheet_directory_uri() ) );

/**
 * REQUIRED FILES
 * Include required files.
 */

/**
 * SVG Icons class.
 */
require get_template_directory() . '/classes/class-svg-icons.php';

/**
 * Setup the theme.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Scripts and Styles related functions.
 */
require RELICTA_DIR . '/inc/enqueues.php';

/**
 * Register menus.
 */
require get_template_directory() . '/inc/menus.php';

/**
 * SVG Icons related functions.
 */
require get_template_directory() . '/inc/icon-functions.php';

/**
 * Custom content functions.
 */
require get_template_directory() . '/inc/content.php';
