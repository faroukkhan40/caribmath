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

// start browserSync sync
gulp.task('browserSync', function() {
	browserSync.init({ 
		
        proxy: 'http://localhost/wordpress/',
        
                  });
    });
    
    // compiling sass to the style.css
    gulp.task('sass', function() {   
        gulp.src('caribmat3rdNov2018/sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('caribmat3rdNov2018'))
        .pipe(browserSync.stream());
});

// Watch everything
gulp.task('watch',['browserSync','sass'], function() {
	
    gulp.watch('caribmat3rdNov2018/sass/**/*.scss',['sass']);
    gulp.watch("caribmat3rdNov2018/*.html").on('change', browserSync.reload);
    gulp.watch(root + '**/*').on('change', browserSync.reload);
	
});

// Watch everything
gulp.task('default',['browserSync','sass','watch']);




