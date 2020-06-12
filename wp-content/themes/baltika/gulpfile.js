const gulp = require('gulp');
const $ = require('gulp-load-plugins')();
const browserSync = require('browser-sync').create();


gulp.task('watch', function () {
    gulp.watch(['./assets/css/style.scss']).on('change', browserSync.reload);
    gulp.watch(['./assets/js/app.js']).on('change', browserSync.reload);
    gulp.watch(['./*.php', './sections/*.php']).on('change', browserSync.reload);

    browserSync.init({
        proxy: "http://localhost/baltika",
        browser: "Google Chrome",
    });
});

gulp.task('default', ['watch']);