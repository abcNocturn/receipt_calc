var receiptCalc = angular.module('receiptCalc', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('[{');
    $interpolateProvider.endSymbol('}]');
});

receiptCalc.filter('dateToISO', function() {
    return function(input) {
        var date = new Date(input);
        //return date.toISOString();
        return date.getDate()+"."+(date.getMonth()+1)+"."+date.getFullYear();
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
        console.log(laravelConfig.url_to + "/api/v1/bon/bon-last/" + $userid + "/" + $count);
        $http.get(laravelConfig.url_to + "/api/v1/bon/bon-last/" + $userid + "/" + $count)
            .error(function ($response) {
                alert("Keine Bons gefunden" + $response);
            })
            .success(function ($response) {
                console.log($response);
                $scope.lastBons = $response;
            });
    };

    $scope.saveBon = function ($userid,$amount,$date) {
        $amount = $amount.replace(",",".");
        $http.post(
            laravelConfig.url_to + "/api/v1/bon/insert",
            {"userid": $userid, "value": $amount, "date": $date}
        )
            .error(function ($response) {
                alert("Keine Bons gefunden" + $response);
            })
            .success(function ($response) {
                $scope.amount = "" ;
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

receiptCalc.controller('getStatisticsController',function ($scope, $http) {


    $scope.getDateRangeDiff = function ($user1,$user2, $date1, $date2) {

        console.log($date1);
        $http.get(laravelConfig.url_to + "/api/v1/stats/date-range-diff/" + $user1 + "/" + $user2 + "/" + $date1 + "/" + $date2)
            .error(function ($response) {
                alert("Keine Bons gefunden" + $response);
            })
            .success(function ($response) {
                console.log($response);
                $scope.dateRangeResult = $response;
            });
        $scope.showResult = true;
    };
});