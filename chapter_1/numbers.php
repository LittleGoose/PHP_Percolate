<!doctype html>
<html lang="en">  
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<title>Numbers</title>
		<link rel="Shortcut Icon" href="/favicon.ico"/> 
		<link rel="stylesheet" type="text/css" href="/css/styles.css">
	</head>
	<body>
		<?php 
		# Script 1.8 - numbers.php
		# Created on 9/4/2013
		# Created by Jesse Evers
		$quantity = 30;
		$price = 119.95;
		$taxrate = .05;

		$total = $quantity * $price;
		$total = $total + ($total * $taxrate);

		$total = number_format($total, 2);

		echo '<p>You are purchasing <b>' . $quantity . '</b> widget(s) at a cost of <b>$' . $price . '</b> each. With tax, the total comes to <b>$' . $total . '</b>.</p>';
		?>
	</body>
	</html>