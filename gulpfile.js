var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var uglify = require('gulp-uglify');
var cssnano = require('gulp-cssnano');
var runSequence = require('run-sequence');
var del = require('del');

gulp.task('sass', function(){
    return gulp.src('drewdoesthemes/sass/style.scss')
               .pipe(sass())
               .pipe(gulp.dest('drewdoesthemes/css'))
               .pipe(browserSync.reload({
                    stream: true
    }))
});

gulp.task('uglifyJs', function(){
    return gulp.src('drewdoesthemes/js/main.js')
    .pipe(uglify())
    .pipe(gulp.dest('dist/drewdoesthemes/js'))
});

gulp.task('minifyCss', function(){
    return gulp.src('drewdoesthemes/css/style.css')
    .pipe(cssnano())
    .pipe(gulp.dest('../dist/drewdoesthemes/css'))
});

gulp.task('clean:dist', function() {
    return del.sync('dist');
});

gulp.task('getDatPhp', function(){
    return gulp.src('drewdoesthemes/**/*.php')
    .pipe(gulp.dest('dist/drewdoesthemes'))
});
  
gulp.task('browserSync', function(){
    browserSync.init({
        host: "drewdoesdev.local",
        open: "external",
        proxy: "http://drewdoesdev.local:8888",
        snippetOptions: {
            ignorePaths: "wp-admin/**"
        }
    })
});

gulp.task('watch',['browserSync', 'sass'], function() {
    gulp.watch('drewdoesthemes/sass/**/*.scss', ['sass']);
    gulp.watch('drewdoesthemes/js/**/*.js', browserSync.reload);
    gulp.watch('drewdoesthemes/**/*.php', browserSync.reload);
});

gulp.task('build', function(callback){
    runSequence('clean:dist',
    [
        'sass', 
        'uglifyJs', 
        'minifyCss',
        'getDatPhp'
     ],
     callback
    )
})

gulp.task('default', function (callback) {
  runSequence([
      'sass',
      'browserSync',
      'watch'
    ],
    callback
  )
})