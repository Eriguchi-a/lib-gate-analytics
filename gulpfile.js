var gulp         = require('gulp'),
    browserSync  = require('browser-sync'),
    connect      = require('gulp-connect-php'),
    sass         = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer');
 


/**
 * connect server
 */
gulp.task('server', function() {
  connect.server({
    port:8001
  }, function (){
    browserSync({
        proxy: 'localhost:8001',
        notify: false

    });
  });
});

gulp.task('reload', function() {
    browserSync.reload();
});

/**
 * sass
 */
gulp.task('sass', function() {
    return gulp.src('./src/sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(gulp.dest('./dst/css/'))
        .pipe(browserSync.stream());
});

gulp.task('sass-watch', function() {
    gulp.watch('./src/sass/**/*.scss', gulp.series('sass'));
});



gulp.task("default", gulp.series(gulp.parallel('server', 'sass-watch')), function() {
    gulp.watch('./**/*.php', gulp.task('reload'));
});
