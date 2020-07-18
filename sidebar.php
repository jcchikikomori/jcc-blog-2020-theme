<?php
/**
 * Template part for displaying sidebar content
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/
 */
?>

<aside class="sidebar">
	<!-- Categories -->
	<div class="sidebar__item nes-container is-rounded is-dark">
		<h3 class="sidebar__title"><?php echo esc_html( 'Categories', 'tonik' ); ?></h3>

		<?php get_template_part( 'resources/templates/sidebar/sidebar', 'categories' ); ?>
	</div>
	<!-- Pages -->
	<div class="sidebar__item nes-container is-rounded is-dark">
		<h3 class="sidebar__title"><?php echo esc_html( 'Pages', 'tonik' ); ?></h3>

		<?php get_template_part( 'resources/templates/sidebar/sidebar', 'pages' ); ?>
	</div>
</aside>
