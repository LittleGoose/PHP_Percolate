<!doctype html>
<html lang="en">  
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<title>Using Echo</title>
		<link rel="Shortcut Icon" href="/favicon.ico"/> 
		<link rel="stylesheet" type="text/css" href="/css/styles.css">
	</head>
	<body>
		<!-- Script 1.3 -->
		<p>This is standard HTML.</p>
		<?php 
			echo "<p>This was generated using PHP!</p>";

			echo "<p><b>Hello</b>, world!</p>";

			echo "<p>This sentence is
			printed over two lines.</p>";
		?>
	</body>
	</html>