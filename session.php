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

function setSessionMessage($text, $status = 'success') {
	$_SESSION['messages'] = isset($_SESSION['messages']) ? $_SESSION['messages'] : [];
	array_push($_SESSION['messages'], [
		'text' => $text,
		'status' => $status,
	]);
}

function getSessionMessages() {
	$messages = isset($_SESSION['messages']) ? $_SESSION['messages'] : [];
	$_SESSION['messages'] = [];
	return $messages;
}