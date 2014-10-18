
var lat;
var lon;
console.log("???");
alert("Hi");
getLocation(function(position) {
	    // this anonymous function will run when the
	    // callback is called
	    lat = position.coords.latitude;
	    lon = position.coords.longitude;
	    alert("callback called! ");
	});

$.getJSON( "result.php?lat="+lat+"&lon="+lon,function( data ) {
var items = [];
var index = 0;
$.each(data, function(){
	//console.log(data[index]["name"]);
	var name = data[index]["name"];
	
items.push("<li id='players'>"+name+""</li>");
index+=1;
});
var myNode = document.getElementById("map");
myNode.innerHTML = '';

 $("<ul/>", {
"class": "my-new-list",
html: items.join("")
}).appendTo(document.getElementById("map"));

});


