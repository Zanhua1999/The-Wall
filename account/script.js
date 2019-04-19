var app = angular.module('nerdive', []);
app.controller('neriveCtrl', function($scope) {
  $scope.page = 'Dashboard';
  $scope.showPage = function(){
    return 'show' + $scope.page;
  }
});