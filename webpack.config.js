/**
 * External dependencies
 */
const path = require( 'path' );

/**
 * WordPress dependencies
 */
const defaultConfig = require( '@wordpress/scripts/config/webpack.config' );

// Sass Loader overrides.
const sassRuleIndex = defaultConfig.module.rules.findIndex(
	( rule ) => String( rule.test ) === String( /\.(sc|sa)ss$/ )
);

defaultConfig.module.rules[ sassRuleIndex ].use[ 3 ] = {
	loader: require.resolve( 'sass-loader' ),
	options: {
		sourceMap: defaultConfig.mode !== 'production',
	},
};

module.exports = [
	{
		...defaultConfig,
		entry: {
			frontend: [
				'./wp-content/themes/relicta/assets/js/index.js',
				'./wp-content/themes/relicta/assets/sass/style.scss',
			],
			admin: [ './wp-content/themes/relicta/assets/sass/admin.scss' ],
		},
		output: {
			path: path.resolve( __dirname, './wp-content/themes/relicta/dist' ),
		},
		plugins: [ ...defaultConfig.plugins.slice( 1 ) ],
	},
];
