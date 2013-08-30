<?php

	$page_title = 'Register';
	include('includes/header.inc.html');
	
	if(isset($_POST['submitted'])) {
		$errors = array();
	
		if(empty($_POST['name'])) {
			$errors[] = 'You forgot to enter your name.';
		}
		
		if(empty($_POST['email'])) {
			$errors[] = 'You forgot to enter your email address.';
		}
		
		if(!empty($_POST['password1'])) {
		
			if ($_POST['password1'] != $_POST['password2']) {
				$errors[] = 'Your password did not match the confirmed password.';
				
			}
		} else {
			$errors[] = 'You forgot to enter your password.';
		}
		
		if (empty($errors)) {
			$body = "Thank you for registering with our site!\nYour password is '{$_POST['password1']}'.\n\nSincerely,\nMe";
			mail ($_POST['email'], 'Thank you for registering!', $body);
			
			echo '<h1 id="mainhead">Thank you!</h1><p>You are now registered. An email has been sent to your email address confirming the information.</p><p><br /></p>';
			
		} else {
			echo '<h1 id="mainhead">Error!</h1><p class="error">The following error(s) occurred:<br />';
			foreach ($errors as $msg) {
				echo " - $msg<br />\n";
			}
			echo '</p><p>Please go back and try again.</p><p><br /></p>';
		}
		
	} else {

?>

<h2>Register</h2>
<form action="register.php" method="post">
	<p>Name: <input type="text" name="name" size="20" maxlength="40" /></p>
	<p>Email address: <input type="text" name="email" size="20" maxlength="40" /></p>
	<p>Password: <input type="password" name="password1" size="10" maxlength="20" /></p>
	<p>Confirm Password: <input type="password" name="password2" size="10" maxlength="20" /></p>
	<p><input type="submit" name="submit" value="Register" /></p>
	<input type="hidden" name="submitted" value="TRUE" />
</form>

<?php

	}

	include('includes/footer.inc.html');

?>