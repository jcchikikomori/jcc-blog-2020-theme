<?php
/**
 * ------------------------------------------------------------------------
 * Theme's Post Types
 * ------------------------------------------------------------------------
 * This file is for registering your theme post types. Custom post types
 * allow users to easily create and manage various types of content.
 */

if ( ! function_exists( 'tonik_register_fullpage_post_type' ) ) {
	/**
	 * Registers a `fullpages` custom post type.
	 *
	 * @todo Change function prefix to your textdomain.
	 * @todo Update prefix in the hook function and if statement.
	 *
	 * @return void
	 */
	function tonik_register_fullpage_post_type() {
		register_post_type(
			'fullpage', array(
				'public'      => true,
				'supports'    => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
				'description' => __( 'Collection of Full Pages.', 'tonik' ),
				'labels'      => array(
					'name'               => _x( 'Full Pages', 'post type general name', 'tonik' ),
					'singular_name'      => _x( 'Full Page', 'post type singular name', 'tonik' ),
					'menu_name'          => _x( 'Full Pages', 'admin menu', 'tonik' ),
					'name_admin_bar'     => _x( 'Full Page', 'add new on admin bar', 'tonik' ),
					'add_new'            => _x( 'Add New', 'book', 'tonik' ),
					'add_new_item'       => __( 'Add New Full Page', 'tonik' ),
					'new_item'           => __( 'New Full Page', 'tonik' ),
					'edit_item'          => __( 'Edit Full Page', 'tonik' ),
					'view_item'          => __( 'View Full Page', 'tonik' ),
					'all_items'          => __( 'All Full Pages', 'tonik' ),
					'search_items'       => __( 'Search Full Page', 'tonik' ),
					'parent_item_colon'  => __( 'Parent Full Page: ', 'tonik' ),
					'not_found'          => __( 'No Full Pages found.', 'tonik' ),
					'not_found_in_trash' => __( 'No Full Pages found in Trash.', 'tonik' ),
				),
			)
		);
	}
}
add_action( 'init', 'tonik_register_fullpage_post_type' );
