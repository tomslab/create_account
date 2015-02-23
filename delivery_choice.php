<?php 
include('db/updateAccount.php');
include('head.php');
?>

<form action="find_address.php" method="post">

	<?php
	include('db/db.php');

	$sql = "SELECT delivery_choice,
				   chosen_day
	FROM checkout WHERE cookie = '$session'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
			$delivery_choice = $row["delivery_choice"];
			$chosen_day = $row["chosen_day"];
		}
	}
	?>

	<div class="panel panel-default">
		<div class="panel-heading">
			<input type="radio" name="deliveryChoice" id="deliveryChoice1" value="free_delivery"
			<?php
			if( $delivery_choice === 'free_delivery' || $delivery_choice === '' ) {
				echo 'checked';
			}
			?>
			>
			<h3 class="panel-title">Free Delivery</h3>
		</div>
		<div class="panel-body">
			Delivery in 3-5 business days
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			<input type="radio" name="deliveryChoice" id="deliveryChoice1" value="first_class"
			<?php
			if( $delivery_choice === 'first_class' ) {
				echo 'checked';
			}
			?>
			>
			<h3 class="panel-title">First Class (+&#163;5.95)</h3>
		</div>
		<div class="panel-body">
			Delivery in up to 2 business days
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			<input type="radio" name="deliveryChoice" id="deliveryChoice1" value="one_day"
			<?php
			if( $delivery_choice === 'one_day' ) {
				echo 'checked';
			}
			?>
			>
			<h3 class="panel-title">One-Day Delivery (+&#163;8.95)</h3>
		</div>
		<div class="panel-body">
			Delivery tomorrow:
			<?php 
			$datetime = new DateTime('tomorrow');
			$oneDay = $datetime->format('l');
			if( $oneDay === 'Sunday' ) {
				$datetime->modify('+1 day');
				$oneDay = $datetime->format('l, j F');
			}
			echo $oneDay;
			?>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			<input type="radio" name="deliveryChoice" id="deliveryChoice1" value="chosen_day"
			<?php
			if( $delivery_choice === 'chosen_day' ) {
				echo 'checked';
			}
			?>
			>
			<h3 class="panel-title">Chosen Day Delivery (+&#163;8.95)</h3>
		</div>
		<div class="panel-body">
			Delivery on
			<select name="chosen_day_value" class="form-group">
				<?php
				$datetime = new DateTime('tomorrow');
				$oneDay = $datetime->format('l, j F');
				$oneDayCheck = $datetime->format('l');
				for($i=0; $i<12; $i++) {
					if( $oneDayCheck === 'Sunday' ) {
						$datetime->modify('+1 day');
						$oneDay = $datetime->format('l, j F');
					}
					echo "<option value='" . $oneDay . "'";
					if( $oneDay === $chosen_day ) {
						echo "selected";
					}
					echo ">" . $oneDay . "</option>";
					$datetime->modify('+1 day');
					$oneDay = $datetime->format('l, j F');
					$oneDayCheck = $datetime->format('l');
				}
				?>
			</select>
		</div>
	</div>

	<button type="submit" class="btn btn-success btn-block btn-lg">Continue</button>
</form>

<?php include('foot.php'); ?>