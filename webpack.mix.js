const mix = require('laravel-mix');
const fs = require('fs');

mix.setResourceRoot('dist');
mix.webpackConfig({ devtool: 'source-map' });
mix
  .js('./src/js/main.js', './dist/js')
  .sass('./src/sass/main.scss', './dist/css')
  .then(() => {
    fs.unlinkSync('mix-manifest.json');
  })
  .browserSync({
    proxy: 'http://test.local/',
    files: [`./**/*.php`, `./**/*.js`, `./**/*.css`],
    notify: false,
  });
