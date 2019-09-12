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

mix.js('resources/js/app.js', 'public/js/app.js')
    .js('resources/js/jquery.multi-select.js', 'public/js/jquery.multi-select.js')
    .js('resources/js/jquery.quicksearch.js', 'public/js/jquery.quicksearch.js')
    .js('resources/js/forms.js', 'public/js/forms.js')
    .styles('resources/css/multi-select.css', 'public/css/multi-select.css')
    .sass('resources/sass/app.scss', 'public/css/app.css')
    .copy('resources/img', 'public/img');
