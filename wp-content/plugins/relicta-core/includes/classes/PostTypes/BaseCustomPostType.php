<?php
/**
 * Base class that all CPTs should extend from.
 *
 * @package RelictaCore
 */

namespace RelictaCore\PostTypes;

use RelictaCore\Registrable;

/**
 * Abstract class BaseCustomPostType.
 *
 * @package RelictaCore
 */
abstract class BaseCustomPostType implements Registrable {
	/**
	 * Register the custom post type.
	 */
	public function register() {
		\add_action(
			'init',
			function () {
				$arguments = wp_parse_args(
					$this->get_arguments(),
					[
						'menu_position'       => 5,
						'menu_icon'           => static::ICON,
						'delete_with_user'    => false,
						'public'              => true,
						'show_in_rest'        => true,
						'has_archive'         => true,
						'exclude_from_search' => false,
						'publicly_queryable'  => true,
						'show_in_nav_menus'   => true,
					]
				);

				\register_post_type( $this->get_name(), $arguments );
			}
		);
	}

	/**
	 * Get the name to use for the custom post type.
	 *
	 * @return string Custom post type name.
	 */
	abstract protected function get_name() : string;

	/**
	 * Get the arguments that configure the custom post type.
	 *
	 * @return array Array of arguments.
	 */
	abstract protected function get_arguments() : array;
}
