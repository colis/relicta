<?php
/**
 * SVG icons related functions
 *
 * @package Relicta
 * @since 1.0.0
 */

/**
 * Gets the SVG code for a given icon.
 *
 * @param string $icon The icon name.
 * @param int    $size The icon size.
 */
function relicta_get_icon_svg( $icon, $size = 24 ) {
	return Relicta_SVG_Icons::get_svg( 'ui', $icon, $size );
}
