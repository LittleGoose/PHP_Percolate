<?php 
# Script 3.6 - calculator2.php
# Made on 9/21/2013
# Made by Jesse Evers

$page_title = 'Trip Cost Calculator #2';
include('includes/header.html');

# Checks for a form being submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (isset($_POST['distance'], $_POST['gallon_price'], $_POST['efficiency']) && is_numeric($_POST['distance']) && is_numeric($_POST['gallon_price']) && is_numeric($_POST['efficiency'])) {

		# Calculates results
		$gallons = $_POST['distance'] / $_POST['efficiency'];
		$dollars = $gallons * $_POST['gallon_price'];
		$hours = $_POST['distance'] / 65;

		echo "<h1>Total Estimated Cost</h1>
		<p>The total cost of driving " . $_POST['distance'] . " miles, averaging " . $_POST['efficiency'] . " miles per gallon, and paying an average of $" . $_POST['gallon_price'] . " per gallon, is $" . number_format($dollars, 2) . ". If you drive at an average of 65 miles per hour, the trip will take approximately " . number_format($hours, 2) . " hours.</p>";
	} else { # Invalid submitted values
		echo "<h1>Error!</h1>
		<p class='error'>Please enter a valid distance, price per gallon, and fuel efficiency.</p>";
	} 
} # End of main submission IF
?>

<h1>Trip Cost Calculator #2</h1>
<form action="calculator2.php" method="post">
	<p>Distance (in miles): <input type="text" name="distance" value="<?php if (isset($_POST['distance'])) echo $_POST['distance']; ?>"></p>
	<p>Ave. Price Per Gallon:
		<span class="input">
			<input type="radio" name="gallon_price" value="3.00" <?php if (isset($_POST['gallon_price']) && ($_POST['gallon_price'] == '3.00')) echo 'checked="checked"'; ?>> 3.00
			<input type="radio" name="gallon_price" value="3.50" <?php if (isset($_POST['gallon_price']) && ($_POST['gallon_price'] == '3.50')) echo 'checked="checked"'; ?>> 3.50
			<input type="radio" name="gallon_price" value="4.00" <?php if (isset($_POST['gallon_price']) && ($_POST['gallon_price'] == '4.00')) echo 'checked="checked"'; ?>> 4.00
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