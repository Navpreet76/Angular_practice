<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<body>

<div ng-app="myApp" ng-controller="namesCtrl">

<p>Looping with objects:</p>
<ul>
  <li ng-repeat="x in names | orderBy:'country'">
    {{ x.name + ', ' + x.country }}
  </li>
</ul>

</div>

<script>
angular.module('myApp', []).controller('namesCtrl', function($scope) {
    $scope.names = [
        {name:'Michael',country:'Germany'},
        {name:'Ivan',country:'Russia'},
        {name:'Margareth',country:'England'},
        {name:'Helmut',country:'Germany'},
        {name:'Joe',country:'USA'},
        {name:'Gustavo',country:'Spain'},
        {name:'Ingrid',country:'Sweden'},
        {name:'Mary',country:'England'},
        {name:'Kai',country:'USA'},
        {name:'Philip',country:'USA'},
        {name:'Javier',country:'Spain'},
        {name:'Nico',country:'Serbia'},
        {name:'Lucky',country:'Italy'},
        {name:'Dominic',country:'USA'},
        {name:'Sergio',country:'Italy'},
        {name:'Valentino',country:'Italy'}
        ];
});
</script>

</body>
</html>
