<?php


?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>FindRhy.me</title>
		<link rel="icon" type="image/png" href="img/favicon-01.png">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<link href="output.css" type="text/css" rel="stylesheet"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
		<script src="location.js" type="text/javascript"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<script src="output.js"></script>
		
		
	</head>

	<body>
		<div class="header">
			<a href="index.php"><img class="logo" src="img/logo-01.png"></a>
			<h1>Poems Near You</h1>
			<h2>DISCOVER . CREATE . SHARE</h2>
		</div>
       
       
		<div id="map">
		</div>
		<hr />
		 <div>
		 	<p id="zilla">Want to know more about these poets?</p>
           <p id="income" style="display: none"></p>
            <p id="commute" style="display: none"></p>
        </div>
		<div class="search">
			<form action="output.php" method="post">
			 <input class="submit" type="submit" id="outputSubmit" value="RE-FIND RHYMES"/>

			</form>
		</div>
		 <div class="footer">
        	<p class="foot">FindRhy.me Created By</p>
            <div class="row">
            	<div class="col-md-3">WALTER CEDER <br><span class="role"> Developer</span></div>
            	<div class="col-md-3">LUKE JIN LI CHANG<br><span class="role"> Developer</span></div>
            	<div class="col-md-3">JENNY CHEN <br><span class="role"> UX Designer & Developer </span></div>
            	<div class="col-md-3">HELEN UNG <br><span class="role">Project Manager & Developer</span></div>
            </div>
        </div>
		
	</body>
</html>
