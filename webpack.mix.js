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

mix.sass('resources/sass/app.scss', 'public/css');

mix.styles([
    'node_modules/paper-kit/assets/css/paper-kit.css',
], 'public/css/vendor/paper-kit.css');

mix.js('resources/js/app.js', 'public/js');

mix.scripts([
    'node_modules/paper-kit/assets/js/plugins/bootstrap-switch.js',
    'node_modules/paper-kit/assets/js/plugins/nouislider.min.js',
    'node_modules/paper-kit/assets/js/plugins/moment.min.js',
    'node_modules/paper-kit/assets/js/plugins/bootstrap-datepicker.js',
    'node_modules/paper-kit/assets/js/paper-kit.js',
], 'public/js/vendor/paper-kit.js');

/**
 * Source Maps
 */
mix.sourceMaps();

/**
 * Versioning
 */
if (mix.inProduction()) {
    mix.version();
}
