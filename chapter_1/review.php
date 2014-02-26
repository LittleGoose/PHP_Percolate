<!doctype html>
<html lang="en">  
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<title>Review</title>
		<link rel="Shortcut Icon" href="/favicon.ico"/> 
		<link rel="stylesheet" type="text/css" href="/css/styles.css">
	</head>
	<body>
		<?php 
		# Review 1 - review.php
		# Created on 9/6/2013
		# Created by Jesse Evers


		echo "<p><b>Question 1:</b> What tags are used to surround PHP code?</p>";
		echo "<p><b>Answer:</b> &lt?php ?&gt</p>";


		echo "<p><b>Question 2:</b> What extension should a PHP file have?</p>";
		echo "<p><b>Answer:</b> A PHP file should have the extension '.php.'</p>";


		echo "<p><b>Question 3:</b> What does a page's <em>encoding</em> refer to? What impact does the encoding have on the page?";
		echo "<p><b>Answer:</b> Encoding is how the internet interprets what the code says. Different encodings make the page look different or be displayed in different languages.";


		echo "<p><b>Question 4:</b> What PHP functions, or language constructs, can you use to send data to the Web browser?</p>";
		echo "<p><b>Answer:</b> You can use 'echo' or 'print.'";


		echo "<p><b>Question 5:</b> How does using single versus double quotation marks differ in creating or printing strings?</p>";
		echo "<p><b>Answer:</b> Single quotation marks don't support certain forms of concatenation, and escapting certain characters also doesn't work.</p>";


		echo "<p><b>Question 6:</b> What does it mean to <em>escape</em> a character in a string?</p>";
		echo "<p><b>Answer:</b> Escaping a character means to make PHP display a character that would generally be interpreted by the computer as part of the code.";

		echo "<p><b>Question 7:</b> What are the three comment syntaxes in PHP Which one can be used over multiple lines?</p>";
		echo "<p><b>Answer:</b> The comment syntaxes are: <br />
				&nbsp&nbsp&nbsp&nbsp// Comment<br />
				&nbsp&nbsp&nbsp&nbsp# Comment<br />
				&nbsp&nbsp&nbsp&nbsp/* This syntax can be used to make a multiline comment. */"; 


		echo "<p><b>Question 8:</b> What character do all variable names begin with? What characters can come next? What other characters can be used in a variable's name?</p>";
		echo "<p><b>Answer:</b> The first character of every variable is '$.' The character after that can be either an underscore or a letter, NOT a number. Letters, underscores, and numbers can be used in a variable name.";

		
		echo "<p><b>Question 9:</b> Are variable names case-sensitive or case-insensitive?</p>";
		echo "<p><b>Answer:</b> Variable names are case-sensitive.";


		echo "<p><b>Question 10:</b> What is the assignment operator?</p>";
		echo "<p><b>Answer:</b> The assignment operator is '='.</p>";


		echo "<p><b>Question 11:</b> How do you create a string variable?</p>";
		echo "<p><b>Answer:</b> You create a string variable with this syntax: '\$stringVar = \"string\".'</p>";


		echo "<p><b>Question 12:</b> What is the concatenation operator? What is the concatenation assignment operator?</p>";
		echo "<p><b>Answer:</b> The concatenation operator is '.'. The concatenation assignment operator is '.='.</p>";


		echo "<p><b>Question 13:</b> How are constants defined and used?</p>";
		echo "<p><b>Answer:</b> A constant is defined with the syntax 'define (\"NAME\", \"value\"), or, if the value is a number, the same thing without the quotes. They are used by just using their names. The name MUST be in caps.</p>";


		?>
	</body>
</html>