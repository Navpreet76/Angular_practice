<!DOCTYPE html>
<html>
<head>
<title>Angular Directives</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
<body>
<div data-ng-app="" data-ng-init="quantity=1;price=5">
<h2>Cost Calculator</h2>	

Quantity: <input type="number" ng-model="quantity">
Price: <input type="number" ng-model="price">

<p><b>Total in Dollars:</b> {{ quantity * price }}</p>
<h1>ng-init used in this example</h1>



</div>
</body>
</html>