const prettierConfig = require('./.prettierrc.js');

module.exports = {
    extends: ['plugin:@wordpress/eslint-plugin/recommended'],
    ignorePatterns: [
        'node_modules/',
        'vendor/',
        'public/',
        '*.min.js',
        'webpack.config.js',
    ],
    rules: {
        'no-console': 'off',
        'prettier/prettier': ['error', prettierConfig],
    },
};
