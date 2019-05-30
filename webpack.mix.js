const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */


mix.js('resources/js/app.js', 'public/js');

mix.js('resources/js/admin.js', 'public/js/admin');

mix.sass('resources/sass/app.scss', 'public/css')
   .options({
      processCssUrls: false
      });

mix.styles([
    'public/css/vendor/font-awesome.min.css',
    'public/css/vendor/flaticon.css',
    'public/css/vendor/slicknav.min.css',
    'public/css/vendor/jquery-ui.min.css',
    'public/css/vendor/owl.carousel.min.css',
    'public/css/vendor/animate.css'
    ], 'public/css/vendor.css');
 
mix.styles([
    'node_modules/admin-lte/dist/css/adminlte.css'
], 'public/css/adminlte.css');