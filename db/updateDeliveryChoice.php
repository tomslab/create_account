<?php 

$cookie_name = 'create_account_cookie';
$session = $_COOKIE[$cookie_name];

$deliveryChoice = $_POST["deliveryChoice"];
$chosen_day_value = $_POST["chosen_day_value"];
/*echo $deliveryChoice . "<br />";
echo $chosen_day_value . "<br />";*/

if( $deliveryChoice != '' ) {

	include('db.php');
	if( $deliveryChoice === 'chosen_day' ) {
		$sql = "UPDATE checkout SET
			delivery_choice = '$deliveryChoice',
			chosen_day = '$chosen_day_value'
		WHERE cookie = '$session'";
	} else {
		$sql = "UPDATE checkout SET
			delivery_choice = '$deliveryChoice',
			chosen_day = ''
		WHERE cookie = '$session'";
	}
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