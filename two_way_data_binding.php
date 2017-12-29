<!DOCTYPE html>
<html>
<head>
<title>Angular CSS Classes</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
<body>

<div ng-app="myApp" ng-controller="myCtrl">
	Name: <input ng-model="firstname">
	<h1>{{ firstname  + " " + lastname }}</h1>
</div>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope){
	$scope.firstname = "Navpreet";
	$scope.lastname = "Chhina";
});	
</script>

<h2>Change the name inside the input field and the model data will change automatically, and therefore also the header will change its value.</h2>
</body>
</html>