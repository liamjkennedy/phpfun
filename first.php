<!DOCTYPE html>
<html>
<head>
	<title>Forms</title> 
</head>
<body>

	<form action="first.php" method="post">
		<fieldset><legend>Enter your information in the form below:</legend>
			<p><b>Name:</b> <input type="text" name="name" size="20" maxlength="40"></p>
			<p><b>Email Address:</b> <input type="text" name="email" size="40" maxlength="60"></p>
			<p><b>Gender:</b><input type="radio" name="gender" value="M" /> Male <input type="radio" name="gender" value="F" /> Female </p>
			<p><b>Age:</b><select name="age"><option value="0-29">Under 30</option><option value="30-60">Between 30 and 60</option><option value="60+">Over 60</option></select></p>
			<p><b>Comments:</b><textarea name="comments" rows="3" cols="40"></textarea></p>
		</fieldset>
		<div align="center"><input type="submit" name="submit" value="Submit My Information" /></div>
	</form>

<?php

	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$comments = $_REQUEST['comments'];
	$age = $_REQUEST['age'];
	$gender = $_REQUEST['gender'];
	
	echo "<p>Thank you, <b>$name</b>, for the following comments:<br /><tt>\"$comments\"</tt></p><p>We will reply to you at <i>$email</i>.</p><br /><p>You've told us you were born more or less <b>$age</b> years ago and the binary gender you identify as begins with the letter <b>$gender</b>. THANK <i>YOU!</i>";
	
?>
	
</body>
</html>