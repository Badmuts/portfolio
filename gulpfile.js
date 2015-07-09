var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var karma = require('karma').server;

gulp.task('sass', function () {
    gulp.src('./assets/css/sass/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./assets/css'));
});

/**
 * Run test once and exit
 */
gulp.task('test', function (done) {
  karma.start({
    configFile: __dirname + '/tests/karma.conf.js',
    singleRun: true
  }, done);
});

gulp.task('watch', function () {
	gulp.watch("./assets/css/sass/*.scss", ['sass']);
    gulp.watch("./assets/js/*.js", ['test']);
});
