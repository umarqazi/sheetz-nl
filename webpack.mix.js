let mix = require('laravel-mix');

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

mix.sass('resources/assets/sass/app.scss', 'public/css')
    .js('resources/assets/js/app.js', 'public/js');

/*Concatenating All CSS Files into One*/

mix.styles([
    'public/css/bootstrap.min.css',
    'public/css/bootstrap-datepicker.min.css',
    'public/css/bootstrap-select.min.css',
    'public/css/animate.css',
    'public/css/font-awesome.min.css',
    'public/css/hover.css',
    'public/css/jquery.fancybox.css',
    'public/css/mansory.css',
    'public/css/slick.css',
    'public/css/sick-theme.css',
    'public/css/rateit.css',
    'public/css/custom.css',
    'public/css/responsive.css'
], 'public/css/main.css');




/*Concatenating All Javascript Files into One */

mix.scripts([
    'public/js/jquery-3.2.1.min.js',
    'public/js/jquery-1.10.2.min.js',
    'public/js/bootstrap.min.js',
    'public/js/bootstrap-datepicker.min.js',
    'public/js/bootstrap-select.min.js',
    'public/js/freewall.js',
    'public/js/jquery.fancybox.js',
    'public/js/jquery.rateit.js',
    'public/js/slick.min.js',
    'public/js/wow.min.js',
    'public/js/custom.js'
], 'public/js/main.js');