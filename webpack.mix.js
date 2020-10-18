const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .copy('resources/js/jquery.appear/jquery.appear.min.js', 'public/js')
    .copy('resources/js/jquery.easing/jquery.easing.min.js', 'public/js')
    .copy('resources/js/jquery.cookie/jquery.cookie.min.js', 'public/js')
    .copyDirectory('resources/favicon', 'public')
    .copyDirectory('resources/img', 'public/img');
