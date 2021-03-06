<!DOCTYPE html>
<html>
<head>
<title>Angular with PHP and MySQL</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
<body>
<div ng-app="myApp" ng-controller="customersCtrl">
<table>
	<tr ng-repeat>
		<td>{{ x.Name }}</td>
		<td>{{ x.Country }}</td>
	</tr>
</table>
</div>

<script>
var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http){
	$http.get("customers_mysql.php")
	.then(function (response) {$scope.names = response.data.records;});
});
</script>
</body>
</html>