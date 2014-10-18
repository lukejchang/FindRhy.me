<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>FindRhy.me</title>
		<link href="index.css" type="text/css" rel="stylesheet" />
		<link rel="icon" href="" />
	</head>

	<body>
		<h1>FindRhy.me</h1>
		<div id="map"></div>
		<form action="output.php" method="post">
			Find Rhymes! <input type="submit" />
		</form>
		<form action="input.php" method="post">
			<textarea id="submission" name="submission" rows="10" cols="50" 
					placeholder="Enter your poems here to submit to this location!"></textarea>
			<input placeholder="Your name" type="text" id="author" name="author" />
			<input type="submit" />
		</form>

		
	</body>
</html>