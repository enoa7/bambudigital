var gulp = require('gulp');
var plumber = require('gulp-plumber');
var less = require('gulp-less');
var rename = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var concat = require('gulp-concat');
var browserSync = require('browser-sync');
var reload = browserSync.reload;


/* path to wp custom theme */

/* ========================================================
 * Tasks with Browser Sync
 * ======================================================== */
gulp.task('browserSync', function() {

    var files = [
        '*.html',
        '*.php',
        './less/*.less',
        './less/**/.less',
        '*.css'
    ];

    browserSync.init(files, {
        proxy: "http://localhost/bambudigital/app/index.php",
        notify: 'false'
    });
});

gulp.task('less', function() {
    return gulp.src('./less/main.less')
        .pipe(plumber({
            errorHandler: function (err) {
                console.log(err);
                this.emit('end');
            }
        }))
        .pipe(sourcemaps.init())
        .pipe(less({ compress: true }))
        .pipe(rename({
            basename: 'main',
            suffix: '.min'
        }))
        .pipe(autoprefixer())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./')) //output the file at root (app/)
        .pipe(reload({ stream: true }));
});

// concat and compressed js files
gulp.task('js', function() {
    return gulp.src([
            './node_modules/jquery/dist/jquery.min.js',
            './node_modules/jquery.cookie/jquery.cookie.js',
            './node_modules/bootstrap-less/bootstrap/js/bootstrap.min.js',
            './js/*.js'
        ])
        .pipe(concat('main.js'))
        .pipe(rename({
            basename: 'main',
            suffix: '.min'
        }))
        .pipe(gulp.dest('./'))
        .pipe(reload({ stream: true }));
});


gulp.task('default', ['less', 'js', 'browserSync'], function() {
    gulp.watch('*.less', {cwd: 'less'}, ['less']);
    gulp.watch('**/*.less', {cwd: 'less'}, ['less']);
    gulp.watch('*.js', {cwd: 'js'}, ['js']);
});


gulp.task('dist', function() {
    return gulp.src([
        'images/**/*',
        'php/*',
        'index.php',
        'main.min.js',
        'main.min.css',
    ], { base: './'})
    .pipe(gulp.dest('../dist'));
});