var gulp = require('gulp');
var sass = require('gulp-sass')(require('sass'));

gulp.task('sass', function() {
    return gulp.src('app/scss/style.scss')
    .pipe(sass())       // using gulp sass.
    .pipe(gulp.dest('.'))
});