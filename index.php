<!DOCTYPE html>
<html lang="en" ng-app="rhymeApp">
	<head>
		<meta charset="utf-8" />
		<title>FindRhy.me</title>
		
		<link rel="icon" href="" />
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
		<link href="index.css" type="text/css" rel="stylesheet" />
		<!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js" type="text/javascript"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<script src="location.js" type="text/javascript"></script>
		<script src="loadMap.js" type="text/javascript"></script>

	</head>

	<body ng-controller="indexCtrl">
		<div class="header">
			<img class="logo" src="img/logo-01.png">
			<h1>FindRhy.me</h1>
			<h2>SHARING CREATIVITY</h2>
		</div>
		<div id="map">
		</div>
        <div style="color: red" ng-show="nogeo">
            Geolocation not available
        </div>

       

		<div class="search"><p>Welcome. We are Find Rhyme. Every location you are located contains different poetry from peers from the past. Feel free to add your own to your location or to view poems that are already written specifically for your location.</p> 
			<form action="output.php" method="post">
				<form ng-submit="getPoms()">
				<input class ="submit" type="submit" id="outputSubmit" value="Find Rhymes Now"/>
			</form>
			
		</div>
		 <div id="map-canvas"></div>
		<div class="addPoem">
			<form name="addPoem" novalidate ng-submit="sendPoem()">
				<textarea class="poem" ng-model="submission" rows="10" id="submission" name="submission" cols="50" placeholder="Enter your poems here to submit to this location!" ng-maxlength=2000 required></textarea><br>
				<input class="author" ng-model="author" placeholder="Your name" type="text" id="author" name="author" ng-maxlength=50 required/><br>
				<button type="submit" id="poemSubmit" ng-disabled="addPoem.$invalid">Submit</button>
                <div style="color:red" ng-show="addPoem.submission.$dirty && addPoem.submission.$invalid" id="nopoem">
                    Please enter a poem less than 2000 characters to submit.
                </div>
                <div style="color:red" ng-show="addPoem.author.$dirty && addPoem.author.$invalid" id="noauthor">
                    Please enter an author name less than 50 characters. ("Anonymous" is fine.)
                </div>

			</form>

		</div>
	</body>
</html>