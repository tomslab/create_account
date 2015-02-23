<?php

// Get email

include('db.php');

$sql = "SELECT email FROM checkout WHERE cookie = '$session'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $userEmail = $row["email"];
    }
}

echo "<div class='form-group'>";
echo "<label for='email'>Email</label>";
echo "<input type='email' class='form-control input-lg' id='email' name='email' placeholder='hello@example.com' value='";
if( $userEmail!= '' ) {
	echo $userEmail;
}
echo "'>";
echo "</div>";

$conn->close();

?>