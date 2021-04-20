const mix = require('laravel-mix');
require('@tinypixelco/laravel-mix-wp-blocks');
require('laravel-mix-svg-vue');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Sage application. By default, we are compiling the Sass file
 | for your application, as well as bundling up your JS files.
 |
 */

mix
  .setPublicPath('./dist')
  .browserSync('phpid.test');

mix
  .sass('resources/styles/app.scss', 'styles')
  .sass('resources/styles/editor.scss', 'styles')
  .options({
    processCssUrls: false,
    postCss: [],
  });

mix
  .js('resources/scripts/app.js', 'scripts')
  .vue()
  .svgVue()
  .js('resources/scripts/customizer.js', 'scripts')
  .blocks('resources/scripts/editor.js', 'scripts')
  .autoload({ jquery: ['$', 'window.jQuery'] })
  .extract();

mix
  .copyDirectory('resources/images', 'dist/images')
  .copyDirectory('resources/fonts', 'dist/fonts');

mix
  .sourceMaps()
  .version();
