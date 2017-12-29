<!DOCTYPE html>
<html>
<head>
<title>Angular CSS Classes</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<style>
input.ng-invalid{
	background-color: #00FF7F;
}
</style>
</head>
<body>

<form ng-app="" name="myForm">
	Enter your name: 
	<input name="myName" ng-model="mytext" required>
</form>
<h2>The ng-model directive provides CSS Classes for HTML elements, depending on their status.</h2>

</body>
</html>