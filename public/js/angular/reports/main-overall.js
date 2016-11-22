
$(function () {
    $.plot("#donut-chart", donutData, {
        series: {pie: {show: true, radius: 1, innerRadius: 0.5, label: {show: true, radius: 2 / 3, formatter: labelFormatter, threshold: 0.1}}},
        legend: {show: false}
    });
    $.plot("#donut-chart2", donutData2, {
        series: {pie: {show: true, radius: 1, innerRadius: 0.5, label: {show: true, radius: 2 / 3, formatter: labelFormatter, threshold: 0.1}}},
        legend: {show: false}
    });
    $.plot("#donut-chart3", donutData3, {
        series: {pie: {show: true, radius: 1, innerRadius: 0.5, label: {show: true, radius: 2 / 3, formatter: labelFormatter, threshold: 0.1}}},
        legend: {show: false}
    });
});

function labelFormatter(label, series) {
    return '<div style="font-size:10px; text-align:center; padding:2px; color: #001F3F; font-weight: 800;">'
            + label
            + "<br>"
            + Math.round(series.percent) + "%</div>";
}

//MyApp

var reportsApp = angular.module('reportsApp', ['smart-table', 'chart.js'], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

reportsApp.controller('mainCtrl', ['$scope', '$http', function ($scope, $http) {

        $scope.total_houses = 0;
        $scope.total_households = 0;
        $scope.total_household_members = 0;
        $scope.rowCollection = [
            {barangay: 'Poblacion 1', houses: 500, households: 700, household_members: 1000},
            {barangay: 'Poblacion 2', houses: 200, households: 400, household_members: 700},
            {barangay: 'Poblacion 3', houses: 800, households: 900, household_members: 1000},
            {barangay: 'Poblacion 4', houses: 800, households: 900, household_members: 1000},
            {barangay: 'Poblacion 5', houses: 800, households: 900, household_members: 1000},
            {barangay: 'Poblacion 6', houses: 800, households: 900, household_members: 1000},
            {barangay: 'Poblacion 7', houses: 800, households: 900, household_members: 1000},
            {barangay: 'Poblacion 8', houses: 800, households: 900, household_members: 1000},
            {barangay: 'Poblacion 9', houses: 200, households: 900, household_members: 1000},
            {barangay: 'Poblacion 10', houses: 1800, households: 900, household_members: 1000},
            {barangay: 'Poblacion 11', houses: 800, households: 900, household_members: 1000},
            {barangay: 'Poblacion 12', houses: 800, households: 900, household_members: 1000},
            {barangay: 'Poblacion 13', houses: 800, households: 900, household_members: 1000},
            {barangay: 'Poblacion 14', houses: 800, households: 900, household_members: 1000},
            {barangay: 'Poblacion 15', houses: 800, households: 900, household_members: 1000},
            {barangay: 'Poblacion 16', houses: 800, households: 900, household_members: 1000},
            {barangay: 'Poblacion 17', houses: 800, households: 900, household_members: 1000},
            {barangay: 'Poblacion 18', houses: 800, households: 900, household_members: 1000},
            {barangay: 'Poblacion 19', houses: 800, households: 900, household_members: 1000},
            {barangay: 'Poblacion 20', houses: 800, households: 900, household_members: 1000},
            {barangay: 'Poblacion 21', houses: 800, households: 900, household_members: 1000}
        ];

        angular.forEach($scope.rowCollection, function (value, key) {
            $scope.total_houses += value.houses;
            $scope.total_households += value.households;
            $scope.total_household_members += value.household_members;
        });



    }]);

reportsApp.controller('seniorController', ['$scope', '$http', function ($scope, $http) {


        $scope.seniorCitizens = [
            {barangay: 'Poblacion 1', seniors: 500, percent: 0},
            {barangay: 'Poblacion 2', seniors: 200, percent: 0},
            {barangay: 'Poblacion 3', seniors: 800, percent: 0},
            {barangay: 'Poblacion 4', seniors: 800, percent: 0},
            {barangay: 'Poblacion 5', seniors: 800, percent: 0},
            {barangay: 'Poblacion 6', seniors: 800, percent: 0},
            {barangay: 'Poblacion 7', seniors: 800, percent: 0},
            {barangay: 'Poblacion 8', seniors: 800, percent: 0},
            {barangay: 'Poblacion 9', seniors: 200, percent: 0},
            {barangay: 'Poblacion 10', seniors: 1800, percent: 0},
            {barangay: 'Poblacion 11', seniors: 800, percent: 0},
            {barangay: 'Poblacion 12', seniors: 800, percent: 0},
            {barangay: 'Poblacion 13', seniors: 800, percent: 0},
            {barangay: 'Poblacion 14', seniors: 800, percent: 0},
            {barangay: 'Poblacion 15', seniors: 800, percent: 0},
            {barangay: 'Poblacion 16', seniors: 800, percent: 0},
            {barangay: 'Poblacion 17', seniors: 800, percent: 0},
            {barangay: 'Poblacion 18', seniors: 800, percent: 0},
            {barangay: 'Poblacion 19', seniors: 800, percent: 0},
            {barangay: 'Poblacion 20', seniors: 800, percent: 0},
            {barangay: 'Poblacion 21', seniors: 800, percent: 0}
        ];

        $scope.total_senior_citizens = 0;
        angular.forEach($scope.seniorCitizens, function (value, key) {
            $scope.total_senior_citizens += value.seniors;
        });

        $scope.getPercentage = function (row) {
            var total = 20;
            total = (row.seniors / $scope.total_senior_citizens * 100);
            return total;

        };
    }]);
reportsApp.controller('votersController', ['$scope', '$http', function ($scope, $http) {

        $scope.voters = [
            {barangay: 'Poblacion 1', voters: 1100, percent: 0},
            {barangay: 'Poblacion 2', voters: 200, percent: 0},
            {barangay: 'Poblacion 3', voters: 230, percent: 0},
            {barangay: 'Poblacion 4', voters: 800, percent: 0},
            {barangay: 'Poblacion 5', voters: 100, percent: 0},
            {barangay: 'Poblacion 6', voters: 10, percent: 0},
            {barangay: 'Poblacion 7', voters: 800, percent: 0},
            {barangay: 'Poblacion 8', voters: 800, percent: 0},
            {barangay: 'Poblacion 9', voters: 200, percent: 0},
            {barangay: 'Poblacion 10', voters: 11800, percent: 0},
            {barangay: 'Poblacion 11', voters: 200, percent: 0},
            {barangay: 'Poblacion 12', voters: 300, percent: 0},
            {barangay: 'Poblacion 13', voters: 250, percent: 0},
            {barangay: 'Poblacion 14', voters: 800, percent: 0},
            {barangay: 'Poblacion 15', voters: 800, percent: 0},
            {barangay: 'Poblacion 16', voters: 800, percent: 0},
            {barangay: 'Poblacion 17', voters: 830, percent: 0},
            {barangay: 'Poblacion 18', voters: 820, percent: 0},
            {barangay: 'Poblacion 19', voters: 900, percent: 0},
            {barangay: 'Poblacion 20', voters: 500, percent: 0},
            {barangay: 'Poblacion 21', voters: 810, percent: 0}
        ];
        $scope.total_voters = 0;
        angular.forEach($scope.voters, function (value, key) {
            $scope.total_voters += value.voters;
        });

        $scope.getVoterPercentage = function (row) {
            var total = 20;
            total = (row.voters / $scope.total_voters * 100);
            return total;

        };
    }]);
reportsApp.controller('employmentController', ['$scope', '$http', function ($scope, $http) {


        donutData = [
            {label: "Employed", data: 100, color: "#3c8dbc"},
            {label: "Unemployed", data: 120, color: "#0073b7"}
        ];
        donutData2 = [
            {label: "Worker", data: 200, color: "#7FB3D5"},
            {label: "Employee", data: 600, color: "#7FB3D5"},
            {label: "Self-Employed", data: 100, color: "#5499C7"},
            {label: "Director", data: 20, color: "#2980B9"},
            {label: "Office Holder", data: 80, color: "#2471A3"},
            {label: "OFW", data: 200, color: "#5DADE2"}
        ];
        donutData3 = [
            {label: "Finished Contract", data: 2000, color: "#7FB3D5"},
            {label: "Terminated - Local", data: 100, color: "#7FB3D5"},
            {label: "Resigned", data: 1000, color: "#5499C7"},
            {label: "Terminated - Abroad", data: 200, color: "#2980B9"}

        ];
    }]);
reportsApp.controller('skillsController', ['$scope', '$http', function ($scope, $http) {


    }]);