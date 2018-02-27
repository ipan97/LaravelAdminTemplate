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

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');

/*
 | Copy Directory
 */
mix.copyDirectory('node_modules/admin-lte/dist/css', 'public/css')
    .copyDirectory('node_modules/admin-lte/dist/img', 'public/img')
    .copyDirectory('node_modules/admin-lte/dist/js', 'public/js')
    .copyDirectory('node_modules/font-awesome/fonts', 'public/fonts')
    .copyDirectory('node_modules/ionicons/dist/fonts', 'public/fonts')
    .copyDirectory('node_modules/ionicons/dist/svg', 'public/svg');
/*
 | Copy File
 */
mix.copy('node_modules/font-awesome/css/font-awesome.css', 'public/css/font-awesome.css')
    .copy('node_modules/ionicons/dist/css/ionicons.css', 'public/css/ionicons.css')
    .copy('node_modules/jquery/dist/jquery.js', 'public/js/jquery.js')
    .copy('node_modules/bootstrap-sass/assets/javascripts/bootstrap.js', 'public/js/bootstrap.js');
/*
 | Stylesheets
 */
mix.styles([
    'public/css/app.css',
    'public/css/font-awesome.css',
    'public/css/ionicons.css',
    'public/css/AdminLTE.css',
    'public/css/skins/skin-blue.css'
], 'public/css/all.css');

/*
 | Admin Scripts
 */

mix.scripts([
    'public/js/jquery.js',
    'public/js/bootstrap.js',
    'public/js/adminlte.js'
], 'public/js/admin.js');