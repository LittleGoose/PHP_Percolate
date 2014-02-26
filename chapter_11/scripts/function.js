// Script 11.3
// Made on 11/13/13
// Made by Jesse Evers

// Make a pop-up window function

function create_window (image, width, height) {

	// Add some pixels to the width and height
	width = width + 10; 
	height = height + 10;

	// If the window is already open, resize it to new dimensions
	if (window.popup && !window.popup.closed) {
		window.popup.resizeTo(width, height);
	};

	// Set the window properties
	var specs = "location=no, scrollbars=no, menubars=no, toolbars=no, resizeable=yes, left=0,  top=0, width=" + width + ", height=" + height;

	// Set the URL
	var url = "show_image.php?image=" + image;

	// Create the popup window
	popup = window.open(url, "ImageWindow", specs);
	popup.focus();
} // End of function