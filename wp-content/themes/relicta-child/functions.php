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
define( 'CHILD_THEME_RELICTA_VERSION', '1.0.0' );
define( 'RELICTA_DIR', trailingslashit( get_stylesheet_directory() ) );
define( 'RELICTA_URL', trailingslashit( get_stylesheet_directory_uri() ) );

/**
 * REQUIRED FILES
 * Include required files.
 */

/**
 * Scripts and Styles related functions.
 */
require RELICTA_DIR . '/inc/enqueues.php';
