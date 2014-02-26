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
        <h2>Reporting Errors</h2>
        <?php 
        # Script 8.2
        # Created on 10/28/13
        # Created by Jesse Evers

        # Show errors:
        ini_set('display_errors', 1)

        # Adjust error reporting:
        error_reporting(E_ALL | E_STRICT);

        # Create errors:
        foreach ($var as $v) {}
            $result = 1 / 0;
        ?>
    </body>
</html>