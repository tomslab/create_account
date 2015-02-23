<?php include('head.php'); ?>

<form action="delivery_choice.php">
	<div style="width:50%; float:left;">
		<div class="form-group">
			<label for="firstName">First Name</label>
			<input type="text" class="form-control input-lg" id="firstName" placeholder="Jane" style="border-top-right-radius:0; border-bottom-right-radius:0;">
		</div>
	</div>
	<div style="width:50%; float:right;">
		<div class="form-group">
			<label for="lastName">Last Name</label>
			<input type="text" class="form-control input-lg" id="lastName" placeholder="Doe" style="border-top-left-radius:0; border-bottom-left-radius:0; border-left:0;">
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="form-group">
		<label for="email">Email</label>
		<input type="password" class="form-control input-lg" id="email" placeholder="hello@example.com">
	</div>
	<div class="form-group">
		<label for="createPassword">Choose Password</label>
		<input type="password" class="form-control input-lg" id="createPassword" placeholder="New Password">
	</div>
	<div class="form-group">
		<label for="confirmPassword">Confirm Password</label>
		<input type="password" class="form-control input-lg" id="confirmPassword" placeholder="Re-entr Password">
	</div>
	<button type="submit" class="btn btn-success btn-block btn-lg">Create Account</button>
</form>

<div class="clearfix"></div>

<a href="index.php" class="btn btn-default btn-block" style="margin-top: 1em;" role="button">Go Back</a>

<?php include('foot.php'); ?>