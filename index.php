<?php

session_start();
include_once('database.php');
include_once('session.php');

if (!isSessionLoggedIn()) {
	header('Location: login.php');
	exit();
}

include('snippets/header.php');
include('snippets/secret-stuff.php');
include('snippets/logout-form.php');
include('snippets/footer.php');