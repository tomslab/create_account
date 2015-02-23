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
			<label for="firstName">First Name</label>
			<input type="text" class="form-control input-lg" id="firstName" name="firstName" placeholder="Jane" style="border-top-right-radius:0; border-bottom-right-radius:0;"
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
			<label for="lastName">Last Name</label>
			<input type="text" class="form-control input-lg" id="lastName" name="lastName" placeholder="Doe" style="border-top-left-radius:0; border-bottom-left-radius:0; border-left:0;"
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
	<?php include('db/getEmail.php'); ?>
	<div class="form-group">
		<label for="createPassword">Choose Password</label>
		<input type="password" class="form-control input-lg" id="createPassword" name="createPassword" placeholder="New Password"
		<?php
		echo 'value="';
		if( $userPassword!='' ) {
			echo $userPassword;
		}
		echo '">';
		?>
	</div>
	<div class="form-group">
		<label for="confirmPassword">Confirm Password</label>
		<input type="password" class="form-control input-lg" id="confirmPassword" name="confirmPassword" placeholder="Re-enter Password"
		<?php
		echo 'value="';
		if( $userPassword!='' ) {
			echo $userPassword;
		}
		echo '">';
		?>
	</div>

	<button type="submit" class="btn btn-success btn-block btn-lg">Create Account</button>

</form>

<div class="clearfix"></div>

<a href="index.php" class="btn btn-default btn-block" style="margin-top: 1em;" role="button">Go Back</a>

<?php include('foot.php'); ?>