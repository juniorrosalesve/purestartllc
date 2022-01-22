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
    .styles([
        'resources/css/swiper-bundle.css',
        'resources/css/styles.css',
        'resources/css/jquery.dataTables.css',
        'resources/css/toastr.css'
    ], 'public/css/purestartllc.css')
    .scripts([
        'resources/js/swiper-bundle.js',
        'resources/js/jquery.js',
        'resources/js/jquery.dataTables.js',
        'resources/js/toastr.js',
        'resources/js/toastr.options.js'
    ], 'public/js/purestartllc.js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ]);

if (mix.inProduction()) {
    mix.version();
}
