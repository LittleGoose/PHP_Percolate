<!doctype html>
<html lang="en">  
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<title>Form Feedback</title>
		<style type="text/css" title="text/css" media="all">
			.error{
				font-weight: bold;
				color: #C00
			}
		</style>
		<link rel="Shortcut Icon" href="/favicon.ico"/> 
		<link rel="stylesheet" type="text/css" href="/css/styles.css">
	</head>
	<body>
		<?php 
		# Script 2.4 - form_handle3.php
		# Created 9/9/2013
		# Created by Jesse Evers

		# Checks if the name is filled in
		if (!empty($_REQUEST['name'])) {
			$name = $_REQUEST['name'];
		} else {
			$name = NULL;
			echo '<p class="error"> You forgot to enter your name!</p>';
		}

		# Checks if the email is filled in
		if (!empty($_REQUEST['email'])) {
			$email = $_REQUEST['email'];
		} else {
			$email = NULL;
			echo '<p class="error"> You forgot to enter your email!</p>';
		}		

		# Checks if the comments box has content in it
		if (!empty($_REQUEST['comments'])) {
			$comments = $_REQUEST['comments'];
		} else {
			$comments = NULL;
			echo '<p class="error"> You forgot to enter your comment(s)!</p>';
		}

		# Checks to see if the gender has been selected
		if (isset($_REQUEST['gender'])) {
			$gender = $_REQUEST['gender']; 

			if ($gender == 'M') { # Male gender has been selected
				$greeting = '<strong>Good day, Sir!</strong>';
			} elseif ($gender == 'F') { # Femaile gender has been selected
				$greeting = '<strong>Good day, Madam!</strong>';
			} else { # Another value other than M or F has been submitted
				$gender = NULL;
				echo '<p class="error">Gender should be either "M" or "F"!</p>';
			}
		} else { # No value was submitted for gender
			$gender = NULL;
			echo '<p class = "error">You forgot to select your gender!</p>';
		}	

		if ($name && $comments && $email && $gender) {
			echo "<p>Thank you, <strong>$name</strong>, for the following comment(s):<br>
			<tt>$comments</tt></p>
			<p>We will reply to you at <i>$email</i>.</p>\n";
			echo $greeting;
		} else {
			echo '<p class="error">Please go back and fill out the form again.</p>';
		}

?>
	</body>
	</html>