import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { bunny } from 'laravel-vite-plugin/fonts';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/home/hero.css',
                'resources/css/home/banner.css',
                'resources/css/home/consultation.css',
                'resources/css/home/katalog.css',
                'resources/css/home/layanan.css',
                'resources/css/home/about.css',
                'resources/css/pages/training.css',
                'resources/css/pages/services.css',
                'resources/css/pages/city.css',
                'resources/css/pages/training-show.css',
                'resources/css/pages/service-show.css'
            ],
            refresh: true,
            fonts: [
                bunny('Instrument Sans', {
                    weights: [400, 500, 600],
                }),
            ],
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
