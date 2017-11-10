<!DOCTYPE html>
<html>

	<head>
		<meta charset ="UTF-8">
		<title>Test PHP Eli</title>
		<link rel="stylesheet" type="text/css" href="CSS/testphp.css">
		<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/testphp.js"></script>
	</head>
	<body>
		<h1>YAAAAASSSS! PHP website</h1>
		<h2>Created by Eli</h2>
		<h3>Started nov/2017</h3>
		<hr>
		<div id="meme1p"><img class="meme1" src="cybermen.jpeg">
		</div>
		<h3>Start PHP! look below</h3>
		<br>

		<?php
		echo "My first PHP script!";
		echo "<h2>PHP is Fun!</h2>";
		echo "Hello world!<br>";
		echo "I'm about to learn PHP!<br>";
		echo "This ", "string ", "was ", "made ", "with multiple parameters.";
		$txt1 = "Learn PHP";
		$txt2 = "W3Schools.com";
		$x = 5;
		$y = 4;

		print "<h2>" . $txt1 . "</h2>";
		print "Study PHP at " . $txt2 . "<br>";
		print $x + $y;
		print "<h5>PHP uses print or print() like python2 vs python3</5>";
		print "<h2>hello from a print satement without()</h2><br>";
		print("<h2>hello from a print statement with ()</h2><br>");
		?>

		<br>

		<hr>
		<?php
		echo "<br>Current Date & time for major citeis around the world ";

		$date = new DateTime('now', new DateTimeZone('America/Boise'));
		echo "<br>";
		echo "Current time in Boise, Idaho ";
		echo $date -> format('m/d/Y/h:i:s');
		$date = new DateTime('now', new DateTimeZone('America/New_York'));
		echo "<br>";
		echo "Current time in Washington, DC ";
		echo "<br>";
		echo $date -> format('m/d/Y/h:i:s');
		$date = new DateTime('now', new DateTimeZone('Europe/London'));
		echo "<br>";
		echo "Current time in London, UK ";
		echo "<br>";
		echo $date -> format('m/d/Y/h:i:s');
		$date = new DateTime('now', new DateTimeZone('Asia/Tokyo'));
		echo "<br>";
		echo "Current time in Tokyo, Japan ";
		echo "<br>";
		echo $date -> format('m/d/Y/h:i:s');
		$date = new DateTime('now', new DateTimeZone('Europe/Luxembourg'));
		echo "<br>";
		echo "Current time in Luxembourg";
		echo "<br>";
		echo $date -> format('m/d/Y/h:i:s');
		echo "<br><hr><br>";
		echo "<br> calculate number of days till Christmas<br>";
		$target = mktime(0,0,0,12,25,2017);
		$today =time();
		
		
		?>

		<hr>
		<h3>end PHP! look above</h3>
	</body>

</html>