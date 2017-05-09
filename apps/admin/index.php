<?php
	include('../user/header.php');
	include('navbar.php');
	if(!isset($_SESSION['email'])){
		$_SESSION['message']="Login Dulu Bos!";
		header("location: ../index.php");
	}
?>

<div id="admin">
	<br><br>
	<h1 class="text-center">Admin Dashboard</h1><br><br>
	<div class="container">
		<div class="col-md-4">
			<div class="thumbnail">
				<img src="../assets/images/xl.jpeg">
				<div class="full">
					<a href="create-category.php" class="btn btn-lg btn-warning">Create Category</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<img src="../assets/images/xl.jpeg">
				<div class="full">
					<a href="create-promo.php" class="btn btn-lg btn-success">Create Promo</a>
				</div>
				
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<img src="../assets/images/xl.jpeg">
				<div class="full">
					<a href="create-shipping.php" class="btn btn-lg btn-danger">Create Shipping</a>
				</div>
			</div>
			
		</div>
	</div>
</div>