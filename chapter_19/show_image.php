<?php
# Script 19.8
# Made by Jesse Evers
# Made on 4/2/14

# This page retrieves and shows an image

# Flag variables
$image = FALSE;
$name = (!empty($_GET['name'])) ? $_GET['name'] : 'print image';

if (!empty($_GET['image']) && filter_var($_GET['image'], FILTER_VALIDATE_INT, array('min_range' => 1))) {

	# Full image path
	$image = '../../uploads/' . $_GET['image'];

	# Check that the image exists and is a file
	i(!file_exists($image) || (!is_file($image))) {
		$image = FALSE;
	}
} # End of $_GET['image'] IF

# If there was a problem, use the default image
if(!$image) {
	$image = 'images/unavailable.png';
	$name = 'unavailable.png';
}

# Get the image information
$info = getimagesize($image);
$fs = filesize($image);

# Send the content information
header("Content-Type: {$info['mime']}\n");
header("Content-Disposition: inline; filename=\"$name\"\n");
header("Content-Length: $fs\n");

# Send the file
readfile($image);
?>