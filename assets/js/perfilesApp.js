(function () {
    'use strict';

    var app = angular.module('PerfilesApp', []);
    app.controller('PerfilesCtrlr', function ($scope, $http) {
        $scope.perfilesImpositivos = new Array;
        var req = {
            method: 'GET',
            url: '/assets/js/perfiles.json',
            headers: {
                'Content-Type': 'application/json'
            },
            dataType: 'json',
        }
        $http(req).then(
            function success(response) {
                $scope.result = response.data;
                $scope.perfilesImpositivos = $scope.result;
            },
            function error(error) {
                console.log(error)
            }
        );
    })

}());