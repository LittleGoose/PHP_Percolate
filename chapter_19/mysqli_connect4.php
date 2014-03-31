<?php 
# Script 19.0
# Made on 3/26/14
# Made by Jesse Evers

# Setting database host, username, password, and DB name as constants
DEFINE ('DB_USER', 'jesseevers');
DEFINE ('DB_PASSWORD', 'EY4JKepT');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'jesseevers_ecommerce');

# Connect to the database
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );