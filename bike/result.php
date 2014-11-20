<?php
$LAT = $_GET["lat"];
$LON = $_GET["lon"];

$latTwo;
$lonTwo;


function table($rows){
		?>
			<?php foreach($rows as $row) {
				$latTwo = $row["LAT"];
				$lonTwo = $row["LON"];
				?>
				<p><?= $row["LAT"] ?></p>
				<p><?= $row["LON"] ?></p>
							<?php break; } ?>
		<?php
	}


?>
<!DOCTYPE html>
<html>
	<head>
		<title>Closest Bike Rack Results</title>
		<link rel="stylesheet" type="text/css" href="bike.css">
	</head>
	<body>

		<div id="main">				
			<?php
				//Asks the database for the id of the actor
				$db = new PDO("mysql:dbname=bikerack;host=vergil.u.washington.edu;port=60123","root","java123");
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

					$queryall = "SELECT LAT, LON,
					    POW(69.1 * (LAT - $LAT), 2) +
					    POW(69.1 * ($LON - LON) * COS(LAT / 57.3), 2) AS distance
					FROM racks HAVING distance < 625 ORDER BY distance;";					
					//table($db->query($queryall), "All Films");
					foreach($db->query($queryall) as $row) {
						$latTwo = $row["LAT"];
						$lonTwo = $row["LON"];
						?>
						<!--
						<p><?= $row["LAT"] ?></p>
						<p><?= $row["LON"] ?></p>
					-->
									<?php break; 
					}

					$p1 = array(
					    'lat' => $_GET["lat"]
					  , 'lng' => $_GET["lon"]
					);

					$p2 = array(
					    'lat' => $latTwo
					  , 'lng' => $lonTwo
					);
					echo "<p>Nearest Bike Rack is ".haversineGreatCircleDistance($_GET["lat"],$_GET["lon"],$latTwo,$lonTwo, 6371000)." meters away.</p>";
					function haversineGreatCircleDistance(
  							$latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371000)
					{
					  // convert from degrees to radians
					  $latFrom = deg2rad($latitudeFrom);
					  $lonFrom = deg2rad($longitudeFrom);
					  $latTo = deg2rad($latitudeTo);
					  $lonTo = deg2rad($longitudeTo);

					  $latDelta = $latTo - $latFrom;
					  $lonDelta = $lonTo - $lonFrom;

					  $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
					    cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
					  return $angle * $earthRadius;
					}


					$bearing = getBearingBetweenPoints( $p1, $p2 );

					echo "<p>Direction of Bike Rack: " . getCompassDirection( $bearing )."</p>";
					echo "<p>Bearing: $bearing&deg;</p>";

					echo "<p> Only bike racks owned by the City are shown</p>";

					?>
						<p><a href="index.html">Search again</a></p>
					<?php

					function getBearingBetweenPoints( $point1, $point2 )
					{
					  return getRhumbLineBearing( $point1['lat'], $point1['lng'], $point2['lat'], $point2['lng'] );
					}

					// function getRhumbLineBearing($lat1, $lon1, $lat2, $lon2) {
					//   //difference in longitudinal coordinates
					//   $dLon = deg2rad($lon2) - deg2rad($lon1);

					//   //difference in the phi of latitudinal coordinates
					//   $dPhi = log(tan(deg2rad($lat2) / 2 + pi() / 4) / tan(deg2rad($lat1) / 2 + pi() / 4));

					//   //we need to recalculate $dLon if it is greater than pi
					//   if(abs($dLon) > pi()) {
					//     if($dLon > 0) {
					//       $dLon = (2 * pi() - $dLon) * -1;
					//     }
					//     else {
					//       $dLon = 2 * pi() + $dLon;
					//     }
					//   }
					//   //return the angle, normalized
					//   return (rad2deg(atan2($dLon, $dPhi)) + 360) % 360;
					// }

					function getRhumbLineBearing($lat1, $lon1, $lat2, $lon2) {

					     return (rad2deg(atan2(sin(deg2rad($lon2) - deg2rad($lon1)) * cos(deg2rad($lat2)), cos(deg2rad($lat1)) * sin(deg2rad($lat2)) - sin(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($lon2) - deg2rad($lon1)))) + 360) % 360;
					}
					function getCompassDirection( $bearing )
					{
					  static $cardinals = array( 'N', 'NE', 'E', 'SE', 'S', 'SW', 'W', 'NW', 'N' );
					  return $cardinals[round( $bearing / 45 )];
					}
			?>	
		</div> 

	</body>
</html>

