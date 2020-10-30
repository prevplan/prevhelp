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

//mix.js('resources/js/app.js', 'public/js')
  //  .sass('resources/sass/app.scss', 'public/css')
mix.styles([
    'public/vendor/bootstrap/css/bootstrap.min.css',
    'public/css/fa-all.min.css',
    'public/vendor/animate/animate.compat.css',
    'public/vendor/owl.carousel/assets/owl.carousel.min.css',
    'public/vendor/owl.carousel/assets/owl.theme.default.min.css',
    'public/vendor/magnific-popup/magnific-popup.min.css',
    'public/css/theme.css',
    'public/css/theme-elements.css',
    'public/css/theme-blog.css',
    'public/css/theme-shop.css',
    'public/css/skins/skin-corporate-14.css',
    'public/css/custom.css',
    'public/vendor/simple-line-icons/css/simple-line-icons.min.css',
    'public/vendor/rs-plugin/revolution-addons/typewriter/css/typewriter.css',
    'public/vendor/rs-plugin/css/settings.css',
    'public/vendor/rs-plugin/css/layers.css',
    'public/vendor/rs-plugin/css/navigation.css'
], 'public/css/app.css')
    .copyDirectory('resources/favicon', 'public')
    .copyDirectory('resources/img', 'public/img');
