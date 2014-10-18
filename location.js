var app = angular.module('rhymeApp', []);
app.controller('indexCtrl', ['$scope', function($scope){
    $scope.nogeo = false;

    function getLocation(callback) {
        if (navigator.geolocation) {
            $scope.nogeo = false;
            navigator.geolocation.getCurrentPosition(callback);
        } else {
            $scope.nogeo = true;
        }
    }

    $scope.sendPoem = function(){
        getLocation(send);
    };

    $scope.getPoems = function(){
        getLocation(getp);
    };

    function send(position){
        //var send = true;
/*        $scope.nopoem = false;
        $scope.
        var poem = $('#submission').val();
        if(poem == ''){
            $('#nopoem').show();
            send = false;
        }
        $('#submission').val('');
        var author = $('#author').val();
        if(author == ''){
            $('#noauthor').show();
            send = false;
        }
        $('#author').val('');*/

        $.post('input.php', {"lat":position.coords.latitude, "long":position.coords.longitude, "submission": $scope.submission, "author": $scope.author}, function(data){
            console.log(data);
        });
    }

    function getp(position) {
        $.post('output.php', {"lat":position.coords.latitude, "long":position.coords.longitude}, function(data){
            console.log(data);
        });

        //  window.location.replace("input.php?lat="+position.coords.latitude+"&lon="+position.coords.longitude);
    }
}]);
