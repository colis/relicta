<?php
/**
 * Plugin Name: Relicta Core
 * Plugin URI:  https://github.com/colis/relicta
 * Description: Core functionality for the Relicta site.
 * Version:     1.0.0
 * Author:      Carmine Colicino
 * Author URI:  https://github.com/colis
 * Text Domain: relicta-core
 * Domain Path: /languages
 *
 * @package RelictaCore
 */

declare( strict_types=1 );

namespace RelictaCore;

// Useful global constants.
define( 'RELICTA_CORE_VERSION', '1.0.0' );
define( 'RELICTA_CORE_URL', plugin_dir_url( __FILE__ ) );
define( 'RELICTA_CORE_PATH', plugin_dir_path( __FILE__ ) );
define( 'RELICTA_CORE_INC', RELICTA_CORE_PATH . 'includes/' );

// Include files.
require_once RELICTA_CORE_INC . 'functions/core.php';

// Activation/Deactivation.
register_activation_hook( __FILE__, __NAMESPACE__ . '\Core\activate' );
register_deactivation_hook( __FILE__, __NAMESPACE__ . '\Core\deactivate' );

// Bootstrap.
Core\setup();

// Initialise plugin.
Plugin::get_instance()->init();
