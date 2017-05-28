var elixir=require('laravel-elixir');






elixir(function(mix) {

    mix.sass("app.scss")
        .styles([
            '/blog-post.css',
            '/bootstrap.css',
            '/font-awesome.css',
            '/metisMenu.css',
            '/sb-admin-2.css'
        ],  './public/css/libs.css')


        .scripts([

            '/jquery.js',
            'bootstrap.js',
            '/metisMenu.js',
            '/sb-admin-2.js',
            '/scripts.js'

        ],  './public/js/libs.js')



});
