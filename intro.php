<!DOCTYPE html>
<html>
<head>
<title>Angular Modules</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
<body>
<div ng-app="myApp" ng-controller="myCtrl">
{{ "Our top contender is " + firstName + " " + lastName + ". " + "He is more of a  " + fightStyle + "." + " He has " + wins + " wins and " + losses + " losses." }}
</div>

<script>
var app = angular.module("myApp", []);

app.controller("myCtrl", function($scope){
	$scope.firstName = "Junior";
	$scope.lastName = " Dos Santos";
	$scope.fightStyle = "Brawler";
	$scope.wins = "9";
	$scope.losses = "0";
});	





</script>
</body>
</html>