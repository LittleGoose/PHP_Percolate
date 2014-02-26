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
        <h2>Testing Display Errors</h2>
        <?php 
        # Script 8.1
        # Created on 10/23/13
        # Created by Jesse Evers

        # Show errors:
        ini_set('display_errors', 1)

        # Create errors:
        foreach ($var as $v) {}
            $result = 1 / 0;
        ?>
    </body>
</html>