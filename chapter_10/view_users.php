<?php
# Script 10.4
# Made on 11/5/13
# Made by Jesse Evers

# This script retrieves all the records from the users table.
# This new version paginates the query results

$page_title = 'View the Current Users';
include('includes/header.html');
echo '<h1>Registered Users</h1>';

require_once('../../mysqli_connect.php');

# Number of records to show per page
$display = 10;

# Determine how many pages there are
if(isset($_GET['p']) && is_numeric($_GET['p'])) {
	$pages = $_GET['p'];
} else { # Need to determine 
	# Count the number of records
	$q = "SELECT COUNT(user_id) FROM users";
	$r = @mysqli_query($dbc, $q);
	$row = @mysqli_fetch_array($r, MYSQLI_NUM);
	$records = $row[0];

	# Calculate the number of pages
	if ($records > $display) { # More than 1 page
		$pages = ceil($records/$display);
	} else {
		$pages = 1;
	}
} # End of p IF

# Determine where in the database to start returning results
if(isset($_GET['s']) && is_numeric($_GET['s'])) {
	$start = $_GET['s'];
} else {
	$start = 0;
}

# Determine the sort...
# Default is by registration date
$sort = (isset($_GET['sort'])) ? $_GET['sort'] : 'rd';

# Determine the sorting order
switch ($sort) {
	case 'ln':
		$order_by = 'last_name ASC';
		break;

	case 'fn':
		$order_by = 'first_name ASC';
		break;

	case 'rd':
		$order_by = 'registration_date ASC';
		break;
	
	default:
		$order_by = 'registration_date ASC';
		$sort = 'rd';
		break;
}

# Define the query
$q = "SELECT last_name, first_name, DATE_FORMAT(registration_date, '%M %d, %Y') AS dr, user_id FROM users ORDER BY $order_by LIMIT $start, $display";
$r = @mysqli_query($dbc, $q);

# Table header
echo '
	<table align="center" cellspacing="0" cellpadding="5" width="75%">
		<tr>
			<td align="left"><strong>Edit</strong></td>
			<td align="left"><strong>Delete</strong></td>
			<td align="left"><strong><a href="view_users5.php?sort=ln">Last Name</a></strong></td>
			<td align="left"><strong><a href="view_users5.php?sort=fn">First Name</a></strong></td>
			<td align="left"><strong><a href="view_users5.php?sort=rd">Date Registered</a></strong></td>
		</tr>
';

# Fetch and print all the records...

$bg = '#eeeeee'; # Set the initial background color

while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
	$bg = ($bg=='#eeeeee' ? '#ffffff' : '#eeeeee'); # Switch the background color

	echo '
		<tr bgcolor="' . $bg . '">
			<td align="left"><a href="edit_user.php?id=' . $row['user_id'] . '">Edit</a></td>
			<td align="left"><a href="delete_user.php?id=' . $row['user_id'] . '">Delete</a></td>
			<td align="left">' . $row['last_name'] . '</td>
			<td align="left">' . $row['first_name'] . '</td>
			<td align="left">' . $row['dr'] . '</td>
		</tr>
	';
} # End of WHILE loop

echo '</table>';
mysqli_free_result($r);
mysqli_close($dbc);

# Make the links to other pages, if necessary
if($pages > 1) {
	# Add some spacing and start a paragraph
	echo '<br><p>';

	# Determine what page the script is

	$current_page = ($start/$display) + 1;

	# If it's not the first page, make a Previous link
	if ($current_page != 1) {
		echo '<a href="view_users5.php?s=' . ($start - $display) . '&p=' . $pages . '$sort=' . $sort . '">Previous</a> ';
	}

	# Make all the numbered pages
	for ($i = 1; $i <= $pages; $i++) {
		if ($i != $current_page) {
			echo '<a href="view_users5.php?s=' . ($display * ($i - 1)) . '&p=' . $pages . '$sort=' . $sort . '">' . $i . '</a> ';
		} else {
			echo $i . ' ';
		}
	} # End of FOR loop

	# If it's not the last page, make a Next button
	if ($current_page != $pages) {
		echo '<a href="view_users5.php?' . ($start + $display) . '$p=' . $pages . '$sort=' . $sort . '">Next</a>';
	}

	echo '</p>'; # Close the paragraph
} # End of links section

include('includes/footer.html');
?>