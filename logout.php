<?php

session_start();
include_once('database.php');
include_once('session.php');
include('snippets/header.php');

if (isset($_POST) && $_POST['action'] === 'log-out') {
	// They want to log out
	setSessionLoggedOut();
	include('snippets/logout-success.php');
} else {
	// An invalid visit to this page
	header('Location: index.php');
}