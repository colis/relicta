<?php
/**
 * Core plugin functionality.
 *
 * @package RelictaCore
 */

declare( strict_types=1 );

namespace RelictaCore\Core;

/**
 * Default setup routine
 *
 * @return void
 */
function setup() {
	$n = function( $func ) {
		return __NAMESPACE__ . "\\$func";
	};

	add_action( 'init', $n( 'i18n' ) );
	add_action( 'init', $n( 'init' ) );

	do_action( 'relicta_core_loaded' );
}

/**
 * Registers the default textdomain.
 *
 * @return void
 */
function i18n() {
	$locale = apply_filters( 'plugin_locale', get_locale(), 'relicta-core' );
	load_textdomain( 'relicta-core', WP_LANG_DIR . '/relicta-core/relicta-core-' . $locale . '.mo' );
	load_plugin_textdomain( 'relicta-core', false, plugin_basename( RELICTA_CORE_PATH ) . '/languages/' );
}

/**
 * Initializes the plugin and fires an action other plugins can hook into.
 *
 * @return void
 */
function init() {
	do_action( 'relicta_core_init' );
}

/**
 * Activate the plugin
 *
 * @return void
 */
function activate() {
	// First load the init scripts in case any rewrite functionality is being loaded.
	init();
	flush_rewrite_rules();
}

/**
 * Deactivate the plugin
 *
 * Uninstall routines should be in uninstall.php
 *
 * @return void
 */
function deactivate() {}
