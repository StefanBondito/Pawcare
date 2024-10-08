import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
const path = require('path');

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            "~fa": path.resolve(
                __dirname,
                "node_modules/@fortawesome/fontawesome-free/scss"
            ),
            "~dataTables.net-dt": path.resolve(
                __dirname,
                "node_modules/dataTables.net-dt"
            ),
        },
    },
});
