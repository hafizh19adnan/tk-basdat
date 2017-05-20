<?php

	include ('header.php');
	include ('navbar.php');
	if(isset($_POST['submit'])){
		$email = $_SESSION['email'];
		$kode = $_POST['kode'];
		$rating = $_POST['rating'];
		$komentar = $_POST['komentar'];
		$date = date("m/d/Y");
		
		$conn =  $conn= pg_connect("host=localhost dbname=hafizhrafizal user=postgres password=basdatkeren");
		$query = "INSERT INTO TOKOKEREN.ULASAN(email_pembeli, kode_produk, tanggal, rating, komentar) VALUES ('".$email."', '".$kode."', '".$date."', ".$rating.", '".$komentar."')";
		$resultInsert = pg_query($query); 

		if ($resultInsert) { 
			$_SESSION['message']= "Review Berhasil Ditambahkan";
			header("location: index.php");	
		}else{
			$errormessage = pg_last_error(); 
		    echo "Error with query: " . $errormessage; 
		    exit(); 
		}
	}
?>

<div id="headline-shipped">
	<div class="container">
		<h1>Review Produk</h1>
		<div class="col-xs-6"></div>
	</div>
</div>
<div id="create-review">
	<div class="container">
		<form class="form" method="post" action="review.php">
		<div class="form-group">
		 	<div class="col-md-12">
		 		<label for="kode">Kode Produk</label>
		    	<input name="kode" required type="text" value='<?php echo $_GET['kode']?>' class="form-control" name="kode_produk" readonly id="desc"><BR>
		 	</div> 
		</div>
		<div class="form-group">
			<div class="col-xs-12">
				<label for="rating">Rating</label>
			    <select name="rating" class="form-control btn btn-default" id="sel2">
				   	<option>1</option> 
				   	<option>2</option> 
				   	<option>3</option> 
				   	<option>4</option> 
				   	<option>5</option> 
				   	<option>6</option> 
				   	<option>7</option> 
				   	<option>8</option> 
				   	<option>9</option> 
					<option>10</option> 
				</select>
		    </div>
		</div>
		
		<div class="form-group">
			<div class="col-xs-12">
				<label for="komentar">Komentar</label>
			    <textarea required name="komentar"  class="form-control" id="komentar" rows="4"></textarea><BR>
		    </div>
		</div>
		<div class="form-group">
			<div class="col-xs-12">
				<input type="submit" class="btn btn-success" name="submit">
		    </div>
		</div>
		</form>
	</div>
	
</div>