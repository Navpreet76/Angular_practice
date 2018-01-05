<!DOCTYPE html>
<html>
<head>
<style>
div {
	transition: all linear 0.5s;
	background-color: #00FF7F;
	height: 100px;
	width: 100%;
	position: relative;
	top: 0;
	left: 0;
}

.ng-hide {
	height: 0;
	width: 0;
	background-color: transparent;
	top: -200px;
	left: 200px;
}
</style>
<title>Angular Animation</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-animate.js"></script>
</head>
<body ng-app="ngAnimate">
<h1>Hide the div:<input type="checkbox" ng-model="myCheck" name=""></h1>

<div ng-hide="myCheck">
	<h4>This can be anything a paragraph an image a caption whatever</h4>
</div>

</body>
</html>