<!DOCTYPE html>
<html>
<head>
<title>Using an object as a data source using AngularJS</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
<body>
<div ng-app="myApp" ng-controller="myCtrl">

<p>Select a car:</p>

<select ng-model="selectedCar" ng-options="x for (x, y) in cars">
</select>

<h1>You selected: {{ selectedCar }}</h1>	
</div>

<p>This example demonstrates the use of an object as the data source when creating a drowpdown list.</p>

<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope){
	$scope.cars = {
		car01 : "Ford",
		car02 : "Fiat",
		car03 : "Volvo"
	}
});	
</script>
</body>
</html>