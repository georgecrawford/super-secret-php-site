<?php

session_start();

include('snippets/header.php');

$KNOWN_EMAIL = 'root@root.com';
$KNOWN_PASSWORD = 'root';
$KNOWN_NAME = 'George';


if ($_POST) {
	// The user has submitted a form
	
	switch($_POST['action']) {
		case 'Log in':
			// They want to log in
			// Check the login details
			$password = isset($_POST['password']) ? $_POST['password'] : null;
			$email = isset($_POST['email']) ? $_POST['email'] : null;

			if ($password === $KNOWN_PASSWORD && $email === $KNOWN_EMAIL) {
				// The login was good
				$_SESSION['loggedIn'] = true;
				include('snippets/login-success.php');
				include('snippets/logout-form.php');
			} else {
				// The login was bad
				include('snippets/login-failure.php');
				include('snippets/login-form.php');
			}
			break;

		case 'Log out':
			// They want to log out
			$_SESSION['loggedIn'] = false;
			include('snippets/logout-success.php');
			include('snippets/login-form.php');
			break;

		default:
			echo 'what did you do to break my site?';
			break;
	}


} else if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) {
	// The user was already logged-in
	include('snippets/welcome-back.php');
	include('snippets/logout-form.php');
} else {
	// The user has not submitted a form
	include('snippets/login-form.php');
}

include('snippets/footer.php');