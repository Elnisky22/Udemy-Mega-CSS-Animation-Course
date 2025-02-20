/* global require, exports */

const {
    src,
    dest,
    watch,
    series,
    parallel
} = require('gulp');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const sass = require('gulp-dart-sass');
const cleanCss = require('gulp-clean-css');
const rename = require('gulp-rename');
const postcss = require('gulp-postcss');
const sourcemaps = require('gulp-sourcemaps');

function libs() {
    return src([
        './libs/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js',
        './libs/fontawesome-free-6.7.2-web/js/all.min.js',
        './libs/lazysizes-5.3.2.min.js',
    ])
        .pipe(concat('all-libs.min.js'))
        .pipe(uglify())
        .pipe(dest('./js'));
}

function init() {
    return src(['./js/init.js'])
        .pipe(concat('init.min.js'))
        .pipe(uglify())
        .pipe(dest('./js/'));
}

function css() {
    return src('./css/estilo.scss')
    .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(cleanCss({ keepSpecialComments: 0 }))
        .pipe(rename({ extname: '.min.css' }))
        .pipe(sourcemaps.write('.'))
        .pipe(dest('./css/'));
}

function watchFiles() {
    watch('./**/*.php');
    watch('./css/estilo.scss', series(css));
    watch('./js/init.js', series(init));
    watch('./libs/*.js', series(libs));
    watch('./libs/**/*.js', series(libs));
}

exports.libs = libs;
exports.init = init;
exports.css = css;

exports.default = parallel([watchFiles]);