<?php
	include('../user/header.php');
	include('navbar.php');
	if (isset($_SESSION['message'])) {
        if ($_SESSION['message'] =="Jasa Kirim Berhasil Ditambahkan") {
            echo "<div class='alert alert-success text-center alert-dismissible fade in' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>".$_SESSION['message']."</div>";
        }
        if ($_SESSION['message'] =="Nama Jasa Kirim Sudah Ada") {
            echo "<div class='alert alert-danger text-center alert-dismissible fade in' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>".$_SESSION['message']."</div>";
        }



        unset($_SESSION['message']);
    }
?>
<div id="create-category">
	<div class="container">
		<br><br><h1 class="text-center">Create Shipping</h1><br>
		
			<form action="process-shipping.php" class="form" method="post">
				<div class="form-group">
				 	<div class="col-md-12">
				 		<label for="nama">Nama</label>
				    	<input required type="text" name="nama" class="form-control" id="nama"><BR>
				 	</div> 
					</div>
					<div class="form-group">
					<div class="col-xs-12">
					<label for="lama-kirim">Lama Kirim</label>
				    <input required type="number" min="1" name="lama_kirim" class="form-control" id="lama-kirim"><BR>
				    </div>
				</div>

				<div class="form-group">
					<div class="col-xs-12">
					<label for="tarif">Tarif</label>
				    <input required type="number" name="tarif" min="1" class="form-control" id="tarif">
				    </div>
				</div>

				<div class="col-md-12">
					<br>
					<input type="submit" name="submit" id="submit-jasa-kirim" class="btn btn-success" value="Submit">							
				</div>
			</form>
	</div>	
</div>
