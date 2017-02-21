<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html";
				charset="utf-8"/>
			<title>HTML Contact Form</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
	<div class="container">
		<p>&ensp;</p>
		<?php # Script 2.4 - handle_form.php #3

		// Validate the name:
		if (!empty($_REQUEST['name'])) {
			$name = $_REQUEST['name'];
		} else {
			$name = NULL;
			echo '<p>&ensp;</p><font color="red"><p class="error" align="left">You forgot to enter your <b>name!</b></p></font>';
		}

		// Validate the email:
		if (!empty($_REQUEST['email'])) {
			$email = $_REQUEST['email'];
		} else {
			$email = NULL;
			echo '<font color="red"><p class="error" align="left">You forgot to enter your <b>email address!</b></p></font>';
		}

		// Validate the comments:
		if (!empty($_REQUEST['comments'])) {
			$comments = $_REQUEST['comments'];
		} else {
			$comments = NULL;
			echo '<font color="red"><p class="error" align="left">You forgot to enter your <b>comments!</b></p></font>';
		}

		// Validate the gender:
		if (isset($_REQUEST['gender'])) {

			$gender = $_REQUEST['gender'];

			if ($gender == 'M') {
				$greeting = '<p><b>Good day, Sir!</b></p>';
			} elseif ($gender == 'F') {
				$greeting = '<p><b>Good day, Madam!</b></p>';
			} else { // Unacceptable value.
				$gender = NULL;
				echo '<font color="red"><pclass="error" align="left">Gender should be either <b>"M" or "F"!</b></p></font>';
			}

		} else { // $_REQUEST['gender'] is not set.
			$gender = NULL;
			echo '<font color="red"><p class="error" align="left">You forgot to select your <b>gender!</b></p></font>';
		}

		// If everything is OK, print the message:
		if ($name && $email && $gender && $comments) {

			echo "<p>&ensp;</p><p>&ensp;</p><p>&ensp;</p><p>Thank you, <b>$name</b>, for the following comments:<br />
			<tt>$comments</tt></p>
			<p>We will reply to you at <b><i>$email</i></b>.</p>\n";

			echo $greeting;

		} else { // Missing form value.
			echo '<b><font color="red"><p class="error" align="left">Please go back and fill out the form again.</p></font><a href="form.php" button type="button" class="btn btn-warning">Please go Back</a></b>';
		}

		?>
		</div>
	</body>
</html>
