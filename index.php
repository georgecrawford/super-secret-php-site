<h1>my lovely site</h1>




<?php

// session_set_cookie_params(60 * 60 * 24 * 365);
// session_start();

$KNOWN_EMAIL = 'root@root.com';
$KNOWN_PASSWORD = 'root';

$loggedIn = false;

if (!empty($_POST) && $_POST['action'] === 'Log in') {
	$password = isset($_POST['password']) ? $_POST['password'] : null;
	$email = isset($_POST['email']) ? $_POST['email'] : null;

	if ($password === $KNOWN_PASSWORD && $email === $KNOWN_EMAIL) {
		$loggedIn = true;
	}
}

if ($loggedIn) {
?>

<p>Welcome to my site!</p>

<?php
} else {
?>

<p>this site requires you to log in:</p>
<form action="index.php" method="post">
	<p>
		<label for="email">Email address</label>
		<input id="email" type="email" name="email" placeholder="Enter your email address here" />		
	</p>

	<p>
		<label for="password">Password</label>
		<input id="password" type="password" name="password" />
	</p>

	<input type="submit" name="action" value="Log in" />
</form>

<?
}

