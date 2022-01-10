const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

// Style configuration
mix.sass('sass/style.scss', 'style.css')
.options({
    processCssUrls: false,
    postCss: [tailwindcss('tailwind.config.js')]
});

// JS Packing
mix.js('src/js/app.js', 'js/app.js');
mix.js('src/js/app.js', 'js/app.min.js').minify();

// Browser sync config
mix.browserSync(process.env.MIX_BROWSERSYNC);
mix.disableSuccessNotifications();
