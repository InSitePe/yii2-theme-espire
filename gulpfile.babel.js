import gulp from 'gulp';
import less from 'gulp-less';
import css from 'gulp-clean-css';
import rename from 'gulp-rename';
import uglify from 'gulp-uglify';
import concat from 'gulp-concat';

gulp.task('js:base', () => {
    return gulp.src([
        './vendor/bower/bootstrap/js/transition.js',
        './vendor/bower/bootstrap/js/alert.js',
        './vendor/bower/bootstrap/js/button.js',
        './vendor/bower/bootstrap/js/collapse.js',
        './vendor/bower/bootstrap/js/dropdown.js',
        './vendor/bower/bootstrap/js/modal.js',
        './vendor/bower/bootstrap/js/tooltip.js',
        './vendor/bower/bootstrap/js/popover.js',
        './vendor/bower/bootstrap/js/tab.js',
        './vendor/bower/bootstrap/js/affix.js'
    ])
            .pipe(uglify())
            .pipe(concat('base.min.js'))
            .pipe(gulp.dest('./dist/js'));
});
gulp.task('js', () => {
    return gulp.src(['./src/scripts/app.js'])
            .pipe(uglify())
            .pipe(rename({suffix: ".min"}))
            .pipe(gulp.dest('./dist/js'));
});

gulp.task('less', (cb) => {
    return gulp.src(['./src/styles/less/app.less', './src/styles/less/base.less'])
            .pipe(less())
            .pipe(css({compatibility: 'ie8'}))
            .pipe(rename({suffix: ".min"}))
            .pipe(gulp.dest('./dist/css'));
});

gulp.task('default', ['less', 'js:base', 'js']);