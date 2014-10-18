if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
} else {
alert("Geolocation is not supported by this browser.");
}
function showPosition(position) {


    var lat = position.coords.latitude;
    var lon = position.coords.longitude;


    $.getJSON("result.php?lat=" + lat + "&lon=" + lon, function (data) {

        var items = [];
        var index = 0;
        $.each(data, function () {
            //console.log(data[index]["name"]);
            var name = data[index]["name"];
            var file = data[index]["file"];
            items.push("<li class='name' id='output'>" + name + "</li>");
            items.push("<pre class='poems' id='" + name + "'></pre>");
            populatePre(file, name);
            index += 1;
        });
        $('#loading').hide();
        //loadDemo(lat, lon);
        if (index == 0) {
            items.push("<li class='poemError' id='output'>No results near here, you can be the first to <a href='index.php'>write about this location.</a></li>");
        }
        console.log("index = " + index);
        var myNode = document.getElementById("map");
        myNode.innerHTML = '';

        $("<ul/>", {
            "class": "my-new-list",
            html: items.join("")
        }).appendTo(document.getElementById("map"));

    });
}

function loadDemo(lat, lng){
    console.log("get demo");
    /*var geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(lat, lng);
    geocoder.geocode({'latLng': latlng}, function(results, status) {*/
        $.get('zillow.php', function(data){
            medianIncome(data);
        });
        /*if(status == google.maps.GeocoderStatus.OK){
            console.log(JSON.stringify(results));
            for(var i =0; i < results.length; i++){
                if(results[i].types[0] == 'postal_code'){
                    var zip = results[i].address_components[0].long_name;
                    console.log(zip);
                }
            }
        }else{
            alert('Geocoder failed due to: ' + status);
        }*/
    //});
}

function medianIncome(xml){
    /*xmlDoc = $.parseXML( xml ),
        $xml = $( xmlDoc ),
        $title = $xml.find( "Median Household Income" );
    console.log($title.text());*/

}


function populatePre(url, name) {
    var xhr = new XMLHttpRequest();
    xhr.onload = function () {
        document.getElementById(name).textContent = this.responseText;
    };
    xhr.open('GET', url);
    xhr.send();
}

/*function loadScript() {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&' +
    'callback=initialize';
    document.body.appendChild(script);
}

window.onload = loadScript;*/

