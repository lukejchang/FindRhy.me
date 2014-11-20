<?php 
	// This page inputs post data into the database, then redirects back to the index page.
	if (isset($_POST["submission"]) && isset($_POST["author"]) && isset($_POST["lat"]) && isset($_POST["long"])) {
		$submission = $_POST["submission"];
		$author = $_POST["author"];
    	//echo $submission;
		$lat = $_POST["lat"];
		$lon = $_POST["long"];
		$db = new PDO("mysql:dbname=cederw_findrhyme;host=localhost","cederw_luke","nooba");
    	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	// does the file exist? will overwrite if so. maybe change in future
        $filename = "submissions/" . time('Y-m-d') . ".txt";
    	$file = file_put_contents($filename, $submission);
        //$timezone = file_get_contents('http://api.geonames.org/timezone?lat=' + $lat + '&lng=' + $lon + '&username=findrhyme' + $lat + ',' + $lon);
        $time = date('U');
        $weather = file_get_contents('https://api.forecast.io/forecast/b0693f7cf1215024240ba17bee0bf0a7/' . $lat . ',' . $lon . ',' . $time);
        $weather = json_decode($weather);
        $desc = $weather->currently->summary;
        $temp = $weather->currently->temperature;
    	$query = "INSERT INTO main Values(NULL, '$lat', '$lon', '$author', '$filename', '$time', '$desc', '$temp'  );";
        print($query);
        $res = $db->query($query);
        if(!$res){
            print "fuk u";
        }
    	//header('Location: index.php');
	} else{
		print_r($_POST); // pls don't reach here
	}

?>
