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
const sass = require('gulp-sass')(require('sass'));
const cleanCss = require('gulp-clean-css');
const rename = require('gulp-rename');

function init() {
    return src(['./js/init.js'])
        .pipe(concat('init.min.js'))
        .pipe(uglify())
        .pipe(dest('./js/'));
}

function css() {
    return src('./css/autoindex.scss')
        .pipe(sass({outputStyle: 'compressed'}))
        .on('error', sass.logError)
        .pipe(cleanCss({
            keepSpecialComments: 0
        }))
        .pipe(rename({
            extname: '.min.css'
        }))
        .pipe(dest('./css/'));
}

function darkTheme() {
    return src('./css/dark-theme.scss')
        .pipe(sass({outputStyle: 'compressed'}))
        .on('error', sass.logError)
        .pipe(cleanCss({
            keepSpecialComments: 0
        }))
        .pipe(rename({
            extname: '.min.css'
        }))
        .pipe(dest('./css/'));
}

function watchFiles() {
    watch('./**/*.php');
    watch('./css/autoindex.scss', series(css));
    watch('./css/dark-theme.scss', series(darkTheme));
    watch('./js/init.js', series(init));
}

exports.init = init;
exports.css = css;
exports.darkTheme = darkTheme;

exports.default = parallel([watchFiles]);