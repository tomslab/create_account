<?php include('db/cookie.php'); ?>

<?php include('head.php'); ?>

<form action="create_account.php" method="post">
	<div class="form-group">
		<label class="control-label" for="email">Email address</label>
		<input type="email" class="form-control input-lg" id="email" name="email" onkeyup="fieldCheck(this.id)" onfocusout="fieldCheckOut(this.id)" placeholder="hello@example.com">
	</div>
	<div class="form-group">
		<button id="continue" type="submit" class="continue btn btn-default btn-block btn-lg">Continue as guest</button>
	</div>
	<hr />
	<div class="form-group">
		<label class="control-label" for="exampleInputPassword1">Have a Password?</label>
		<input type="password" class="form-control input-lg" id="exampleInputPassword1" placeholder="Password">
	</div>
	<button id="login" type="submit" class="continue btn btn-success btn-block btn-lg">Sign in</button>
</form>

<?php include('foot.php'); ?>