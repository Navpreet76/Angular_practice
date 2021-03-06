<!DOCTYPE html>
<html>
<head>
<title>Angular scope repeat</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
<body>

<div ng-app="myApp" ng-controller="myCtrl">

<ul>
	<li ng-repeat="x in names">{{ x }}</li>
</ul>
</div>

<script>
var app = angular.module('myApp', []);

app.controller('myCtrl', function($scope){
	$scope.names = ["Mario", "Emil", "Ferdinand", "Maybach", "Enzo", "Francisco"];
});	
</script>

<h4>The variable "x" has a different value for each repetition, proving that each repetition has its own scope.</h4>
</body>
</html>