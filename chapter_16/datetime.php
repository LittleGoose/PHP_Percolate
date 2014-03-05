<!doctype html>
<html lang="en">  
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <title>DateTime</title>
        <link rel="Shortcut Icon" href="/favicon.ico"/> 
        <style type="text/css" media="screen">
        	body {
        		font-family: Verdana, Arial, Helvetica, sans-serif;
        		font-size: 12px;
        		margin: 10px;
        	}
        	label {
        		font-weight: bold;
        	}
        	.error {
        		color: #F00;
        	}
        </style>
    </head>
    <body>
    <?php 
    # Script 16.5
    # Made by Jesse Evers
    # Made on 3/5/14

    # Set the start and end date as today and tomorrow by default
    $start = new DateTime();
    $end = new DateTime();
    $end->modify('+1 day');

    # Default format for displaying dates
    $format = 'm/d/Y';

    # This function validates a provided date string
    # The function returns an array--month, day, year--if valid
    function validate_date($date) {

    	# Break up the string into its parts
    	$date_array = explode('/', $date);

    	# Return FALSE if there aren't 3 items
    	if(count($date_array) != 3) return false;

    	# Return FALSE if it's not a valid date
    	if(!checkdate($date_array[0], $date_array[1], $date_array[2])) return false;

    	// Return the array
    	return $date_array;
    } # End of validate_date() function

    # Check for a form submission
    if(isset($_POST['start'], $_POST['end'])) {

    	# Call the validation function on both dates
    	if((list($sm, $sd, $sy)) = validate_date($_POST['start']) && (list($em, $ed, $ey) = validate_date($_POST['end']))) {

    		# If it's okay, adjust the DateTime objects
    		$start->setDate($sy, $sm, $sd);
    		$start->setDate($ey, $em, $ed);

    		# The start day must come first
    		if($start < $end) {

    			# Determine the interval
    			$interval - $start->diff($end);
    		}

    	}
    }

    ?>
	</body>
</html>