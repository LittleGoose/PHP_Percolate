<?php 
# Script 15.9
# Made by Jesse Evers
# Made on 2/26/14

# This script is called via Ajax from login.php
# The script expects to recieve two values in the URL: an email address and a password
# The script returns a string indicating the results

# Need two pieces of information
if(isset($_GET['email'], $_GET['password'])) {

	# Need a valid email address
	if (filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
		
		# Must match specific values
		if(($_GET['email'] == 'email@example.com') && ($_GET['password'] == 'testpass')) {
			
			# Indicate success
			echo 'CORRECT';

		} else { # Mismatch
			echo 'INCORRECT';
		}
	} else { # Invalid email address
		echo 'INVALID_EMAIL';
	}
} else { # Missing one of the two variables
	echo 'INCOMPLETE';
}
?>