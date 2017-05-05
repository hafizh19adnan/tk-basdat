<?php
	include 'header.php';
	include 'navbar.php';
?>
	<div id="user-dashboard">
		<div class="container">
			
			<div class="col-md-4">
				<h2>Dashboard</h2>
				<br>
				<img src="../assets/images/adidas1.jpg" class="img-responsive thumbnail">
			</div>	
			<div class="col-md-8">
				<br><br><br>
				<h2>Hafizh Rafizal Adnan</h2><br>
				<h4>hafizh19adnan@gmail.com</h4>
				<h5>Situbondo, 11 April 1997</h5>
				<h5>Perum Panji Permai Blok MM 06, Situbondo</h5>
				<h5><strong>Total Transaksi : 2</strong></h5>
				<button class="btn btn-primary">Edit Profile</button>
			</div>
			<div class="col-md-12">
				<h3>Riwayat Transaksi</h3><br>
				<div class="head-tab">
					<ul class="nav nav-tabs">
				    <li class="active"><a data-toggle="tab" href="#home">Produk Pulsa</a></li>
				    <li><a data-toggle="tab" href="#menu1">Produk Shipped</a></li>
				 </ul>
				</div>
				

				 <div class="tab-content">
				    <div id="home" class="tab-pane fade in active">
				      <div class="table-responsive">   
							      		<br>       
						 	<table class="table">
						    <thead>
						      <tr>
						        <th>No.Invoice</th>
						        <th>Nama Barang</th>
						        <th>Tanggal</th>
						        <th>Status</th>
						        <th>Total Bayar</th>
						        <th>Nominal</th>
						        <th>Nomor</th>
						        <th>Action</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr>
						        <td>V001</td>
						        <td>pULSA 3 4G</td>
						        <td>04/04/2017</td>
						        <td>SUDAH BAYAR</td>
						        <td>Rp. 12.000,-</td>
						        <td>10</td>
						        <td>089123823789193</td>
						        <td><button class="btn btn-sm btn-success">Ulas</button></td>
						      </tr>
						      <tr>
						        <td>V001</td>
						        <td>pULSA 3 4G</td>
						        <td>04/04/2017</td>
						        <td>SUDAH BAYAR</td>
						        <td>Rp. 12.000,-</td>
						        <td>10</td>
						        <td>089123823789193</td>
						        <td><button class="btn btn-sm btn-success">Ulas</button></td>
						      </tr>
						      <tr>
						        <td>V001</td>
						        <td>pULSA 3 4G</td>
						        <td>04/04/2017</td>
						        <td>SUDAH BAYAR</td>
						        <td>Rp. 12.000,-</td>
						        <td>10</td>
						        <td>089123823789193</td>
						        <td><button class="btn btn-sm btn-success">Ulas</button></td>
						      </tr>
						    </tbody>
						  	</table>
						  </div>
				    </div>
				    <div id="menu1" class="tab-pane fade">
				      <div class="table-responsive">   
			      		<br>       
						  <table class="table">
						    <thead>
						      <tr>
						        <th>No.Invoice</th>
						        <th>Nama Toko</th>
						        <th>Tanggal</th>
						        <th>Status</th>
						        <th>Total Bayar</th>
						        <th>Alamat Kirim</th>
						        <th>Biaya Kirim</th>
						        <th>Nomer Resi</th>
						        <th>Jasa Kirim</th>
						        <th>Action</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr>
						        <td>V001</td>
						        <td>Messiah Shop</td>
						        <td>04/04/2017</td>
						        <td>SUDAH BAYAR</td>
						        <td>Rp. 120.000,-</td>
						        <td>Perumnas Panji Permai Blok MM 06, Situbondo</td>
						        <td>30.000</td>
						        <td>DKC0398BDASJKD</td>
						        <td>JNE Reguler</td>
						        <td><button class="btn btn-sm btn-success">Ulas</button></td>
						      </tr>
						       <tr>
						        <td>V001</td>
						        <td>Messiah Shop</td>
						        <td>04/04/2017</td>
						        <td>SUDAH BAYAR</td>
						        <td>Rp. 120.000,-</td>
						        <td>Perumnas Panji Permai Blok MM 06, Situbondo</td>
						        <td>30.000</td>
						        <td>DKC0398BDASJKD</td>
						        <td>JNE Reguler</td>
						        <td><button class="btn btn-sm btn-success">Ulas</button></td>
						      </tr>
						       <tr>
						        <td>V001</td>
						        <td>Messiah Shop</td>
						        <td>04/04/2017</td>
						        <td>SUDAH BAYAR</td>
						        <td>Rp. 120.000,-</td>
						        <td>Perumnas Panji Permai Blok MM 06, Situbondo</td>
						        <td>30.000</td>
						        <td>DKC0398BDASJKD</td>
						        <td>JNE Reguler</td>
						        <td><button class="btn btn-sm btn-success">Ulas</button></td>
						      </tr>
						      
						    </tbody>
						  </table>
						</div> 			      		
		    		</div>
  				</div>
			</div>
		</div>
	</div>		 
	  
<?php include'footer.php' ?>