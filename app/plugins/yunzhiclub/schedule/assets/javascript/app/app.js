'use strict';
var app = angular.module('app', ['ui.router']);
app.config(function($stateProvider) {
    $stateProvider
        .state('main', {
            url: '',
            templateUrl: '/themes/yunzhiclub/assets/main.html'
        })

        .state('add', {
            url: '/add',
            templateUrl: '/themes/yunzhiclub/assets/add.html',
            // controller: 'StudentIndexCtrl',
            data: {
                title: '添加授课计划'
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