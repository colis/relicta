<?php
/**
 * Template part for displaying a page.
 *
 * @package Relicta
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'c-single-page' ); ?>>
	<?php the_content(); ?>
</article><!-- #post-<?php the_ID(); ?> -->
