<?php

// COOKIES

$cookie_name = "create_account_cookie";

if(!isset($_COOKIE[$cookie_name])) {
	$cookie_value = uniqid();
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	include('db/db.php');
	$recordCookie = "INSERT INTO checkout (cookie) VALUES ('$cookie_value')";
	if ($conn->query($recordCookie) === TRUE) {
		echo "New record created successfully <br>";
	} else {
		echo "Error: " . $recordCookie . "<br>" . $conn->error;
	}
} else {
	echo "Value is: " . $_COOKIE[$cookie_name];
}

?>