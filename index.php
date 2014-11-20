<!DOCTYPE html>
<html lang="en" ng-app="rhymeApp">
	<head>
		<meta charset="utf-8" />
		<title>FindRhy.me</title>
		
		<link rel="icon" type="image/png" href="img/favicon-01.png" />
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

       
		
		<div class="search">
			<p>Welcome to FindRhyme,</p> 
			<p>a place where you can discover and share creations with people who have visited locations near you.</p>
			<div class="twobut">
				
				<form action="output.php" method="post">
					<input class ="submit" type="submit" id="outputSubmit" value="Find Rhymes"/>
				</form>
							<!-- Button trigger modal -->
				<button id="openModal" data-toggle="modal" data-target="#myModal">
				  Submit a poem
				</button>

				
			</div>
			
		</div>
		<div class="checkMap"><p>Check out the map below to see locations of places where people have uploaded their poems!</p></div>
		 <div id="map-canvas"></div>
		<div class="addPoem">
		

			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" id="closeModal" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			        <h4 class="modal-title" id="myModalLabel">Use this form to submit your work</h4>
			      </div>
			      <div class="modal-body">
			        <form name="addPoem" novalidate ng-submit="sendPoem(addPoem)">
                        <div ng-show="success">Thanks! Poem submitted at coordinates ({{lat | number:2}}, {{long|number:2}}). Submit another poem or feel free to close this form.</div>
						<textarea class="poem" ng-model="submission" rows="10" id="submission" name="submission" cols="50" placeholder="Enter your poem here to submit to this location! (2000 characters max)" ng-maxlength=2000 required></textarea><br>
						<input class="author" id="author" ng-model="author" placeholder="Your name (50 characters max)" type="text" id="author" name="author" ng-maxlength=50 required/><br>
						<button type="submit" name="btn" id="poemSubmit" ng-disabled="addPoem.$invalid">Send in your poem</button>
		                <div style="color:red" ng-show="addPoem.submission.$dirty && addPoem.submission.$invalid" id="nopoem">
		                    Please enter a poem (2000 characters max) to submit.
		                </div>
		                <div style="color:red" ng-show="addPoem.author.$dirty && addPoem.author.$invalid" id="noauthor">
		                    Please enter an author name less than 50 characters long. ("Anonymous" is okay)
		                </div>
					</form>
			      </div>
			      <div class="modal-footer">
			    <!--    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Save changes</button> -->
			      </div>

			    </div>
			  </div>
			</div>



<!--
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

			</form> -->

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
