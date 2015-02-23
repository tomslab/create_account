<?php include('head.php'); ?>

<form action="payment.php">
	<div class="form-group">
		<label for="houseName">House name or number</label>
		<input type="text" class="form-control input-lg" id="houseName" placeholder="20">
	</div>
	<div class="form-group">
		<label for="postcode">Postcode</label>
		<input type="text" class="form-control input-lg" id="postcode" placeholder="LE11 3AY">
	</div>

	<div class="form-group">
		<a href="#" class="btn btn-default btn-block btn-lg" role="button">Find my address</a>
	</div>

	<select class="form-group form-control">
		<option disabled selected>Please select an address</option>
		<option>1 Beck Farm Cottage, Church Road</option>
		<option>2 Beck Farm Cottage, Church Road</option>
		<option>Bilney Cottage, Church Road</option>
		<option>Blackwater Cottage, Church Road</option>
		<option>Boat House, Church Road</option>
		<option>Highfields Farm, Church Road</option>
		<option>Hillside, Church Road</option>
		<option>Komsom, Church Road</option>
		<option>Martyrs Cottage, Church Road</option>
		<option>Westfield, Church Road</option>
		<option>Woodside, Church Road</option>
	</select>

	<div class="form-group" id="addressResult">
		<input type="text" class="form-control input-lg" id="line1" placeholder="Line 1" value="">
		<input type="text" class="form-control input-lg" id="line2" placeholder="Line 2" value="Church Road">
		<input type="text" class="form-control input-lg" id="town" placeholder="Town" value="East Bilney">
		<input type="text" class="form-control input-lg" id="county" placeholder="County" value="Norfolk">
		<input type="text" class="form-control input-lg" id="postcode" placeholder="Postcode" value="NR20 4HN">
	</div>

	<button type="submit" class="btn btn-success btn-block btn-lg">Continue</button>

</form>

<?php include('foot.php'); ?>