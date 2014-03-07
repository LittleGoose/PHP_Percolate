<?php 
# Script 9.2
# Made on 10/28/13
# Made by Jesse Evers

# Setting database host, username, password, and DB name as constants
DEFINE ('DB_USER', 'jesseevers');
DEFINE ('DB_PASSWORD', 'EY4JKepT');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'jesseevers');

# Connect to the database
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );