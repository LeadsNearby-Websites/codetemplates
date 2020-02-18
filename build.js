'use strict';
require('@babel/register')({
  presets: ['@babel/preset-env'],
});

const gulp = require('gulp');
require('./gulpfile.js');

gulp.task('default')();
