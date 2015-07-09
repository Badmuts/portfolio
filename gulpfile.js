var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var karma = require('karma').server;

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
 * Run karma tests
 */
gulp.task('test', function (done) {
  karma.start({
    configFile: __dirname + '/tests/karma.conf.js',
    singleRun: true
  }, done);
});

/**
 * Watches for changes in files and runs corresponding task
 */
gulp.task('watch', function () {
	gulp.watch("./assets/css/sass/*.scss", ['sass']);
    gulp.watch(["./assets/js/*.js", "./tests/specs/*.js"], ['test']);
});
