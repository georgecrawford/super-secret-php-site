<?php

include('snippets/header.php');

$KNOWN_EMAIL = 'root@root.com';
$KNOWN_PASSWORD = 'root';
$KNOWN_NAME = 'George';

$loggedIn = false;

if ($_POST) {
	// The user has submitted a form

	// Check the login details
	$password = isset($_POST['password']) ? $_POST['password'] : null;
	$email = isset($_POST['email']) ? $_POST['email'] : null;

	if ($password === $KNOWN_PASSWORD && $email === $KNOWN_EMAIL) {
		// The login was good
		include('snippets/login-success.php');
	} else {
		// The login was bad
		include('snippets/login-failure.php');
		include('snippets/login-form.php');
	}
} else {
	// The user has not submitted a form
	include('snippets/login-form.php');
}

include('snippets/footer.php');