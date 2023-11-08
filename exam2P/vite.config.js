import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path' //esto va en las importanciones

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,

            // Importamos Bootstrap 5 este va debajo del true 
            resolve: {
                alias: {
                    'bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
                }
            },
            // Fin Importamos Bootstrap 5
        }),
    ],
});
