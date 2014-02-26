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
		# Script 2.5 - handle_form4.php
		# Created 9/9/2013
		# Created by Jesse Evers

		if (!empty($_POST['name']) && !empty($_POST['comments']) && !empty($_POST['email'])) {
			echo "<p>Thank you, <strong>{$_POST['name']}</strong>, for the following comments:<br>
			<tt>{$_POST['comments']}</tt></p>
			<p>We will reply to you at <i>{$_POST['email']}</i>.</p>\n";
		} else {
			echo '<p>Please go back and fill out the form again.</p>';
		}
?>
	</body>
	</html>