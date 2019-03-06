'use strict';
alert('hi');
var app = angular.module('app', ['ui.router']);
app.config(function($stateProvider) {
    $stateProvider
        .state('course', {
            url: '/course',
            abstract: true,
            template: '<ui-view></ui-view>'
        })
        .state('course.add', {
            url: '/add',
            templateUrl: 'course/add.html'
        })

        .state('student', {
            url: '/student',
            templateUrl: 'student/index.html',
            controller: 'StudentIndexCtrl',
            data: {
                title: '学生管理'
            }
        })

        .state('data', {
            url: '/data',
            templateUrl: 'data/index.html',
            controller: 'DataIndexCtrl',
            data: {
                title: '系统设置 - 数据管理'
            }
        })
});