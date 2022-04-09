<?php
/**
 * Relicta Core
 *
 * @package RelictaCore
 */

declare( strict_types=1 );

namespace RelictaCore\Taxonomy;

use RelictaCore\Registrable;

/**
 * Base class that all Taxonomies should extend from.
 */
abstract class BaseTaxonomy implements Registrable {
	/**
	 * Register the custom taxonomy.
	 */
	public function register() {
		\add_action(
			'init',
			function () {
				$args = \wp_parse_args(
					$this->get_arguments(),
					[
						'labels'             => $this->get_labels(),
						'public'             => true,
						'show_ui'            => true,
						'show_admin_column'  => true,
						'show_in_nav_menus'  => true,
						'show_tagcloud'      => true,
						'show_in_rest'       => true,
						'show_in_quick_edit' => true,
						'hierarchical'       => true,
					]
				);

				\register_taxonomy( $this->get_name(), $this->get_post_types(), $args );
			},
			0
		);
	}

	/**
	 * Get the name to use for the custom taxonomy.
	 *
	 * @return string custom taxonomy name.
	 */
	abstract protected function get_name(): string;

	/**
	 * Get the arguments that configure the custom taxonomy.
	 *
	 * @return array Array of arguments.
	 */
	abstract protected function get_arguments(): array;

	/**
	 * Get the array of custom post types to link the taxonomy to.
	 *
	 * @return array Custom post types array.
	 */
	abstract protected function get_post_types() : array;
}
