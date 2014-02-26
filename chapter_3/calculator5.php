<?php 
# Script 3.10 - calculator5.php
# Made on 9/21/2013
# Made by Jesse Evers

# This function creates a radio button.
# The function takes one argument: the value.
# The function also makes the button "sticky".
function create_radio($value, $name = 'gallon_price') {
	
	# Start the element:
	echo '<input type="radio" name="' . $name .'" value="' . $value . '"';
	
	# Check for stickiness:
	if (isset($_POST[$name]) && ($_POST[$name] == $value)) {
		echo ' checked="checked"';
	} 
	
	# Complete the element:
	echo " /> $value ";

} # End of create_radio() function.

# This function calculates the total trip cost of the trip.
function calculate_trip_cost($miles, $mpg, $ppg) {
	# Gets the number of gallons
	$gallons = $miles/$mpg;
	# Get the price of those gallons
	$dollars = $gallons/$ppg;
	# Returns the formatted cost
	return number_format($dollars, 2);
} # End of calculate_trip_cost function

$page_title = 'Trip Cost Calculator #5';
include('includes/header.html');

# Checks for a form being submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (isset($_POST['distance'], $_POST['gallon_price'], $_POST['efficiency']) && is_numeric($_POST['distance']) && is_numeric($_POST['gallon_price']) && is_numeric($_POST['efficiency'])) {

		# Calculates results
		$cost = calculate_trip_cost($_POST['distance'], $_POST['efficiency'], $_POST['gallon_price']);
		$hours = $_POST['distance'] / 65;

		echo "<h1>Total Estimated Cost</h1>
		<p>The total cost of driving " . $_POST['distance'] . " miles, averaging " . $_POST['efficiency'] . " miles per gallon, and paying an average of $" . $_POST['gallon_price'] . " per gallon, is $" . $cost . ". If you drive at an average of 65 miles per hour, the trip will take approximately " . number_format($hours, 2) . " hours.</p>";
	} else { # Invalid submitted values
		echo "<h1>Error!</h1>
		<p class='error'>Please enter a valid distance, price per gallon, and fuel efficiency.</p>";
	} 
} # End of main submission IF
?>

<h1>Trip Cost Calculator #5</h1>
<form action="calculator5.php" method="post">
	<p>Distance (in miles): <input type="text" name="distance" value="<?php if (isset($_POST['distance'])) echo $_POST['distance']; ?>"></p>
	<p>Ave. Price Per Gallon:
		<span class="input">
			<?php 
			create_radio('3.00');
			create_radio('3.50');
			create_radio('4.00');
			?>
		</span>
	</p>
	<p>Fuel Efficiency: 
	<select name="efficiency">
		<option value="10" <?php if (isset($_POST['efficiency']) && ($_POST['efficiency'] == '10')) echo ' selected="selected"'; ?>>Terrible</option>
		<option value="20" <?php if (isset($_POST['efficiency']) && ($_POST['efficiency'] == '20')) echo ' selected="selected"'; ?>>Decent</option>
		<option value="30" <?php if (isset($_POST['efficiency']) && ($_POST['efficiency'] == '30')) echo ' selected="selected"'; ?>>Very Good</option>
		<option value="50" <?php if (isset($_POST['efficiency']) && ($_POST['efficiency'] == '50')) echo ' selected="selected"'; ?>>Outstanding</option>
	</select></p>
	<p><input type="submit" name="submit" value="Calculate!"></p>
</form>
<?php include('includes/footer.html'); ?>