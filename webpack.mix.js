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

mix.options({
    //processCssUrls: false
});

mix.js('resources/js/app.js', 'public/js')
    .sourceMaps()
    .sass('resources/sass/app.scss', 'public/css/bundle.css')
    .less('resources/less/frontend/style.less', 'public/css/frontend.css')
    .less('resources/less/frontend/slitslider/slider.less', 'public/css/slitslider/slitslider.css')
    .styles('resources/css/animate.css', 'public/css/animate.css')

// Favicon resource
mix.copy('resources/favicon.ico', 'public/');

// Images resources
mix.copy('resources/images/', 'public/images/');

// Frontend Logic
mix.copy('resources/js/frontend.js', 'public/js');

// Pace-js
mix.copy('node_modules/pace-js/pace.min.js', 'public/plugins/pace/js/pace.min.js');

// Slit Slider
mix.copy('resources/js/slitslider/', 'public/plugins/slitslider/');

