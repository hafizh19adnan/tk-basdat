<?php
	include 'header.php';
	include 'navbar.php';
	if(isset($_SESSION['message'])){
        if ($_SESSION['message'] =="Transaksi Berhasil") {
            echo "<div class='alert alert-success text-center alert-dismissible fade in' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>".$_SESSION['message']."</div>";
        }
        unset($_SESSION['message']);
    }
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
						       
						      </tr>
						    </thead>
						    <tbody>						      
						      
						      <?php 
						      include ('pagination.php');
					          $email=$_SESSION['email'] ;
					          $conn=pg_connect("host=localhost dbname=hafizhrafizal user=postgres password=basdatkeren");
					           $query = "SELECT no_invoice, nama, tanggal, status, total_bayar, nominal, nomor, T.kode_produk FROM TOKOKEREN.PRODUK P, TOKOKEREN.TRANSAKSI_PULSA T WHERE P.kode_produk = T.kode_produk AND T.email_pembeli = '$email'
					           		ORDER BY tanggal DESC";          
					            $result = pg_query($conn,$query);
					            $pulsa_trans = pg_num_rows($result);

					            //Initialize Pagination
						       	$rpp = 10; // jumlah record per halaman
						        $reload = "product.php?pagination=true";
						        $page = isset($_GET["page"]) ? (intval($_GET["page"])) : 1;
						        $tcount = pg_num_rows($result);
						        $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
						        $count = 0;
						        $i = ($page-1)*$rpp;
						        $no_urut = ($page-1)*$rpp;

					            if($pulsa_trans==0){
					            	echo "<tr><td>Transaksi Tidak Ditemukan</td></tr>";
					            }else{
					            	 while (($count<$rpp) && ($i<$tcount)) {
		       							$row = pg_fetch_assoc($result);
		       							$i++; 
                  						$count++;
							            echo "<tr>
								        <td>".$row['no_invoice']."</td>
								        <td>".$row['nama']."</td>
								        <td>".$row['tanggal']."</td>
								        <td>";
								        if($row['status']==2){
								        	echo "SUDAH BAYAR</td>";
								        }else{
								        	echo "TRANSAKSI DILAKUKAN";
								        }
								        echo "<td>".$row['total_bayar']."</td>
								        <td>".$row['nominal']."</td>
								        <td>".$row['nomor']."</td>
								        ";
							            }
					            }
					            ?>
						    </tbody>
						  	</table>
						  	<div><?php echo paginate_one($reload, $page, $tpages); ?></div>
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
					          $conn=pg_connect("host=localhost dbname=hafizhrafizal user=postgres password=basdatkeren");
					            $query = "SELECT * FROM TOKOKEREN.TRANSAKSI_SHIPPED  S WHERE S.email_pembeli = '$email'  ";          
					            $result = pg_query($conn,$query);
					            $pulsa_trans = pg_num_rows($result);

					            //Initialize Pagination
						       	$rpp2 = 10; // jumlah record per halaman
						        $reload2 = "product.php?pagination=true";
						        $page2 = isset($_GET["page"]) ? (intval($_GET["page"])) : 1;
						        $tcount2 = pg_num_rows($result);
						        $tpages2 = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
						        $count2 = 0;
						        $i2 = ($page-1)*$rpp;
						        $no_urut2 = ($page-1)*$rpp;

					            if($pulsa_trans==0){
					            	echo "<tr><td>Transaksi Tidak Ditemukan</td></tr>";
					            }else{
					            	 while (($count2<$rpp2) && ($i2<$tcount2)) {
		       							$row = pg_fetch_assoc($result);
		       							$i2++; 
                  						$count2++;
							              echo "<tr>
									        <td id='invoice-send'>".$row['no_invoice']."</td>
									        <td>".$row['nama_toko']."</td>
									        <td>".$row['waktu_bayar']."</td>
									        <td>";
									        if($row['status']==1){
									        	echo "TRANSAKSI DILAKUKAN</td>";
									        }else if($row['status']==2){
									        	echo "BARANG TELAH DIBAYAR</td>";
									        }else if($row['status']==3){
									        	echo "BARANG DIKIRIM</td>";
									        }else{
									        	echo "BARANG DITERIMA</td>";	
									        }
									        echo "<td>Rp. ".$row['total_bayar']."</td>
									        <td>".$row['alamat_kirim']."</td>
									        <td>Rp. ".$row['biaya_kirim']."</td>
									        <td>".$row['no_resi']."</td>
									        <td>".$row['nama_jasa_kirim']."</td>
									        <td><a href='list-item.php?no_invoice=".$row['no_invoice']."'  class='ref-modal-pulsa btn btn btn-success'>List Barang</a></td>
									      </tr>";
							            }
					            }
					            ?>
						      
						      
						    </tbody>
						  </table>
						  <div><?php echo paginate_one($reload2, $page2, $tpages2); ?></div>
						</div> 			      		
		    		</div>
  				</div>
			</div>
		</div>
	</div>		 

	  
<?php include'footer.php' ?>