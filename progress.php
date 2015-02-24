<?php
include('db/db.php');

$sql = "SELECT first_name,
address_line1,
card_number
FROM checkout WHERE cookie = '$session'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		$first_name = $row["first_name"];
		$line1 = $row["address_line1"];
		$card_number = $row["card_number"];
	}
}

if( $first_name === '' ) {
	$step1a = 'current';
	$step1b = 'primary';
	$step2a = 'to-do';
	$step2b = 'default';
	$step3a = 'to-do';
	$step3b = 'default';
	$step4a = 'to-do';
	$step4b = 'default';
} else if( $line1 === '' ) {
	$step1a = 'complete';
	$step1b = 'success';
	$step2a = 'current';
	$step2b = 'primary';
	$step3a = 'to-do';
	$step3b = 'default';
	$step4a = 'to-do';
	$step4b = 'default';
} else if( $card_number === '' ) {
	$step1a = 'complete';
	$step1b = 'success';
	$step2a = 'complete';
	$step2b = 'success';
	$step3a = 'current';
	$step3b = 'primary';
	$step4a = 'to-do';
	$step4b = 'default';
} else {
	$step1a = 'complete';
	$step1b = 'success';
	$step2a = 'complete';
	$step2b = 'success';
	$step3a = 'complete';
	$step3b = 'success';
	$step4a = 'current';
	$step4b = 'primary';
}

?>

<div id="progress" class="row">
	<?php
	echo '<div class="col-xs-3 ' . $step1a . '">';
	echo '<span class="label label-' . $step1b . '">1</span>';
	?>
	<p>Account</p>
</div>
	<?php
	echo '<div class="col-xs-3 ' . $step2a . '">';
	echo '<span class="label label-' . $step2b . '">2</span>';
	?>
	<p>Delivery</p>
</div>
	<?php
	echo '<div class="col-xs-3 ' . $step3a . '">';
	echo '<span class="label label-' . $step3b . '">3</span>';
	?>
	<p>Payment</p>
</div>
	<?php
	echo '<div class="col-xs-3 ' . $step4a . '">';
	echo '<span class="label label-' . $step4b . '">4</span>';
	?>
	<p>Review</p>
</div>
</div>