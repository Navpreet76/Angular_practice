<!DOCTYPE html>
<html>
<head>
<title>Angular select object</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
<body>
<div ng-app="myApp" ng-controller="myCtrl">

<p>Select a Car:</p>

<select ng-model="selectedCar" ng-options="x for (x, y) in cars">
</select>

<h2>You selected: {{ selectedCar.brand }}</h2>
<h2>Model: {{ selectedCar.model }}</h2>
<h2>Color: {{ selectedCar.color }}</h2>

<p>Note that the selected value represents an object</p>
</div>

<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope){
	$scope.cars = {
		car01 : {brand: "Ford", model : "Mustang", color : "Red"},
		car02 : {brand: "Fiat", model : "500", color : "White"},
		car03 : {brand: "Volvo", model : "XC90", color : "Black"}
	}
});
</script>
</body>
</html>