/**
 * External dependencies
 */
const path = require('path');

/**
 * WordPress dependencies
 */
const defaultConfig = require('@wordpress/scripts/config/webpack.config');

module.exports = [
	{
		...defaultConfig,
		entry: {
			frontend: [
				'./wp-content/themes/relicta-child/assets/js/index.js',
				'./wp-content/themes/relicta-child/assets/sass/style.scss',
			],
			admin: ['./wp-content/themes/relicta-child/assets/sass/admin.scss'],
		},
		output: {
			path: path.resolve(
				__dirname,
				'./wp-content/themes/relicta-child/dist'
			),
		},
		plugins: [...defaultConfig.plugins.slice(1)],
	},
];
