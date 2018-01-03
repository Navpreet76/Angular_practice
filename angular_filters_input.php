<!DOCTYPE html>
<html>
<head>
<title>Angular filter based on input</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
<body>

<div ng-app="myApp" ng-controller="namesCtrl">

<p>Type a letter in the input field:</p>
<p><input type="text" ng-model="test"></p>

<ul>
	<li ng-repeat="x in names | filter:test">
		{{ x }}
	</li>
</ul>	
</div>

<script>
angular.module('myApp', []).controller('namesCtrl', function($scope){
	$scope.names = [
        'Michael',
        'Michelle',
        'Clark',
        'David',
        'Marcia',
        'Gustavo',
        'Teddy',
        'Janice',
        'Joe',
        'Veronica',
        'Rachel',
        'Carlos',
        'Kevin',
        'Mark',
        'Cain',
        'Stipe',
        'Holly',
        'Joanna',
        'Kimbo',
        'Iris',
        'Jared'
        ];
    });
	





</script>
</body>
</html>