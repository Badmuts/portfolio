var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');

/**
 * Sass task reads *.scss files from the '/assets/css/sass/' directory and creates
 * a css file with sourcemap.
 */
gulp.task('sass', function () {
    gulp.src('./assets/css/sass/*.scss')
	.pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./assets/css'));
});

/**
 * Watches for changes in *.scss file form the 'assets/css/sass/' directory and
 * calls the 'sass' task.
 */
gulp.task('watch', function () {
	gulp.watch("./assets/css/sass/*.scss", ['sass']);
});
