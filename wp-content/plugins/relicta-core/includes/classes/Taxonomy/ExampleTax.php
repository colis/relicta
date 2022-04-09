<?php
/**
 * Example custom taxonomy.
 *
 * @package RelictaCore
 */

namespace RelictaCore\Taxonomy;

use RelictaCore\PostType\ExampleCPT as ExampleCPT;

defined( 'ABSPATH' ) || die();

/**
 * Class ExampleTax
 *
 * @package RelictaCore
 */
class ExampleTax extends BaseTaxonomy {
	const NAME = 'example-tax';
	const SLUG = 'example-tax';

	const CUSTOM_POST_TYPES = [
		ExampleCPT::NAME,
	];

	/**
	 * Get the name to use for the custom taxonomy.
	 *
	 * @return string Custom taxonomy name.
	 */
	protected function get_name() : string {
		return self::NAME;
	}

	/**
	 * Get the array of custom post types to link the taxonomy to.
	 *
	 * @return array Custom post types array.
	 */
	protected function get_post_types() : array {
		return self::CUSTOM_POST_TYPES;
	}

	/**
	 * Get the arguments that configure the custom taxonomy.
	 *
	 * @return array Array of arguments.
	 */
	protected function get_arguments() : array {
		return [
			'description' => 'Example custom taxonomy.',
		];
	}

	/**
	 * Gets the labels array for custom taxonomy configuration.
	 *
	 * @return array Array of labels.
	 */
	protected function get_labels() : array {
		return [
			// Plurals.
			'name'              => __( 'Example Taxonomy', 'relicta-core' ),
			'menu_name'         => __( 'Example Taxonomy', 'relicta-core' ),
			'all_items'         => __( 'All Terms', 'relicta-core' ),
			'search_items'      => __( 'Search Terms', 'relicta-core' ),
			'popular_items'     => __( 'Popular Terms', 'relicta-core' ),

			// Singulars.
			'singular_name'     => __( 'Example Taxonomy', 'relicta-core' ),
			'parent_item_colon' => __( 'Parent Term:', 'relicta-core' ),
			'new_item_name'     => __( 'New Term Name', 'relicta-core' ),
			'add_new_item'      => __( 'Add New Term', 'relicta-core' ),
			'new_item'          => __( 'New Term', 'relicta-core' ),
			'edit_item'         => __( 'Edit Term', 'relicta-core' ),
			'update_item'       => __( 'Update Term', 'relicta-core' ),
			'view_item'         => __( 'View Term', 'relicta-core' ),
		];
	}
}
