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

mix.js('resources/js/app.js', 'public/js')
		// 自作のjsファイルを追加
		// メソッドチェーンで繋げていく
		// 第一引数にコンパイルするjsファイルパス
		// 第二引数にコンパイルしたjsファイルを出力するパスを指定
		.scripts('resources/js/assets/functions.js', 'public/js/functions.js)
		.scripts('resources/js/assets/coordinates.js', 'public/js/coordinates.js)
		.scripts('resources/js/assets/DrawFace.js', 'public/js/DrawFace.js)
		.scripts('resources/js/assets/main.js', 'public/js/main.js)
    .sass('resources/sass/app.scss', 'public/css');
