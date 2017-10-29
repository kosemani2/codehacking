var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')

  /*  .styles([

            'bootstrap.css',
            'colors.css',
            'components.css',
            'core.css',
            'extras/aninate.min.css',
            'icons/fontawesome/style.min.css',
            'icons/icomoon/style.css',
    ], '.public/css/libs.css')


        .scripts([
            'pages/dashboard.js',
            'pages/login_validation.js',
            'pages/login.js',
            'pages/user_pages_list.js',
            'pages/user_pages_profile.js',



        ], '.public/js/libs.css')
*/


});
