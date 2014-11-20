var x = document.getElementById("op");
function getLocation() {
    x.innerHTML = "Loading your location";
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
function showPosition(position) {
    //x.innerHTML = "Latitude: " + position.coords.latitude +
    //"<br>Longitude: " + position.coords.longitude;
    //x.innerHTML = "";
    //var a = document.createElement('a');
	//var linkText = document.createTextNode("find closest rack");
	//a.appendChild(linkText);
	//a.title = "";
	//a.href = "result.php?lat="+position.coords.latitude+"&lon="+position.coords.longitude;
	//document.body.appendChild(a);
    window.location.replace("result.php?lat="+position.coords.latitude+"&lon="+position.coords.longitude);
}