<!DOCTYPE html>
<html>
<head>
<title>Angular location service</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
<body>

<div ng-app="myApp" ng-controller="myCtrl">

<p>The URL of this page is :</p>
<h3>{{ myUrl }}</h3>
</div>

<p>This example uses the built in $location service to get the absolute URL of the page.</p>

<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $location){
	$scope.myUrl = $location.absUrl();
});	
</script>
</body>
</html>