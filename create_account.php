<?php
include('db/updateEmail.php');
include('head.php');
?>

<form action="delivery_choice.php" method="post">

	<?php
	include('db/db.php');

	$sql = "SELECT first_name,
	last_name,
	email,
	password
	FROM checkout WHERE cookie = '$session'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
			$first_name = $row["first_name"];
			$last_name = $row["last_name"];
			$email = $row["email"];
			$userPassword = $row["password"];
		}
	}
	?>

	<div style="width:50%; float:left;">
		<div class="form-group">
			<label class="control-label" for="firstName">First Name</label>
			<input type="text" class="form-control input-lg" id="firstName" name="firstName" onkeyup="fieldCheck(this.id)" onfocusout="fieldCheckOut(this.id)" placeholder="Jane" style="border-top-right-radius:0; border-bottom-right-radius:0;"
			<?php
			echo 'value="';
			if( $first_name!='' ) {
				echo $first_name;
			}
			echo '">';
			?>
		</div>
	</div>
	<div style="width:50%; float:right;">
		<div class="form-group">
			<label class="control-label" for="lastName">Last Name</label>
			<input type="text" class="form-control input-lg" id="lastName" name="lastName" placeholder="Doe" onkeyup="fieldCheck(this.id)" onfocusout="fieldCheckOut(this.id)" style="border-top-left-radius:0; border-bottom-left-radius:0; border-left:0;"
			<?php
			echo 'value="';
			if( $last_name!='' ) {
				echo $last_name;
			}
			echo '">';
			?>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="form-group">
		<label class="control-label" for="email">Choose Password</label>
		<input type="email" class="form-control input-lg" id="email" name="email" placeholder="hell@example.com" onkeyup="fieldCheck(this.id)" onfocusout="fieldCheckOut(this.id)"
		<?php
		echo 'value="';
		if( $email!='' ) {
			echo $email;
		}
		echo '">';
		?>
	</div>
	<div class="form-group">
		<label class="control-label" for="password">Choose Password <small style="color: #CCC;">(Min 6 characters)</small></label>
		<input type="password" class="form-control input-lg" id="password" name="password" placeholder="New Password" onkeyup="fieldCheck(this.id)" onfocusout="fieldCheckOut(this.id)"
		<?php
		echo 'value="';
		if( $userPassword!='' ) {
			echo $userPassword;
		}
		echo '">';
		?>
	</div>
	<div class="form-group">
		<label class="control-label" for="confirmPassword">Confirm Password</label>
		<input type="password" class="form-control input-lg" id="confirmPassword" name="confirmPassword" placeholder="Re-enter Password" onkeyup="fieldCheck(this.id)" onfocusout="fieldCheckOut(this.id)"
		<?php
		echo 'value="';
		if( $userPassword!='' ) {
			echo $userPassword;
		}
		echo '">';
		?>
	</div>

	<button type="submit" class="btn btn-success btn-block btn-lg continue">Create Account</button>

</form>

<div class="clearfix"></div>

<a href="index.php" class="btn btn-default btn-block" style="margin-top: 1em;" role="button">Go Back</a>

<?php include('foot.php'); ?>