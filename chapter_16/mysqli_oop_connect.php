<?php 
# Script 16.1
# Made by Jesse Evers
# Made on 3/3/14

# This file contains the database access information
# This file also establishes a connection to MySQL, selects the database, and sets the encoding
# The MySQL interactions use OOP

# Set the database access information as constants
DEFINE ('DB_USER', 'jesseevers');
DEFINE ('DB_PASSWORD', 'EY4JKepT');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'jesseevers');

# Make the connection
$mysqli = new MySQLi(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

# Verify the connection
if($mysqli->connect_error) {
	echo $mysqli->connect_error;
	unset($mysqli);
} else { # Establish the encoding
	$mysqli->set_charset('utf8');
}
?>