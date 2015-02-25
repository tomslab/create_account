<?php

// Get delivery information

include('db.php');

$sql = "SELECT delivery_choice,
			   chosen_day,
			   first_name,
			   last_name,
			   address_line1,
			   address_line2,
			   address_town,
			   address_county,
			   address_postcode
		FROM checkout WHERE cookie = '$session'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $delivery_choice = $row["delivery_choice"];
        $delivery_day = $row["chosen_day"];
        $first_name = $row["first_name"];
        $last_name = $row["last_name"];
        $line1 = $row["address_line1"];
        $line2 = $row["address_line2"];
        $town = $row["address_town"];
        $county = $row["address_county"];
        $postcode = $row["address_postcode"];
    }
}

switch( $delivery_choice ) {
	case 'free_delivery':
		$delivery_choice = "Free Delivery";
		break;
	case 'first_class':
		$delivery_choice = "First Class Delivery";
		break;
	case 'one_day':
		$delivery_choice = "One Day Delivery";
		break;
	case 'chosen_day':
		$delivery_choice = "Chosen Day Delivery: " . $delivery_day;
		break;
	default:
		break;
}

echo '<div class="panel panel-default">';
echo '<div class="panel-heading">';
echo '<h4 class="panel-title">Delivery</h4>';
echo '</div>';
echo '<div class="panel-body">';
echo '<strong>' . $delivery_choice . '</strong> (&#163;5.95) <a class="pull-right" href="delivery_choice.php">edit</a>';
echo '</div>';
echo '<ul class="list-group">';
echo '<li class="list-group-item">';
echo '<address style="margin-bottom: 0;">';
echo '<strong>' .  $first_name . ' ' . $last_name . '</strong>';
echo '<a class="pull-right" href="create_account.php">edit</a>';
echo '<br />';
if( $line2!='' ) {
	echo $line1 . ', ' . $line2 . ',<br /> ' . $town . ', ' . $county . ', ' . $postcode;
} else {
	echo $line1 . ', ' . $town . ', ' . $county . ', ' . $postcode;
}
echo '<a class="pull-right" href="find_address.php">edit</a>';
echo '<div class="clearfix"></div>';
echo '</address>';
echo '</li>';
echo '</ul>';
echo '</div>';

$conn->close();

?>