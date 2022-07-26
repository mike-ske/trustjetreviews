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

mix.js('js/app.js', 'public/js/app.js')
    .css('css/app.css', 'public/css/app.css')
    .sass('resources/sass/app.scss', 'public/css/app.scss')
    .styles([
          'resources/assets/admin/bootstrap/css/bootstrap.css',
          'resources/assets/admin/bootstrap/css/bootstrap.min.css',
          'resources/assets/admin/bootstrap/css/bootstrap.css.map',
      ], 'public/css/boot.css'
    )
    .styles([
          'resources/assets/admin/css/style.css',
          'resources/assets/admin/css/AdminLTE.css',
      ], 'public/css/main.css'
    ).scripts([
          'js/sweetalert.min.js',
          'js/popper.min.js',
          'js/cookieconsent.min.js'
      ], 'public/js/app.js')
    .scripts([
          'resources/assets/admin/bootstrap/js/bootstrap.js',
          'resources/assets/admin/bootstrap/js/bootstrap.min.js',
          'resources/assets/admin/bootstrap/js/npm.js'
      ], 'public/js/boot.js')
    .scripts([
          'resources/assets/admin/js/pages/dashboard.js',
          'resources/assets/admin/js/pages/dashboard2.js'
      ], 'public/js/dashboard.js')
    .scripts([
          'resources/assets/admin/js/app.min.js',
          'resources/assets/admin/js/countries.js',
          'resources/assets/admin/js/demo.js',
          'resources/assets/admin/js/app.js',
      ], 'public/js/main.js');
  
  if (mix.inProduction()) {
    mix
      .version();
  }
  