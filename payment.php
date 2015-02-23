<?php include('head.php'); ?>

<form action="review.php">

	<div class="form-group">
		<label for="cardNumber">Card Number</label>
		<input type="tel" class="form-control input-lg" id="cardNumber" placeholder="1111 2222 3333 4444">
	</div>

	<div class="form-group">
		<label for="cardName">Name on Card</label>
		<input type="text" class="form-control input-lg" id="cardName" placeholder="MRS J DOE">
	</div>

	<div class="form-group row">
		<div class="col-xs-6">
			<label for="expiry">Expiry Date</label>
			<div class="row">
				<div id="expiryMMcontainer" class="col-xs-6">
					<input type="tel" class="form-control input-lg" id="expiryMM" placeholder="MM">
				</div>
				<div id="expiryYYcontainer" class="col-xs-6">
					<input type="tel" class="form-control input-lg" id="expiryYY" placeholder="YY">
				</div>
			</div>
		</div>
		<div class="col-xs-5 col-xs-offset-1">
			<label for="csc">CSC</label>
			<input type="tel" class="form-control input-lg" id="csc" placeholder="123">
		</div>
	</div>

	<button type="submit" class="btn btn-success btn-block btn-lg">Continue</button>

</form>

<?php include('foot.php'); ?>