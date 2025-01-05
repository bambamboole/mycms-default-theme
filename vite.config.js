import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css'],
            buildDirectory: '../dist/default-theme',
            refresh: true,
        }),
    ],
});
