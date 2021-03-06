// Script 15.10
// Made by Jesse Evers
// Made on 2/26/14

// This script is included by login.php
//This script handles and validates the form submission
// This script then ames an Ajax request of login_ajax.php

// Do something when the document is ready
$(function() {

	// Hide all error messages
	$('.errorMessage').hide();

	// Assign an event handler to the form
	$('#login').submit(function() {

		// Initialize some variables
		var email, password;

		// Validate the email address
		if($('#email').val().length >= 6) {

			// Get the email address
			email = $('#email').val();

			// Clear an error, if one existed
			$('#emailP').addClass('error');

			// Hide the error message if it was visible
			$('#emailError').hide();
		} else { // Invalid email address

			// Add an error class
			$('#emailP').addClass('error');

			// Show the error message
			$('#emailError').show();
		}

		// Validate the password 
		if($('#password').val().length > 0) {

			// Get the password address
			password = $('#password').val();

			// Clear an error, if one existed
			$('#passwordP').addClass('error');

			// Hide the error message if it was visible
			$('#passwordError').hide();
		} else { // Invalid password

			// Add an error class
			$('#passwordP').addClass('error');

			// Show the error message
			$('#passwordError').show();
		}

		// If appropriate, perform the Ajax request
		if(email && password) {

			// Create an object for the form data
			var data = new Object();
			data.email = email;
			data.password = password;

			// Create an object of Ajax options
			var options = new Object();

			// Establish each setting
			options.data = data;
			options.dataType = 'text';
			options.type = 'get';
			options.success = function(response) {

				// Worked
				if(response == 'CORRECT') {

					// Hide the form
					$('#login').hide();

					// Show a message
					$('#results').removeClass('error');
					$('#results').text("You are now logged in!");

				} else if(response == 'INCORRECT') {

					// Show a message
					$('#results').text("The submitted credentials do not match those on file!");
					$('#results').addClass('error');

				} else if(response == 'INCOMPLETE') {

					// Show a message
					$('#results').text("Please provide an email address and a password!");
					$('#results').addClass('error');

				} else if(response == 'INVALID_EMAIL') {

					// Show a message
					$('#results').text("Please provide a valid email address!");
					$('#results').addClass('error');
				}
			}; // End of success

			options.url = 'login_ajax.php';

			// Perform the request
			$.ajax(options);

		} // End of email and password IF
		
		// Return false to prevent an actual form submission
		return false;

	}); // End of form submission

}); // End of document ready