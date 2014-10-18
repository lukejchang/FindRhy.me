<?php


?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>FindRhy.me</title>
		<link href="index.css" type="text/css" rel="stylesheet" />
		<link rel="icon" href="" />
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
		<script src="location.js" type="text/javascript"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
		<script src="output.js"></script>
	</head>

	<body>
		<div class="header">
			<h1>FindRhy.me</h1>
			<h2>Output</h2>
		</div>
		<div id="map">
		</div>
		<div class="search">
			<form action="output.php" method="post">
				Re-Find Rhymes! <input type="submit" id="outputSubmit" />
			</form>
		</div>
		<div class="addPoem">
			<form action="input.php" method="post">
				<textarea rows="10" id="submission" name="submission" cols="50" placeholder="Enter your poems here to submit to this location!"></textarea>
				<input placeholder="Your name" type="text" id="author" name="author" />
				<input type="submit" id="poemSubmit" />
				

			</form>

		</div>
	</body>
</html>
