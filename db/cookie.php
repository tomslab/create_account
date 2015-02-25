<?php

// COOKIES

$cookie_name = "create_account_cookie";

if(!isset($_COOKIE[$cookie_name])) { // If cookie isn't set then set it and insert it into database
	$cookie_value = uniqid();
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
} else {
	// echo "Value is: " . $_COOKIE[$cookie_name] . "<br />"; // If the cookie already exists then print it out
}

$session = $_COOKIE[$cookie_name];

include('db.php');
$checkCookie = "SELECT cookie FROM checkout WHERE cookie = '$session'";
$result = $conn->query($checkCookie);
if ($result->num_rows === 0) {
	// echo "not found";
	$recordCookie = "INSERT INTO checkout (cookie) VALUES ('$session')";
	if ($conn->query($recordCookie) === TRUE) {
		//echo "New record created successfully <br>";
	} else {
		//echo "Error: " . $recordCookie . "<br>" . $conn->error;
	}
}



?>