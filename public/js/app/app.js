var receiptCalc = angular.module('receiptCalc', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('[{');
    $interpolateProvider.endSymbol('}]');
});

receiptCalc.filter('dateToISO', function() {
    return function(input) {
        input = new Date(input).toISOString();
        return input;
    };
});

receiptCalc.controller('insertBonController',function ($scope, $http) {

    $scope.userlist = [];
    $scope.lastBons = [];
    $scope.lastBonsLimit = 10;

    $http.get(laravelConfig.url_to + "/api/v1/user/all-users")
        .error(function (response) {
        })
        .success(function (response) {
            $scope.userlist = response;
        });

    $scope.getLastBons = function ($userid, $count) {
        if ($count == false) {
            $count = $scope.lastBonsLimit;
        }
        $http.get(laravelConfig.url_to + "/api/v1/bon/bon-last/" + $userid + "/" + $count)
            .error(function ($response) {
                alert("Keine Bons gefunden" + $response);
            })
            .success(function ($response) {
                console.log($response);
                $scope.lastBons = $response;
            });
    };

    $scope.saveBon = function ($userid, $amount) {
        $http.post(
            laravelConfig.url_to + "/api/v1/bon/insert",
            {"userid": $userid, "value": $amount}
        )
            .error(function ($response) {
                alert("Keine Bons gefunden" + $response);
            })
            .success(function ($response) {
                $scope.getLastBons($userid, $scope.lastBonsLimit);
            });
    };

    $scope.deleteBon = function ($bonid) {
        $http.delete(
            laravelConfig.url_to + "/api/v1/bon/delete/" + $bonid
        )
            .error(function ($response) {
                alert("Keine Bons gefunden" + $response);
            })
            .success(function ($response) {
                $scope.getLastBons($scope.selectedUser, $scope.lastBonsLimit);
            });
    };

});