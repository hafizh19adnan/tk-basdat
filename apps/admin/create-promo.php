<?php
	include('../user/header.php');
	include('navbar.php');
?>
<div id="create-category">
	<div class="container">
		<br><br><h1 class="text-center">Create Promo</h1><br>
		
			<form class="form">
							<div class="form-group">
							 	<div class="col-md-12">
							 		<label for="desc">Deskripsi</label>
							    	<input type="email" class="form-control" id="desc"><BR>
							 	</div> 
  							</div>
 							<div class="form-group">
								<div class="col-xs-12">
								<label for="periode-awal">Periode Awal</label>
							    <input type="date" class="form-control" id="periode-awal"><BR>
							    </div>
							</div>
							<BR>
							<div class="form-group">
								<div class="col-xs-12">
								<label for="periode-akhir">Periode-akhir</label>
							    <input type="date" class="form-control" id="periode-akhir">
							    </div><BR>
							</div>

							<div class="form-group">
								<div class="col-xs-12">
								<label for="kode-promo">Kode Promo</label>
							    <input type="text" class="form-control" id="kode-promo">
							    </div><br>
							</div>

							<div class="form-group">
								<div class="col-xs-12">
								<label for="kategori">Kategori</label>
							    <input type="text" class="form-control" id="kategori">
							    </div><br>
							</div>

							<div class="form-group">
								<div class="col-xs-12">
								<label for="sub-kategori">Sub Kategori</label>
							    <input type="text" class="form-control" id="sub-kategori">
							    </div><br>
							</div>

							<div class="col-md-12">
								<br>
								<button id="submit-promo" class="btn btn-success">Submit</button>							
							</div>
						</form>	
	</div>	
</div>
