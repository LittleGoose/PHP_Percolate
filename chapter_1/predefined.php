<!doctype html>
<html lang="en">  
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<title>Predefined Variables</title>
		<link rel="Shortcut Icon" href="/favicon.ico"/> 
		<link rel="stylesheet" type="text/css" href="/css/styles.css">
	</head>
	<body>
		<!-- Script 1.5 - predefined.php -->
		<?php 
		# Script 1.5 - predefined.php
		# Created 9/4/2013
		# Created by Jesse Evers

		// These are variables that correspond to already defined variables, but shortening their names makes them easier to use.
		// $file stores the full path and name of the script being run
		$file = $_SERVER['SCRIPT_FILENAME'];
		// $user stores the browser and operating system of the user accessing the script
		$user = $_SERVER['HTTP_USER_AGENT'];
		// $server represents the web application on the server that's running PHP
		$server = $_SERVER['SERVER_SOFTWARE'];

		echo "<p>You are running the file:<br /><b>$file</b>.</p>\n";

		echo "<p>You are viewing this page using:<br /><b>$user</b></p>\n";

		echo "<p>This server is running:<br /><b>$server</b>.</p>\n";
		?>
	</body>
	</html>