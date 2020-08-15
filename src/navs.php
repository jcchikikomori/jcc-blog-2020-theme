<?php
/**
 * ------------------------------------------------------------------------
 * Theme's Navigations
 * ------------------------------------------------------------------------
 * This file is for registering your theme's custom navigation areas
 * where various menus can be assigned by site administrators.
 */

if ( ! function_exists( 'tonik_register_navigations' ) ) {
	/**
	 * Registers theme's navigation menus.
	 *
	 * @todo Change function prefix to your textdomain.
	 * @todo Update prefix in the hook function and if statement.
	 *
	 * @return void
	 */
	function tonik_register_navigations() {
		register_nav_menus(
			array(
				'top'    => __( 'Top Navigation', 'tonik' ),
				'bottom' => __( 'Bottom Navigation', 'tonik' ),
			)
		);
	}
}
add_action( 'after_setup_theme', 'tonik_register_navigations' );

if ( ! function_exists( 'tonik_add_search_on_navigations' ) ) {
	/**
	 * Add Search Form to Specific wp_nav_menu
	 *
	 * @param [type] $items
	 * @param [type] $args
	 * @return void
	 */
	function tonik_add_search_on_navigations($items, $args) {
		$items .= '<li class="search">' .
		'<form role="search" method="get" class="search-form form-inline my-2 my-lg-0"' .
        'action="'. home_url( '/' ) .'">' .
        '<label>' .
          '<span class="screen-reader-text">'. _x( '', 'label' ) .'</span>' .
          '<input type="search" class="search-field form-control mr-sm-2"' .
            'placeholder="'. esc_attr_x( 'Looking for ...', 'placeholder' ) .'"' .
            'value="' . get_search_query() . '" name="s" title="'. esc_attr_x( '', 'label' ) .'" />' .
        '</label>' .
        '<input type="submit" class="search-submit btn btn-outline-success my-2 my-sm-0"' .
          'value="'. esc_attr_x( 'Search', 'submit button' ) .'" />' .
      	'</form></li>';
        return $items;
	}
}
add_filter('wp_nav_menu_items', 'tonik_add_search_on_navigations', 10, 2);