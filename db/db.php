<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "create_account";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

/*$email = $_POST["email"];
$deliveryChoice = $_POST["deliveryChoice"];
$deliveryTo = $_POST["deliveryTo"];
$addressLine1 = $_POST["addressLine1"];
$addressLine2 = $_POST["addressLine2"];
$town = $_POST["town"];
$county = $_POST["county"];
$postcode = $_POST["postcode"];
$phoneNumber = $_POST["phoneNumber"];
$paymentType = $_POST["paymentType"];
$cardNumber = $_POST["cardNumber"];
$cardName = $_POST["cardName"];
$expiryMM = $_POST["expiryMM"];
$expiryYY = $_POST["expiryYY"];
$cvv = $_POST["cvv"];
$createPassword = $_POST["createPassword"];
$emailPrimary = $_POST["emailPrimary"];
$emailThird = $_POST["emailThird"];

$sql = "INSERT INTO checkout (
	email,
	deliveryChoice,
	deliveryLocation,
	addressLine1,
	addressLine2,
	town,
	county,
	postcode,
	phoneNumber,
	paymentMethod,
	cardNumber,
	cardName,
	expiryMM,
	expiryYY,
	cvv,
	futurePassword,
	emailPrimary,
	emailThird
	)
VALUES (
	'$email',
	'$deliveryChoice',
	'$deliveryTo',
	'$addressLine1',
	'$addressLine2',
	'$town',
	'$county',
	'$postcode',
	'$phoneNumber',
	'$paymentType',
	'$cardNumber',
	'$cardName',
	'$expiryMM',
	'$expiryYY',
	'$cvv',
	'$createPassword',
	'$emailPrimary',
	'$emailThird'
	)";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();*/

?>