<?php

session_start();
include_once('database.php');
include_once('session.php');
include('snippets/header.php');

if (isset($_POST['action']) && $_POST['action'] === 'log-in') {
	
	// They want to log in
	// Check the login details
	$password = isset($_POST['password']) ? $_POST['password'] : null;
	$email = isset($_POST['email']) ? $_POST['email'] : null;

	if (validateLogin($email, $password)) {
		// The login was good
		setSessionLoggedIn();
		setSessionMessage('Thanks for logging-in!');
		header('Location: ./');
	} else {
		// The login was bad
		setSessionMessage('Your login failed. Please try again.', 'danger');
		header('Location: ./login.php');
	}

} else {
	// Show the login form
	include('snippets/login-form.php');
}

include('snippets/footer.php');