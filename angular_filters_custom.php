<!DOCTYPE html>
<html>
<head>
<title>Angular Custom filters</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
<body>
<ul ng-app="myApp" ng-controller="namesCtrl">

<li ng-repeat="x in names">
	{{ x | myFormat }}
</li>
</ul>

<script>
var app = angular.module('myApp', []);
app.filter('myFormat', function(){
	return function(x){
		var i, c, txt = "";
		for(i = 0; i < x.length; i++){
			c = x[i];
			if(i % 2 == 0){
				c = c.toUpperCase();
			}
			txt += c;
		}
		return txt;
	};
});
app.controller('namesCtrl', function($scope){
	$scope.names = [
		'Michael',
		'Kevin',
		'Hailey',
		'Kiko',
		'Gordon',
		'Miles',
		'Isaac',
		'Jeff',
		'Adam',
		'Trey',
		'Tracy',
		'Elizabeth'
	];
});
</script>
<p>Make your own filters!!</p>
<h4>This filter, called "myFormat" will uppercase every other character.</h4>

</body>
</html>