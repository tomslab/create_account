<?php 

$cookie_name = 'create_account_cookie';
$session = $_COOKIE[$cookie_name];

$email = $_POST["email"];

if( $email != '' ) {

	include('db.php');
	$sql = "UPDATE checkout SET email = '$email' WHERE cookie = '$session'";
	if ($conn->query($sql) === TRUE) {
		//echo "New record created successfully <br>";
	} else {
		//echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();

} else {
	//echo 'email was null';
}

?>