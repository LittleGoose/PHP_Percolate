<!DOCTYPE HTML>
<html lang="en">  
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<title>Widget Cost Calculator</title>
		<link rel="Shortcut Icon" href="/favicon.ico"/> 
		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/login.js" charset="utf-8"></script>
	</head>
	<body>
		<!-- Script 15.8 - login.php -->
		<h1>Widget Cost Calculator</h1>
		<p id="results"></p>
		<form action="login.php" method="post" id="login">
			<p id="emailP">Email Address: <input type="text" name="email" id="email">
				<span class="errorMessage" id="emailError">Please enter your email address!</span>
			</p>
			<p id="passwordP">Password: <input type="text" name="password" id="password">
				<span class="errorMessage" id="passwordError">Please enter your password!</span>
			</p>
			<p><input type="submit" name="submit" id="submit" value="Login!"></p>
		</form>
	</body>
</html>