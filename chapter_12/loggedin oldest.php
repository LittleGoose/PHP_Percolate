<?php
# Script 12.4
# Made on 11/20/13
# Made by Jesse Evers

# The user is directed here from login.php

# If no cookie is present, redirect the user
if(!isset($_COOKIE['user_id'])) {
	# Need the functions
	require('includes/login_functions.inc.php');
	redirect_user();
}

# Set hte page title and include the HTML header
$page_title = 'Logged In!';
include('includes/header.html');

# Print a customized message
echo "<h1>Logged In!</h1>
<p>You are now in, {$_COOKIE['first_name']}!</p>
<p><a href=\"logout.php\">Logout</a></p>";

include('includes/footer.html');
?>