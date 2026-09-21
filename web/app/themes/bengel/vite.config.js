import {defineConfig} from 'vite'

import {resolve} from 'node:path';
import WordPressVite from '@nietthijmen/wordpress-vite-plugin';
import SassGlobImport from 'vite-plugin-sass-glob-import';
import GlobPlugin from 'vite-plugin-glob';

export default defineConfig(({mode}) => {
    const isDev = mode === 'development';
    const isProd = mode === 'production';

    return {
        plugins: [
            WordPressVite({
                input: [
                    './inc/scripts/theme.ts',
                    './inc/styling/theme.scss',
                ],
                refresh: [
                    './**/*.php',
                    './*.php'
                ],
                valetTls: 'bengel-theme-dev.test',
            }),
            SassGlobImport(),
            GlobPlugin()
        ],
        root: '',
        base: '/dist/',

        build: {
            outDir: resolve(__dirname, './dist'),
            emptyOutDir: true,
            cssCodeSplit: true,
            sourcemap: isDev,

            // emit manifest so PHP can find the hashed files
            manifest: true,

            // esbuild target
            target: 'es2020',

            // our entry
            rollupOptions: {
                input: {
                    main: resolve(__dirname + '/inc/scripts/theme.ts'),
                },
            },
            minify: 'esbuild',
            write: true
        },
        resolve: {
            alias: {
                '@': resolve(__dirname, './'),
                '@assets': resolve(__dirname, './assets'),
                '@scripts': resolve(__dirname, './inc/scripts'),
                '@styling': resolve(__dirname, './inc/styling'),
                'utils': resolve(__dirname, './inc/styling/utils'),
            }
        }
    }
});

