import laravel from 'laravel-vite-plugin';
import { defineConfig } from 'vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/device-mockups.scss',
                'resources/css/devices.scss',
                'resources/css/general.scss',
                'resources/js/app.js',
                'resources/js/bootstrap.js',
            ],
            refresh: true,
            include: [
                '@fortawesome/fontawesome-free/css/all.min.css', // Inclure le chemin complet si nécessaire
              ],
        }),

    ],
});
