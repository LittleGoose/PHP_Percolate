<?php 
# Script 18/8
# Made by Jesse Evers
# Made on 3/24/14

# This is the login page for the site

require('includes/header.html');

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	require(MYSQL);

	# Validate the email address
	if(!empty($_POST['email'])) {
		$e = mysqli_real_escape_string($dbc, $_POST['email']);
	} else {
		$e = FALSE;
		echo '<p class="error">You forgot to enter your email address!</p>';
	}

	# Validate the password
	if(!empty($_POST['pass'])) {
		$p = mysqli_real_escape_string($dbc, $_POST['pass']);
	} else {
		$p = FALSE;
		echo '<p class="error">You forgot to enter your password!</p>';
	}

	if($e && $p) { # If everything's OK

		# Query the database
		$q = "SELECT user_id, first_name, user_level FROM users WHERE (email='$e' AND pass=SHA1('$p')) AND active IS NULL";
		$r = mysqli_query($dbc, $q) or trigger_error("Query: $q\n<br>MySQL Error: " . mysqli_error($dbc));

		if(@mysqli_num_rows($r) == 1) { # A match was made
			# Register the values
			$_SESSION = mysqli_fetch_array($r, MYSQLI_ASSOC);
			mysqli_free_result($r);
			mysqli_close($dbc);

			# Redirect the user
			$url = BASE_URL . 'index.php';
			# Define the URL
			ob_end_clean($dbc);
		}
	}
}
?>