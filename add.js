var app = angular.module('myModule', []);
app.controller("MyController", ["$scope", "$http", function($scope, $http) {

    $scope.doSave = function() {
        var params = { name: 'angular test' };

        $http.post("add.php", params)
            .then(function(data) {
                console.log(params);
                console.log(data);
            })
    }
}]);