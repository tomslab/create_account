<?php 

$cookie_name = 'create_account_cookie';
$session = $_COOKIE[$cookie_name];

$cardNumber = $_POST["cardNumber"];
$cardName = $_POST["cardName"];
$expiryMM = $_POST["expiryMM"];
$expiryYY = $_POST["expiryYY"];
$csc = $_POST["csc"];

if( $cardNumber != '' ) {

	include('db.php');
	$sql = "UPDATE checkout SET
	card_number = '$cardNumber',
	card_name = '$cardName',
	card_expiry_mm = '$expiryMM',
	card_expiry_yy = '$expiryYY',
	card_csc = '$csc'
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