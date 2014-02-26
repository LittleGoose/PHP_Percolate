<?php 
# Script 9.6
# Made on 10/30/13
# Made by Jesse Evers

# This script retrieves all the records from the users table

$page_title = 'View the Current Users';
include ('includes/header.html');

# Header
echo '<h1>Registered Users</h1>';

require ('../../mysqli_connect.php'); # Connect to the database

# Make the query
$q = "SELECT CONCAT(last_name, ', ', first_name) AS name, DATE_FORMAT(registration_date, '%M %d, %Y') AS dr FROM users ORDER BY registration_date ASC";
$r = @mysqli_query ($dbc, $q); # Run the query

# Count the number of returned rows
$num = mysqli_num_rows ($r);

if($num > 0) { # If it ran successfully, display the results
	# Check how many users there are
	echo "<p>There are currently $num registered users.</p>\n";

	# Table header
	echo '<table align="center" cellspacing="3" width="75%">
	<tr><td align="left"><strong>Date Registered</strong></td></tr>';

	# Fetch and print all records
	while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
		echo '<tr><td align="left">' . $row['name'] . '</td><td align="left">' . $row['dr'] . '</td></tr>';
	}

	echo "</table>"; # Close the table 

	mysqli_free_result($r); # Free up the resources that the query was using

} else { # If no records were returned
	# Public message
	echo '<p class="error">There are currently no registered users.</p>';

	# Debugging message
	echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
} # End of if($r) IF.

mysqli_close($dbc); # Closes the database connection

include('includes/footer.html');