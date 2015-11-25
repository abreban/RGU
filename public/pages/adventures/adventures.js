/**
 * Created by bogdan on 11/24/2015.
 */
"use strict";

app.controller("adventuresController", ["$scope", "AdventureService", function($scope, AdventureService){

   AdventureService.query({target: "all", action: ""}, function(response){
       $scope.data=response;
   });

   $scope.newUser={
      name:"Mirel",
      email:"mirel@gmail.com",
      password:"none",
      country_id:1
   };

   AdventureService.post({target: "new", action: ""}, $scope.newUser ,function(response){
      alert("Success!");
   });

}]);