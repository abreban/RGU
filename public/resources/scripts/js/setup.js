/**
 * Created by bogdan on 11/23/2015.
 */


"use strict";

var app=angular.module("app", ['ngRoute', 'ngResource']);


app.config(function($interpolateProvider, $routeProvider){

    $interpolateProvider.startSymbol('[[').endSymbol(']]');

    $routeProvider
        .when('/', {templateUrl: "pages/home/home.html", controller: 'homeController'})
        .when('/adventures', {templateUrl: "pages/adventures/adventures.html", controller: 'adventuresController'})
        .when('/addAdventure', {templateUrl: 'pages/adventures/addAdventure.html', controller: 'addAdventureController'})
        .when('/adventureDetails', {templateUrl: 'pages/adventures/adventureDetails.html', controller: 'adventureDetailsController'})
        .when('/authors',{templateUrl: 'pages/authors/authors.html', controller: 'authorsController'})
        .when('/authorDetails',{templateUrl: 'pages/authors/authorDetails.html', controller: 'authorDetailsController'})
        .when('/dashboard',{templateUrl: 'pages/admin/dashboard.html', controller: 'dashboardController'})
        .when('/userManagement',{templateUrl: 'pages/admin/userManagement.html', controller: 'userManagementController'})
        .when('/roleManagement', {templateUrl: 'pages/admin/roleManagement.html', controller: 'roleManagementController'})
        .when('/about', {templateUrl: 'pages/about/about.html', controller: 'aboutController'})
        .otherwise({ redirectTo: 'pages/home/home.html'});
});


