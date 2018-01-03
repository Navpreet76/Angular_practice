<!DOCTYPE html>
<html>
<head>
<title>Angular currency filter</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
<body>

<div ng-app="myApp" ng-controller="costCtrl">

<h1> Price: {{ price | currency }}</h1>

</div>

<script>
var app = angular.module('myApp', []);
app.controller('costCtrl', function($scope){
	$scope.price = 799;
});	
</script>

<h4>The currency filter formats a number to a currency format.</h4>
</body>
</html>