<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Relicta
 * @since 1.0.0
 */

?>

<footer id="footer" class="c-footer">
	<div class="o-container">
		<div class="c-footer__info">
			<p class="c-footer__authors">Relicta srl • p.iva 02819960903</p>
			<p class="c-footer__copyright"><?php echo esc_html( gmdate( 'Y' ) ); ?> © Relicta • All rights reserved</p>
		</div><!-- .c-footer__info -->
	</div><!-- .o-container -->
</footer><!-- #footer -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
