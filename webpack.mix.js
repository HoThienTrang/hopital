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

mix.styles([
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
    'node_modules/font-awesome/css/font-awesome.min.css',
    'node_modules/nprogress/nprogress.css',
    'node_modules/icheck/skins/flat/green.css',
    'node_modules/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css',
    'node_modules/jqvmap/dist/jqvmap.min.css',
    'node_modules/bootstrap-daterangepicker/daterangepicker.css',
    'resources/css/admin/custom.min.css',
], 'public/css/all.css').version();;

mix.js(['node_modules/jquery/dist/jquery.min.js'], 'public/js/jquery/dist/jquery.min.js').version();;

mix.copyDirectory([
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
    'node_modules/fastclick/lib/fastclick.js',
    'node_modules/nprogress/nprogress.js',
    'node_modules/gauge.js/dist/gauge.min.js',
    'node_modules/bootstrap-progressbar/bootstrap-progressbar.min.js',
    'node_modules/icheck/icheck.min.js',
    'node_modules/skycons/skycons.js',
    'node_modules/flot/jquery.flot.js',
    'node_modules/flot/jquery.flot.pie.js',
    'node_modules/flot/jquery.flot.time.js',
    'node_modules/flot/jquery.flot.stack.js',
    'node_modules/flot/jquery.flot.resize.js',
    'node_modules/flot-orderbars/js/jquery.flot.orderBars.js',
    'node_modules/flot.curvedlines/curvedLines.js',
    'node_modules/jqvmap/dist/jquery.vmap.js',
    'node_modules/jqvmap/dist/maps/jquery.vmap.world.js',
    'node_modules/jqvmap/examples/js/jquery.vmap.sampledata.js',
    'node_modules/bootstrap-daterangepicker/daterangepicker.js',
], 'public/js/common/').version();;
