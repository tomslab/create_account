<?php 

$cookie_name = 'create_account_cookie';
$session = $_COOKIE[$cookie_name];

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$userPassword = $_POST["createPassword"];

if( $email != '' ) {

	include('db.php');
	$sql = "UPDATE checkout SET
		email = '$email',
		first_name = '$firstName',
		last_name = '$lastName',
		password = '$userPassword'
	WHERE cookie = '$session'";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully <br>";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();

} else {
	echo 'email was null';
}

?>