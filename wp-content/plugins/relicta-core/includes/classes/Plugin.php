<?php
/**
 * Relicta Core
 *
 * @package RelictaCore
 */

declare( strict_types=1 );

namespace RelictaCore;

/**
 * Relicta Core Plugin main class.
 */
class Plugin {

	const REGISTRABLE_SERVICES = [
		Gutenberg\Gutenberg::class,
		PostType\ExampleCPT::class,
		Taxonomy\ExampleTax::class,
	];

	/**
	 * Returns a singleton instance of this class.
	 *
	 * @return Plugin
	 */
	public static function get_instance(): Plugin {
		static $instance;

		if ( null === $instance ) {
			$instance = new self();
		}

		return $instance;
	}

	/**
	 * Instantiate plugin's classes.
	 */
	public function init() {
		// Hook services into WordPress.
		foreach ( self::REGISTRABLE_SERVICES as $class_name ) {
			if ( ! class_exists( $class_name ) ) {
				continue;
			}

			$class = new $class_name( $this );

			if ( ! $class instanceof Registrable ) {
				continue;
			}

			$class->register();
		}
	}
}
