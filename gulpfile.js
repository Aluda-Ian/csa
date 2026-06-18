////////////////////////////////
// Setup
////////////////////////////////

// Gulp and package
const {src, dest, parallel, series, watch} = require('gulp');

// Plugins
const autoprefixer = require('autoprefixer');
const browserSync = require('browser-sync').create();
const tildeImporter = require('node-sass-tilde-importer');
const cssnano = require('cssnano');
const pixrem = require('pixrem');
const plumber = require('gulp-plumber');
const postcss = require('gulp-postcss');
const reload = browserSync.reload;
const rename = require('gulp-rename');
const sass = require('gulp-sass')(require('sass'));
const npmdist = require("gulp-npm-dist");

// Relative paths function
function pathsConfig(appName) {
    return {
        css: `./src/assets/css`,
        scss: `./src/assets/scss`,
        vendor: `./src/assets/vendor`,
    };
}

const paths = pathsConfig();

////////////////////////////////
// Tasks
////////////////////////////////

// Styles autoprefixing and minification
function styles() {
    const processCss = [
        autoprefixer(), // adds vendor prefixes
        pixrem(), // add fallbacks for rem units
    ];

    const minifyCss = [
        cssnano({preset: 'default'}), // minify result
    ];

    return src([`${paths.scss}/style.scss`])
        .pipe(
            sass({
                importer: tildeImporter,
                includePaths: [paths.scss],
            }).on('error', sass.logError),
        )
        .pipe(plumber()) // Checks for errors
        .pipe(postcss(processCss))
        .pipe(dest(paths.css))
        .pipe(rename({suffix: '.min'}))
        .pipe(postcss(minifyCss)) // Minifies the result
        .pipe(dest(paths.css));
}

// Plugins
const plugins = function () {
    return src(npmdist(), {base: "./node_modules"})
        .pipe(rename(function (path) {
            path.dirname = path.dirname.replace(/\/dist/, '').replace(/\\dist/, '');
        }))
        .pipe(dest(paths.vendor));
};

// Watch
function watchPaths() {
    watch(`${paths.scss}**/**/*.scss`, styles);
    watch([`${paths.js}/**/*.js`, `!${paths.js}/*.min.js`]).on(
        'change',
        reload,
    );
}

// Generate all assets
const generateAssets = parallel(styles, plugins);

// Set up dev environment
const dev = parallel(watchPaths);

exports.default = series(generateAssets, dev);
exports['generate-assets'] = generateAssets;
exports['dev'] = dev;
