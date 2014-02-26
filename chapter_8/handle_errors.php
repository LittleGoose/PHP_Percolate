<!doctype html>
<html lang="en">  
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <title>Displaying Errors</title>
        <link rel="Shortcut Icon" href="/favicon.ico"/> 
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h2>Handling Errors</h2>
        <?php 
        # Script 8.3
        # Created on 10/28/13
        # Created by Jesse Evers

        # Used to indicate whether or not site is live
        define('LIVE', TRUE);

        # Error-handling function:
        function my_error_handler ($e_number, $e_message, $e_file, $e_line, $e_vars) {
            # Adds where in which file the error occurred
            $message = "An error occurred in script '$e_file' on line $e_line: $e_message\n";
            $message .= print_r($e_vars, 2);

            # Prints varying message depending on whether or not the site is live
            if (!LIVE) {
                echo '<pre>' . $message . "\n";
                debug_print_backtrace();
                echo '<pre><br>';
            } else {
                echo "<div class='error'>A system error occurred. We apologize for the inconvenience.</div><br>";
            }
        }
        set_error_handler('my_error_handler');

        # Create errors:
        foreach ($var as $v) {}
            $result = 1 / 0;
        ?>
    </body>
</html>