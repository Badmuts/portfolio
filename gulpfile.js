var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('sass', function () {
    gulp.src('./assets/css/sass/*.scss')
	.pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./assets/css'));
});

gulp.task('watch', function () {
	gulp.watch("./assets/css/sass/*.scss", ['sass']);
});
