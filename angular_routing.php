<!DOCTYPE html>
<html>
<head>
<title>Angular Routing</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>
</head>
<body ng-app="myApp">

<h2>Angular routing</h2

>
<p><a href="#/!">Main</a></p>

<a href="#!red">Red</a>
<a href="#!blue">Blue</a>
<a href="#!green">Green</a>
<a href="#!yellow">Yellow</a>
<a href="#!purple">Purple</a>

<!-- <a href="#!orange"></a>
<a href="#!purple"></a> -->

<div ng-view></div>

<script>
var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider){
	$routeProvider
	.when("/", {
		templateUrl : "main.htm"
	})
	.when("/red", {
		templateUrl : "red.htm"
	})
	.when("/green", {
		templateUrl : "green.htm"
	})
	.when("/blue", {
		templateUrl : "blue.htm"
	})
	.when("/yellow", {
		templateUrl : "yellow.htm"
	})
	.when("/purple", {
		templateUrl : "purple.htm"
	});
});
</script>

<p>Click on the links to navigate to "red.htm", "green.htm", "blue.htm", "yellow.htm", "purple.htm" or back to "main.htm"</p>
</body>
</html>