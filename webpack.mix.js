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

mix.scripts(['resources/js/app.js'], 'public/js/app.js')
    .sass('resources/css/app.scss', 'public/css/')
    // .sass('resources/css/show.scss', 'public/css/');

// mix.styles([
//     'resources/css/app.scss',
//     'resources/css/show.scss',
//     'resources/css/back_ground.css'
// ],'public/css/all.min.css')
// .copyDirectory('resources/images','public/images');


