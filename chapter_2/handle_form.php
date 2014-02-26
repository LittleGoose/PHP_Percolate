<!doctype html>
<html lang="en">  
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<title>Form Feedback</title>
		<link rel="Shortcut Icon" href="/favicon.ico"/> 
		<link rel="stylesheet" type="text/css" href="/css/styles.css">
	</head>
	<body>
		<?php 
		# Script 2.2 - handle_form.php
		# Created 9/9/2013
		# Created by Jesse Evers

		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$comments = $_REQUEST['comments'];

		echo "<p>Thank you, <strong>$name</strong>, for the following comment(s): <br />
		<tt>$comments</tt></p><p>We will reply to you at <i>$email</i>.</p>\n";
	?>
	</body>
	</html>