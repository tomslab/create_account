<?php
include('db/updateDelivery.php');
include('head.php');

?>

<form action="review.php" method="post">

	<?php
	include('db/db.php');

	$sql = "SELECT card_number,
	card_name,
	card_expiry_mm,
	card_expiry_yy,
	card_csc
	FROM checkout WHERE cookie = '$session'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
			$card_number = $row["card_number"];
			$card_name = $row["card_name"];
			$card_expiry_mm = $row["card_expiry_mm"];
			$card_expiry_yy = $row["card_expiry_yy"];
			$card_csc = $row["card_csc"];
		}
	}
	?>

	<div class="form-group">
		<label for="cardNumber">Card Number</label>
		<input type="tel" class="form-control input-lg" id="cardNumber" name="cardNumber" placeholder="1111 2222 3333 4444"
		<?php
		echo 'value="';
		if( $card_number!='' ) {
			echo $card_number;
		}
		echo '">';
		?>
	</div>

	<div class="form-group">
		<label for="cardName">Name on Card</label>
		<input type="text" class="form-control input-lg" id="cardName" name="cardName" placeholder="MRS J DOE"
		<?php
		echo 'value="';
		if( $card_name!='' ) {
			echo $card_name;
		}
		echo '">';
		?>
	</div>

	<div class="form-group row">
		<div class="col-xs-6">
			<label for="expiry">Expiry Date</label>
			<div class="row">
				<div id="expiryMMcontainer" class="col-xs-6">
					<input type="tel" class="form-control input-lg" id="expiryMM" name="expiryMM" placeholder="MM"
					<?php
					echo 'value="';
					if( $card_expiry_mm!='' ) {
						echo $card_expiry_mm;
					}
					echo '">';
					?>
				</div>
				<div id="expiryYYcontainer" class="col-xs-6">
					<input type="tel" class="form-control input-lg" id="expiryYY" name="expiryYY" placeholder="YY"
					<?php
					echo 'value="';
					if( $card_expiry_yy!='' ) {
						echo $card_expiry_yy;
					}
					echo '">';
					?>
				</div>
			</div>
		</div>
		<div class="col-xs-5 col-xs-offset-1">
			<label for="csc">CSC</label>
			<input type="tel" class="form-control input-lg" id="csc" name="csc" placeholder="123"
			<?php
			echo 'value="';
			if( $card_csc!='' ) {
				echo $card_csc;
			}
			echo '">';
			?>
		</div>
	</div>

	<button type="submit" class="btn btn-success btn-block btn-lg">Continue</button>

</form>

<?php include('foot.php'); ?>