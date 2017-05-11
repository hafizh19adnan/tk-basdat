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
				<?php 
		          $email=$_SESSION['email'] ;
		          $conn= pg_connect("host=localhost dbname=hafizhrafizal user=postgres password=basdatkeren");
		            $query = "SELECT * FROM TOKOKEREN.PENGGUNA  WHERE email = '$email' LIMIT 1";          
		            $result = pg_query($conn,$query);
		            while ($row = pg_fetch_assoc($result)) { 
		              
		              echo "<h2>".$row['nama']."</h2>
							<h4>".$row['email']."</h4>
							<h5>".$row['tgl_lahir']."</h5>
							<h5>".$row['alamat']."</h5>";
		            } ?>
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
						      
						      <?php 
					          $email=$_SESSION['email'] ;
					          $conn= pg_connect("host=localhost dbname=hafizhrafizal user=postgres password=basdatkeren");
					           $query = "SELECT no_invoice, nama, tanggal, status, total_bayar, nominal, nomor FROM TOKOKEREN.PRODUK P, TOKOKEREN.TRANSAKSI_PULSA T WHERE P.kode_produk = T.kode_produk AND T.email_pembeli = '$email'";          
					            $result = pg_query($conn,$query);
					            $pulsa_trans = pg_num_rows($result);
					            if($pulsa_trans==0){
					            	echo "<tr><td>Transaksi Tidak Ditemukan</td></tr>";
					            }else{
					            	 while ($row = pg_fetch_assoc($result)) { 
					              
							              echo "<tr>
								        <td>".$row['no_invoice']."</td>
								        <td>".$row['nama']."</td>
								        <td>".$row['tanggal']."</td>
								        <td>".$row['status']."</td>
								        <td>".$row['total_bayar']."</td>
								        <td>".$row['nominal']."</td>
								        <td>".$row['nomor']."</td>
								        <td><button class='btn btn-sm btn-success'>Ulas</button></td>
								      </tr>";
							            }
					            }
					            ?>
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
						    <?php 
					          $email=$_SESSION['email'] ;
					          $conn= pg_connect("host=localhost dbname=hafizhrafizal user=postgres password=basdatkeren");
					            $query = "SELECT * FROM TOKOKEREN.TRANSAKSI_SHIPPED  WHERE email_pembeli = '$email'";          
					            $result = pg_query($conn,$query);
					            $pulsa_trans = pg_num_rows($result);
					            if($pulsa_trans==0){
					            	echo "<tr><td>Transaksi Tidak Ditemukan</td></tr>";
					            }else{
					            	 while ($row = pg_fetch_assoc($result)) { 
					              
							              echo "<tr>
									        <td>".$row['no_invoice']."</td>
									        <td>".$row['nama_toko']."</td>
									        <td>".$row['waktu_bayar']."</td>
									        <td>".$row['status']."</td>
									        <td>Rp. ".$row['total_bayar']."</td>
									        <td>".$row['alamat_kirim']."</td>
									        <td>Rp. ".$row['biaya_kirim']."</td>
									        <td>".$row['no_resi']."</td>
									        <td>".$row['nama_jasa_kirim']."</td>
									        <td><button class='btn btn-sm btn-success'>Ulas</button></td>
									      </tr>";
							            }
					            }
					            ?>
						      
						      
						    </tbody>
						  </table>
						</div> 			      		
		    		</div>
  				</div>
			</div>
		</div>
	</div>		 
	  
<?php include'footer.php' ?>