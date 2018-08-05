var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();


gulp.task('sass', function(){
    return gulp.src('sass/style.scss')
    .pipe(sass())
    .pipe(gulp.dest('css'))
    .pipe(browserSync.reload({
        stream: true
    }))
})

gulp.task('browserSync', function(){
    browserSync.init({
        host: "drewdoesdev.local",
        open: "external",
        proxy: "http://drewdoesdev.local:8888"
    })
})

gulp.task('watch',['browserSync', 'sass'], function() {
    gulp.watch('sass/**/*.scss', ['sass']);
})