import gulp from 'gulp';
import yargs from 'yargs'
import sass from 'gulp-sass'
import cleanCSS from 'gulp-clean-css'
import gulpif from 'gulp-if'
import cssbeautify from 'gulp-cssbeautify'
import sourcemaps from 'gulp-sourcemaps'
import imagemin from 'gulp-imagemin'
import del from 'del'
import webpack from 'webpack-stream'
import uglify from 'gulp-uglify'
import named from 'vinyl-named'
import browserSync from 'browser-sync'
import zip from 'gulp-zip'
import replace from 'gulp-replace'
import info from './package.json'

const PRODUCTION = yargs.argv.prod;

const paths = {
    styles: {
        src : ['assets/scss/style.scss', 'assets/scss/admin.scss'],
        dest: 'assets/css'
    },
    images: {
        src : 'assets/images/**/*.{jpg,jpeg,png,svg,gif}',
        dest: 'assets/images'
    },
    other: {
        src : ['assets/**/*', '!assets/{images,js,scss}', '!assets/{images,js,scss}/**/*'],
        dest: 'assets'
    },
    scripts: {
        src : ['assets/js/bundle.js', 'assets/js/admin.js', 'assets/js/customize-preview.js'],
        dest: 'assets/js'
    },
    package: {
        src : ['**/*', '!package.json', '!package-lock.json', '!node_modules{,/**}', '!src{,/**}', '!.git{,/**}', '!.babelrc', '!.gitignore', '!gulpfile.babel.js', '!packaged{,/**}'],
        dest: 'packaged'
    }
};

const server = browserSync.create();
export const serve = (done) => {
    server.init({
        proxy: `http://localhost/${info.name}/`
    });
    done()
}

export const reload = (done) => {
    server.reload();
    done();
}

export const clean = () => del(['dist']);
export const clean_packaged = () => del(['packaged']);

export const styles = () => {
    return gulp.src(paths.styles.src)
        .pipe(gulpif(!PRODUCTION, sourcemaps.init()))
        .pipe(sass().on('error', sass.logError))
        .pipe(gulpif(PRODUCTION, cleanCSS({compatibility: 'ie8'})))
        .pipe(gulpif(!PRODUCTION, cssbeautify()))
        .pipe(gulpif(!PRODUCTION, sourcemaps.write()))
        .pipe(gulp.dest(paths.styles.dest))
        .pipe(server.stream())
}

export const images = () => {
    return gulp.src(paths.images.src)
        .pipe(gulpif(PRODUCTION, imagemin()))
        .pipe(gulp.dest(paths.images.dest))
}

export const copy = () => {
    return gulp.src(paths.other.src)
        .pipe(gulp.dest(paths.other.dest))
}

export const scripts = () => {
    return gulp.src(paths.scripts.src)
        .pipe(named())
        .pipe(webpack({
            module: {
                rules: [
                    {
                        test: /\.js$/,
                        use: {
                            loader: 'babel-loader',
                            options: {
                                presets: ['babel-preset-env']
                            }
                        }
                    }
                ],
            },
            optimization: {
                minimize: false
            },
            externals: {
                jquery: 'jQuery'
            },
            devtool: !PRODUCTION ? '#inline-source-map' : false,
        }))
        .pipe(gulpif(PRODUCTION, uglify()))
        .pipe(gulp.dest(paths.scripts.dest))
}

export const watch = () => {
    gulp.watch('assets/scss/**/*.scss', styles);
    // gulp.watch('assets/js/**/*.js', gulp.series(scripts, reload));
    // gulp.watch(paths.images.src, gulp.series(images, reload));
    // gulp.watch(paths.other.src, gulp.series(copy, reload));
    // gulp.watch('**/*.php', reload);
}

export const compress = () => {
    return gulp.src(paths.package.src)
        .pipe(replace('_themename', info.name))
        .pipe(replace('_THEMENAME', info.name.toUpperCase()))
        .pipe(replace('_Themename', info.name.charAt(0).toUpperCase() + info.name.slice(1)))
        .pipe(zip(`${info.name}.zip`))
        .pipe(gulp.dest(paths.package.dest))
}

export const dev = gulp.series(clean, gulp.parallel(watch));
export const build = gulp.series(clean, gulp.parallel(styles, scripts, images, copy));
export const bundle = gulp.series(clean_packaged, build, compress);

export default dev;
