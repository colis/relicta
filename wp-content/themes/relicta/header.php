<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Relicta
 * @since 1.0.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php get_template_part( 'template-parts/components/skip-link' ); ?>

	<div id="site-wrapper" class="o-site-wrapper">

		<header class="c-header">
			<div class="c-main-nav o-container">
				<a href="<?php echo esc_url( home_url() ); ?>" class="c-logo" title="Relicta Bioplastics">
					<?php echo relicta_get_icon_svg( 'logo', 130 ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Hardcoded SVG. ?>
				</a>
				<?php
					get_template_part( 'template-parts/header/menu-button' );
					get_template_part( 'template-parts/header/navigation' );
				?>
			</div><!-- .c-main-nav -->
		</header><!-- .c-header -->
