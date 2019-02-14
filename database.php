<?php

// CREATE TABLE `users` (
//   `id` int(11) NOT NULL AUTO_INCREMENT,
//   `firstName` varchar(255) NOT NULL,
//   `lastName` varchar(255) NOT NULL,
//   `email` varchar(255) NOT NULL,
//   `password` varchar(255) NOT NULL,
//   PRIMARY KEY (`id`)
// ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

$db_server = "localhost";
$db_username = "root";
$db_password = "root";
$db_database = "secret_site";

// Create a connection to be shared by all the utility functions
$db_connection = new mysqli($db_server, $db_username, $db_password, $db_database);

// Check the connection
if ($db_connection->connect_error) {
    die("Connection failed");
}

function validateLogin($email, $password) {
	global $db_connection;

	$clean_email = mysqli_real_escape_string($db_connection, $email);
	
	$query = "SELECT * FROM users WHERE email = '$clean_email'";
	$result = mysqli_query($db_connection, $query);

	if ($result) {
		// We only expect one row, so we can fetch it directly rather than 
		// iterating over the result set
		$user = mysqli_fetch_assoc($result);
		if ($user && $user['password'] === $password) {
			return true;
		}
	}

	return false;
}