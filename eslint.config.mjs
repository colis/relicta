import wordpress from '@wordpress/eslint-plugin';

export default [
	...wordpress.configs.recommended,
	{
		ignores: [
			'**/.vscode',
			'**/dist',
			'**/vendor',
			'**/webpack.config.js',
			'wp-admin/*',
			'wp-content/plugins/*',
			'!wp-content/plugins/relicta-*',
			'wp-content/themes/*',
			'!wp-content/themes/relicta*',
			'wp-includes/*',
		],
	},
	{
		rules: {
			'@wordpress/no-global-event-listener': 0,
			'@wordpress/no-global-active-element': 0,
			'prettier/prettier': ['error', { endOfLine: 'auto' }],
		},
	},
];
