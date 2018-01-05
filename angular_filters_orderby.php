<!DOCTYPE html>
<html>
<head>
<title>Angular JS filters Order By</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
<body>
<p>Click the table headers to change the sorting order.</p>
<div ng-app="myApp" ng-controller="namesCtrl">

<table border="1" width="100%">
<tr>
	<th ng-click="orderByMe('name')">Name</th>
	<th ng-click="orderByMe('country')">Country</th>
</tr>

<tr ng-repeat="x in names | orderBy:myOrderBy">
	<td>{{ x.name }}</td>
	<td>{{ x.country }}</td>
</tr>
</table>
</div>

<script>
angular.module('myApp', []).controller('namesCtrl', function($scope){
	$scope.names = [
		{name:'Wayne Rooney', country:'England'},
		{name:'Steven Gerard', country:'England'},
		{name:'Garreth Bale', country:'Scotland'},
		{name:'Lionel Messi', country:'Argentina'},
		{name:'Christiano Ronaldo', country:'Portugal'},
		{name:'Sergio Aguerro', country:'Argentina'},
		{name:'Andres Iniesta', country:'Spain'},
		{name:'Xavi', country:'Spain'},
		{name:'David Villa', country:'Spain'},
		{name:'Neymar Jr', country:'Brazil'},
		{name:'Hulk', country:'Brazil'},
		{name:'Nani', country:'Portugal'},
		{name:'kaka', country:'Brazil'},
		{name:'Ashley Young', country:'England'},
		{name:'Edinson Cavani', country:'Uruguay'},
		{name:'Luis Suarez', country:'England'},
		{name:'Hugo Almeida', country:'Portugal'}
	];
	$scope.orderByMe = function(x){
		$scope.myOrderBy = x;
	}
});	
</script>
</body>
</html>