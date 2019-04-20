'use strict';

var postcss = require('gulp-postcss');
var gulp = require('gulp');
var sass = require('gulp-sass');
var sassGlob = require('gulp-sass-glob');
var sourcemaps =require('gulp-sourcemaps'); 
var autoprefixer =require('gulp-autoprefixer');
var mqpacker = require('css-mqpacker');

sass.compiler = require('node-sass');

gulp.task('sass', function () {
  return gulp.src('./sass/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(postcss([mqpacker()]))
    .pipe(sassGlob())
    .pipe(sass({outputStyle: 'expanded'}))
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ["last 2 versions"],
      cascade: false
    }))   
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('./assets/css'));
});

gulp.task('sass:watch', function () {
  gulp.watch('./sass/**/*.scss', gulp.series('sass'));
});