<?php
# Script 3.7 - index.php
# Made on 9/21/2013
# Made by Jesse Evers

# This function outputs theoretical HTML for adding ads to a Web page
function create_ad() {
	echo "<p class=\"ad\">This is an annoying ad! This is an annoying ad! This is an annoying ad! This is an annoying ad!</p>";
} # End of function

$page_title = 'Welcome to this site!';
include('includes/header.html');

# Calling the function
create_ad();
?>
 <h1>Content Header</h1>
 	<p>This is where the page-specific content goes. This section, and the corresponding header, will change from one page to the next.</p>
<?php 
include('includes/footer.html');
?>