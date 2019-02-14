<?php

function setSessionLoggedIn() {
	$_SESSION['loggedIn'] = true;
}

function setSessionLoggedOut() {
	$_SESSION['loggedIn'] = false;
}

function isSessionLoggedIn() {
	return isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'];
}