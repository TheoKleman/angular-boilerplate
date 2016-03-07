// app.js

// define our application and pull in ngRoute
var app = angular.module('app', ['ngRoute']);

// ROUTING ===============================================
// set our routing for this application
// each route will pull in a different controller
app.config(function($routeProvider, $locationProvider) {

    $routeProvider
        // home page
        .when('/', {
            templateUrl: 'views/home.html',
            controller: 'homeCtrl'
        })

        // About page
        .when('/about', {
            templateUrl: 'views/about.html',
            controller: 'aboutCtrl'
        })

        .otherwise({'redirectTo':'/'});

    // use the HTML5 History API
    $locationProvider.html5Mode(true);
});
