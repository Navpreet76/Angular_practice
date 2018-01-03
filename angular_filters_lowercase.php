<!DOCTYPE html>
<html>
<head>
<title>Angular filter lowercase</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
<body>
<div ng-app="myApp" ng-controller="personCtrl">

<p>The name is {{ lastName | lowercase }}</p>
	
</div>

<script>
angular.module('myApp', []).controller('personCtrl', function($scope){
	$scope.firstName = "Navpreet",
	$scope.lastName = "Chhina"	
});	
</script>

</body>
</html>