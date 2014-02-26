<!doctype html>
<html lang="en">  
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<title>Review 2</title>
		<link rel="Shortcut Icon" href="/favicon.ico"/> 
		<link rel="stylesheet" type="text/css" href="/css/styles.css">
	</head>
	<body>
		<?php 
		# Review 2 - review.php
		# Created 9/11/2013
		# Created by Jesse Evers

		echo "<p><b>Question 1:</b> What is the significance of a form's <strong>method</strong> attribute? Of its <strong>action</strong> attribute?</p>";
		echo "<p><b>Answer:</b> The <strong>method</strong> attribute determines whether the data is sent to the page as a pair of name-value pairs sent to the page's url (the <em>GET</em> method). The other possiblity is <em>POST</em>. This method cannot be reloaded, but is more secure and can support larger amounts of data. The <strong>action</strong> attribute directs the form to the correct file/url to handle that particular form.</p>";

		echo "<p><b>Question 2:</b> Why must an HTML form that gets submitted to a PHP script be loaded through a URL? What would happen upon submitting the form if it were not loaded through a URL?</p>";
		echo "<p><b>Answer:</b> If it wasn't loaded through a URL, the data would have no way to travel and be used. If you didn't load it through a URL, it would crash once you submitted it.</p>";

		echo "<p><b>Question 3:</b> What are the differences between using single and double quotation marks to delineate strings?<p>";
		echo "<p><b>Answer:</b> Double quotes allow for more inserting of variables directly without concatenation, while single quotes require more special syntax.</p>";

		echo "<p><b>Question 4:</b> What control structures were introduced in this chapter?<p>";
		echo "<p><b>Answer:</b> FOREACH, FOR, WHILE, DOWHILE, IF, ELSEIF, and ELSE.</p>";

		echo "<p><b>Question 5:</b> What new variable type was introduced in this chapter?<p>";
		echo "<p><b>Answer:</b> Arrays were introduced.</p>";

		echo "<p><b>Question 6:</b> What operator tests for equality? What is the assignment operator?<p>";
		echo "<p><b>Answer:</b> The operator \"==\" tests for equality. The assignment operator is \"=\".</p>";

		echo "<p><b>Question 7:</b> Why are textual form elements validated using <strong>empty()</strong> but other form elements are validated using <strong>isset()</strong>?<p>";
		echo "<p><b>Answer:</b> Textual form elements are validated using <strong>empty()</strong> because it will return TRUE if there is nothing in the value of the variable. Other things use <strong>isset()</strong> because it returns FALSE if the variable is empty.</p>";

		echo "<p><b>Question 8:</b> What is the difference between an <em>indexed</em> array and an <em>associative</em> array?<p>";
		echo "<p><b>Answer:</b> An <em>associative</em> array has user-assigned keys, whereas an <em>indexed</em> array is automatically assigned keys starting at 0.</p>";

		echo "<p><b>Question 9:</b> With what value do indexed arrays begin (by default)? If an indexed array has ten elements in it, what would the expected index be of the last element in the array?<p>";
		echo "<p><b>Answer:</b> By default, indexed arrays begin with the key value 0. The expected value of the last element in an indexed array would be 9.</p>";		

		echo "<p><b>Question 10:</b> What are the <em>superglobal arrays</em>? From where do the following superglobals get their values?<br>
		<ul><strong>
			<li>$_GET</li>
			<li>$_POST</li>
			<li>$_COOKIE</li>
			<li>$_REQUEST</li>
			<li>$_SESSION</li>
			<li>$_SERVER</li>
			<li>$_ENV</li>
			<p></strong></ul>";
		echo "<p><b>Answer:</b> The superglobal arrays are variables that give you information about a request or its context. Values are aquired from:
		<ul>
			<li><strong>$_GET</strong>: from the \"get\" method mentioned in Question 1.</li>
			<li><strong>$_POST</strong>: from the \"post\" method mentioned in Question 1.</li>
			<li><strong>$_COOKIE</strong>: data available to a PHP script via HTTP cookies.</li>
			<li><strong>$_REQUEST</strong>: this is a combination of the $_GET, $_POST, and $_COOKIE superglobals.</li>
			<li><strong>$_SESSION</strong>: data that has been previously stored in a session.</li>
			<li><strong>$_SERVER</strong>: data that is available to a PHP script via the web server itself.</li>
			<li><strong>$_ENV</strong>: data from the environment that PHP is running in.</li>
		</p>";

		echo "<p><b>Question 11:</b> How can you print an induvidual <em>indexed</em> array item? How can you print an induvidual <em>associative</em> array item?<p>";
		echo "<p><b>Answer:</b> You can print an induvidual <em>indexed</em> array item by using the syntax <tt>echo array[key];</tt>. You can print an induviual <em>associative</em> array item the same way.</p>";

		echo "<p><b>Question 12:</b> What does the <strong>count()</strong> function do?<p>";
		echo "<p><b>Answer:</b> It counts the number of elements in an array.</p>";		

		echo "<p><b>Question 13:</b> What impact does printing <strong>\\n</strong> have on the Web browser?<p>";
		echo "<p><b>Answer:</b> It makes a new line.</p>";

		echo "<p><b>Question 14:</b> Generally speaking, when would you use a <strong>while</strong> loop? When would you use a <strong>for</strong> loop? When would you use a <strong>foreach</strong> loop? What is the syntax of each loop type?<p>";
		echo "<p><b>Answer:</b> You would use a <strong>while</strong> loop when you didn't know how many times it would iterate. You would use a <strong>for</strong> loop when you knew how many times it would iterate. You would use a <strong>foreach</strong> loop when you're printing things from an array.<br>
		The syntax for a <strong>while</strong> loop is:<br>
		i = 0;<br>
		while(i <= x) {<br>
			# code... <br>
		}<br>
		<br>
		The syntax for a <strong>for</strong> loop is:<br>
		for ($i=x; $i <= x; $i++) {<br> 
			# code...<br>
		}<br>
		<br>
		The syntax for a <strong>foreach</strong> loop is:<br>
		foreach ($variable as $key => $value) {<br>
			# code...<br>
		}
		</p>";

		echo "<p><b>Question 15:</b> What is the <tt>++</tt> operator? What does it do?<p>";
		echo "<p><b>Answer:</b> The <tt>++</tt> operator is the increment operator and is used to add 1 to any variable in the syntax <tt>$i++</tt>.</p>";
?>
	</body>
	</html>