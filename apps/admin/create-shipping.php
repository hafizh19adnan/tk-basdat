<?php
	include('../user/header.php');
	include('navbar.php');
?>
<div id="create-category">
	<div class="container">
		<br><br><h1 class="text-center">Create Shipping</h1><br>
		
			<<form class="form">
							<div class="form-group">
							 	<div class="col-md-12">
							 		<label for="nama">Nama</label>
							    	<input type="email" class="form-control" id="nama"><BR>
							 	</div> 
  							</div>
 							<div class="form-group">
								<div class="col-xs-12">
								<label for="lama-kirim">Lama Kirim</label>
							    <input type="text" class="form-control" id="lama-kirim"><BR>
							    </div>
							</div>

							<div class="form-group">
								<div class="col-xs-12">
								<label for="tarif">Tarif</label>
							    <input type="text" class="form-control" id="tarif">
							    </div>
							</div>

							<div class="col-md-12">
								<br>
								<button id="submit-jasa-kirim" class="btn btn-success">Submit</button>							
							</div>
						</form>
	</div>	
</div>
