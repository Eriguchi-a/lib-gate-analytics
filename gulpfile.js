var gulp         = require('gulp'),
    browserSync  = require('browser-sync'),
    connect      = require('gulp-connect-php'),
    sass = require('gulp-sass');
 
gulp.task('server', function() {
  connect.server({
    port:8001
  }, function (){
    browserSync({
      proxy: 'localhost:8001'
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
    gulp.src('./src/sass/**/*.scss')
        .pipe(sass({ outputStyle: 'expanded' }))
        .pipe(gulp.dest('./dst/css/'));
});



gulp.task("default", ['connect-sync'], function() {
    gulp.watch("./**/*.php", ["reload"]);
    var watcher = gulp.watch('./src/sass/**/*.scss', ['sass', 'reload']);
    watcher.on('change', function(event) {
    });
});
