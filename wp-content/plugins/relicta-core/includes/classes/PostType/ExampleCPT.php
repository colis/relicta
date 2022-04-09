<?php
/**
 * Example CPT.
 *
 * @package RelictaCore
 */

namespace RelictaCore\PostType;

defined( 'ABSPATH' ) || die();

/**
 * Class ExampleCPT
 *
 * @package RelictaCore
 */
class ExampleCPT extends BaseCustomPostType {
	const NAME = 'example-cpt';
	const ICON = 'dashicons-admin-post';

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
			'name'              => __( 'Example CPT', 'relicta-core' ),
			'menu_name'         => __( 'Example CPT', 'relicta-core' ),
			'all_items'         => __( 'All Posts', 'relicta-core' ),
			'view_items'        => __( 'View Posts', 'relicta-core' ),
			'search_items'      => __( 'Search Posts', 'relicta-core' ),
			'archives'          => __( 'Posts Archives', 'relicta-core' ),
			'attributes'        => __( 'Post Attributes', 'relicta-core' ),

			// Singulars.
			'singular_name'     => __( 'Post', 'relicta-core' ),
			'name_admin_bar'    => __( 'Posts', 'relicta-core' ),
			'parent_item_colon' => __( 'Parent Post:', 'relicta-core' ),
			'add_new_item'      => __( 'Add New Post', 'relicta-core' ),
			'add_new'           => __( 'Add New', 'relicta-core' ),
			'new_item'          => __( 'New Post', 'relicta-core' ),
			'edit_item'         => __( 'Edit Post', 'relicta-core' ),
			'update_item'       => __( 'Update Post', 'relicta-core' ),
			'view_item'         => __( 'View Post', 'relicta-core' ),
		];
	}
}
