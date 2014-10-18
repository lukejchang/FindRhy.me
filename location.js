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
    window.location.replace("input.php?lat="+position.coords.latitude+"&lon="+position.coords.longitude);
}