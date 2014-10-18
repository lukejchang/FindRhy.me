<?php 
	if (isset($_POST["submission"]) && isset($_POST["author"]) && isset($_POST["lat"]) && isset($_POST["long"])) {
		$submission = $_POST["submission"];
		$author = $_POST["author"];
		$lat = $_POST["lat"];
		$long = $_POST["long"];
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>FindRhy.me</title>
		<link href="index.css" type="text/css" rel="stylesheet" />
		<link rel="icon" href="" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
	</head>

	<body>
		<div class="header">
			<h1>FindRhy.me</h1>
			<h2>Results</h2>
		</div>
		<div id="map">
		</div>

		<div id="poems">
<?php 	
		echo($submission);
		echo($author);
	}
?>
		</div>

		<div 

		</form>

		
	</body>
</html>