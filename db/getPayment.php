<?php

// Get payment information

include('db.php');

$sql = "SELECT card_number
		FROM checkout WHERE cookie = '$session'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $card_number = $row["card_number"];
    }
}

$review_card_number = substr($card_number, -4);

echo '<div class="panel panel-default">';
echo '<div class="panel-heading">';
echo '<h4 class="panel-title"><i class="fa fa-lock"></i> Payment</h4>';
echo '</div>';
echo '<div class="panel-body">';
echo 'Visa ending in ' . $review_card_number . ' <a class="pull-right" href="#">edit</a>';
echo '</div>';
echo '</div>';

$conn->close();

?>