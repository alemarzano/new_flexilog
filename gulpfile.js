const gulp = require('gulp');
const browserSync = require('browser-sync').create();
const sass = require('gulp-sass');
var nunjucksRender = require('gulp-nunjucks-render');
var reload = browserSync.reload;

gulp.task('sass', () => {
    return gulp.src([
            'docs/sass/styles.scss'                               
        ])
        .pipe(sass({
            outputStyle: 'expanded'
        }))
        .on('error', function (err) {
            console.log(err.toString());
            this.emit('end');
        })
        .pipe(gulp.dest('./docs/css'))
        .pipe(browserSync.stream());
});

gulp.task('nunjucks', function() {
    return gulp.src('docs/pages/**/*.+(html|njk)')
    .pipe(nunjucksRender({
        path:['docs/templates'],
        watch:true,
    }))
    .pipe(gulp.dest('./docs'))
});

gulp.task('js', () => {
    return gulp.src([           
        'node_modules/siema/dist/siema.min.js',
        'node_modules/wow.js/dist/wow.js',
        ])
        .pipe(gulp.dest('./docs/js'))
        .pipe(browserSync.stream());
});


gulp.task('js-watch', ['js'], reload);
gulp.task('css-watch', ['sass'], reload);
gulp.task('nunjucks-watch', ['nunjucks'], reload);

gulp.task('server', ['sass'], () => {
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
        'docs/pages' + '/**/*.+(html|njk)',
        'docs/templates' + '/**/*.+(html|njk)'
    ], ['nunjucks']);

    gulp.watch('./docs/*.html')
    .on('change', browserSync.reload);

});



gulp.task('default', ['js','nunjucks','server'])