import js from '@eslint/js';
import eslintConfigPrettier from 'eslint-config-prettier';

export default [
    {
        ignores: [
            'node_modules/**',
            'public/build/**',
            'public/hot/**',
            'vendor/**',
            'storage/**',
            'bootstrap/cache/**',
        ],
    },

    {
        files: ['resources/js/**/*.js'],
        ...js.configs.recommended,
    },

    eslintConfigPrettier,
];
