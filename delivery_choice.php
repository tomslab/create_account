<?php include('head.php'); ?>

<form action="find_address.php">
	<div class="panel panel-default">
		<div class="panel-heading">
			<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
			<h3 class="panel-title">Free Delivery</h3>
		</div>
		<div class="panel-body">
			Delivery in 3-5 business days
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
			<h3 class="panel-title">First Class (+&#163;5.95)</h3>
		</div>
		<div class="panel-body">
			Delivery in up to 2 business days
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
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
			<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
			<h3 class="panel-title">Chosen Day Delivery (+&#163;8.95)</h3>
		</div>
		<div class="panel-body">
			Delivery on
			<select class="form-group">
				<?php
					$datetime = new DateTime('tomorrow');
					$oneDay = $datetime->format('l, j F');
					$oneDayCheck = $datetime->format('l');
					for($i=0; $i<12; $i++) {
						if( $oneDayCheck === 'Sunday' ) {
							$datetime->modify('+1 day');
							$oneDay = $datetime->format('l, j F');
						}
						echo "<option>" . $oneDay . "</option>";
						$datetime->modify('+1 day');
						$oneDay = $datetime->format('l, j F');
						$oneDayCheck = $datetime->format('l');
					}
				?>
				<!-- <option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option> -->
			</select>
		</div>
	</div>

	<button type="submit" class="btn btn-success btn-block btn-lg">Continue</button>
</form>

<?php include('foot.php'); ?>