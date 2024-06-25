// vite.config.js

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/custom.less',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources'),
            'uikit': path.resolve(__dirname, 'node_modules/uikit'),
        },
    },
    css: {
        preprocessorOptions: {
            less: {
                javascriptEnabled: true,
            },
        },
    },
    build: {
        rollupOptions: {
            output: {
                assetFileNames: assetInfo => {
                    let extType = assetInfo.name.split('.').pop();
                    if (/png|jpe?g|svg|gif|tiff|bmp|ico/i.test(extType)) {
                        extType = 'images';
                    } else if (/mp4|webm|ogg|mp3|wav|flac|aac/i.test(extType)) {
                        extType = 'media';
                    } else if (/woff2?|eot|ttf|otf/i.test(extType)) {
                        extType = 'fonts';
                    }
                    return `${extType}/[name][extname]`;
                }
            }
        }
    }
});
