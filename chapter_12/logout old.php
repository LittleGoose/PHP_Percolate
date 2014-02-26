<?php
# Script 12.6
# Made on 11/25/13
# Made by Jesse Evers

# This page lets the user log out

# If no cookie is present, redirect the user
if(!isset($_COOKIE['user_id'])) {
	# Need the function
	require('includes/login_functions.inc.php');
	redirect_user();
} else { # Delete the cookies
	setcookie('user_id', '', time()-3600, '/', '', 0, 0);
	setcookie('first_name', '', time()-3600, '/', '', 0, 0);
}

# Set the page title and include the HTML header
$page_title = 'Logged Out!';
include('includes/header.html');

# Print a customized message
echo "<h1>Logged Out!</h1>
<p>You are now logged out, {$_COOKIE['first_name']}!";

include('includes/footer.html');
?>