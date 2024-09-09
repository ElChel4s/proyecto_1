const mix = require('laravel-mix');

mix.css('resources/css/menu.css', 'public/css')
   .css('resources/css/m1.css', 'public/css');

const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .react(); // Agrega esta línea para habilitar React
   