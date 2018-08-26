let mix = require('laravel-mix');

mix.react('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/pages/login.scss', 'public/css')
    .sass('resources/assets/sass/admin.scss', 'public/css')
   .sass('resources/assets/sass/app.scss', 'public/css');
