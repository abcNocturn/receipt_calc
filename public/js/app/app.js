var receiptCalc = angular.module('receiptCalc', [],function($interpolateProvider) {
    $interpolateProvider.startSymbol('[{');
    $interpolateProvider.endSymbol('}]');
});

receiptCalc.directive("appConfig", function() {
    return {
            text: "@text"
    };
});

receiptCalc.controller('insertBonController', function ($scope, $http) {
    $scope.userlist = [];
    $scope.lastBons = [];

    $http.get("api/v1/user/all-users/")
        .error(function (response) {
           alert("asdasd");
        })
        .success(function (response) {
            console.log(response);
        });

    $scope.getLastBons = function ($scope,$count) {
        $http.get("api/v1/bon/bon-last/"+$count)
            .error(function ($response) {
                alert("Keine Bons gefunden"+ $response);
            })
            .success(function ($response) {
                console.log($response);
                $scope.lastBons = $response ;
            });
    };

});