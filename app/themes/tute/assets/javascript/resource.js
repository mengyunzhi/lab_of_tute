'use strict';
var app = angular.module('app', [
    'ui.router'
]);

app.config(function ($stateProvider, $urlRouterProvider) {
    $stateProvider.state({
        name: '',
        url: '',
        controller: 'ResourceCtrl',
        data: {
            title: '教学资源'
        }
    }).state({
        name: 'handout',
        url: '/handout',
        templateUrl: '/themes/tute/assets/views/handout.html',
        data: {
            title: '实验讲义'
        }
    }).state({
        name: 'software',
        url: '/software',
        templateUrl: '/themes/tute/assets/views/software.html',
        data: {
            title: '软件下载'
        }
    }).state({
        name: 'menu',
        url: '/menu',
        templateUrl: '/themes/tute/assets/views/menu.html',
        data: {
            title: '实训大纲'
        }
    });
    $urlRouterProvider.otherwise('/');
});

app.controller('ResourceCtrl', function ($state) {
    $state.go('handout');
});
