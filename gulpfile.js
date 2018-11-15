/*
//gulp.src - point to files and folders
//gulp dest- where to place the compiele files
//gulp tast- defie a task
//gulp watch - watches files and folders
//gulp rowser sync - b
*/


const gulp         = require('gulp');
const browserSync  = require('browser-sync').create();
const sass         = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');

// Compile Sass & Inject Into Browser
gulp.task('sass', function() {
    return gulp.src(['caribmat3rdNov2018/scss/*.scss'])
        .pipe(sass())
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest("caribmat3rdNov2018/style.css"))
        .pipe(browserSync.stream());
});


// Watch Sass & Serve
gulp.task('serve', ['sass'], function() {
    browserSync.init({
        proxy: 'http://localhost/wordpress/', 
    });

    gulp.watch(['caribmat3rdNov2018/scss/*.scss'], ['sass']);
    gulp.watch("caribmat3rdNov2018/*.html").on('change', browserSync.reload);
});


