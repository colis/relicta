<?php
/**
 * Template part for displaying the header navigation menu
 *
 * @package Relicta
 * @since 1.0.0
 */

?>

<nav class="c-header__navigation c-navigation o-container">
	<?php
	wp_nav_menu(
		[
			'theme_location' => 'primary',
			'container'      => '',
			'menu_class'     => 'c-navigation__menu-wrapper',
		]
	);
	?>
</nav>
