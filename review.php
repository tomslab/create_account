<?php include('head.php'); ?>

<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title">Basket</h4>
	</div>
	<ul class="list-group">
		<li class="list-group-item">
			<div class="form-group row">
				<div class="col-xs-4">
					<img src="img/sonos_play1_black.jpg" class="img-responsive">
				</div>
				<div class="col-xs-8">
					<strong>Sonos Play:1 Black - The Wireless Hi-Fi</strong>
					<h4 class="productPrice">&#163;169</h4>
				</div>
			</div>
			<select id="prod1quantity" class="form-control">
				<option>Remove</option>
				<option selected>Quantity 1</option>
				<option>Quantity 2</option>
				<option>Quantity 3</option>
				<option>Quantity 4</option>
				<option>Quantity 5</option>
				<option>Quantity 6</option>
			</select>
		</li>
		<li class="list-group-item">
			<div class="form-group row">
				<div class="col-xs-4">
					<img src="img/nike_revolution_2.jpg" class="img-responsive">
				</div>
				<div class="col-xs-8">
					<strong>Nike Revolution 2 - Men's Running Shoe</strong>
					<h4 class="productPrice">&#163;49</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<select id="prod2quantity" class="form-control form-group">
						<option>Remove</option>
						<option selected>Quantity 1</option>
						<option>Quantity 2</option>
						<option>Quantity 3</option>
						<option>Quantity 4</option>
						<option>Quantity 5</option>
						<option>Quantity 6</option>
					</select>
				</div>
				<div class="col-xs-6">
					<select id="prod2size" class="form-control">
						<option>Size UK 8</option>
						<option>Size UK 9</option>
						<option>Size UK 10</option>
						<option>Size UK 10.5</option>
						<option selected>Size UK 11</option>
						<option>Size UK 12</option>
					</select>
				</div>
			</div>
		</li>
	</ul>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title">Delivery</h4>
	</div>
	<div class="panel-body">
		<strong>Next day delivery</strong> (&#163;5.95) <a class="pull-right" href="#">edit</a>
	</div>
	<ul class="list-group">
		<li class="list-group-item">
			<address style="margin-bottom: 0;">
				<strong>Tom Hedges</strong><br />
				Blackwater Cottage, Church Road, East Bilney, Norfolk, NR20 4HN <a class="pull-right" href="#">edit</a>
			</address>
		</li>
	</ul>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title"><i class="fa fa-lock"></i> Payment</h4>
	</div>
	<div class="panel-body">
		Visa ending in xxxx <a class="pull-right" href="#">edit</a>
	</div>
</div>


<form action="complete.php">

	<button type="submit" class="btn btn-success btn-block btn-lg">Confirm Purchase</button>

</form>

<?php include('foot.php'); ?>