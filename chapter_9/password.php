<?php
# Script 9.7 
# Made on 10/30/13
# Made by Jesse Evers

# This page lets a user change their password

$page_title = 'Change Your Password';
include('includes/header.html');

# Check for form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	require('../../mysqli_connect.php');
	# Connects to the database

	$errors = array(); # Initialize an error array

	# Check for an email address
	if (empty($_POST['email'])) {
		$errors[] = 'You forgot to enter your email address.';
	} else {
		$e = mysqli_real_escape_string($dbc, trim($_POST['email']));
	}

	# Check for the current password
	if (empty($_POST['pass'])) {
		$errors = 'You forgot to enter your current password.';
	} else {
		$p = mysqli_real_escape_string($dbc, trim($_POST['pass']));
	}

	# Check for a new password and match against the confirmed password
	if (!empty($_POST['pass1'])) {
		if ($_POST['pass1'] != $_POST['pass2']) {
			$errors[] = 'Your new password did not match your confirmed password.'; 
		} else {
			$np = mysqli_real_escape_string($dbc, trim($_POST['pass1']));
		}
	} else {
		$errors = 'You forgot to enter your new password.';
	}

	if (empty($errors)) { # If everything's submitted correctly...
		# Check that htey've entered the right email address/password combination:
		$q = "SELECT user_id FROM users WHERE (email='$e' AND pass=SHA1('$p') )";
		$r = @mysqli_query($dbc, $q);
		$num = @mysqli_num_rows($r);
		if ($num == 1) { # Match was made
			# Get the user_id
			$row = mysqli_fetch_array($r, MYSQLI_NUM);

			# Make the UPDATE query
			$q = "UPDATE users SET pass=SHA1('$np') WHERE user_id=$row[0]";
			$r = @mysqli_query($dbc, $q);

			if(mysqli_affected_rows($dbc) == 1) {
				# Print a message
				echo '<h1>Thank you!</h1>
				<p class="error">Your password has been updated. In Chapter 12 you will actually be able to log in!</p><p><br></p>';
			} else { # If it ran badly
				echo '<h1>System Error</h1>
				<p class="error">Your password could not be changed due to a system error. We apologize for any inconvience.';

				# Debugging message
				echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $q . '</p>';
			}

			mysqli_close($dbc); # Close the database connection

			# Include the footer and quit the script (to not show the form)
			include('includes/footer.html');
			exit();

		} else { # Invalide email address/password combination
			echo '<h1>Error!</h1>
			<p class="error">The email address and password do not match those on file.</p>';
		}
	} else { # Report the errors
		echo '<h1>Error!</h1>
		<p class="error">The following error(s) occurred:<br>';
		foreach ($errors as $msg) { # Print each error
			echo " - $msg<br>\n";
		}
		echo '</p><p>Please try again.</p><p><br></p>';
	} # End of the main Submit conditional.
}
?>
<h1>Change Your Password</h1>
<form action="password.php" method="post">
	<p>Email Address: <input type="text" name="email" size="20" maxlength="60" value="<?php if (isset($_POST['email'])) echo " $_POST[email]";?>"> </p>
	<p>Current Password: <input type="password" name="pass" size="10" maxlength="20" value="<?php if (isset($_POST['pass'])) echo " $_POST[pass]";?>"> </p>
	<p>New Password: <input type="password" name="pass1" size="10" maxlength="20" value="<?php if (isset($_POST['pass1'])) echo " $_POST[pass1]";?>"> </p>
	<p>Confirm Password: <input type="password" name="pass2" size="10" maxlength="20" value="<?php if (isset($_POST['pass2'])) echo " $_POST[pass2]";?>"> </p>
	<p><input type="submit" name="submit" value="Change Password"></p>
</form>
<?php include('includes/footer.html');
?>