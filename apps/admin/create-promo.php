<?php
	include('../user/header.php');
	include('navbar.php');
	if (isset($_SESSION['message'])) {
        if ($_SESSION['message'] == "Data Periode awal dan akhir tidak sesuai ketentuan") {
            echo "<div class='alert alert-danger text-center alert-dismissible fade in' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>".$_SESSION['message']."</div>";
            unset($_SESSION['message']);
        }


        
    }

?>
<div id="create-category">
	<div class="container">
		<br><br><h1 class="text-center">Create Promo</h1><br>
		<form class="form" method="post" action="process-promo.php">
		<div class="form-group">
		 	<div class="col-md-12">
		 		<label for="desc">Deskripsi</label>
		    	<input required type="text" class="form-control" name="deskripsi" id="desc"><BR>
		 	</div> 
		</div>
		<div class="form-group">
			<div class="col-xs-12">
				<label for="periode-awal">Periode Awal</label>
			    <input required name="periode_awal" type="date" class="form-control" id="periode-awal"><BR>
		    </div>
		</div>
		
		<div class="form-group">
			<div class="col-xs-12">
				<label for="periode-akhir">Periode-akhir</label>
			    <input required name="periode_akhir" type="date" class="form-control" id="periode-akhir"><BR>
		    </div>
		</div>
		
		<div class="form-group">
			<div class="col-xs-12">
				<label for="kode-promo">Kode Promo</label>
			    <input required name="kode" type="text" class="form-control" id="kode-promo"><BR>
		    </div>
		</div>
		<BR>
		<div class="form-group">
			<div class="col-xs-12">
				<label for="kategori">Kategori</label>
				<select required name="kategori" class="form-control btn btn-default" id="sel1" onchange=showSub(this.value)>
				<option></option> 
			    <?php
				    $conn= pg_connect("host=localhost dbname=hafizhrafizal user=postgres password=basdatkeren");
	        		$query = "SELECT nama FROM Tokokeren.Kategori_Utama ";   			 
			        $result = pg_query($conn,$query); 
			        while ($row = pg_fetch_assoc($result)) {
			        	echo "<option>".$row['nama']."</option>";
			        }
			    ?>
	     	</select><BR>
		    </div>
		</div>
		
		<div class="form-group">
			<div class="col-xs-12">
			<BR>
			<label for="sub-kategori">Sub Kategori</label>
		    <select required name="sub_kategori" class="form-control btn btn-default" id="sel2">
		   	<option></option> 
		     </select><BR>
		    </div>
		</div>
		<BR>
		<div class="col-md-12">
			<br>
			<input type="submit" name="submit" id="submit-promo" class="btn btn-success" value="Submit" />						
		</div>
	</form>	

	</div>	
</div>
<br><br>
<?php include('../user/footer.php');