var app = angular.module('rhymeApp', []);
app.controller('indexCtrl', ['$scope', function($scope){

    $scope.init = function(){
        $scope.nogeo = false;
        $scope.success = false;
    };


    function getLocation(callback) {
        if (navigator.geolocation) {
            $scope.nogeo = false;
            navigator.geolocation.getCurrentPosition(callback);
        } else {
            $scope.nogeo = true;
        }
    }

    function clearForm(){
        $scope.success = false;
        $scope.submission = '';
        $scope.author = '';
        //$scope.addPoem.$setPristine();
        //$scope.$apply();
    }

    $('#closeModal').click(function(){
        clearForm();
    });
    $('#openModal').click(clearForm());

    $scope.sendPoem = function(form){
        form.$setPristine();
        getLocation(send);
    };

    $scope.getPoems = function(){
        getLocation(getp);
    };

    function send(position){
        $scope.lat = position.coords.latitude;
        $scope.long = position.coords.longitude;
        $.post('input.php', {"lat":$scope.lat, "long":$scope.long, "submission": $scope.submission, "author": $scope.author}, function(data){
            $scope.success= true;
            $scope.addPoem.$setPristine();
            $scope.$apply();
        });
    }

    function getp(position) {
        $.post('output.php', {"lat":position.coords.latitude, "long":position.coords.longitude}, function(data){
            console.log(data);
        });
    }


}]);
