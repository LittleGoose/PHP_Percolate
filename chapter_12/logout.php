<?php
# Script 12.11
# Made on 11/25/13
# Made by Jesse Evers

# This page lets the user log out
# This version uses sessions

session_start(); # Access the existing session

# If no cookie is present, redirect the user
if(!isset($_SESSION['user_id'])) {
	# Need the function
	require('includes/login_functions.inc.php');
	redirect_user();
} else { # Cancel the session
	$_SESSION =array(); # Clear the variables
	session_destroy(); # Destroy the session itself
	setcookie('PHPSESSID', '', time()-3600, '/', '', 0, 0); # Destroy the cookie
}

# Set the page title and include the HTML header
$page_title = 'Logged Out!';
include('includes/header.html');

# Print a customized message
echo "<h1>Logged Out!</h1>
<p>You are now logged out!";

include('includes/footer.html');
?>