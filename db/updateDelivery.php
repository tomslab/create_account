<?php 

$cookie_name = 'create_account_cookie';
$session = $_COOKIE[$cookie_name];

$line1 = $_POST["line1"];
$line2 = $_POST["line2"];
$town = $_POST["town"];
$county = $_POST["county"];
$postcode = $_POST["postcode"];

if( $line1 != '' ) {

	include('db.php');
	$sql = "UPDATE checkout SET
	address_line1 = '$line1',
	address_town = '$town',
	address_county = '$county',
	address_postcode = '$postcode'
	WHERE cookie = '$session'";
	
	if ($conn->query($sql) === TRUE) {
		//echo "New record created successfully <br>";
	} else {
		//echo "Error: " . $sql . "<br>" . $conn->error;
	}

	if( $line2!='' ) {
		$sql = "UPDATE checkout SET address_line2 = '$line2' WHERE cookie = '$session'";
	} else {
		$sql = "UPDATE checkout SET address_line2 = '' WHERE cookie = '$session'";
	}

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully <br>";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

} else {
	//echo 'email was null';
}

?>