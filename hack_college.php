<?php

 $conn = new mysqli("localhost","root","shopping");
 if($conn->connect__error){
 	 die("Connection Failed!".$conn->connect__error);
 }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="sahil kumar">
	<meta http-equiv="X-UA_Compatible" content="IE=edge">
	<meta  name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
	<title></title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<h3 class="text-center text-light bg-info p-2">colleges for you </h3>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3"></div>
			<h5>Filter Product</h5>
			<hr>
			
			<h6 class="text-info">Select Brand</h6>
			<ul class="list-group">
				<?php
				$sql="SELECT DISTINCT Brand FROM Products ORDER BY Brand"
				$result=$conn->query($sql);
				While($row=$result->fetch_assoc()){

				
				?>
				<li class="list-group-item">
					<div class="form-check">
						<label class="=form-check-label">
							<input type="checkbox" class="form-check-input Product-check" value="<?= $row['brand']; ?>" id="brand"><?= $row['brand']; ?>
						</label>
						</div>
					</li>
			<?php } ?>		
			</ul>



			<h6 class="text-info">Select RAM</h6>
			<ul class="list-group">
				<?php
				$sql="SELECT DISTINCT ram FROM Products ORDER BY ram"
				$result=$connn->query($sql);
				While($row=$result->fetch_assoc()){

				
				?>
				<li class="list-group-item">
					<div class="form-check">
						<label class="=form-check-label">
							<input type="checkbox" class="form-check-input Product-check" value="<?= $row['ram']; ?>" id="ram"><?= $row['ram']; ?>
						</label>
						</div>
					</li>
			<?php } ?>		
			</ul>


			<h6 class="text-info">Select HDD</h6>
			<ul class="list-group">
				<?php
				$sql="SELECT DISTINCT HDD FROM Products ORDER BY HDD"
				$result=$connn->query($sql);
				While($row=$result->fetch_assoc()){

				
				?>
				<li class="list-group-item">
					<div class="form-check">
						<label class="=form-check-label">
							<input type="checkbox" class="form-check-input Product-check" value="<?= $row['HDD']; ?>" id="HDD"><?= $row['HDD']; ?>
						</label>
						</div>
					</li>
			<?php } ?>		
			</ul>


			<h6 class="text-info">Select Processor</h6>
			<ul class="list-group">
				<?php
				$sql="SELECT DISTINCT Processor FROM Products ORDER BY Processor"
				$result=$connn->query($sql);
				While($row=$result->fetch_assoc()){

				
				?>
				<li class="list-group-item">
					<div class="form-check">
						<label class="=form-check-label">
							<input type="checkbox" class="form-check-input Product-check" value="<?= $row['Processor']; ?>" id="Processor"><?= $row['Processor']; ?>
						</label>
						</div>
					</li>
			<?php } ?>		
			</ul>


			<h6 class="text-info">Select Screen Size</h6>
			<ul class="list-group">
				<?php
				$sql="SELECT DISTINCT Screen size FROM Products ORDER BY Screen size"
				$result=$connn->query($sql);
				While($row=$result->fetch_assoc()){

				
				?>
				<li class="list-group-item">
					<div class="form-check">
						<label class="=form-check-label">
							<input type="checkbox" class="form-check-input Product-check" value="<?= $row['Screen size']; ?>" id="Screen size"><?= $row['Screen size']; ?>
						</label>
						</div>
					</li>
			<?php } ?>		
			</ul>


			<h6 class="text-info">Select OS</h6>
			<ul class="list-group">
				<?php
				$sql="SELECT DISTINCT OS FROM Products ORDER BY OS"
				$result=$connn->query($sql);
				While($row=$result->fetch_assoc()){

				
				?>
				<li class="list-group-item">
					<div class="form-check">
						<label class="=form-check-label">
							<input type="checkbox" class="form-check-input Product-check" value="<?= $row['OS']; ?>" id="OS"><?= $row['OS']; ?>
						</label>
						</div>
					</li>
			<?php } ?>		
			</ul>
			</div>
		</div>
		<div class="col-lg-9">
			<h5 class="text-center" id="textChange">All Products</h5>
			<hr>
			<div class="text-center">
				<img src="images/loader.gif" id="loader"
				width="200" style="display:none;">
			</div>
			<div class="row" id="result">
				<?php
				$sql="SELECT *FROM Products";
				$result=$conn->query($sql);
				while($row=$result->fetch_assoc()){
					?>
				<div class="col-md-3 mb-2">
					<div class="card-deck">
						<div class="card border-secondary">
							<img src="<?= $row['Product-image']; ?>"
							class="card-img-overlay">
							<h6 style="margin-top: 175px" class="text-light bg-info text-center rounded p-1"><?= $row['Product_name']; ?></h6>
						</div>
						<div class="card-body">
							<h4 class="card-title text-danger">Price: <?= number_format($row['Product_price']); ?>/-</h4>
							<p>
								RAM: <?= $row['ram']; ?><br>
								HDD: <?= $row['hdd']; ?><br>
								Processor: <?= $row['Processor']; ?><br>
								Screen Size: <?= $row['Screen size']; ?><br>
								OS: <?= $row['OS']; ?><br>
							</p>
							<a href="#" class="btn btn-success btn-block"> Add to Cart</a>
						</div>
						</div>
					</div>
					</div>
				</div>	
				<?php } ?>
			</div>
		</div>
		
	</div>
</body>