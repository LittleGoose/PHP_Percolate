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
		# Script 2.3 - handle_form2.php
		# Created 9/9/2013
		# Created by Jesse Evers

		// Shorthand for vars
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$comments = $_REQUEST['comments'];

		//Create the $gender variable
		if (isset($_REQUEST['gender'])) {
			$gender = $_REQUEST['gender'];
		} else {
			$gender = NULL;
		}

		// output
		echo "<p>Thank you, <strong>$name</strong>, for the following comment(s): <br />
		<tt>$comments</tt></p><p>We will reply to you at <i>$email</i>.</p>\n";

		if ($gender == 'M') {
			echo '<strong>Good day, Sir!</strong>';
		} elseif ($gender == 'F') {
			echo '<strong>Good day, Madam!</strong>';
		} else {
			echo '<strong>You forgot to enter your gender!</strong>';
		}
	?>
	</body>
	</html>