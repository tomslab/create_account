<?php

// COOKIES

$cookie_name = "create_account_cookie";

if(!isset($_COOKIE[$cookie_name])) { // If cookie isn't set then set it and insert it into database
	$cookie_value = uniqid();
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	include('db.php');
	$recordCookie = "INSERT INTO checkout (cookie) VALUES ('$cookie_value')";
	if ($conn->query($recordCookie) === TRUE) {
		echo "New record created successfully <br>";
	} else {
		echo "Error: " . $recordCookie . "<br>" . $conn->error;
	}
} else {
	echo "Value is: " . $_COOKIE[$cookie_name]; // If the cookie already exists then print it out
}

?>