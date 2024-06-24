import laravel from 'laravel-vite-plugin';
import { defineConfig } from 'vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
            include: [
                '@fortawesome/fontawesome-free/css/all.min.css', // Inclure le chemin complet si nécessaire
              ],
        }),

    ],
});
