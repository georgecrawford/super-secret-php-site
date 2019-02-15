<?php

if (!empty($_GET['hash'])) {
	$hash = htmlentities($_GET['hash']);
	echo "I will now verify that there is a user in the database with the hash <strong>$hash</strong>";
} else {
	echo "something went wrong";
}