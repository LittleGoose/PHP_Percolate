<!doctype html>
<html lang="en">  
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<title>Sorting Arrays</title>
		<link rel="Shortcut Icon" href="/favicon.ico"/> 
		<link rel="stylesheet" type="text/css" href="/css/styles.css">
	</head>
	<body>
		<table border="0" cellspacing="3" cellpadding="3" align="center">
			<tr>
				<td><h2>Rating</h2></td>
				<td><h2>Title</h2></td>
			</tr>
		<?php 
		# Script 2.8 - sorting.php
		# Created 9/11/2013
		# Created by Jesse Evers

		$movies = array(
			'Casablanca' => 10,
			'To Kill a Mockingbird' => 10,
			'The English Patient' =>2,
			'Stranger Than Fiction' => 9,
			'Story of the Weeping Camel' => 5,
			'Donnie Darko' => 7 
			);

		echo "<tr><td colspan='2'><strong>In their original order:</strong></td></tr>";
		foreach ($movies as $title => $rating) {
			echo "<tr><td>$rating</td>
			<td>$title</td></tr>\n";
		}

		ksort($movies);
		echo "<tr><td colspan='2'><strong>Sorted by title:</strong></td></tr>";
		foreach ($movies as $title => $rating) {
			echo "<tr><td>$rating</td>
			<td>$title</td></tr>\n";
		}

		arsort($movies);
		echo "<tr><td colspan='2'><strong>Sorted by rating:</strong></td></tr>";
		foreach ($movies as $title => $rating) {
			echo "<tr><td>$rating</td>
			<td>$title</td></tr>\n";
		}
?>
	</table>
	</body>
	</html>