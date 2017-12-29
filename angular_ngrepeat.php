<!DOCTYPE html>
<html>
<head>
<title>Angular Directives</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
<body>
<div ng-app="" ng-init="contenders=['Navpreet', 'Atlas', 'Bowser', 'Mario', 'Ihsahn', 'Kai']">
<p>looping with ng-repeat:</p>
<ul>
	<li ng-repeat="x in contenders">
		{{ x }}
	</li>

</ul>
</div>
</body>
</html>