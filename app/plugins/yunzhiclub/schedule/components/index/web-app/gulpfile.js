const {series, src, dest, watch} = require('gulp');
const babel = require('gulp-babel');
const gulpif = require('gulp-if');
const uglify = require('gulp-uglify');
const del = require('del');
const concat = require('gulp-concat');
const jsFiles = ['app/*.js', 'app/**/*.js'];
const  htmlFiles = ['app/view/*.html', 'app/view/**/*.html'];
const watcherJs = watch(jsFiles);
const watcherHtml = watch(htmlFiles);
const dist = './../../../../assets/js';

function clean(cb) {
    console.log('删除临时文件');
    (async () => {
        await del('dist/');
        cb();
    })();
}

function build(cb) {
    console.log('正在构建');
    src(jsFiles)
        .pipe(babel())
        // .pipe(gulpif(isJavaScript, uglify()))
        .pipe(concat('index.min.js'))
        .pipe(dest(dist));
    cb();
}

function buildHtml(cb) {
    console.log('正在构建HTML');
    src(htmlFiles)
        .pipe(dest('./../../../../../themes/yunzhiclub/assets'));
    cb();
}

watcherJs.on('change', function () {
    console.log('监测到文件变化');
    build(function () {
        console.log('构建完毕!');
    });
});


watcherHtml.on('change', function () {
    console.log('监测到视图文件发生变化');
    buildHtml(function() {
        console.log('视图构建完毕');
    });
});

exports.build = build;

// 顺序执行series(), 并发执行parallel().两者可嵌套使用
exports.default = series(clean, build, buildHtml);