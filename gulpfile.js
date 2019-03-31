'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var sassGlob = require('gulp-sass-glob');

sass.compiler = require('node-sass');

gulp.task('sass', function () {
  return gulp.src('./sass/**/*.scss')
    .pipe(sassGlob())
    .pipe(sass({outputStyle: 'expanded'}))
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./assets/css'));
});

gulp.task('sass:watch', function () {
  gulp.watch('./sass/**/*.scss', gulp.series('sass'));
});