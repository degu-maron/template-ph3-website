import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',

                // ないと[Unable to locate file in Vite manifest]ってエラー出ちゃう
                'resources/js/common.js',
                'resources/js/quiz.js',
            ],
            refresh: true,
        }),
    ],
});
