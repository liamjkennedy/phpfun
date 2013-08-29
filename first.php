<!DOCTYPE html>
<html>
<head>
	<title>Forms</title> 
</head>
<body>

<?php
	
	if (!empty($_REQUEST['name'])) {
		$name = stripslashes($_REQUEST['name']);
	} else {
		$name = NULL;
		echo '<p><font color="red">You forgot to enter your name!</font></p>';
	}
	
	if (!empty($_REQUEST['email'])) {
		$email = $_REQUEST['email'];
	} else {
		$email = NULL;
		echo '<p><font color="red">You forgot to enter your email address!</font></p>';
	}
	
	if (!empty($_REQUEST['comments'])) {
		$comments = stripslashes($_REQUEST['comments']);
	} else {
		$email = NULL;
		echo '<p><font color="red">You forgot to enter your comments!</font></p>';
	}
	
	if (isset($_REQUEST['gender'])) {
		$gender = $_REQUEST['gender'];
		if ($gender == 'M') {
			$message = "<p><b>Have a good day, <i>SIR!<i> *wink wink*</b></p>";
		} else if ($gender == 'F') {
			$message = "<p><b>Have a good day, <i>MA'AM!<i> *wink wink*</b></p>";
		} else {
			$message = NULL;
			echo '<p><font color="red">Gender should be either "M" or "F"! Zer vill be order in mein PHP forms! Non-binary gender identification is inferior!</font></p>';
		}
	} else {
		$gender = NULL;
		echo '<p><font color="red">You forgot to select your gender! No you don\'t have any other options, where do you think we are? Amsterdam?</font></p>';
	}
	
	if ($name && $email && $gender && $comments) {
		echo "<p>Thank you, <b>$name</b>, for the following comments:<br /><tt>\"$comments\"</tt></p><p>We will reply to you at <i>$email</i>.</p><br />";
		echo $message;
	} else {
		echo '<p><font color="red">Don\'t take the ****. Go back and do it again.</font></p>';
	}
	
?>
	
</body>
</html>