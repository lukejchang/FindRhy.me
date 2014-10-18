<?php


?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>FindRhy.me</title>
		<link rel="icon" type="image/png" href="img/favicon-01.jpg">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
		<script src="location.js" type="text/javascript"></script>


		<script src="output.js"></script>
		
		
	</head>

	<body>
		<div class="header">
			<a href="index.php"><img class="logo" src="img/logo-01.png"></a>
			<h1>Poems Near You</h1>
			<h2>DISCOVER . CREATE . SHARE</h2>
		</div>
        <div>
            The median income for this area is 44512.01 USD.
        </div>
		<div id="map">
		</div>
		<div class="search">
			<form action="output.php" method="post">
			 <input class="submit" type="submit" id="outputSubmit" value="RE-FIND RHYMES"/>

			</form>
		</div>
		<div class="footer">
			<h3>Created by Walter Ceder, Luke Jin-li Chang, Jenny Chen, & Helen Ung.</h3>
			DubHacks 2014 
		</div>
		<link href="output.css" type="text/css" rel="stylesheet"/>
	</body>
</html>
