// Script 15.7
// Made by Jesse Evers
// Made on 2/24/14

// Do something when the document is ready
$(function() {

	// Hide all error messages
	$('.errorMessage').hide(); 

	// Assign an event handler to the form
	$('#calculator').submit(function () {

		// Initialize some variables
		var quantity, price, tax, total;

		// Validate the quantity
		if($('#quantity').val() > 0) {

			// Get the quantity
			quantity = $('#quantity').val();

			// Clear an error if one existed
			$('#quantityP').removeClass('error');

			// Hide the error message if it was visible
			$('#quantityError').hide();

		} else { // Invalid quantity

			// Add an error class
			$('#quantityP').addClass('error');

			// Show the error message
			$('#quantityError').show();
		}

		// Validate the price
		if($('#price').val() > 0) {

			// Get the price
			price = $('#price').val();

			// Clear an error if one existed
			$('#priceP').removeClass('error');

			// Hide the error message if it was visible
			$('#priceError').hide();

		} else { // Invalid price

			// Add an error class
			$('#priceP').addClass('error');

			// Show the error message
			$('#priceError').show();
		}


		// Validate the tax
		if($('#tax').val() > 0) {

			// Get the tax
			tax = $('#tax').val();

			// Clear an error if one existed
			$('#taxP').removeClass('error');

			// Hide the error message if it was visible
			$('#taxError').hide();

		} else { // Invalid tax

			// Add an error class
			$('#taxP').addClass('error');

			// Show the error message
			$('#taxError').show();
		}


		// If everything is valid, then find the total
		if(quantity && price && tax) {
			total = quantity * price;
			total += total * (tax/100);
		}

		// Display the results
		$('#result').html('The total is <strong>$' + total + '</strong>.');
		
		// Return false to prevent an actual form submission
		return false;		
	}); // End of form submission
});