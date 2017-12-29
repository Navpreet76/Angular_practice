<!DOCTYPE html>
<html>
<head>
<title>Angular CSS Classes</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
<body>
<div ng-app="myApp" ng-controller="myCtrl">

<input ng-model="name">
<h1>My name is {{ name }}</h1>
</div>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope){
	$scope.name = "John Doe";
});
</script>

<h3>When you change the name in the input field, the changes will affect the model, and it will also affect the name property in the controller.</h3>




</body>
</html>