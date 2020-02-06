const gulp = require('gulp');
var fileinclude = require('gulp-file-include');
const browserSync = require('browser-sync').create();
const sass = require('gulp-sass');
var reload = browserSync.reload;

gulp.task('sass', () => {
    return gulp.src([
            'docs/sass/styles.scss'                               
        ])
        .pipe(sass({
            outputStyle: 'compact'
        }))
        .on('error', function (err) {
            console.log(err.toString());
            this.emit('end');
        })
        .pipe(gulp.dest('./docs/css'))
        .pipe(browserSync.stream());
});


gulp.task('js', () => {
    return gulp.src([           
        'node_modules/siema/dist/siema.min.js',
        'node_modules/wow.js/dist/wow.js',
        'node_modules/fslightbox/index.js'
       
        ])
        .pipe(gulp.dest('./docs/js'))
        .pipe(browserSync.stream());
});

gulp.task('fileinclude', function() {
    gulp.src([
        './docs/shared/*.html',
        '!./docs/shared/inc_*.html'
    ])
    .pipe(fileinclude({
        prefix:'@@',
        basepath: '@file'
    }))
    .pipe(gulp.dest('./docs/'))
    .pipe(browserSync.stream());
});


gulp.task('js-watch', ['js'], reload);
gulp.task('css-watch', ['sass'], reload);
gulp.task('include-watch', ['fileinclude'], reload);

gulp.task('server', ['sass', 'fileinclude'], () => {
    browserSync.init({
        server: './docs'
    });

    gulp.watch([
        './docs/sass/styles.scss',
        './docs/css/*.css'        
    ], ['css-watch']);

    gulp.watch([        
        './docs/js/*.js'
    ], ['js-watch']);

    gulp.watch([
        './docs/shared/*.html',
        './docs/*.html'
    ], ['include-watch'])

    .on('change', browserSync.reload);

});



gulp.task('default', ['js','fileinclude','server'])