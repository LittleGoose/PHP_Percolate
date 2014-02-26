<!doctype html>
<html lang="en">  
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<title>Concatenation</title>
		<link rel="Shortcut Icon" href="/favicon.ico"/> 
		<link rel="stylesheet" type="text/css" href="/css/styles.css">
	</head>
	<body>
		<?php 
		# Script 1.7 - concat.php
		# Created 9/4/13
		# Created by Jesse Evers
		$first_name = 'Haruki';
		$last_name = 'Murakami';
		$book = 'Kafka on the Shore';
		$author = $first_name . ' ' . $last_name;

		echo "<p>The book <em>$book</em> was written by $author.</p>";
		?>
	</body>
	</html>