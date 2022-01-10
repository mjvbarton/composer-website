const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

/**
 * Style configuration
 */
mix.sass('src/sass/style.scss', 'style.css')
.options({
    processCssUrls: false,
    postCss: [tailwindcss('tailwind.config.js')]
})
.minify('style.css', 'style.min.css');

/**
 * JS Configuration
 */
mix.js('src/js/app.js', 'js/app.js')
.minify('js/app.js', 'js/app.min.js');

/**
 * BrowserSync
 */
mix.browserSync(process.env.MIX_BROWSERSYNC);
mix.disableSuccessNotifications();
