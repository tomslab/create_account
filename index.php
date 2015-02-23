<?php include('head.php'); ?>

<form action="create_account.php">
	<div class="form-group">
		<label for="exampleInputEmail1">Email address</label>
		<input type="email" class="form-control input-lg" id="exampleInputEmail1" placeholder="hello@example.com">
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Password</label>
		<input type="password" class="form-control input-lg" id="exampleInputPassword1" placeholder="Password">
	</div>
	<button type="submit" class="btn btn-success btn-block btn-lg">Continue</button>
</form>

<?php include('foot.php'); ?>