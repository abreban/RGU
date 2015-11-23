/**
 * Created by bogdan on 11/23/2015.
 */
"use strict";
var app=angular.module("app", []);
app.controller("TestController", ["$scope", function($scope) {
    $scope.test="test";
}]);