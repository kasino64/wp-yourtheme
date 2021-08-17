var gulp = require('gulp');
var sass = require('gulp-sass')(require('node-sass'));

 

gulp.task('build-css', function() {
  return gulp.src('./src/*.scss')
  .pipe(sass({ includePaths: ['./node_modules'] }))
  .pipe(gulp.dest('./../css'));
});

gulp.task('watch-css', function() {
  gulp.watch('./src/',  gulp.series('build-css'));
});