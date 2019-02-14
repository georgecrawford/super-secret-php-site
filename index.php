<?php

session_start();
include_once('database.php');
include_once('session.php');
include('snippets/header.php');

if (isSessionLoggedIn()) {
	// The user was already logged-in
	include('snippets/welcome-back.php');
	include('snippets/logout-form.php');
} else {
	header('Location: login.php');
}

include('snippets/footer.php');