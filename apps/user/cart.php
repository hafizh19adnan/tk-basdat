<?php
    include('header.php');
    include('navbar.php');
?> 

	<div id="purchase">
		<div class="row">
			<div class="container">
			<div id="detail-pembeli" class="col-md-7">
				<div class="head-tab">
			  		<ul class="nav nav-tabs">
					  	<li class="active"><a data-toggle="tab" href="#home">Detail Pembelian</a></li>
					  	<li><a data-toggle="tab" href="#home">Konfirmasi Data</a></li>
					</ul>
			  	</div>
				<div class="tab-content">
			    	<div id="home" class="tab-pane fade in active">
						<form class="form">
							<div class="form-group">
							 	<div class="col-md-12">
							 		<label for="email">Nama Lengkap</label>
							    	<input type="email" class="form-control" id="email"><BR>
							 	</div> 
  							</div>
 							<div class="form-group">
								<div class="col-xs-6">
								<label for="email">Email Pembeli</label>
							    <input type="email" class="form-control" id="email">
							</div>
							<div class="col-xs-6">
								<label for="email">No.Telpon / HP</label>
							    <input type="email" class="form-control" id="email">
							    <br>
							</div>
							<div class="col-xs-12">
								<label for="email">Alamat Lengkap</label>
							    <input type="textbox" class="form-control" id="email">
							    <br>
							</div>
							<div class="col-xs-6">
								<label for="email">Kabupaten/Kota</label>
							    <input type="email" class="form-control" id="email">
							</div>
							<div class="col-xs-6">
								<label for="email">Kode Pos</label>
							    <input type="email" class="form-control" id="email">
							</div>
							<div class="col-md-12">
								<br>
								<div class="dropdown">
								    <button class="btn  dropdown-toggle" type="button" data-toggle="dropdown">Pilh Jasa Kirim
								    <span class="caret"></span></button>
								    <ul class="dropdown-menu">
								      <li><a href="#">TIKI Reguler</a></li>
								      <li><a href="#">POS Indonesia</a></li>
								      <li><a href="#">JNE Reguler</a></li>
								    </ul>
				 				</div>
							</div>
							<div class="col-md-12">
								<br>
								<input type="submit" name="" value="Update" class="btn btn-success">
							</div>
						</form>
					</div>
			    </div>
			    </div>					
				</div>
				<div id="ringkasan-belanja" class="col-md-4">
					<h3>Ringkasan Belanja</h3>
					<h5>Total Harga		<span class="pull-right">Rp. 430.000,-</span></h5>
					<h5>Biaya Kirim<span class="pull-right">Rp. 30.000,-</span></h5>
					<h5><strong>Total Belanja<span class="pull-right">Rp. 460.000,-</span></strong></h5>
					<button class="btn btn-danger">Checkout</button>
				</div>
			</div>
			</div>
		</div>
	</div>

	<div id="cart">
		
			<div class="container">
			<div id="keranjang" class="col-md-7">
				<div class="head-tab">
			  		<ul class="nav nav-tabs">
					  	<li class="active"><a data-toggle="tab" href="#home">Keranjang Belanja</a></li>
					    
					</ul>
			  	</div>
				<div class="tab-content">
			    	<div id="home" class="tab-pane fade in active">
			      		<div class="col-md-4">
			      			<br>
			      			<img src="../assets/images/adidas1.jpg" class="thumbnail img-responsive">	
			      		</div>
			      		<div class="col-md-8">
			      			<br>
			      			<h4>Adidas F50 Red Ori</h4>
			      			<h5>P000001</h5>
			      			<p>Berat : 1Kg</p>
			      			<p>Kuantitas : 1</p>
			      			<p>Harga Satuan : Rp. 230.000,-</p>
			      			<p><strong>Sub Total : Rp. 230.000,-</strong></p>
			      		</div>
			      		<div class="col-md-4">
			      			<br>
			      			<img src="../assets/images/adidas1.jpg" class="thumbnail img-responsive">	
			      		</div>
			      		<div class="col-md-8">
			      			<br>
			      			<h4>Adidas F50 Red KW Thailand</h4>
			      			<h5>P000001</h5>
			      			<p>Berat : 1Kg</p>
			      			<p>Kuantitas : 1</p>
			      			<p>Harga Satuan : Rp. 200.000,-</p>
			      			<p><strong>Sub Total : Rp. 200.000,-</strong></p>
			      		</div>
			      		
					</div>
			    </div>
			     
				</div>					
				</div>
				
			</div>
			</div>
		</div>
	</div>
	