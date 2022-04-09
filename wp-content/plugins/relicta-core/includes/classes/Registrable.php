<?php
/**
 * Relicta Core
 *
 * @package RelictaCore
 */

declare( strict_types=1 );

namespace RelictaCore;

/**
 * Interface Registrable
 */
interface Registrable {
	/**
	 * Register WordPress hooks.
	 */
	public function register();
}
