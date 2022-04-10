<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Relicta
 * @since 1.0.0
 */

?>

<?php get_header(); ?>
	<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below.', 'relicta' ); ?></p>
<?php get_footer(); ?>
