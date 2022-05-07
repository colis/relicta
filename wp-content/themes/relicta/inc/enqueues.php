<?php
/**
 * Scripts and Styles related functions.
 *
 * @package Relicta
 * @since 1.0.0
 */

/**
 * Enqueue frontend styles.
 */
function relicta_styles() {
	wp_register_style(
		'relicta-theme-styles',
		get_stylesheet_directory_uri() . '/dist/style-frontend.css',
		[],
		RELICTA_THEME_VERSION,
		'all'
	);

	wp_enqueue_style( 'relicta-theme-styles' );
}
add_action( 'wp_enqueue_scripts', 'relicta_styles' );

/**
 * Enqueue frontend scripts.
 */
function relicta_scripts() {
	wp_register_script(
		'relicta-theme-scripts',
		get_stylesheet_directory_uri() . '/dist/frontend.js',
		[ 'jquery' ],
		RELICTA_THEME_VERSION,
		true
	);

	wp_enqueue_script( 'relicta-theme-scripts' );
}
add_action( 'wp_enqueue_scripts', 'relicta_scripts' );

/**
 * Enqueue backend admin styles.
 */
function relicta_admin_styles() {
	wp_register_style(
		'relicta-admin-styles',
		get_stylesheet_directory_uri() . '/dist/admin.css',
		[],
		RELICTA_THEME_VERSION,
		'all'
	);

	wp_enqueue_style( 'relicta-admin-styles' );
}
add_action( 'enqueue_block_editor_assets', 'relicta_admin_styles' );

/**
 * Enqueue Google Analytics.
 */
function relicta_google_analytics() {
	$ga_measurement_id = 'UA-154682423-1';

	wp_enqueue_script(
		'relicta-ga',
		esc_url( "https://www.googletagmanager.com/gtag/js?id={$ga_measurement_id}" ),
		[],
		RELICTA_THEME_VERSION,
		false
	);
	?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){window.dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', <?php echo wp_json_encode( $ga_measurement_id ); ?>);
	</script>

	<?php
}
add_action( 'wp_head', 'relicta_google_analytics' );

/**
 * Defer scripts.
 *
 * @param string $tag    The <script> tag for the enqueued script.
 * @param string $handle The script's registered handle.
 * @param string $src    The script's source URL.
 */
function defer_scripts( $tag, $handle, $src ) {
	$defer_list = [
		'jquery-core',
		'jquery-migrate',
		'cookie-law-info',
	];

	if ( is_admin() ) {
		return $tag;
	}

	if ( ! in_array( $handle, $defer_list, true ) ) {
		return $tag;
	}

	return str_replace( "src='{$src}'", "src='{$src}' defer", $tag );
}
add_filter( 'script_loader_tag', 'defer_scripts', 10, 3 );
