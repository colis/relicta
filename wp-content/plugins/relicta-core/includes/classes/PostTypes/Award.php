<?php
/**
 * Award CPT.
 *
 * @package RelictaCore
 */

namespace RelictaCore\PostTypes;

/**
 * Class Award
 *
 * @package RelictaCore
 */
class Award extends BaseCustomPostType {
	const NAME = 'award';
	const ICON = 'dashicons-awards';

	/**
	 * Get the name to use for the custom post type.
	 *
	 * @return string Custom post type name.
	 */
	protected function get_name() : string {
		return self::NAME;
	}

	/**
	 * Get the arguments that configure the custom post type.
	 *
	 * @return array Array of arguments.
	 */
	protected function get_arguments() : array {
		$supports = [
			'title',
			'excerpt',
			'editor',
			'thumbnail',
			'author',
			'revisions',
			'custom-fields',
		];

		return [
			'labels'   => $this->get_labels(),
			'supports' => $supports,
		];
	}

	/**
	 * Gets the labels array for cpt configuration.
	 *
	 * @return array Array of labels.
	 */
	protected function get_labels() : array {
		return [
			// Plurals.
			'name'              => __( 'Awards', 'relicta-core' ),
			'menu_name'         => __( 'Awards', 'relicta-core' ),
			'all_items'         => __( 'All Awards', 'relicta-core' ),
			'view_items'        => __( 'View Awards', 'relicta-core' ),
			'search_items'      => __( 'Search Awards', 'relicta-core' ),
			'archives'          => __( 'Award Archives', 'relicta-core' ),
			'attributes'        => __( 'Award Attributes', 'relicta-core' ),

			// Singulars.
			'singular_name'     => __( 'Award', 'relicta-core' ),
			'name_admin_bar'    => __( 'Award', 'relicta-core' ),
			'parent_item_colon' => __( 'Parent Award:', 'relicta-core' ),
			'add_new_item'      => __( 'Add New Award', 'relicta-core' ),
			'add_new'           => __( 'Add New', 'relicta-core' ),
			'new_item'          => __( 'New Award', 'relicta-core' ),
			'edit_item'         => __( 'Edit Award', 'relicta-core' ),
			'update_item'       => __( 'Update Award', 'relicta-core' ),
			'view_item'         => __( 'View Award', 'relicta-core' ),
		];
	}
}
