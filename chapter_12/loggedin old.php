<?php
# Script 12.9
# Made on 11/25/13
# Made by Jesse Evers

# The user is directed here from login.php

session_start(); # Start the session

# If no cookie is present, redirect the user
if(!isset($_SESSION['user_id'])) {
	# Need the functions
	require('includes/login_functions.inc.php');
	redirect_user();
}

# Set hte page title and include the HTML header
$page_title = 'Logged In!';
include('includes/header.html');

# Print a customized message
echo "<h1>Logged In!</h1>
<p>You are now logged in, {$_SESSION['first_name']}!</p>
<p><a href=\"logout.php\">Logout</a></p>";

include('includes/footer.html');
?>