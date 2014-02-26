<!doctype html>
<html lang="en">  
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<title>Pursue</title>
		<link rel="Shortcut Icon" href="/favicon.ico"/> 
		<link rel="stylesheet" type="text/css" href="/css/styles.css">
	</head>
	<body>
		<?php 
		# Pursue 1 - pursue.php
		# Created on 9/6/2013
		# Created by Jesse Evers

		// PHP Version Check
		echo "<p>Current PHP Version: <b>" . phpversion() . "</b></p>";

		// String script with double quotes
		$var1 = "This will be ";

		$var2 = "displayed on the ";

		$var3 = "page 'pursue.php.'";

		echo "<p>$var1$var2$var3</p>";

		// String script with single quotes
		$var1 = 'This is the same ';

		$var2 = 'as the last sentence ';

		$var3 = 'but it is coded using double quotes.';

		echo $var1 . $var2 . $var3;

		// Number manipulating script
		$num1 = 32;

		$num2 = 16;

		$num3 = 64;

		$endResult = $num1 * $num2 / ($num2 + ($num3 - $num1));

		echo "<p>$endResult</p>";

?>
	</body>
</html>