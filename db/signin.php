<?php 

$email = $_POST["email"];

if( $email != '' ) {

	include('db/db.php');
	$emailCheck = "SELECT id from checkout WHERE email = '$email'";
	$result = $conn->query($emailCheck);
	if ($result->num_rows > 0) {
	// email exists within database
	} else {
	// email is not in the database, therefore add it
		$sql = "INSERT INTO checkout (email) VALUES ('$email')";
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully <br>";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

	$getID = "SELECT id from checkout WHERE email = '$email'";
	$result = $conn->query($getID);
	if ($result->num_rows > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
			echo "id: " . $row["id"]. "<br>";
		}
	} else {
		echo "0 results";
	}
	$conn->close();

} else {
	echo 'email was null';
}

?>