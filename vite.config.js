import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.jsx'], // Asegúrate de que el archivo tenga la extensión .jsx
            refresh: true,
        }),
        react(), // Incluye el plugin de React para manejar JSX
    ],
});
