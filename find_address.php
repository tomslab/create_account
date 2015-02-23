<?php
include('db/updateDeliveryChoice.php');
include('head.php');
?>

<form action="payment.php" method="post">

	<?php
	include('db/db.php');

	$sql = "SELECT address_line1,
	address_line2,
	address_town,
	address_county,
	address_postcode
	FROM checkout WHERE cookie = '$session'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
			$line1 = $row["address_line1"];
			$line2 = $row["address_line2"];
			$town = $row["address_town"];
			$county = $row["address_county"];
			$postcode = $row["address_postcode"];
		}
	}
	?>

	<div class="form-group">
		<label for="houseName">House name or number</label>
		<input type="text" class="form-control input-lg" id="houseName" placeholder="20"
		<?php
		echo 'value="';
		if( $line1!='' ) {
			echo $line1;
		}
		echo '">';
		?>
	</div>
	<div class="form-group">
		<label for="postcode">Postcode</label>
		<input type="text" class="form-control input-lg" id="findPostcode" placeholder="LE11 3AY"
		<?php
		echo 'value="';
		if( $postcode!='' ) {
			echo $postcode;
		}
		echo '">';
		?>
	</div>

	<div class="form-group">
		<a href="#" id="findAddress" class="btn btn-default btn-block btn-lg" role="button">Find my address</a>
	</div>

	<div id="addressResultsContainer" 
	<?php 
	if( $line1==='' ) {
		echo 'style="display:none;"';
	}
	echo ">";
	?>

	<select id="addressOptions" class="form-group form-control">
		<?php
		echo '<option disabled';
		if( $line1==='' ) {
			echo 'selected';
		}
		echo '>Please select an address</option>';
		$houses = array(
			"1 Beck Farm Cottage, Church Road",
			"2 Beck Farm Cottage, Church Road",
			"Bilney Cottage, Church Road",
			"Blackwater Cottage, Church Road",
			"Boat House, Church Road",
			"Highfields Farm, Church Road",
			"Hillside, Church Road",
			"Komsom, Church Road",
			"Martyrs Cottage, Church Road",
			"Westfield, Church Road",
			"Woodside, Church Road"
			);
		$housesLength = count($houses);

		$line1and2 = $line1 . ", " . $line2;
		for($x = 0; $x < $housesLength; $x++) {
			echo "<option";
			if( $houses[$x] == $line1and2 ) {
				echo ' selected';
			}
			echo ">" . $houses[$x] . "</option>";
		}
		?>
	</select>

	<div class="form-group" id="addressResult">
		<input type="text" class="form-control input-lg" id="line1" name="line1" placeholder="Line 1"
		<?php
		echo 'value="';
		if( $line1!='' ) {
			echo $line1;
		}
		echo '">';
		?>
		<input type="text" class="form-control input-lg" id="line2" name="line2" placeholder="Line 2"
		<?php
		echo 'value="';
		if( $line2!='' ) {
			echo $line2;
		}
		echo '">';
		?>
		<input type="text" class="form-control input-lg" id="town" name="town" placeholder="Town"
		<?php
		echo 'value="';
		if( $town!='' ) {
			echo $town;
		}
		echo '">';
		?>
		<input type="text" class="form-control input-lg" id="county" name="county" placeholder="County"
		<?php
		echo 'value="';
		if( $county!='' ) {
			echo $county;
		}
		echo '">';
		?>
		<input type="text" class="form-control input-lg" id="postcode" name="postcode" placeholder="Postcode"
		<?php
		echo 'value="';
		if( $postcode!='' ) {
			echo $postcode;
		}
		echo '">';
		?>
	</div>

	<button type="submit" class="btn btn-success btn-block btn-lg">Continue</button>

</div>

</form>

<?php include('foot.php'); ?>