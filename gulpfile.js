var gulp = require('gulp');
var sass = require('gulp-sass')(require('sass'));

// compile sass.
gulp.task('sass', function() {
    return gulp.src('app/scss/style.scss')
    .pipe(sass())       // using gulp sass.
    .pipe(gulp.dest('.'))
});

// watch task.
gulp.task('watch', function() {
    gulp.watch('app/scss/**/*.scss', gulp.series('sass'));
});