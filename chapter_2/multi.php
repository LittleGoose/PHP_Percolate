<!doctype html>
<html lang="en">  
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<title>Multidimensional Arrays</title>
		<link rel="Shortcut Icon" href="/favicon.ico"/> 
		<link rel="stylesheet" type="text/css" href="/css/styles.css">
	</head>
	<body>
		<p>Some North American States, Provinces, and Territories:</p>
		<?php 
		# Script 2.7 - multi.php
		# Created 9/10/2013
		# Created by Jesse Evers

		# First array
		$mexico = array(
			'YU' => 'Yucatan',
			'BC' => 'British Columbia',
			'OA' => 'Oaxaca'
			);

		# Second array
		$us = array(
			'MD' => 'Maryland',
			'IL' => 'Illinois',
			'PA' => 'Pennsylvania',
			'IA' => 'Iowa'
			);

		# Third array
		$canada = array(
			'QC' => 'Quebec',
			'AB' => 'Alberta',
			'NT' => 'Northwest Territories',
			'PE' => 'Prince Edward Island'
			);

		# Combine the three arrays
		$nAmerica = array(
			'Mexico' => $mexico, 
			'United States' => $us,
			'Canada' => $canada
			);

		# Stores the values of the three arrays
		foreach ($nAmerica as $country => $list) {
			echo "<h2>$country</h2><ul>";

			# Stores the abbreviations and values of each state/province/territory 
			foreach ($list as $k => $v) {
				echo "<li>$k - $v</li>\n";
			}
			echo "</ul>";
		} # End of main FOREACH

?>
	</body>
	</html>