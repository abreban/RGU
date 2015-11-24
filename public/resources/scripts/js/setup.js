/**
 * Created by bogdan on 11/23/2015.
 */


"use strict";

var app=angular.module("app", ['ngRoute']);


app.config(function($interpolateProvider, $routeProvider){

    $interpolateProvider.startSymbol('[[').endSymbol(']]');

    $routeProvider
        .when('/', {templateUrl: "../public/pages/home/home.html", controller: 'homeController'})
        .when('/adventures', {templateUrl: "../public/pages/adventures/adventures.html", controller: 'adventuresController'})
        .when('/addAdventure', {templateUrl: '../public/pages/adventures/addAdventure.html', controller: 'addAdventureController'})
        .when('/adventureDetails', {templateUrl: '../public/pages/adventures/adventureDetails.html', controller: 'adventureDetailsController'})
        .when('/authors',{templateUrl: '../public/pages/authors/authors.html', controller: 'authorsController'})
        .when('/authorDetails',{templateUrl: '../public/pages/authors/authorDetails.html', controller: 'authorDetailsController'})
        .when('/dashboard',{templateUrl: '../public/pages/admin/dashboard.html', controller: 'dashboardController'})
        .when('/userManagement',{templateUrl: '../public/pages/admin/userManagement.html', controller: 'userManagementController'})
        .when('/roleManagement', {templateUrl: '../public/pages/admin/roleManagement.html', controller: 'roleManagementController'})
        .when('/about', {templateUrl: '../public/pages/about/about.html', controller: 'aboutController'})
        .otherwise({ redirectTo: '../public/pages/home/home.html'});
});


