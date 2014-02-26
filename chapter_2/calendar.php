<!doctype html>
<html lang="en">  
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<title>Calendar 2</title>
		<link rel="Shortcut Icon" href="/favicon.ico"/> 
		<link rel="stylesheet" type="text/css" href="/css/styles.css">
	</head>
	<body>
		<?php 
		# Script 2.9 - calendar2.php
		# Created 9/9/2013
		# Created by Jesse Evers

		$months = array (1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

		# Makes a dropdown menu with every month of the year in it
		echo '<select name="month">';
		foreach ($months as $key => $value) {
			echo "<option value=\"$key\">$value</option>\n";
		}
		echo "</select>";

		# Makes a  dropdown menu with every possible day in a month in it
		echo '<select name="day">';
		for ($day=1; $day <= 31; $day++) { 
			echo "<option value=\"$day\">$day</option>\n";
		}
		echo "</select>";

		# Makes a dropdown menu with every possible day in a month in it
		echo '<select name="year">';
		for ($year=2013; $year <= 2023; $year++) { 
			echo "<option value\"$year\">$year</option>\n";
		}

		echo "</select>";

?>
	</body>
	</html>