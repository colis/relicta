const eslintConfig = {
	root: true,
	extends: [ 'plugin:@wordpress/eslint-plugin/recommended' ],
	rules: {
		'@wordpress/no-global-active-element': 'off',
		'@wordpress/no-global-event-listener': 'off',
	},
};

module.exports = eslintConfig;
