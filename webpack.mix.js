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

mix.js('resources/js/app.js','public/js')
	.js('resources/js/head.js','public/js/head.js')
	 .sass('resources/sass/app.scss', 'public/css');

mix.copy('node_modules/material-dashboard/assets/js/core/bootstrap-material-design.min.js','public/material-dashboard/js/core/bootstrap-material-design.min.js');
mix.copy('node_modules/material-dashboard/assets/js/core/jquery.min.js','public/material-dashboard/js/core/jquery.min.js');
mix.copy('node_modules/material-dashboard/assets/js/core/popper.min.js','public/material-dashboard/js/core/popper.min.js');
mix.copy('node_modules/material-dashboard/assets/js/plugins/bootstrap-notify.js','public/material-dashboard/js/plugins/bootstrap-notify.js');
mix.copy('node_modules/material-dashboard/assets/js/plugins/chartist.min.js','public/material-dashboard/js/plugins/chartist.min.js');
mix.copy('node_modules/material-dashboard/assets/js/plugins/perfect-scrollbar.jquery.min.js','public/material-dashboard/js/plugins/perfect-scrollbar.jquery.min.js');
mix.copy('node_modules/material-dashboard/assets/js/material-dashboard.js','public/material-dashboard/js/material-dashboard.js');
mix.copy('node_modules/material-dashboard/assets/js/material-dashboard.js.map','public/material-dashboard/js/material-dashboard.js.map');
mix.copy('node_modules/material-dashboard/assets/js/material-dashboard.min.js','public/material-dashboard/js/material-dashboard.min.js');
